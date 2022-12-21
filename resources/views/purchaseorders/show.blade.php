@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail PO</h1>
    </div>

    <table border="1" class="table table-bordered">
        <thead>
            <th>
                <h5>Purchase Order</h5>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No.PO</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->no_po }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Kode PO</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->no_po }}{{ $purchaseorder->no_item }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <th>
                <h5>Purchase Request</h5>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No.PR</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->no_pr }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Kode PR</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->no_pr }}{{ $purchaseorder->no_item }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <th>
                <h5>Detail</h5>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Ref SO</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->no_sales }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>No Item</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->no_item }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Nama Supplier</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->supplier->sup_name }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Nama Item</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->supplier->jenis_produk }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Tanggal</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->date }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Deskripsi</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->desc }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>P X L</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->panjang }} X {{ $purchaseorder->lebar }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Lebar Paper</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->lebar_paper }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Out Paper</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->out_paper }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Score</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->score }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Substance</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->substance }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Flute</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->flute }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Index</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->index }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Discount</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->disc }}%</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Tanggal Delivery</h6>
                </td>
                <td>
                    <h6>{{ $purchaseorder->date_delivery }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <th>
                <h5>Price Detail</h5>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty</h6>
                </td>
                <td>
                    <h6>{{ number_format($purchaseorder->qty, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Price per Pcs</h6>
                </td>
                <td>
                    <h6>{{ number_format($purchaseorder->price, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Total</h6>
                </td>
                <td>
                    <h6>{{ number_format($purchaseorder->price * $purchaseorder->qty, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>PPN 10%</h6>
                </td>
                <td>
                    <h6>{{ number_format($purchaseorder->price * $purchaseorder->qty * 0.1, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Final</h6>
                </td>
                <td>
                    <h6>{{ number_format($purchaseorder->price * $purchaseorder->qty * 0.1 + $purchaseorder->price * $purchaseorder->qty, 0, '.', ',') }}
                    </h6>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/purchaseorders" class="btn btn-secondary col-lg-3 mb-5">Back</a>
@endsection

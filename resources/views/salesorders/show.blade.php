@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Sales Order</h1>
    </div>

    <table border="1" class="table table-bordered">
        <thead>
            <th>
                <h5>Delivery Order</h5>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Total Kirim Barang</h6>
                </td>
                <td>
                    <h6>{{ number_format($salesorder->total_datang, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Kurang Kirim</h6>
                </td>
                <td>
                    <h6>{{ number_format($salesorder->kurang_datang, 0, '.', ',') }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <th>
                <h5>Data Sales Order</h5>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. Sales</h6>
                </td>
                <td>
                    <h6>{{ $salesorder->no_sales }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>No. PO Customer</h6>
                </td>
                <td>
                    <h6>{{ $salesorder->po_customer }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. Master Card</h6>
                </td>
                <td>
                    <h6>{{ $salesorder->no_mc }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Nama Customer</h6>
                </td>
                <td>
                    <h6>{{ $salesorder->mastercard->customer->cust_name }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Deskripsi</h6>
                </td>
                <td>
                    <h6>{{ $salesorder->mastercard->deskripsi }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Batas Kirim</h6>
                </td>
                <td>
                    <h6>{{ $salesorder->jadwal_kirim }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty</h6>
                </td>
                <td>
                    <h6>{{ number_format($salesorder->quantity, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Harga Barang</h6>
                </td>
                <td>
                    <h6>Rp. {{ number_format($salesorder->harga_barang, 2, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Total Harga</h6>
                </td>
                <td>
                    <h6>Rp. {{ number_format($salesorder->total_harga, 2, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Tanggal Dibuat</h6>
                </td>
                <td>
                    <h6>{{ $salesorder->date }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/salesorders/" class="btn btn-secondary col-lg-3">Back</a>
@endsection

@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Slip Raw Material</h1>
    </div>

    <table border="1" class="table table-bordered">
        <thead>
            <th>
                <h5>Bundle</h5>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Order</h6>
                </td>
                <td>
                    <h6>{{ number_format($rawmaterial->rekaporder->qty_po, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty per-Bundle</h6>
                </td>
                <td>
                    <h6>{{ number_format($rawmaterial->qty_perbundle, 0, '.', ',') }} Bundle</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Qty Bundle</h6>
                </td>
                <td>
                    <h6>{{ number_format($rawmaterial->qty_bundle, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Last Bundle</h6>
                </td>
                <td>
                    <h6>{{ number_format($rawmaterial->last_bundle, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Total Received</h6>
                </td>
                <td>
                    <h6>{{ number_format($rawmaterial->qty_pallet, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Pallet No.</h6>
                </td>
                <td>
                    <h6>{{ $rawmaterial->pallet_no }}</h6>
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
                    <h6>Ref SO No.</h6>
                </td>
                <td>
                    <h6>{{ $rawmaterial->rekaporder->purchaseorder->no_sales }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Size (P X L)</h6>
                </td>
                <td>
                    <h6>{{ $rawmaterial->rekaporder->purchaseorder->panjang }} X
                        {{ $rawmaterial->rekaporder->purchaseorder->lebar }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Substance</h6>
                </td>
                <td>
                    <h6>{{ $rawmaterial->rekaporder->purchaseorder->substance }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Flute</h6>
                </td>
                <td>
                    <h6>{{ $rawmaterial->rekaporder->purchaseorder->flute }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/rawmaterials" class="btn btn-secondary col-lg-3 mb-5">Back</a>
@endsection

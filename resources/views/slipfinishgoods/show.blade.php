@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Slip</h1>
    </div>

    <table border="1" class="table table-bordered">
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. Slip</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->no_slip }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>No. Sales</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->manufacturingorder->salesorder->no_sales }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. Manufacturing</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->manufacturingorder->no_mo }} -
                        {{ $slipfinishgood->manufacturingorder->no_urut }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. Pallet</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->no_pallet }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Date GR</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->date_gr }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Order</h6>
                </td>
                <td>
                    <h6>{{ number_format($slipfinishgood->qty_order, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Perbundle</h6>
                </td>
                <td>
                    <h6>{{ number_format($slipfinishgood->qty_perbundle, 0, '.', ',') }} Bundle</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Bundle</h6>
                </td>
                <td>
                    <h6>{{ number_format($slipfinishgood->qty_bundle, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Last</h6>
                </td>
                <td>
                    <h6>{{ number_format($slipfinishgood->qty_last, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Pallet</h6>
                </td>
                <td>
                    <h6>{{ number_format($slipfinishgood->qty_pallet, 0, '.', ',') }} Pcs</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Dibuat Oleh</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->dibuat }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Created Date</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->created_at }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Updated Date</h6>
                </td>
                <td>
                    <h6>{{ $slipfinishgood->updated_at }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/slipfinishgoods/" class="btn btn-secondary col-lg-3">Back</a>
@endsection

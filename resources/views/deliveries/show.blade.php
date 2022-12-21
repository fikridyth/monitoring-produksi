@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Delivery</h1>
    </div>

    <table border="1" class="table table-bordered">
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No Delivery</h6>
                </td>
                <td>
                    <h6>{{ $delivery->no_delivery }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Surat Jalan</h6>
                </td>
                <td>
                    <h6>{{ $delivery->surat_jalan }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No Sales Order</h6>
                </td>
                <td>
                    <h6>{{ $delivery->salesorder->no_sales }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Code Delivery</h6>
                </td>
                <td>
                    <h6>{{ $delivery->code_delivery }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Customer</h6>
                </td>
                <td>
                    <h6>{{ $delivery->salesorder->mastercard->customer->cust_name }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Alamat Tujuan</h6>
                </td>
                <td>
                    <h6>{{ $delivery->shiptoaddress->alamat_kirim1 }},
                        {{ $delivery->shiptoaddress->alamat_kirim2 }},
                        {{ $delivery->shiptoaddress->alamat_kirim3 }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Date Delivery</h6>
                </td>
                <td>
                    <h6>{{ $delivery->date_delivery }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Delivery</h6>
                </td>
                <td>
                    <h6>{{ $delivery->qty_delivery }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Driver</h6>
                </td>
                <td>
                    <h6>{{ $delivery->driver->driver }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Vehicle</h6>
                </td>
                <td>
                    <h6>{{ $delivery->driver->vehicle }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No Transport</h6>
                </td>
                <td>
                    <h6>{{ $delivery->driver->no_transport }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Inconterm</h6>
                </td>
                <td>
                    <h6>{{ $delivery->driver->inconterm }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Created Date</h6>
                </td>
                <td>
                    <h6>{{ $delivery->created_at }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Updated Date</h6>
                </td>
                <td>
                    <h6>{{ $delivery->updated_at }}</h6>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/deliveries" class="btn btn-secondary col-lg-3">Back</a>
@endsection

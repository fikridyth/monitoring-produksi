@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Customer</h1>
    </div>

    <table border="1" class="table table-bordered">
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Customer ID</h6>
                </td>
                <td>
                    <h6>{{ $customer->cust_id }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Nama Customer</h6>
                </td>
                <td>
                    <h6>{{ $customer->cust_name }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Nomor NPWP</h6>
                </td>
                <td>
                    <h6>{{ $customer->no_npwp }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Alamat</h6>
                </td>
                <td>
                    <h6>{{ $customer->alamat1 }}, {{ $customer->alamat2 }}, {{ $customer->alamat3 }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Nomor Telepon</h6>
                </td>
                <td>
                    <h6>{{ $customer->no_telp }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Contact Person</h6>
                </td>
                <td>
                    <h6>{{ $customer->co_person }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Terms of Payment</h6>
                </td>
                <td>
                    <h6>{{ $customer->terms }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Created Date</h6>
                </td>
                <td>
                    <h6>{{ $customer->created_at }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Updated Date</h6>
                </td>
                <td>
                    <h6>{{ $customer->updated_at }}</h6>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/customers" class="btn btn-secondary col-lg-3">Back</a>
@endsection

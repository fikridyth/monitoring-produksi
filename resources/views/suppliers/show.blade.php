@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Supplier</h1>
    </div>

    <table border="1" class="table table-bordered">
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Nama Supplier</h6>
                </td>
                <td>
                    <h6>{{ $supplier->sup_name }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Jenis Produk</h6>
                </td>
                <td>
                    <h6>{{ $supplier->jenis_produk }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. NPWP</h6>
                </td>
                <td>
                    <h6>{{ $supplier->no_npwp }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Alamat</h6>
                </td>
                <td>
                    <h6>{{ $supplier->alamat1 }}, {{ $supplier->alamat2 }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. Telp</h6>
                </td>
                <td>
                    <h6>{{ $supplier->no_telp }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No. Telp 2</h6>
                </td>
                <td>
                    <h6>{{ $supplier->no_telp2 }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Contact Person</h6>
                </td>
                <td>
                    <h6>{{ $supplier->cp_person }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No Contact</h6>
                </td>
                <td>
                    <h6>{{ $supplier->cp_telp }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Terms of Payment</h6>
                </td>
                <td>
                    <h6>{{ $supplier->terms }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Created Date</h6>
                </td>
                <td>
                    <h6>{{ $supplier->created_at }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Updated Date</h6>
                </td>
                <td>
                    <h6>{{ $supplier->updated_at }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/suppliers" class="btn btn-secondary col-lg-3">Back</a>
@endsection

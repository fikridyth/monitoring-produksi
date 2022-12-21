@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Master Card</h1>
    </div>

    <table border="1" class="table table-bordered">
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Nomor MC</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->no_mc }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Komposisi</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->komposisi }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Customer</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->customer->cust_name }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Deskripsi</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->deskripsi }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Model Box</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->model_box }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Panjang X Lebar X Tinggi</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->panjang }} X {{ $mastercard->lebar }} X
                        {{ $mastercard->tinggi }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Substance</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->substance }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Flute</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->flute }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Joint</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->joint }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Jumlah Warna</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->jumlah_warna }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Kode Proses</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->kode_proses }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Keterangan (Optional)</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->other }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Created Date</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->created_at }}</h6>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Updated Date</h6>
                </td>
                <td>
                    <h6>{{ $mastercard->updated_at }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/mastercards" class="btn btn-secondary col-lg-3">Back</a>
@endsection

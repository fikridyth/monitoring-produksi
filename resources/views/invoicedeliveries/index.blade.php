@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Invoice Delivery</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/invoicedeliveries/create" class="btn btn-primary mb-3 col-lg-12">Input Invoice</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Delivery</th>
                    <th scope="col">Tanggal Kirim</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">Jumlah Kirim</th>
                    <th scope="col">Alamat Kirim</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoicedeliveries as $invoicedelivery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $invoicedelivery->delivery->no_delivery }}{{ $invoicedelivery->delivery->surat_jalan }}
                        </td>
                        <td>{{ $invoicedelivery->delivery->date_delivery }}</td>
                        <td>{{ $invoicedelivery->delivery->driver->driver }}</td>
                        <td>{{ $invoicedelivery->delivery->qty_delivery }}</td>
                        <td>{{ $invoicedelivery->delivery->shiptoaddress->alamat_kirim1 }},
                            {{ $invoicedelivery->delivery->shiptoaddress->alamat_kirim2 }},
                            {{ $invoicedelivery->delivery->shiptoaddress->alamat_kirim3 }}</td>
                        <td>
                            <a href="/invoicedeliveries/{{ $invoicedelivery->id }}" class="badge bg-success"><span
                                    data-feather="printer"></span></a>
                            <form action="/invoicedeliveries/{{ $invoicedelivery->id }}" method="post"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

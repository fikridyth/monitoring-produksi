@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Status Delivery</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/deliveries/create" class="btn btn-primary mb-3 col-lg-12">Input Pengiriman</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Delivery</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">Tanggal Kirim</th>
                    <th scope="col">Jumlah Kirim</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deliveries as $delivery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $delivery->no_delivery }}{{ $delivery->surat_jalan }}</td>
                        <td>{{ $delivery->salesorder->mastercard->customer->cust_name }}</td>
                        <td>{{ $delivery->shiptoaddress->alamat_kirim3 }}</td>
                        <td>{{ $delivery->driver->driver }}</td>
                        <td>{{ $delivery->date_delivery }}</td>
                        <td>{{ $delivery->qty_delivery }}</td>
                        <td>
                            <a href="/deliveries/{{ $delivery->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/deliveries/{{ $delivery->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/deliveries/{{ $delivery->id }}" method="post" class="d-inline">
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

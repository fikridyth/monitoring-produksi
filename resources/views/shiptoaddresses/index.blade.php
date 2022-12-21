@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><a href="customers" class="text-decoration-none">Customer</a> / Adress</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <h2>Ship to Address</h2><br>
        <a href="/shiptoaddresses/create" class="btn btn-primary mb-3 col-lg-12">Input Adress</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ship ID</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Alamat Pengiriman</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shiptoaddresses as $shiptoaddress)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $shiptoaddress->ship_id }}</td>
                        <td>{{ $shiptoaddress->customer->cust_name }}</td>
                        <td>{{ $shiptoaddress->alamat_kirim1 }}, {{ $shiptoaddress->alamat_kirim2 }},
                            {{ $shiptoaddress->alamat_kirim3 }}</td>
                        <td>
                            <a href="/shiptoaddresses/{{ $shiptoaddress->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/shiptoaddresses/{{ $shiptoaddress->id }}" method="post" class="d-inline">
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

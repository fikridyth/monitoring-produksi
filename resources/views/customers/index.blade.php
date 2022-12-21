@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customer / <a href="shiptoaddresses" class="text-decoration-none">Address</a></h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <h2>Customer</h2><br>
        <a href="/customers/create" class="btn btn-primary mb-3 col-lg-12">Input New Customer</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Alamat Customer</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->cust_id }}</td>
                        <td>{{ $customer->cust_name }}</td>
                        <td>{{ $customer->alamat1 }}, {{ $customer->alamat2 }}, {{ $customer->alamat3 }}</td>
                        <td>{{ $customer->created_at }}</td>
                        <td>
                            <a href="/customers/{{ $customer->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/customers/{{ $customer->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/customers/{{ $customer->id }}" method="post" class="d-inline">
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

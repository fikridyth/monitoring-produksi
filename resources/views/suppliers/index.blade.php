@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Supplier</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/suppliers/create" class="btn btn-primary mb-3 col-lg-12">Input New Supplier</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Alamat Supplier</th>
                    <th scope="col">Kontak Supplier</th>
                    <th scope="col">Jenis Produk</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $supplier->sup_name }}</td>
                        <td>{{ $supplier->alamat1 }}, {{ $supplier->alamat2 }}</td>
                        <td>{{ $supplier->cp_person }}, HP: {{ $supplier->cp_telp }}</td>
                        <td>{{ $supplier->jenis_produk }}</td>
                        <td>
                            <a href="/suppliers/{{ $supplier->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/suppliers/{{ $supplier->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/suppliers/{{ $supplier->id }}" method="post" class="d-inline">
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

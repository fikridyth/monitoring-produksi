@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Status Delivery Supplier</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/rekapsuppliers/create" class="btn btn-primary mb-3 col-lg-12">Input Delivery Supplier</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No SO</th>
                    <th scope="col">Kode No PO</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Qty Kirim</th>
                    <th scope="col">Tanggal GR</th>
                    <th scope="col">No Surat Jalan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekapsuppliers as $rekapsupplier)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rekapsupplier->purchaseorder->no_sales }}</td>
                        <td>{{ $rekapsupplier->purchaseorder->no_po }}{{ $rekapsupplier->purchaseorder->no_item }}</td>
                        <td>{{ $rekapsupplier->purchaseorder->supplier->sup_name }}</td>
                        <td>{{ number_format($rekapsupplier->qty_kirim, 0, '.', ',') }}</td>
                        <td>{{ $rekapsupplier->purchaseorder->date_delivery }}</td>
                        <td>{{ $rekapsupplier->no_suratjalan }}</td>
                        <td>
                            <a href="/rekapsuppliers/{{ $rekapsupplier->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/rekapsuppliers/{{ $rekapsupplier->id }}" method="post" class="d-inline">
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

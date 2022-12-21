@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Purchase Order & Request</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/purchaseorders/create" class="btn btn-primary mb-3 col-lg-12">Input PO</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No. SO</th>
                    <th scope="col">Kode PO</th>
                    <th scope="col">Kode PR</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchaseorders as $purchaseorder)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $purchaseorder->no_sales }}</td>
                        <td>{{ $purchaseorder->no_po }}{{ $purchaseorder->no_item }}</td>
                        <td>{{ $purchaseorder->no_pr }}{{ $purchaseorder->no_item }}</td>
                        <td>{{ $purchaseorder->supplier->sup_name }}</td>
                        <td>{{ $purchaseorder->date }}</td>
                        <td>
                            <a href="/purchaseorders/{{ $purchaseorder->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/purchaseorders/{{ $purchaseorder->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/purchaseorders/{{ $purchaseorder->id }}" method="post" class="d-inline">
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

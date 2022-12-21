@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Invoice Purchase Order</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/invoicepos/create" class="btn btn-primary mb-3 col-lg-12">Input Invoice</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode PO</th>
                    <th scope="col">No Sales</th>
                    <th scope="col">Date</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoicepos as $invoicepo)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $invoicepo->purchaseorder->no_po }}{{ $invoicepo->purchaseorder->no_item }}</td>
                        <td>{{ $invoicepo->purchaseorder->no_sales }}</td>
                        <td>{{ $invoicepo->purchaseorder->date }}</td>
                        <td>{{ $invoicepo->dibuat }}</td>
                        <td>
                            <a href="/invoicepos/{{ $invoicepo->id }}" class="badge bg-success"><span
                                    data-feather="printer"></span></a>
                            <form action="/invoicepos/{{ $invoicepo->id }}" method="post" class="d-inline">
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

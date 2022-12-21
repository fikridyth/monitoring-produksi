@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Invoice Slip Raw Material</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/invoiceraws/create" class="btn btn-primary mb-3 col-lg-12">Input Invoice</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Slip No</th>
                    <th scope="col">No PO Supplier</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">No PO Customer</th>
                    <th scope="col">Customer</th>
                    <th scope="col">GR Date</th>
                    <th scope="col">Ref. SO No</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoiceraws as $invoiceraw)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $invoiceraw->rawmaterial->slip_no }}</td>
                        <td>{{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->no_po }}</td>
                        <td>{{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->supplier->sup_name }}</td>
                        <td>{{ $invoiceraw->salesorder->po_customer }}</td>
                        <td>{{ $invoiceraw->salesorder->mastercard->customer->cust_name }}</td>
                        <td>{{ $invoiceraw->rawmaterial->gr_date }}</td>
                        <td>{{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->no_sales }}</td>
                        <td>{{ $invoiceraw->rawmaterial->dibuat }}</td>
                        <td>
                            <a href="/invoiceraws/{{ $invoiceraw->id }}" class="badge bg-success"><span
                                    data-feather="printer"></span></a>
                            <form action="/invoiceraws/{{ $invoiceraw->id }}" method="post" class="d-inline">
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

@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Status Order</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/salesorders/create" class="btn btn-primary mb-3 col-lg-12">Input Sales Order</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No. Sales Order</th>
                    <th scope="col">No. MC</th>
                    <th scope="col">No. PO Customer</th>
                    <th scope="col">Name Customer</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Terkirim</th>
                    <th scope="col">Kurang</th>
                    <th scope="col">Jadwal Kirim</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salesorders as $salesorder)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $salesorder->no_sales }}</td>
                        <td>{{ $salesorder->no_mc }}</td>
                        <td>{{ $salesorder->po_customer }}</td>
                        <td>{{ $salesorder->mastercard->customer->cust_name }}</td>
                        <td>{{ number_format($salesorder->quantity, 0, '.', ',') }}</td>
                        <td>{{ number_format($salesorder->total_datang, 0, '.', ',') }}</td>
                        <td>{{ number_format($salesorder->kurang_datang, 0, '.', ',') }}</td>
                        <td>{{ $salesorder->jadwal_kirim }}</td>
                        <td>
                            <a href="/salesorders/{{ $salesorder->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/salesorders/{{ $salesorder->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/salesorders/{{ $salesorder->id }}" method="post" class="d-inline">
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

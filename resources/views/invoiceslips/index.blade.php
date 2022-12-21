@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Invoice Slip Finish Good</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/invoiceslips/create" class="btn btn-primary mb-3 col-lg-12">Input Invoice</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Slip</th>
                    <th scope="col">Date GR</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Qty Order</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoiceslips as $invoiceslip)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $invoiceslip->slipfinishgood->no_slip }}</td>
                        <td>{{ $invoiceslip->slipfinishgood->date_gr }}</td>
                        <td>{{ $invoiceslip->slipfinishgood->dibuat }}</td>
                        <td>{{ $invoiceslip->slipfinishgood->qty_order }}</td>
                        <td>
                            <a href="/invoiceslips/{{ $invoiceslip->id }}" class="badge bg-success"><span
                                    data-feather="printer"></span></a>
                            <form action="/invoiceslips/{{ $invoiceslip->id }}" method="post" class="d-inline">
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

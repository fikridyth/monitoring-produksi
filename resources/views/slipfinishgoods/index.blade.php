@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Slip Finish Good</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/slipfinishgoods/create" class="btn btn-primary mb-3 col-lg-12">Input Slip Finish Good</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No. Slip</th>
                    <th scope="col">No. SO</th>
                    <th scope="col">No. MO</th>
                    <th scope="col">Date GR</th>
                    <th scope="col">Qty Order</th>
                    <th scope="col">Qty Pallet</th>
                    <th scope="col">Dibuat Oleh</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($slipfinishgoods as $slipfinishgood)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $slipfinishgood->no_slip }}</td>
                        <td>{{ $slipfinishgood->manufacturingorder->salesorder->no_sales }}</td>
                        <td>{{ $slipfinishgood->manufacturingorder->no_mo }} -
                            {{ $slipfinishgood->manufacturingorder->no_urut }}</td>
                        <td>{{ $slipfinishgood->date_gr }}</td>
                        <td>{{ $slipfinishgood->qty_order }}</td>
                        <td>{{ $slipfinishgood->qty_pallet }}</td>
                        <td>{{ $slipfinishgood->dibuat }}</td>
                        <td>
                            <a href="/slipfinishgoods/{{ $slipfinishgood->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/slipfinishgoods/{{ $slipfinishgood->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/slipfinishgoods/{{ $slipfinishgood->id }}" method="post"
                                class="d-inline">
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

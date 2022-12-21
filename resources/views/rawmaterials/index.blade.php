@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Slip Raw Material</h1>
        </h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/rawmaterials/create" class="btn btn-primary mb-3 col-lg-12">Input Slip Raw Material</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Slip No</th>
                    <th scope="col">No PO Supplier</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">GR Date</th>
                    <th scope="col">Ref. SO No</th>
                    <th scope="col">Pallet No.</th>
                    <th scope="col">Qty Order</th>
                    <th scope="col">Total Received</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rawmaterials as $rawmaterial)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rawmaterial->slip_no }}</td>
                        <td>{{ $rawmaterial->rekaporder->purchaseorder->no_po }}</td>
                        <td>{{ $rawmaterial->rekaporder->purchaseorder->supplier->sup_name }}</td>
                        <td>{{ $rawmaterial->gr_date }}</td>
                        <td>{{ $rawmaterial->rekaporder->purchaseorder->no_sales }}</td>
                        <td>{{ $rawmaterial->pallet_no }}</td>
                        <td>{{ number_format($rawmaterial->rekaporder->qty_po, 0, '.', ',') }}</td>
                        <td>{{ number_format($rawmaterial->total_received, 0, '.', ',') }}</td>
                        <td>
                            <a href="/rawmaterials/{{ $rawmaterial->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/rawmaterials/{{ $rawmaterial->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/rawmaterials/{{ $rawmaterial->id }}" method="post" class="d-inline">
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

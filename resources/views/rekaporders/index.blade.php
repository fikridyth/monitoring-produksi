@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Good Receive</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/rekaporders/create" class="btn btn-primary mb-3 col-lg-12">Input Data Good Receive</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Status</th>
                    <th scope="col">No SO</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Kode No PO</th>
                    <th scope="col">Qty PO</th>
                    <th scope="col">Qty Kirim</th>
                    <th scope="col">Outstanding</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekaporders as $rekaporder)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rekaporder->status }}</td>
                        <td>{{ $rekaporder->purchaseorder->no_sales }}</td>
                        <td>{{ $rekaporder->purchaseorder->supplier->sup_name }}</td>
                        <td>{{ $rekaporder->purchaseorder->no_po }}{{ $rekaporder->purchaseorder->no_item }}
                        </td>
                        <td>{{ number_format($rekaporder->qty_po, 0, '.', ',') }}</td>
                        <td>{{ number_format($rekaporder->qty_kirim, 0, '.', ',') }}</td>
                        <td>{{ number_format($rekaporder->outstanding, 0, '.', ',') }}</td>
                        <td>{{ $rekaporder->keterangan }}</td>
                        <td>
                            <a href="/rekaporders/{{ $rekaporder->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/rekaporders/{{ $rekaporder->id }}" method="post" class="d-inline">
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

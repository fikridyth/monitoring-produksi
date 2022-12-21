@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manufacturing Order</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/manufacturingorders/create" class="btn btn-primary mb-3 col-lg-12">Input Manufacturing Order</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Input MO</th>
                    <th scope="col">No. MO</th>
                    <th scope="col">No. SO</th>
                    <th scope="col">No. MC</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Qty Shortage</th>
                    <th scope="col">No Urut Produksi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($manufacturingorders as $manufacturingorder)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $manufacturingorder->created_at->format('d M Y') }}</td>
                        <td>{{ $manufacturingorder->no_mo }} -
                            {{ $manufacturingorder->no_urut }}</td>
                        <td>{{ $manufacturingorder->salesorder->no_sales }}</td>
                        <td>{{ $manufacturingorder->salesorder->no_mc }}</td>
                        <td>{{ $manufacturingorder->keterangan }}</td>
                        <td>{{ $manufacturingorder->qty_shortage }}</td>
                        <td>{{ $manufacturingorder->no_urut }}</td>
                        <td>
                            <a href="/manufacturingorders/{{ $manufacturingorder->id }}/edit"
                                class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/manufacturingorders/{{ $manufacturingorder->id }}" method="post"
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

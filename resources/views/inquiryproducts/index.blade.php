@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Inquiry Product</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/inquiryproducts/create" class="btn btn-primary mb-3 col-lg-12">Input Inquiry Product</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Produksi</th>
                    <th scope="col">No. MO</th>
                    <th scope="col">Status</th>
                    <th scope="col">No. SO</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Item</th>
                    <th scope="col">Qty Order</th>
                    <th scope="col">Qty Final</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiryproducts as $inquiryproduct)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $inquiryproduct->created_at->format('d M Y') }}</td>
                        <td>{{ $inquiryproduct->slipfinishgood->manufacturingorder->no_mo }} -
                            {{ $inquiryproduct->slipfinishgood->manufacturingorder->no_urut }}</td>
                        <td>{{ $inquiryproduct->slipfinishgood->manufacturingorder->keterangan }}</td>
                        <td>{{ $inquiryproduct->slipfinishgood->manufacturingorder->salesorder->no_sales }}</td>
                        <td>{{ $inquiryproduct->slipfinishgood->manufacturingorder->salesorder->mastercard->customer->cust_name }}
                        </td>
                        <td>{{ $inquiryproduct->slipfinishgood->manufacturingorder->salesorder->mastercard->deskripsi }}
                        </td>
                        <td>{{ number_format($inquiryproduct->slipfinishgood->qty_order, 0, '.', ',') }}</td>
                        <td>{{ number_format($inquiryproduct->slipfinishgood->qty_pallet, 0, '.', ',') }}</td>
                        <td>
                            <a href="/inquiryproducts/{{ $inquiryproduct->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/inquiryproducts/{{ $inquiryproduct->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/inquiryproducts/{{ $inquiryproduct->id }}" method="post"
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

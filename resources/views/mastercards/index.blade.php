@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Master Card / <a href="groupmastercards" class="text-decoration-none">Group</a></h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <h2>Master Card</h2><br>
        <a href="/mastercards/create" class="btn btn-primary mb-3 col-lg-12">Input Nomor Master Card</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor MC</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mastercards as $mastercard)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mastercard->no_mc }}</td>
                        <td>{{ $mastercard->customer->cust_name }}</td>
                        <td>{{ $mastercard->created_at }}</td>
                        <td>
                            <a href="/mastercards/{{ $mastercard->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/mastercards/{{ $mastercard->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/mastercards/{{ $mastercard->id }}" method="post" class="d-inline">
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

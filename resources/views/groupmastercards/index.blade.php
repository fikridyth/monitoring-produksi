@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><a href="mastercards" class="text-decoration-none">Master Card</a> / Group</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <h2>Group Mastercard</h2><br>
        <a href="/groupmastercards/create" class="btn btn-primary mb-3 col-lg-12">Input MC Pelengkap</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor MC Utama</th>
                    <th scope="col">Nomor MC Pelengkap</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groupmastercards as $groupmastercard)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $groupmastercard->mastercard->no_mc }}</td>
                        <td>{{ $groupmastercard->mc_induk }}</td>
                        <td>
                            <a href="/groupmastercards/{{ $groupmastercard->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/groupmastercards/{{ $groupmastercard->id }}" method="post"
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

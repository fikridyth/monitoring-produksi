@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Driver</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/drivers/create" class="btn btn-primary mb-3 col-lg-12">Input New Driver</a>
        <table id="example1" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Driver</th>
                    <th scope="col">Vehicle</th>
                    <th scope="col">No Transport</th>
                    <th scope="col">Inconterm</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $driver->driver }}</td>
                        <td>{{ $driver->vehicle }}</td>
                        <td>{{ $driver->no_transport }}</td>
                        <td>{{ $driver->inconterm }}</td>
                        <td>
                            <a href="/drivers/{{ $driver->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/drivers/{{ $driver->id }}" method="post" class="d-inline">
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

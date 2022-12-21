@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/drivers/{{ $driver->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="driver" class="col-form-label">Driver:</label>
                <input type="name" class="form-control rounded-top @error('driver') is-invalid @enderror" name="driver"
                    id="driver" placeholder="driver" autofocus value="{{ old('driver', $driver->driver) }}">
                @error('driver')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="vehicle" class="col-form-label">Vehicle:</label>
                <input type="name" class="form-control rounded-top @error('vehicle') is-invalid @enderror" name="vehicle"
                    id="vehicle" placeholder="vehicle" autofocus value="{{ old('vehicle', $driver->vehicle) }}">
                @error('vehicle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_transport" class="col-form-label">No Transport:</label>
                <input type="name" class="form-control rounded-top @error('no_transport') is-invalid @enderror"
                    name="no_transport" id="no_transport" placeholder="no_transport" autofocus
                    value="{{ old('no_transport', $driver->no_transport) }}">
                @error('no_transport')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inconterm" class="col-form-label">Vehicle:</label>
                <input type="name" class="form-control rounded-top @error('inconterm') is-invalid @enderror"
                    name="inconterm" id="inconterm" placeholder="inconterm" autofocus
                    value="{{ old('inconterm', $driver->inconterm) }}">
                @error('inconterm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/drivers/" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

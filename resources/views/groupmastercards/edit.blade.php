@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/groupmastercards/{{ $groupmastercard->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="mc_induk" class="col-form-label">Nomor MC Pelengkap:</label>
                <input type="name" class="form-control rounded-top @error('mc_induk') is-invalid @enderror" name="mc_induk"
                    id="mc_induk" placeholder="mc_induk" autofocus
                    value="{{ old('mc_induk', $groupmastercard->mc_induk) }}">
                @error('mc_induk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/groupmastercards" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

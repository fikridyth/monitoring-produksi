@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/suppliers/{{ $supplier->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="sup_name" class="col-form-label">Nama:</label>
                <input type="name" class="form-control rounded-top @error('sup_name') is-invalid @enderror" name="sup_name"
                    id="sup_name" placeholder="Input Nama Supplier" autofocus
                    value="{{ old('sup_name', $supplier->sup_name) }}">
                @error('sup_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_npwp" class="col-form-label">Nomor NPWP:</label>
                <input type="name" class="form-control rounded-top @error('no_npwp') is-invalid @enderror" name="no_npwp"
                    id="no_npwp" placeholder="Input Nomor NPWP" value="{{ old('no_npwp', $supplier->no_npwp) }}">
                @error('no_npwp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat1" class="col-form-label">Alamat:</label>
                <input type="name" class="form-control rounded-top @error('alamat1') is-invalid @enderror" name="alamat1"
                    id="alamat1" placeholder="Input Alamat" value="{{ old('alamat1', $supplier->alamat1) }}">
                @error('alamat1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat2" class="col-form-label">Kota:</label>
                <input type="name" class="form-control rounded-top @error('alamat2') is-invalid @enderror" name="alamat2"
                    id="alamat2" placeholder="Input Kota" value="{{ old('alamat2', $supplier->alamat2) }}">
                @error('alamat2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cp_person" class="col-form-label">Contact Person:</label>
                <input type="name" class="form-control rounded-top @error('cp_person') is-invalid @enderror"
                    name="cp_person" id="cp_person" placeholder="Input Nama Kontak"
                    value="{{ old('cp_person', $supplier->cp_person) }}">
                @error('cp_person')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cp_telp" class="col-form-label">No Contact:</label>
                <input type="name" class="form-control rounded-top @error('cp_telp') is-invalid @enderror" name="cp_telp"
                    id="cp_telp" placeholder="Input Nomor Kontak" value="{{ old('cp_telp', $supplier->cp_telp) }}">
                @error('cp_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jenis_produk" class="col-form-label">Jenis Produk:</label>
                <input type="name" class="form-control rounded-top @error('jenis_produk') is-invalid @enderror"
                    name="jenis_produk" id="jenis_produk" placeholder="Input Jenis Produk"
                    value="{{ old('jenis_produk', $supplier->jenis_produk) }}">
                @error('jenis_produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="col-form-label">No Telepon:</label>
                <input type="name" class="form-control rounded-top @error('no_telp') is-invalid @enderror" name="no_telp"
                    id="no_telp" placeholder="Input Nomor Telepon (Boleh Kosong)"
                    value="{{ old('no_telp', $supplier->no_telp) }}">
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp2" class="col-form-label">No Telepon 2: (Optional)</label>
                <input type="name" class="form-control rounded-top @error('no_telp2') is-invalid @enderror" name="no_telp2"
                    id="no_telp2" placeholder="Input Nomor Telepon (Boleh Kosong)"
                    value="{{ old('no_telp2', $supplier->no_telp2) }}">
                @error('no_telp2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="terms" class="col-form-label">Terms of Payment:</label>
                <input type="name" class="form-control rounded-top @error('terms') is-invalid @enderror" name="terms"
                    id="terms" placeholder="Input Terms (Boleh Kosong)" value="{{ old('terms', $supplier->terms) }}">
                @error('terms')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/suppliers" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

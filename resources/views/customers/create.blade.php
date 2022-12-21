@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input New Customer</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/customers" class="mb-5">
            @csrf
            <div class="mb-3">
                @foreach ($customers as $customer)
                    @if ($loop->last)
                        <label for="cust_id" class="col-form-label">Customer ID:</label>
                        <input type="name" class="form-control rounded-top @error('cust_id') is-invalid @enderror"
                            name="cust_id" id="cust_id" placeholder="Input Customer ID" readonly
                            value=" {{ $customer->cust_id + 1 }}">
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="cust_name" class="col-form-label">Nama:</label>
                <input type="name" class="form-control rounded-top @error('cust_name') is-invalid @enderror" name="cust_name"
                    id="cust_name" placeholder="Input Nama Customer" autofocus value="{{ old('cust_name') }}">
                @error('cust_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_npwp" class="col-form-label">Nomor NPWP:</label>
                <input type="name" class="form-control rounded-top @error('no_npwp') is-invalid @enderror" name="no_npwp"
                    id="no_npwp" placeholder="Input Nomor NPWP" value="{{ old('no_npwp') }}">
                @error('no_npwp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat1" class="col-form-label">Alamat:</label>
                <input type="name" class="form-control rounded-top @error('alamat1') is-invalid @enderror" name="alamat1"
                    id="alamat1" placeholder="Input Alamat" value="{{ old('alamat1') }}">
                @error('alamat1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat2" class="col-form-label">Kelurahan/Kecamatan:</label>
                <input type="name" class="form-control rounded-top @error('alamat2') is-invalid @enderror" name="alamat2"
                    id="alamat2" placeholder="Input Kel/Kec" value="{{ old('alamat2') }}">
                @error('alamat2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat3" class="col-form-label">Kota/Kode Pos:</label>
                <input type="name" class="form-control rounded-top @error('alamat3') is-invalid @enderror" name="alamat3"
                    id="alamat3" placeholder="Input Kota" value="{{ old('alamat3') }}">
                @error('alamat3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="col-form-label">No Telepon:</label>
                <input type="name" class="form-control rounded-top @error('no_telp') is-invalid @enderror" name="no_telp"
                    id="no_telp" placeholder="Input Nomor Telepon (Boleh Kosong)" value="{{ old('no_telp') }}">
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="co_person" class="col-form-label">Contact Person:</label>
                <input type="name" class="form-control rounded-top @error('co_person') is-invalid @enderror"
                    name="co_person" id="co_person" placeholder="Input Nama Kontak (Boleh Kosong)"
                    value="{{ old('co_person') }}">
                @error('co_person')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="terms" class="col-form-label">Terms of Payment:</label>
                <input type="name" class="form-control rounded-top @error('terms') is-invalid @enderror" name="terms"
                    id="terms" placeholder="Input Terms (Boleh Kosong)" value="{{ old('terms') }}">
                @error('terms')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/customers" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/shiptoaddresses/{{ $shiptoaddress->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="ship_id" class="col-form-label">Ship ID:</label>
                <input type="name" class="form-control rounded-top @error('ship_id') is-invalid @enderror" name="ship_id"
                    id="ship_id" placeholder="ship_id" readonly value="{{ old('ship_id', $shiptoaddress->ship_id) }}">
                @error('ship_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Nama Customer:</label>
                <select class="form-select" id="customer" name="customer_id">
                    @foreach ($customers as $customer)
                        @if (old('customer_id', $shiptoaddress->customer->id) == $customer->id)
                            <option value="{{ $customer->id }}" selected>{{ $customer->cust_name }}</option>
                        @else
                            <option value="{{ $customer->id }}">{{ $customer->cust_name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <h6 class="mt-5">Ubah Alamat Kirim</h6>
            <div class="mb-3">
                <label for="alamat_kirim1" class="col-form-label">Alamat:</label>
                <input type="name" class="form-control rounded-top @error('alamat_kirim1') is-invalid @enderror"
                    name="alamat_kirim1" id="alamat_kirim1" autofocus placeholder="Input Alamat"
                    value="{{ old('alamat_kirim1', $shiptoaddress->alamat_kirim1) }}">
                @error('alamat_kirim1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat_kirim2" class="col-form-label">Kelurahan/Kecamatan:</label>
                <input type="name" class="form-control rounded-top @error('alamat_kirim2') is-invalid @enderror"
                    name="alamat_kirim2" id="alamat_kirim2" placeholder="Input Kel/Kec"
                    value="{{ old('alamat_kirim2', $shiptoaddress->alamat_kirim2) }}">
                @error('alamat_kirim2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat_kirim3" class="col-form-label">Kota/Kode Pos:</label>
                <input type="name" class="form-control rounded-top @error('alamat_kirim3') is-invalid @enderror"
                    name="alamat_kirim3" id="alamat_kirim3" placeholder="Input Kota"
                    value="{{ old('alamat_kirim3', $shiptoaddress->alamat_kirim3) }}">
                @error('alamat_kirim3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/shiptoaddresses" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#customer').select2({
                placeholder: 'Pilih Customer',
                allowClear: true
            });
        });
    </script>
@endsection

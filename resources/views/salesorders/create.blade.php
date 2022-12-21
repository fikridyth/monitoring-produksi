@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input New Sales Order</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/salesorders" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="no_sales" class="col-form-label">Nomor Sales:</label>
                <input type="name" class="form-control rounded-top @error('no_sales') is-invalid @enderror"
                    name="no_sales" id="no_sales" readonly value="{{ $nopo }}">
            </div>
            <div class="mb-3">
                <label for="po_customer" class="col-form-label">PO Customer:</label>
                <input type="name" class="form-control rounded-top @error('po_customer') is-invalid @enderror"
                    name="po_customer" id="po_customer" placeholder="Input PO Costumer" autofocus
                    value="{{ old('po_customer') }}">
                @error('po_customer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mastercard" class="col-form-label">Nomor MC & Customer:</label>
                <select class="form-select" id="mastercard" name="mastercard_id">
                    @foreach ($mastercards as $mastercard)
                        @if (old('mastercard_id') == $mastercard->id)
                            <option value="{{ $mastercard->id }}" selected>{{ $mastercard->no_mc }},
                                {{ $mastercard->customer->cust_name }}</option>
                        @else
                            <option value="{{ $mastercard->id }}">{{ $mastercard->no_mc }},
                                {{ $mastercard->customer->cust_name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jadwal_kirim" class="col-form-label">Batas Kirim:</label>
                <input type="date" class="form-control rounded-top @error('jadwal_kirim') is-invalid @enderror"
                    name="jadwal_kirim" id="jadwal_kirim" value="{{ old('jadwal_kirim') }}">
                @error('jadwal_kirim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="quantity" class="col-form-label">Quantity:</label>
                <input type="number" class="form-control rounded-top @error('quantity') is-invalid @enderror"
                    name="quantity" id="quantity" placeholder="Input Quantity" value="{{ old('quantity') }}">
                @error('quantity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga_barang" class="col-form-label">Harga Barang:</label>
                <input type="number" class="form-control rounded-top @error('harga_barang') is-invalid @enderror"
                    name="harga_barang" id="harga_barang" placeholder="Input Harga" value="{{ old('harga_barang') }}">
                @error('harga_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="col-form-label">Tanggal Dibuat:</label>
                <input type="date" class="form-control rounded-top @error('date') is-invalid @enderror" name="date"
                    id="date" value="{{ old('date') }}">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/salesorders/" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mastercard').select2({
                placeholder: 'Pilih MC',
                allowClear: true
            });
        });
    </script>
@endsection

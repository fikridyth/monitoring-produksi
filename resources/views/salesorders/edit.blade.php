@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <a href="/salesorders" class="btn btn-secondary col-lg-1">Back</a><br><br>

    <div class="col-lg-10">
        <form method="post" action="/salesorders/{{ $salesorder->id }}" class="row g-3">
            @method('put')
            @csrf
            <div class="col-md-5">
                <h5><u>Data Sales Order</u></h5>
            </div>
            <div class="col-md-5">
                <h5><u>Delivery Order</u></h5>
            </div>

            <div class="col-md-5">
                <label for="no_sales" class="col-form-label">Nomor Sales:</label>
                <input type="name" class="form-control rounded-top @error('no_sales') is-invalid @enderror"
                    name="no_sales" id="no_sales" readonly value="{{ $salesorder->no_sales }}">
            </div>
            <div class="col-md-5">
                <label for="masuk_barang" class="col-form-label">Input Jumlah Yang Terkirim:</label>
                <input type="name" class="form-control rounded-top @error('masuk_barang') is-invalid @enderror"
                    name="masuk_barang" id="masuk_barang" autofocus placeholder="Input Jumlah"
                    value="{{ old('masuk_barang') }}">
                @error('masuk_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-5">
                <label for="po_customer" class="col-form-label">PO Customer:</label>
                <input type="name" class="form-control rounded-top @error('po_customer') is-invalid @enderror"
                    name="po_customer" id="po_customer" placeholder="Input PO Costumer"
                    value="{{ old('po_customer', $salesorder->po_customer) }}">
                @error('po_customer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="total_datang" class="col-form-label">Info Total Kirim:</label>
                <input type="name" class="form-control rounded-top @error('total_datang') is-invalid @enderror"
                    name="total_datang" id="total_datang" readonly value="{{ $salesorder->total_datang }}">
            </div>

            <div class="col-md-5 mb-1">
                <label for="jadwal_kirim" class="col-form-label">Jadwal Kirim:</label>
                <input type="date" class="form-control rounded-top @error('jadwal_kirim') is-invalid @enderror"
                    name="jadwal_kirim" id="jadwal_kirim" value="{{ old('jadwal_kirim', $salesorder->jadwal_kirim) }}">
                @error('jadwal_kirim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="kurang_datang" class="col-form-label">Info Kurang Kirim:</label>
                <input type="name" class="form-control rounded-top @error('kurang_datang') is-invalid @enderror"
                    name="kurang_datang" id="kurang_datang" readonly value="{{ $salesorder->kurang_datang }}">
            </div>

            <div class="col-md-5">
                <label for="no_mc" class="col-form-label">Nomor MC:</label>
                <input type="name" class="form-control rounded-top @error('no_mc') is-invalid @enderror" name="no_mc"
                    id="no_mc" readonly value="{{ $salesorder->no_mc }}">
            </div>
            <div class="col-md-5">
            </div>

            <div class="col-md-5">
                <label for="quantity" class="col-form-label">Quantity:</label>
                <input type="number" class="form-control rounded-top @error('quantity') is-invalid @enderror"
                    name="quantity" id="quantity" placeholder="Input Quantity" readonly
                    value="{{ old('quantity', $salesorder->quantity) }}">
                @error('quantity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
            </div>

            <div class="col-md-5">
                <label for="harga_barang" class="col-form-label">Harga Barang:</label>
                <input type="number" class="form-control rounded-top @error('harga_barang') is-invalid @enderror"
                    name="harga_barang" id="harga_barang" placeholder="Input Harga"
                    value="{{ old('harga_barang', $salesorder->harga_barang) }}">
                @error('harga_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
            </div>

            <div class="col-md-5 mb-2">
                <label for="date" class="col-form-label">Tanggal Dibuat:</label>
                <input type="date" class="form-control rounded-top @error('date') is-invalid @enderror" name="date"
                    id="date" value="{{ old('date', $salesorder->date) }}">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
            </div>
            <button type="submit" class="btn btn-primary col-lg-10">Update Data</button>
        </form>
    </div>
@endsection

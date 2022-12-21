@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>
    <div class="col-lg-4">
        <form method="post" action="/rekapsuppliers/{{ $rekapsupplier->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label class="col-form-label">Kode No PO:</label>
                <input type="name" class="form-control rounded-top" readonly
                    value="{{ $rekapsupplier->purchaseorder->no_po }}{{ $rekapsupplier->purchaseorder->no_item }}">
            </div>
            <div class="mb-3">
                <label for="no_suratjalan" class="col-form-label">No Surat Jalan:</label>
                <input type="text" class="form-control rounded-top @error('no_suratjalan') is-invalid @enderror"
                    name="no_suratjalan" id="no_suratjalan" placeholder="Input Surat Jalan" autofocus
                    value="{{ old('no_suratjalan', $rekapsupplier->no_suratjalan) }}">
                @error('no_suratjalan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_kirim" class="col-form-label">Qty Kirim:</label>
                <input type="text" class="form-control rounded-top @error('qty_kirim') is-invalid @enderror"
                    name="qty_kirim" id="qty_kirim" placeholder="Input Qty Kirim"
                    value="{{ old('qty_kirim', $rekapsupplier->qty_kirim) }}">
                @error('qty_kirim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/rekapsuppliers" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>
    <div class="col-lg-4">
        <form method="post" action="/rekaporders/{{ $rekaporder->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label class="col-form-label">Kode No PO:</label>
                <input type="name" class="form-control rounded-top" readonly
                    value="{{ $rekaporder->purchaseorder->no_po }}{{ $rekaporder->purchaseorder->no_item }}">
            </div>
            <div class="mb-3">
                <label for="qty_po" class="col-form-label">Qty PO:</label>
                <input type="text" class="form-control rounded-top @error('qty_po') is-invalid @enderror" name="qty_po"
                    id="qty_po" placeholder="Input Qty po" value="{{ old('qty_po', $rekaporder->qty_po) }}">
                @error('qty_po')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_kirim" class="col-form-label">Qty Kirim:</label>
                <input type="text" class="form-control rounded-top @error('qty_kirim') is-invalid @enderror"
                    name="qty_kirim" id="qty_kirim" placeholder="Input Qty Kirim"
                    value="{{ old('qty_kirim', $rekaporder->qty_kirim) }}">
                @error('qty_kirim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="col-form-label">Status:</label>
                <select class="form-select" name="status">
                    <option value="{{ old('status', $rekaporder->status) }}" selected>
                        {{ old('status', $rekaporder->status) }}</option>
                    <option value="CLOSE">CLOSE</option>
                    <option value="SHORTAGE">SHORTAGE</option>
                    <option value="OUTSTANDING">OUTSTANDING</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="col-form-label">Keterangan:</label>
                <select class="form-select" name="keterangan">
                    <option value="{{ old('keterangan', $rekaporder->keterangan) }}" selected>
                        {{ old('keterangan', $rekaporder->keterangan) }}</option>
                    <option value="LEBIH KIRIM">LEBIH KIRIM</option>
                    <option value="KURANG KIRIM">KURANG KIRIM</option>
                    <option value=""></option>
                </select>
            </div>
            <a href="/rekaporders" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

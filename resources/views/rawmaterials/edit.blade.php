@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>
    <div class="col-lg-4">
        <form method="post" action="/rawmaterials/{{ $rawmaterial->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="slip_no" class="col-form-label">No Slip:</label>
                <input type="name" class="form-control rounded-top @error('slip_no') is-invalid @enderror" name="slip_no"
                    id="slip_no" placeholder="slip_no" readonly value="{{ old('slip_no', $rawmaterial->slip_no) }}">
            </div>
            <div class="mb-3">
                <label class="col-form-label">Kode No PO:</label>
                <input type="name" class="form-control rounded-top" readonly
                    value="{{ $rawmaterial->rekaporder->purchaseorder->no_po }} - {{ $rawmaterial->rekaporder->purchaseorder->no_item }}">
            </div>
            <div class="mb-3">
                <label for="total_received" class="col-form-label">Total Received:</label>
                <input type="number" class="form-control rounded-top @error('total_received') is-invalid @enderror"
                    name="total_received" id="total_received" placeholder="Input Qty perBundle" autofocus
                    value="{{ old('total_received', $rawmaterial->total_received) }}">
                @error('total_received')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_perbundle" class="col-form-label">Qty per-Bundle:</label>
                <input type="number" class="form-control rounded-top @error('qty_perbundle') is-invalid @enderror"
                    name="qty_perbundle" id="qty_perbundle" placeholder="Input Qty perBundle"
                    value="{{ old('qty_perbundle', $rawmaterial->qty_perbundle) }}">
                @error('qty_perbundle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_bundle" class="col-form-label">Qty Bundle:</label>
                <input type="number" class="form-control rounded-top @error('qty_bundle') is-invalid @enderror"
                    name="qty_bundle" id="qty_bundle" placeholder="Input Qty Bundle"
                    value="{{ old('qty_bundle', $rawmaterial->qty_bundle) }}">
                @error('qty_bundle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_bundle" class="col-form-label">Last Bundle:</label>
                <input type="number" class="form-control rounded-top @error('last_bundle') is-invalid @enderror"
                    name="last_bundle" id="last_bundle" placeholder="Input Last Bundle (Optional)"
                    value="{{ old('last_bundle', $rawmaterial->last_bundle) }}">
                @error('last_bundle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pallet_no" class="col-form-label">No Pallet:</label>
                <input type="number" class="form-control rounded-top @error('pallet_no') is-invalid @enderror"
                    name="pallet_no" id="pallet_no" placeholder="Input No Pallet"
                    value="{{ old('pallet_no', $rawmaterial->pallet_no) }}">
                @error('pallet_no')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gr_date" class="col-form-label">GR Date:</label>
                <input type="date" class="form-control rounded-top @error('gr_date') is-invalid @enderror" name="gr_date"
                    id="gr_date" value="{{ old('gr_date', $rawmaterial->gr_date) }}">
                @error('gr_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/rawmaterials" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

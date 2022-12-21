@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/manufacturingorders/{{ $manufacturingorder->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="no_mo" class="col-form-label">Nomor MO:</label>
                <input type="name" class="form-control rounded-top @error('no_mo') is-invalid @enderror" name="no_mo"
                    id="no_mo" readonly value="{{ $manufacturingorder->no_mo }}">
            </div>
            <div class="mb-3">
                <label for="no_urut" class="col-form-label">Nomor Urut Produksi:</label>
                <input type="name" class="form-control rounded-top @error('no_urut') is-invalid @enderror" name="no_urut"
                    id="no_urut" readonly value="{{ $manufacturingorder->no_urut }}">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="col-form-label">Keterangan:</label>
                <select class="form-select" name="keterangan">
                    <option value="{{ old('keterangan', $manufacturingorder->keterangan) }}">
                        {{ old('keterangan', $manufacturingorder->keterangan) }}</option>
                    <option value="NORMAL">NORMAL</option>
                    <option value="SHORTAGE">SHORTAGE</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="qty_shortage" class="col-form-label">Qty Shortage:</label>
                <input type="number" class="form-control rounded-top @error('qty_shortage') is-invalid @enderror"
                    name="qty_shortage" id="qty_shortage" placeholder="Input Qty Shortage (Optional)"
                    value="{{ old('qty_shortage', $manufacturingorder->qty_shortage) }}">
                @error('qty_shortage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/manufacturingorders" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

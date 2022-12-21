@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Delivery Supplier</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/rekapsuppliers" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="purchaseorder" class="form-label">Kode No PO:</label>
                <select class="form-select" id="purchaseorder" name="purchaseorder_id">
                    @foreach ($purchaseorders as $purchaseorder)
                        @if (old('purchaseorder_id') == $purchaseorder->id)
                            <option value="{{ $purchaseorder->id }}" selected>
                                {{ $purchaseorder->no_po }}{{ $purchaseorder->no_item }}</option>
                        @else
                            <option value="{{ $purchaseorder->id }}">
                                {{ $purchaseorder->no_po }}{{ $purchaseorder->no_item }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="no_suratjalan" class="col-form-label">No Surat Jalan:</label>
                <input type="text" class="form-control rounded-top @error('no_suratjalan') is-invalid @enderror"
                    name="no_suratjalan" id="no_suratjalan" placeholder="Input Surat Jalan" autofocus
                    value="{{ old('no_suratjalan') }}">
                @error('no_suratjalan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_kirim" class="col-form-label">Qty Kirim:</label>
                <input type="text" class="form-control rounded-top @error('qty_kirim') is-invalid @enderror"
                    name="qty_kirim" id="qty_kirim" placeholder="Input Qty Kirim" value="{{ old('qty_kirim') }}">
                @error('qty_kirim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/rekapsuppliers" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#purchaseorder').select2({
                placeholder: 'Pilih PO',
                allowClear: true
            });
        });
    </script>
@endsection

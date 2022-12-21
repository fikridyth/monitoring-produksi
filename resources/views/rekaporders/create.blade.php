@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Data Good Receive</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/rekaporders" class="mb-5">
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
                <label for="qty_po" class="col-form-label">Qty PO:</label>
                <input type="number" class="form-control rounded-top @error('qty_po') is-invalid @enderror" name="qty_po"
                    id="qty_po" placeholder="Input Qty po" value="{{ old('qty_po') }}">
                @error('qty_po')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_kirim" class="col-form-label">Qty Kirim:</label>
                <input type="number" class="form-control rounded-top @error('qty_kirim') is-invalid @enderror"
                    name="qty_kirim" id="qty_kirim" placeholder="Input Qty Kirim" value="{{ old('qty_kirim') }}">
                @error('qty_kirim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="col-form-label">Status:</label>
                <select class="form-select" name="status">
                    <option value="CLOSE" selected>CLOSE</option>
                    <option value="SHORTAGE">SHORTAGE</option>
                    <option value="OUTSTANDING">OUTSTANDING</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="col-form-label">Keterangan:</label>
                <select class="form-select" name="keterangan">
                    <option value="LEBIH KIRIM" selected>LEBIH KIRIM</option>
                    <option value="KURANG KIRIM">KURANG KIRIM</option>
                    <option value=""></option>
                </select>
            </div>
            <a href="/rekaporders" class="btn btn-secondary col-lg-3">Back</a>
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

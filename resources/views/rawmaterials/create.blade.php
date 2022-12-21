@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Slip Raw Material</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/rawmaterials" class="mb-5">
            @csrf
            <div class="mb-3">
                @foreach ($rawmaterials as $rawmaterial)
                    @if ($loop->last)
                        <label for="slip_no" class="col-form-label">No Slip:</label>
                        <input type="name" class="form-control rounded-top @error('slip_no') is-invalid @enderror"
                            name="slip_no" id="slip_no" placeholder="slip_no" readonly
                            value="{{ old('slip_no', $rawmaterial->slip_no + 1) }}">
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="rekaporder" class="form-label">Kode No PO:</label>
                <select class="form-select" id="rekaporder" name="rekaporder_id">
                    @foreach ($rekaporders as $rekaporder)
                        @if (old('rekaporder_id') == $rekaporder->id)
                            <option value="{{ $rekaporder->id }}" selected>
                                {{ $rekaporder->purchaseorder->no_po }} - {{ $rekaporder->purchaseorder->no_item }}
                            </option>
                        @else
                            <option value="{{ $rekaporder->id }}">
                                {{ $rekaporder->purchaseorder->no_po }} - {{ $rekaporder->purchaseorder->no_item }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="qty_perbundle" class="col-form-label">Qty per-Bundle:</label>
                <input type="number" class="form-control rounded-top @error('qty_perbundle') is-invalid @enderror"
                    name="qty_perbundle" id="qty_perbundle" placeholder="Input Qty perBundle" autofocus
                    value="{{ old('qty_perbundle') }}">
                @error('qty_perbundle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_bundle" class="col-form-label">Qty Bundle:</label>
                <input type="number" class="form-control rounded-top @error('qty_bundle') is-invalid @enderror"
                    name="qty_bundle" id="qty_bundle" placeholder="Input Qty Bundle" value="{{ old('qty_bundle') }}">
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
                    value="{{ old('last_bundle') }}">
                @error('last_bundle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pallet_no" class="col-form-label">No Pallet:</label>
                <input type="number" class="form-control rounded-top @error('pallet_no') is-invalid @enderror"
                    name="pallet_no" id="pallet_no" placeholder="Input No Pallet" value="{{ old('pallet_no') }}">
                @error('pallet_no')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gr_date" class="col-form-label">GR Date:</label>
                <input type="date" class="form-control rounded-top @error('gr_date') is-invalid @enderror" name="gr_date"
                    id="gr_date" value="{{ old('gr_date') }}">
                @error('gr_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/rawmaterials" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#rekaporder').select2({
                placeholder: 'Pilih PO',
                allowClear: true
            });
        });
    </script>
@endsection

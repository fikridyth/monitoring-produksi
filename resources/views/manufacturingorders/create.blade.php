@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input MO</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/manufacturingorders" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="salesorder" class="form-label">No Sales:</label>
                <select class="form-select" id="salesorder" name="salesorder_id">
                    @foreach ($salesorders as $salesorder)
                        @if (old('salesorder_id') == $salesorder->id)
                            <option value="{{ $salesorder->id }}" selected>{{ $salesorder->no_sales }},
                                {{ $salesorder->no_mc }}</option>
                        @else
                            <option value="{{ $salesorder->id }}">{{ $salesorder->no_sales }},
                                {{ $salesorder->no_mc }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="no_mo" class="col-form-label">No MO:</label>
                <input type="text" class="form-control rounded-top @error('no_mo') is-invalid @enderror" name="no_mo"
                    id="no_mo" autofocus value="{{ $nomo }}">
                @error('no_pallet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_urut" class="col-form-label">No Urut Produksi:</label>
                <input type="name" class="form-control rounded-top @error('no_urut') is-invalid @enderror" name="no_urut"
                    id="no_urut" placeholder="Input No Urut" value="{{ old('no_urut') }}">
                @error('no_urut')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="col-form-label">Keterangan:</label>
                <select class="form-select" name="keterangan">
                    <option value="NORMAL" selected>NORMAL</option>
                    <option value="SHORTAGE">SHORTAGE</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="qty_shortage" class="col-form-label">Qty Shortage:</label>
                <input type="number" class="form-control rounded-top @error('qty_shortage') is-invalid @enderror"
                    name="qty_shortage" id="qty_shortage" placeholder="Input Qty Shortage (Optional)"
                    value="{{ old('qty_shortage') }}">
                @error('qty_shortage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/manufacturingorders" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#salesorder').select2({
                placeholder: 'Pilih No Sales',
                allowClear: true
            });
        });
    </script>
@endsection

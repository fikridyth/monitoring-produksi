@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Slip</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/slipfinishgoods" class="mb-5">
            @csrf
            <div class="mb-3">
                @foreach ($slipfinishgoods as $slipfinishgood)
                    @if ($loop->last)
                        <label for="no_slip" class="col-form-label">No slip:</label>
                        <input type="name" class="form-control rounded-top @error('no_slip') is-invalid @enderror"
                            name="no_slip" id="no_slip" placeholder="no_slip" readonly
                            value="{{ old('no_slip', $slipfinishgood->no_slip + 1) }}">
                    @endif
                @endforeach
                @error('no_slip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="manufacturingorder" class="form-label">No Manufacturing:</label>
                <select class="form-select" id="manufacturingorder" name="manufacturingorder_id">
                    @foreach ($manufacturingorders as $manufacturingorder)
                        @if (old('manufacturingorder_id') == $manufacturingorder->id)
                            <option value="{{ $manufacturingorder->id }}" selected>
                                {{ $manufacturingorder->no_mo }} - {{ $manufacturingorder->no_urut }}</option>
                        @else
                            <option value="{{ $manufacturingorder->id }}">{{ $manufacturingorder->no_mo }} -
                                {{ $manufacturingorder->no_urut }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="no_pallet" class="col-form-label">No Pallet:</label>
                <input type="text" class="form-control rounded-top @error('no_pallet') is-invalid @enderror"
                    name="no_pallet" id="no_pallet" placeholder="Input No Pallet" value="{{ old('no_pallet') }}">
                @error('no_pallet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date_gr" class="col-form-label">Date GR:</label>
                <input type="date" class="form-control rounded-top @error('date_gr') is-invalid @enderror" name="date_gr"
                    id="date_gr" value="{{ old('date_gr') }}">
                @error('date_gr')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_order" class="col-form-label">Qty Order:</label>
                <input type="number" class="form-control rounded-top @error('qty_order') is-invalid @enderror"
                    name="qty_order" id="qty_order" placeholder="Input Qty" value="{{ old('qty_order') }}">
                @error('qty_order')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_perbundle" class="col-form-label">Qty Per Bundle:</label>
                <input type="number" class="form-control rounded-top @error('qty_perbundle') is-invalid @enderror"
                    name="qty_perbundle" id="qty_perbundle" placeholder="Input Qty" value="{{ old('qty_perbundle') }}">
                @error('qty_perbundle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_last" class="col-form-label">Qty Last:</label>
                <input type="number" class="form-control rounded-top @error('qty_last') is-invalid @enderror"
                    name="qty_last" id="qty_last" placeholder="Input Qty" value="{{ old('qty_last') }}">
                @error('qty_last')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/slipfinishgoods/" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#manufacturingorder').select2({
                placeholder: 'Pilih No MO',
                allowClear: true
            });
        });
    </script>
@endsection

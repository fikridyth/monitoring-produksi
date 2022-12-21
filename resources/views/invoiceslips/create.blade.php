@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Invoice</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/invoiceslips" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="slipfinishgood" class="form-label">Pilih No Slip:</label>
                <select class="form-select" id="slipfinishgood" name="slipfinishgood_id">
                    @foreach ($slipfinishgoods as $slipfinishgood)
                        @if (old('slipfinishgood_id') == $slipfinishgood->id)
                            <option value="{{ $slipfinishgood->id }}" selected>
                                {{ $slipfinishgood->no_slip }}</option>
                        @else
                            <option value="{{ $slipfinishgood->id }}">{{ $slipfinishgood->no_slip }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <a href="/invoiceslips/" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slipfinishgood').select2({
                placeholder: 'Pilih No Slip',
                allowClear: true
            });
        });
    </script>
@endsection

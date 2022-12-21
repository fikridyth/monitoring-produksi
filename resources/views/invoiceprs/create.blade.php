@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Invoice</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/invoiceprs" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="purchaseorder" class="form-label">Pilih Kode PR:</label>
                <select class="form-select" id="purchaseorder" name="purchaseorder_id">
                    @foreach ($purchaseorders as $purchaseorder)
                        @if (old('purchaseorder_id') == $purchaseorder->id)
                            <option value="{{ $purchaseorder->id }}" selected>
                                {{ $purchaseorder->no_pr }}{{ $purchaseorder->no_item }}
                            </option>
                        @else
                            <option value="{{ $purchaseorder->id }}">
                                {{ $purchaseorder->no_pr }}{{ $purchaseorder->no_item }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <a href="/invoiceprs" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#purchaseorder').select2({
                placeholder: 'Pilih No PR',
                allowClear: true
            });
        });
    </script>
@endsection

@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Invoice</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/invoicedeliveries" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="delivery" class="form-label">Pilih Kode Delivery:</label>
                <select class="form-select" id="delivery" name="delivery_id">
                    @foreach ($deliveries as $delivery)
                        @if (old('delivery_id') == $delivery->id)
                            <option value="{{ $delivery->id }}" selected>{{ $delivery->code_delivery }}</option>
                        @else
                            <option value="{{ $delivery->id }}">{{ $delivery->code_delivery }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <a href="/invoicedeliveries/" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#delivery').select2({
                placeholder: 'Pilih Kode Delivery',
                allowClear: true
            });
        });
    </script>
@endsection

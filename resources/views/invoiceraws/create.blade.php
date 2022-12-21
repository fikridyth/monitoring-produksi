@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Invoice</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/invoiceraws" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="rawmaterial" class="form-label">Kode No PO:</label>
                <select class="form-select" id="rawmaterial" name="rawmaterial_id">
                    @foreach ($rawmaterials as $rawmaterial)
                        @if (old('rawmaterial_id') == $rawmaterial->id)
                            <option value="{{ $rawmaterial->id }}" selected>
                                {{ $rawmaterial->rekaporder->purchaseorder->no_po }} -
                                {{ $rawmaterial->rekaporder->purchaseorder->no_item }}
                            </option>
                        @else
                            <option value="{{ $rawmaterial->id }}">
                                {{ $rawmaterial->rekaporder->purchaseorder->no_po }} -
                                {{ $rawmaterial->rekaporder->purchaseorder->no_item }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="salesorder" class="form-label">No PO & Nama Customer:</label>
                <select class="form-select" id="salesorder" name="salesorder_id">
                    @foreach ($salesorders as $salesorder)
                        @if (old('salesorder_id') == $salesorder->id)
                            <option value="{{ $salesorder->id }}" selected>
                                {{ $salesorder->po_customer }}, {{ $salesorder->mastercard->customer->cust_name }}
                            </option>
                        @else
                            <option value="{{ $salesorder->id }}">
                                {{ $salesorder->po_customer }}, {{ $salesorder->mastercard->customer->cust_name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <a href="/invoiceraws" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#rawmaterial').select2({
                placeholder: 'Pilih No PO',
                allowClear: true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#salesorder').select2({
                placeholder: 'Pilih Data Customer',
                allowClear: true
            });
        });
    </script>
@endsection

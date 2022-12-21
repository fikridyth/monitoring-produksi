@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input PO</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/purchaseorders" class="mb-5">
            @csrf
            <div class="mb-3">
                @foreach ($purchaseorders as $purchaseorder)
                    @if ($loop->last)
                        <label for="no_sales" class="col-form-label">No Sales:</label>
                        <input type="name" class="form-control rounded-top @error('no_sales') is-invalid @enderror"
                            name="no_sales" id="no_sales" placeholder="no_sales" readonly
                            value="{{ old('no_sales', $purchaseorder->no_sales + 1) }}">
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="no_po" class="col-form-label">No PO:</label>
                <input type="text" class="form-control rounded-top @error('no_po') is-invalid @enderror" name="no_po"
                    id="no_po" placeholder="Input No PO" autofocus value="{{ old('no_po') }}">
                @error('no_po')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_pr" class="col-form-label">No PR:</label>
                <input type="text" class="form-control rounded-top @error('no_pr') is-invalid @enderror" name="no_pr"
                    id="no_pr" placeholder="Input No PR" value="{{ old('no_pr') }}">
                @error('no_pr')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_item" class="col-form-label">No Item:</label>
                <input type="number" class="form-control rounded-top @error('no_item') is-invalid @enderror" name="no_item"
                    id="no_item" placeholder="Input No Item" value="{{ old('no_item') }}">
                @error('no_item')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="supplier" class="form-label">Nama Supplier:</label>
                <select class="form-select" id="supplier" name="supplier_id">
                    @foreach ($suppliers as $supplier)
                        @if (old('supplier_id') == $supplier->id)
                            <option value="{{ $supplier->id }}" selected>{{ $supplier->sup_name }}</option>
                        @else
                            <option value="{{ $supplier->id }}">{{ $supplier->sup_name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="col-form-label">Tanggal:</label>
                <input type="date" class="form-control rounded-top @error('date') is-invalid @enderror" name="date"
                    id="date" value="{{ old('date') }}">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc" class="col-form-label">Desc:</label>
                <select class="form-select" name="desc">
                    <option value="NETTO" selected>NETTO</option>
                    <option value="BRUTO">BRUTO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="panjang" class="col-form-label">Panjang:</label>
                <input type="number" class="form-control rounded-top @error('panjang') is-invalid @enderror" name="panjang"
                    id="panjang" placeholder="panjang" value="{{ old('panjang') }}">
                @error('panjang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lebar" class="col-form-label">Lebar:</label>
                <input type="number" class="form-control rounded-top @error('lebar') is-invalid @enderror" name="lebar"
                    id="lebar" placeholder="lebar" value="{{ old('lebar') }}">
                @error('lebar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lebar_paper" class="col-form-label">Lebar Paper:</label>
                <input type="number" class="form-control rounded-top @error('lebar_paper') is-invalid @enderror"
                    name="lebar_paper" id="lebar_paper" placeholder="lebar_paper" value="{{ old('lebar_paper') }}">
                @error('lebar_paper')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="out_paper" class="col-form-label">Out Paper:</label>
                <input type="number" class="form-control rounded-top @error('out_paper') is-invalid @enderror"
                    name="out_paper" id="out_paper" placeholder="out_paper" value="{{ old('out_paper') }}">
                @error('out_paper')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="score" class="col-form-label">Score:</label>
                <input type="text" class="form-control rounded-top @error('score') is-invalid @enderror" name="score"
                    id="score" placeholder="score" value="{{ old('score') }}">
                @error('score')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="substance" class="col-form-label">Substance:</label>
                <input type="text" class="form-control rounded-top @error('substance') is-invalid @enderror"
                    name="substance" id="substance" placeholder="substance" value="{{ old('substance') }}">
                @error('substance')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="flute" class="col-form-label">Flute:</label>
                <select class="form-select" name="flute">
                    <option value="CB" selected>CB</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="E">E</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="index" class="col-form-label">Index:</label>
                <input type="number" class="form-control rounded-top @error('index') is-invalid @enderror" name="index"
                    id="index" placeholder="index" value="{{ old('index') }}">
                @error('index')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="disc" class="col-form-label">Disc (%):</label>
                <input type="number" class="form-control rounded-top @error('disc') is-invalid @enderror" name="disc"
                    id="disc" placeholder="disc" value="{{ old('disc') }}">
                @error('disc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty" class="col-form-label">Qty:</label>
                <input type="number" class="form-control rounded-top @error('qty') is-invalid @enderror" name="qty"
                    id="qty" placeholder="qty" value="{{ old('qty') }}">
                @error('qty')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date_delivery" class="col-form-label">Date Delivery:</label>
                <input type="date" class="form-control rounded-top @error('date_delivery') is-invalid @enderror"
                    name="date_delivery" id="date_delivery" value="{{ old('date_delivery') }}">
                @error('date_delivery')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="col-form-label">Price:</label>
                <input type="number" class="form-control rounded-top @error('price') is-invalid @enderror" name="price"
                    id="price" placeholder="price" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/purchaseorders" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#supplier').select2({
                placeholder: 'Pilih Supplier',
                allowClear: true
            });
        });
    </script>
@endsection

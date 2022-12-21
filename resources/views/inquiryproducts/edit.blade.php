@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <a href="/inquiryproducts" class="btn btn-secondary col-lg-1">Back</a><br><br>

    <div class="col-lg-10">
        <form method="post" action="/inquiryproducts/{{ $inquiryproduct->id }}" class="row g-3">
            @method('put')
            @csrf
            <div class="col-md-5 mt-3">
                <label for="no_mo" class="col-form-label">Nomor MO:</label>
                <input type="name" class="form-control rounded-top @error('no_mo') is-invalid @enderror" name="no_mo"
                    id="no_mo" readonly
                    value="{{ $inquiryproduct->slipfinishgood->manufacturingorder->no_mo }} - {{ $inquiryproduct->slipfinishgood->manufacturingorder->no_urut }}">
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="qty_finish" class="col-form-label">Jumlah Produksi:</label>
                <input type="number" class="form-control rounded-top @error('qty_finish') is-invalid @enderror"
                    name="qty_finish" readonly id="qty_finish" placeholder="Input Qty"
                    value="{{ old('qty_finish', $inquiryproduct->qty_finish) }}">
                @error('qty_finish')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>

            <div class="col-md-5 mt-4">
                <h5><u>Slitter</u></h5>
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="slitter_product" class="col-form-label">Product:</label>
                <input type="number" class="form-control rounded-top @error('slitter_product') is-invalid @enderror"
                    name="slitter_product" id="slitter_product" placeholder="Input Qty (Optional)"
                    value="{{ old('slitter_product', $inquiryproduct->slitter_product) }}">
                @error('slitter_product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="slitter_reject" class="col-form-label">Reject:</label>
                <input type="number" class="form-control rounded-top @error('slitter_reject') is-invalid @enderror"
                    name="slitter_reject" id="slitter_reject" placeholder="Input Qty (Optional)"
                    value="{{ old('slitter_reject', $inquiryproduct->slitter_reject) }}">
                @error('slitter_reject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-5 mt-4">
                <h5><u>Printing</u></h5>
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="printing_product" class="col-form-label">Product:</label>
                <input type="number" class="form-control rounded-top @error('printing_product') is-invalid @enderror"
                    name="printing_product" id="printing_product" placeholder="Input Qty (Optional)"
                    value="{{ old('printing_product', $inquiryproduct->printing_product) }}">
                @error('printing_product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="printing_reject" class="col-form-label">Reject:</label>
                <input type="number" class="form-control rounded-top @error('printing_reject') is-invalid @enderror"
                    name="printing_reject" id="printing_reject" placeholder="Input Qty (Optional)"
                    value="{{ old('printing_reject', $inquiryproduct->printing_reject) }}">
                @error('printing_reject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-5 mt-4">
                <h5><u>SLOTTER</u></h5>
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="slotter_product" class="col-form-label">Product:</label>
                <input type="number" class="form-control rounded-top @error('slotter_product') is-invalid @enderror"
                    name="slotter_product" id="slotter_product" placeholder="Input Qty (Optional)"
                    value="{{ old('slotter_product', $inquiryproduct->slotter_product) }}">
                @error('inquiry_product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="slotter_reject" class="col-form-label">Reject:</label>
                <input type="number" class="form-control rounded-top @error('slotter_reject') is-invalid @enderror"
                    name="slotter_reject" id="slotter_reject" placeholder="Input Qty (Optional)"
                    value="{{ old('slotter_reject', $inquiryproduct->slotter_reject) }}">
                @error('slotter_reject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-5 mt-4">
                <h5><u>GLUE / STITCHING</u></h5>
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="glue_product" class="col-form-label">Product:</label>
                <input type="number" class="form-control rounded-top @error('glue_product') is-invalid @enderror"
                    name="glue_product" id="glue_product" placeholder="Input Qty (Optional)"
                    value="{{ old('glue_product', $inquiryproduct->glue_product) }}">
                @error('glue_product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="glue_reject" class="col-form-label">Reject:</label>
                <input type="number" class="form-control rounded-top @error('glue_reject') is-invalid @enderror"
                    name="glue_reject" id="glue_reject" placeholder="Input Qty (Optional)"
                    value="{{ old('glue_reject', $inquiryproduct->glue_reject) }}">
                @error('glue_reject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-5 mt-4">
                <h5><u>POND</u></h5>
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="pond_product" class="col-form-label">Product:</label>
                <input type="number" class="form-control rounded-top @error('pond_product') is-invalid @enderror"
                    name="pond_product" id="pond_product" placeholder="Input Qty (Optional)"
                    value="{{ old('pond_product', $inquiryproduct->pond_product) }}">
                @error('pond_product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="pond_reject" class="col-form-label">Reject:</label>
                <input type="number" class="form-control rounded-top @error('pond_reject') is-invalid @enderror"
                    name="pond_reject" id="pond_reject" placeholder="Input Qty (Optional)"
                    value="{{ old('pond_reject', $inquiryproduct->pond_reject) }}">
                @error('pond_reject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-5 mt-4">
                <h5><u>Total</u></h5>
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="qty_finish" class="col-form-label">Qty Finish:</label>
                <input type="number" class="form-control rounded-top @error('qty_finish') is-invalid @enderror"
                    name="qty_finish" id="qty_finish" placeholder="Input Qty"
                    value="{{ old('qty_finish', $inquiryproduct->qty_finish) }}">
                @error('qty_finish')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <div class="col-md-5 mt-lg-0">
                <label for="waste_product" class="col-form-label">Waste Product:</label>
                <input type="number" class="form-control rounded-top @error('waste_product') is-invalid @enderror"
                    name="waste_product" id="waste_product" placeholder="Input Qty"
                    value="{{ old('waste_product', $inquiryproduct->waste_product) }}">
                @error('waste_product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5">
                <h5></h5>
            </div>
            <button type="submit" class="btn btn-primary col-lg-10 mb-5">Update Data</button>
        </form>
    </div>
@endsection

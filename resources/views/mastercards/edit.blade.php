@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/mastercards/{{ $mastercard->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="no_mc" class="col-form-label">Nomor MC:</label>
                <input type="name" class="form-control rounded-top @error('no_mc') is-invalid @enderror" name="no_mc"
                    id="no_mc" placeholder="no_mc" autofocus value="{{ old('no_mc', $mastercard->no_mc) }}">
                @error('no_mc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="komposisi" class="col-form-label">Komposisi:</label>
                <input type="name" class="form-control rounded-top @error('komposisi') is-invalid @enderror"
                    name="komposisi" id="komposisi" placeholder="komposisi" autofocus
                    value="{{ old('komposisi', $mastercard->komposisi) }}">
                @error('komposisi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Nama Customer:</label>
                <select class="form-select" id="customer" name="customer_id">
                    @foreach ($customers as $customer)
                        @if (old('customer_id', $mastercard->customer->id) == $customer->id)
                            <option value="{{ $customer->id }}" selected>{{ $customer->cust_name }}</option>
                        @else
                            <option value="{{ $customer->id }}">{{ $customer->cust_name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="col-form-label">Description:</label>
                <input type="name" class="form-control rounded-top @error('deskripsi') is-invalid @enderror"
                    name="deskripsi" id="deskripsi" placeholder="deskripsi" autofocus
                    value="{{ old('deskripsi', $mastercard->deskripsi) }}">
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="model_box" class="col-form-label">Model Box:</label>
                <select class="form-select" name="model_box">
                    <option value="{{ old('model_box', $mastercard->model_box) }}">
                        {{ old('model_box', $mastercard->model_box) }}</option>
                    <option value="A1">A1</option>
                    <option value="F (TOP)">F (TOP)</option>
                    <option value="F (BOTTOM)">F (BOTTOM)</option>
                    <option value="1/2 F">1/2 F</option>
                    <option value="DC">DC</option>
                    <option value="L">L</option>
                    <option value="E">E</option>
                    <option value="SOLID">SOLID</option>
                    <option value="B">B</option>
                    <option value="A2">A2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="panjang" class="col-form-label">Panjang:</label>
                <input type="number" class="form-control rounded-top @error('panjang') is-invalid @enderror" name="panjang"
                    id="panjang" placeholder="panjang" autofocus value="{{ old('panjang', $mastercard->panjang) }}">
                @error('panjang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lebar" class="col-form-label">Lebar:</label>
                <input type="number" class="form-control rounded-top @error('lebar') is-invalid @enderror" name="lebar"
                    id="lebar" placeholder="lebar" autofocus value="{{ old('lebar', $mastercard->lebar) }}">
                @error('lebar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tinggi" class="col-form-label">Tinggi:</label>
                <input type="number" class="form-control rounded-top @error('tinggi') is-invalid @enderror" name="tinggi"
                    id="tinggi" placeholder="tinggi" autofocus value="{{ old('tinggi', $mastercard->tinggi) }}">
                @error('tinggi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="substance" class="col-form-label">Substance:</label>
                <input type="name" class="form-control rounded-top @error('substance') is-invalid @enderror"
                    name="substance" id="substance" placeholder="substance" autofocus
                    value="{{ old('substance', $mastercard->substance) }}">
                @error('substance')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="flute" class="col-form-label">Flute:</label>
                <select class="form-select" name="flute">
                    <option value="{{ old('flute', $mastercard->flute) }}">
                        {{ old('flute', $mastercard->flute) }}</option>
                    <option value="CB">CB</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="E">E</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="joint" class="col-form-label">Joint:</label>
                <select class="form-select" name="joint">
                    <option value="{{ old('joint', $mastercard->joint) }}">
                        {{ old('joint', $mastercard->joint) }}</option>
                    <option value="Glue">Glue</option>
                    <option value="Stitch">Stitch</option>
                    <option value="Lepas">Lepas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_warna" class="col-form-label">Jumlah Warna:</label>
                <select class="form-select" name="jumlah_warna">
                    <option value="{{ old('jumlah_warna', $mastercard->jumlah_warna) }}">
                        {{ old('jumlah_warna', $mastercard->jumlah_warna) }}</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kode_proses" class="col-form-label">Kode Proses:</label>
                <input type="name" class="form-control rounded-top @error('kode_proses') is-invalid @enderror"
                    name="kode_proses" id="kode_proses" placeholder="kode_proses" autofocus
                    value="{{ old('kode_proses', $mastercard->kode_proses) }}">
                @error('kode_proses')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="other" class="col-form-label">Keterangan Tambahan:</label>
                <input type="name" class="form-control rounded-top @error('other') is-invalid @enderror" name="other"
                    id="other" placeholder="keterangan tambahan" autofocus
                    value="{{ old('other', $mastercard->other) }}">
                @error('other')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/mastercards" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#customer').select2({
                placeholder: 'Pilih Customer',
                allowClear: true
            });
        });
    </script>
@endsection

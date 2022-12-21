@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/deliveries/{{ $delivery->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="no_delivery" class="col-form-label">No Delivery:</label>
                <input type="name" class="form-control rounded-top @error('no_delivery') is-invalid @enderror"
                    name="no_delivery" id="no_delivery" readonly placeholder="no_delivery"
                    value="{{ old('no_delivery', $delivery->no_delivery) }}">
                @error('no_delivery')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="surat_jalan" class="col-form-label">Surat Jalan:</label>
                <select class="form-select" name="surat_jalan">
                    <option value="{{ old('surat_jalan', $delivery->surat_jalan) }}">
                        {{ old('surat_jalan', $delivery->surat_jalan) }}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date_delivery" class="col-form-label">Date Delivery:</label>
                <input type="date" class="form-control rounded-top @error('date_delivery') is-invalid @enderror"
                    name="date_delivery" id="date_delivery" value="{{ old('date_delivery', $delivery->date_delivery) }}">
                @error('date_delivery')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty_delivery" class="col-form-label">Qty Delivery:</label>
                <input type="number" class="form-control rounded-top @error('qty_delivery') is-invalid @enderror"
                    name="qty_delivery" id="qty_delivery" autofocus placeholder="Input Qty"
                    value="{{ old('qty_delivery', $delivery->qty_delivery) }}">
                @error('qty_delivery')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="shiptoaddress" class="form-label">Alamat Kirim:</label>
                <select class="form-select" id="shiptoaddress" name="shiptoaddress_id">
                    @foreach ($shiptoaddresses as $shiptoaddress)
                        @if (old('shiptoaddress_id', $delivery->shiptoaddress->id) == $shiptoaddress->id)
                            <option value="{{ $shiptoaddress->id }}" selected>{{ $shiptoaddress->alamat_kirim1 }},
                                {{ $shiptoaddress->alamat_kirim2 }}, {{ $shiptoaddress->alamat_kirim3 }}
                            </option>
                        @else
                            <option value="{{ $shiptoaddress->id }}">{{ $shiptoaddress->alamat_kirim1 }},
                                {{ $shiptoaddress->alamat_kirim2 }}, {{ $shiptoaddress->alamat_kirim3 }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="driver" class="form-label">Driver Detail:</label>
                <select class="form-select" id="driver" name="driver_id">
                    @foreach ($drivers as $driver)
                        @if (old('driver_id', $delivery->driver->id) == $driver->id)
                            <option value="{{ $driver->id }}" selected>{{ $driver->driver }},
                                {{ $driver->vehicle }}, {{ $driver->no_transport }}, {{ $driver->inconterm }}
                            </option>
                        @else
                            <option value="{{ $driver->id }}">{{ $driver->driver }},
                                {{ $driver->vehicle }}, {{ $driver->no_transport }}, {{ $driver->inconterm }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <a href="/deliveries/" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Update Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#shiptoaddress').select2({
                placeholder: 'Pilih Alamat',
                allowClear: true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#driver').select2({
                placeholder: 'Pilih Driver',
                allowClear: true
            });
        });
    </script>
@endsection

@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input MC Pelengkap</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/groupmastercards" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="mastercard" class="form-label">Nomor MC Utama:</label>
                <select class="form-select" id="mastercard" name="mastercard_id">
                    @foreach ($mastercards as $mastercard)
                        @if (old('mastercard_id') == $mastercard->id)
                            <option value="{{ $mastercard->id }}" selected>{{ $mastercard->no_mc }}</option>
                        @else
                            <option value="{{ $mastercard->id }}">{{ $mastercard->no_mc }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="mc_induk" class="col-form-label">Nomor MC Pelengkap:</label>
                <input type="name" class="form-control rounded-top @error('mc_induk') is-invalid @enderror" name="mc_induk"
                    id="mc_induk" placeholder="mc_induk" autofocus value="{{ old('mc_induk') }}">
                @error('mc_induk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/groupmastercards" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Input Data</button>
        </form>
    </div>
@endsection

@section('container2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mastercard').select2({
                placeholder: 'Pilih No Sales',
                allowClear: true
            });
        });
    </script>
@endsection

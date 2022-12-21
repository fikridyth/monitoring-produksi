@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan Purchase Order & Request</h1>
    </div>

    <div class="table-responsive">
        <div class="card-header">
            <h3>Pilih Tanggal Data PO & PR</h3>
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <label for="label">Tanggal Awal : </label>&nbsp;&nbsp;&nbsp;
                <input type="date" name="tglawal" id="tglawal" class="form-control col-lg-2">
            </div>
            <div class="input-group mb-3">
                <label for="label">Tanggal Akhir : </label>&nbsp;&nbsp;
                <input type="date" name="tglakhir" id="tglakhir" class="form-control col-lg-2">
            </div>
            <div class="input-group mb-3">
                <a href=""
                    onclick="this.href='/reportpos/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                    target="_blank" class="btn btn-primary col-lg-3">Cetak Laporan</a>
            </div>
        </div>
    </div>
@endsection

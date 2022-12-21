@extends('layouts.print')

@section('container')
    <center>
        <h1><u>Laporan Delivery</u></h1><br>
    </center>

    <div class="table-responsive">
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Delivery</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">Jumlah Kirim</th>
                    <th scope="col">Tanggal Kirim</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reportdeliveriesdate as $delivery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $delivery->no_delivery }}{{ $delivery->surat_jalan }}</td>
                        <td>{{ $delivery->salesorder->mastercard->customer->cust_name }}</td>
                        <td>{{ $delivery->driver->driver }}</td>
                        <td>{{ $delivery->qty_delivery }}</td>
                        <td>{{ $delivery->date_delivery }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<script>
    window.addEventListener("load", window.print());
</script>

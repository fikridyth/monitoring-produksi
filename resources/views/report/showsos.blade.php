@extends('layouts.print')

@section('container')
    <center>
        <h1><u>Laporan Sales Order</u></h1><br>
    </center>

    <div class="table-responsive">
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No. Sales Order</th>
                    <th scope="col">No. Master Card</th>
                    <th scope="col">No. PO Customer</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reportsosdate as $salesorder)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $salesorder->no_sales }}</td>
                        <td>{{ $salesorder->no_mc }}</td>
                        <td>{{ $salesorder->po_customer }}</td>
                        <td>{{ $salesorder->mastercard->customer->cust_name }}</td>
                        <td>{{ $salesorder->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<script>
    window.addEventListener("load", window.print());
</script>

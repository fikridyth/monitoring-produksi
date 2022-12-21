@extends('layouts.print')

@section('container')
    <center>
        <h1><u>Laporan Purchase Order & Request</u></h1><br>
    </center>

    <div class="table-responsive">
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No. Sales Order</th>
                    <th scope="col">Kode Purchase Order</th>
                    <th scope="col">Kode Purchase Request</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reportposdate as $purchaseorder)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $purchaseorder->no_sales }}</td>
                        <td>{{ $purchaseorder->no_po }}{{ $purchaseorder->no_item }}</td>
                        <td>{{ $purchaseorder->no_pr }}{{ $purchaseorder->no_item }}</td>
                        <td>{{ $purchaseorder->supplier->sup_name }}</td>
                        <td>{{ $purchaseorder->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<script>
    window.addEventListener("load", window.print());
</script>

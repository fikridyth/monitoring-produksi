<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            {{-- <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <i class="fas fa-globe"></i> Listrik Pascabayar
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row --> --}}
            <div class="row invoice-info">
                <div class="invoice-col">
                    <i>Ship To Address:</i><br>
                    <b>{{ $invoicedelivery->delivery->salesorder->mastercard->customer->cust_name }}</b><br>
                    {{ $invoicedelivery->delivery->shiptoaddress->alamat_kirim1 }}<br>
                    {{ $invoicedelivery->delivery->shiptoaddress->alamat_kirim2 }}<br>
                    {{ $invoicedelivery->delivery->shiptoaddress->alamat_kirim3 }}<br>
                    <br><br>
                </div>
            </div>
        </section>
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Vehicle</td>
                        <td>: {{ $invoicedelivery->delivery->driver->vehicle }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Transport No</td>
                        <td>: {{ $invoicedelivery->delivery->driver->no_transport }}</td>
                        <td>Delivery No</td>
                        <td>: {{ $invoicedelivery->delivery->no_delivery }}</td>
                    </tr>
                    <tr>
                        <td>Driver</td>
                        <td>: {{ $invoicedelivery->delivery->driver->driver }}</td>
                        <td>Delivery Date</td>
                        <td>: {{ $invoicedelivery->delivery->date_delivery }}</td>
                    </tr>
                    <tr>
                        <td>Inconterm</td>
                        <td>: {{ $invoicedelivery->delivery->driver->inconterm }}</td>
                        <td>Purchase No</td>
                        <td>: {{ $invoicedelivery->delivery->salesorder->po_customer }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <br>
    <div class="table">
        <table class="table">
            <thead class="text-95 text-secondary-d3">
                <tr>
                    <th class="opacity-2">No</th>
                    <th>Description</th>
                    <th>Spesification</th>
                    <th>Qty (Pcs)</th>
                </tr>
            </thead>

            <tbody class="text-95 text-secondary-d3">
                <tr></tr>
                <tr>
                    <td>1</td>
                    <td>{{ $invoicedelivery->delivery->salesorder->mastercard->deskripsi }} <br> SO
                        {{ $invoicedelivery->delivery->salesorder->no_sales }}</td>
                    <td>{{ $invoicedelivery->delivery->salesorder->mastercard->panjang }} X
                        {{ $invoicedelivery->delivery->salesorder->mastercard->lebar }} X
                        {{ $invoicedelivery->delivery->salesorder->mastercard->tinggi }} mm <br>
                        {{ $invoicedelivery->delivery->salesorder->mastercard->substance }}
                        {{ $invoicedelivery->delivery->salesorder->mastercard->flute }}</td>
                    <td>{{ $invoicedelivery->delivery->qty_delivery }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Print --}}
    <script>
        window.addEventListener("load", window.print());
    </script>

</body>

</html>

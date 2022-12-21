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
    <center>
        <h4><u>SLIP FINISH GOOD</u></h4><br>
    </center>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col invoice-col">
                    &nbsp;&nbsp;Slip No.&nbsp;&nbsp;&nbsp;&nbsp; : {{ $invoiceslip->slipfinishgood->no_slip }}<br>
                    &nbsp;&nbsp;SO No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->no_sales }}<br>
                    &nbsp;&nbsp;MO No.&nbsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoiceslip->slipfinishgood->manufacturingorder->no_mo }} -
                    {{ $invoiceslip->slipfinishgood->manufacturingorder->no_urut }}<br>
                    &nbsp;&nbsp;Pallet No.&nbsp; : {{ $invoiceslip->slipfinishgood->no_pallet }}<br>
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                    GR Date&nbsp;&nbsp; : {{ $invoiceslip->slipfinishgood->date_gr }}<br>
                    Customer :
                    {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->customer->cust_name }}<br>
                    No.PO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->po_customer }}<br>
                    Qty.SO&nbsp;&nbsp;&nbsp;&nbsp; : {{ $invoiceslip->slipfinishgood->qty_order }}<br>
                </div>
                <!-- /.col -->
            </div><br>
            <!-- /.row -->

            <div class="col invoice-col">
                <table class="table">
                    <td>
                        Spesification
                    </td>
                </table>
            </div>

            <div class="col invoice-col">
                <table class="table">
                    <td>
                        Item Description&nbsp;&nbsp; :
                        {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->deskripsi }}<br>
                        Substance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                        {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->substance }}<br>
                        Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        :
                        {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->panjang }} X
                        {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->lebar }} X
                        {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->tinggi }}<br>
                        Flute&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        :
                        {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->flute }}<br>
                        Joint&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        :
                        {{ $invoiceslip->slipfinishgood->manufacturingorder->salesorder->mastercard->joint }}
                    </td>
                </table>
            </div>

            <div class="col invoice-col">
                <table class="table">
                    <td>
                        Qty per-Bundle&nbsp;&nbsp;&nbsp;&nbsp; :
                        {{ $invoiceslip->slipfinishgood->qty_perbundle }}<br>
                        Qty Bundle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                        {{ $invoiceslip->slipfinishgood->qty_bundle }}<br>
                        Last Bundle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                        {{ $invoiceslip->slipfinishgood->qty_last }}<br>
                        Qty / Pallet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                        {{ $invoiceslip->slipfinishgood->qty_pallet }}
                    </td>
                </table>
            </div>

            <div class="row col-6 invoice-info">
                <div class="col invoice-col">
                    &nbsp;&nbsp;Created<br><br><br><br>
                    &nbsp;&nbsp;({{ $invoiceslip->slipfinishgood->dibuat }})
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                    &emsp;&emsp;Remarks<br><br><br><br>
                    &emsp;&emsp;
                </div>
                <!-- /.col -->
            </div>
        </section>
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>

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
        <h4><u>SLIP RAW MATERIAL</u></h4><br>
    </center>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col invoice-col">
                    Slip No&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : {{ $invoiceraw->rawmaterial->slip_no }}<br>
                    No.PO Supplier&nbsp; : {{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->no_po }}<br>
                    Ref SO No.&emsp;&emsp;&nbsp; :
                    {{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->no_sales }}<br>
                    Pallet No.&emsp;&emsp;&nbsp;&nbsp;&nbsp; : {{ $invoiceraw->rawmaterial->pallet_no }}<br>
                    Customer&emsp;&emsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoiceraw->salesorder->mastercard->customer->cust_name }}<br>
                    No.PO&emsp;&emsp;&emsp;&emsp;&nbsp; : {{ $invoiceraw->salesorder->po_customer }}<br>
                    Item Desc.&emsp;&emsp;&nbsp;&nbsp; : {{ $invoiceraw->salesorder->mastercard->deskripsi }}<br>
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                    GR Date : {{ $invoiceraw->rawmaterial->gr_date }}<br>
                    Supplier : {{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->supplier->sup_name }}<br>
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

            <div class="row invoice-info">
                <div class="col invoice-col">
                    Size&emsp;&emsp;&emsp; : {{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->panjang }} X
                    {{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->lebar }}<br>
                    Substance&nbsp; : {{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->substance }}<br>
                    Flute&emsp;&emsp;&nbsp;&nbsp; :
                    {{ $invoiceraw->rawmaterial->rekaporder->purchaseorder->flute }}<br>
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                    Qty Bundle&emsp;&emsp;&nbsp;&nbsp; :
                    {{ number_format($invoiceraw->rawmaterial->qty_bundle, 0, '.', ',') }}<br>
                    Qty per-Bundle&nbsp;&nbsp;&nbsp; :
                    {{ number_format($invoiceraw->rawmaterial->qty_perbundle, 0, '.', ',') }}<br>
                    Last Bundle&emsp;&emsp;&nbsp;&nbsp; :
                    {{ number_format($invoiceraw->rawmaterial->last_bundle, 0, '.', ',') }}<br>
                    Qty / Pallet&emsp;&emsp;&nbsp;&nbsp;&nbsp; :
                    {{ number_format($invoiceraw->rawmaterial->qty_pallet, 0, '.', ',') }}<br><br>
                    Qty PO Supplier&nbsp;&nbsp; :
                    {{ number_format($invoiceraw->rawmaterial->rekaporder->qty_kirim, 0, '.', ',') }}<br>
                    Total Received&emsp;&nbsp; :
                    {{ number_format($invoiceraw->rawmaterial->total_received, 0, '.', ',') }}<br>
                </div>
                <!-- /.col -->
            </div><br>

            <div class="col invoice-col">
                <table class="table">
                    <td>
                    </td>
                </table>
            </div>

            <div class="row col-6 invoice-info">
                <div class="col invoice-col">
                    &nbsp;&nbsp;Created<br><br><br><br>
                    &nbsp;&nbsp;({{ $invoiceraw->rawmaterial->dibuat }})
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

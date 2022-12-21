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
        <h4>PURCHASE REQUEST</h4>
    </center>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h6 class="page-header">
                        <i class="fas fa-globe"></i> Vendor Name
                    </h6>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col invoice-col">
                    <strong>{{ $invoicepr->purchaseorder->supplier->sup_name }}</strong><br>
                    {{ $invoicepr->purchaseorder->supplier->alamat1 }}<br>
                    {{ $invoicepr->purchaseorder->supplier->alamat2 }}<br>
                    {{ $invoicepr->purchaseorder->supplier->no_telp }}<br>
                    Up {{ $invoicepr->purchaseorder->supplier->cp_person }}
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                    Purchase Order No&nbsp;&nbsp;&nbsp; : {{ $invoicepr->purchaseorder->no_pr }}<br>
                    Purchase Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoicepr->purchaseorder->date }}<br><br>
                    Due
                    Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    :
                    {{ $invoicepr->purchaseorder->date_delivery }}<br>
                    Payment Terms&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoicepr->purchaseorder->supplier->terms }} Days<br>
                </div>
                <!-- /.col -->
            </div><br>
            <!-- /.row -->

            <div class="row invoice-info">
                <div class="col invoice-col">
                    NPWP {{ $invoicepr->purchaseorder->supplier->no_npwp }}
                </div>
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Desc.</th>
                                <th>Ukuran P X L</th>
                                <th>Bahan Out / L</th>
                                <th>Score</th>
                                <th>Substance</th>
                                <th>Flute</th>
                                <th>P11</th>
                                <th>DISC</th>
                                <th>QTY</th>
                                <th>Ref. SO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{ $invoicepr->purchaseorder->desc }}</td>
                                <td>{{ $invoicepr->purchaseorder->panjang }} X
                                    {{ $invoicepr->purchaseorder->lebar }}</td>
                                <td>{{ $invoicepr->purchaseorder->out_paper }} /
                                    {{ $invoicepr->purchaseorder->lebar_paper }}</td>
                                <td>{{ $invoicepr->purchaseorder->score }}</td>
                                <td>{{ $invoicepr->purchaseorder->substance }}</td>
                                <td>{{ $invoicepr->purchaseorder->flute }}</td>
                                <td>Rp. {{ number_format($invoicepr->purchaseorder->index, 0, '.', ',') }}</td>
                                <td>{{ $invoicepr->purchaseorder->disc }}%</td>
                                <td>{{ number_format($invoicepr->purchaseorder->qty, 0, '.', ',') }}</td>
                                <td>{{ $invoicepr->purchaseorder->no_sales }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div><br><br><br><br>
            <!-- /.row -->

            <center>
                <div class="row col-6 invoice-info">
                    <div class="col invoice-col">
                        <u>Dibuat</u>
                    </div>
                    <!-- /.col -->
                    <div class="col invoice-col">
                        <u>Diperiksa</u>
                    </div>
                    <!-- /.col -->
                    <div class="col invoice-col">
                        <u>Disetujui</u>
                    </div>
                    <!-- /.col -->
                </div>
            </center>
        </section><br><br><br><br><br><br><br><br>
    </div>

    <center>
        <footer>
            <strong>PT.WINDU SELARAS LESTARI</strong><br>
            ALAMAT : KP.KEBON NO.8 RT.002 RW.002 JEJALEN JAYA, TAMBUN UTARA, Tlp/Fax: 021-89523164<br>
            BEKASI JAWA BARAT 17510
        </footer>
    </center>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>

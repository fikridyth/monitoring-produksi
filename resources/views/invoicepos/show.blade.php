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
                    <strong>{{ $invoicepo->purchaseorder->supplier->sup_name }}</strong><br>
                    {{ $invoicepo->purchaseorder->supplier->alamat1 }}<br>
                    {{ $invoicepo->purchaseorder->supplier->alamat2 }}<br>
                    {{ $invoicepo->purchaseorder->supplier->no_telp }}<br>
                    Up {{ $invoicepo->purchaseorder->supplier->cp_person }}
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                    Purchase Order No&nbsp;&nbsp;&nbsp; : {{ $invoicepo->purchaseorder->no_po }}<br>
                    Purchase Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoicepo->purchaseorder->date }}<br><br>
                    Due
                    Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    :
                    {{ $invoicepo->purchaseorder->date_delivery }}<br>
                    Payment Terms&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                    {{ $invoicepo->purchaseorder->supplier->terms }} Days<br>
                </div>
                <!-- /.col -->
            </div><br>
            <!-- /.row -->

            <div class="row invoice-info">
                <div class="col invoice-col">
                    NPWP {{ $invoicepo->purchaseorder->supplier->no_npwp }}
                </div>
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <center>No</center>
                                </th>
                                <th>
                                    <center>Desc.</center>
                                </th>
                                <th>
                                    <center>Ukuran P X L</center>
                                </th>
                                <th>
                                    <center>Bahan Out / L</center>
                                </th>
                                <th>
                                    <center>Score</center>
                                </th>
                                <th>
                                    <center>Substance</center>
                                </th>
                                <th>
                                    <center>Flute</center>
                                </th>
                                <th>
                                    <center>P11</center>
                                </th>
                                <th>
                                    <center>%</center>
                                </th>
                                <th>
                                    <center>QTY</center>
                                </th>
                                <th>
                                    <center>Price/PCS</center>
                                </th>
                                <th>
                                    <center>Jumlah</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <center>1
                                </td>
                                <td>
                                    <center>{{ $invoicepo->purchaseorder->desc }}</center>
                                </td>
                                <td>
                                    <center>{{ $invoicepo->purchaseorder->panjang }} X
                                        {{ $invoicepo->purchaseorder->lebar }}</center>
                                </td>
                                <td>
                                    <center>{{ $invoicepo->purchaseorder->out_paper }} /
                                        {{ $invoicepo->purchaseorder->lebar_paper }}</center>
                                </td>
                                <td>
                                    <center>{{ $invoicepo->purchaseorder->score }}</center>
                                </td>
                                <td>
                                    <center>{{ $invoicepo->purchaseorder->substance }}</center>
                                </td>
                                <td>
                                    <center>{{ $invoicepo->purchaseorder->flute }}</center>
                                </td>
                                <td>
                                    <center>Rp. {{ number_format($invoicepo->purchaseorder->index, 0, '.', ',') }}
                                    </center>
                                </td>
                                <td>
                                    <center>-{{ $invoicepo->purchaseorder->disc }}%</center>
                                </td>
                                <td>
                                    <center>{{ number_format($invoicepo->purchaseorder->qty, 0, '.', ',') }}</center>
                                </td>
                                <td>
                                    <center>Rp. {{ number_format($invoicepo->purchaseorder->price, 0, '.', ',') }}
                                    </center>
                                </td>
                                <td>
                                    <center>Rp.
                                        {{ number_format($invoicepo->purchaseorder->price * $invoicepo->purchaseorder->qty, 0, '.', ',') }}<br>
                                    </center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="col invoice-col">
                <table class="table">
                    <td>
                        Sub Total
                        Value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        Rp.
                        {{ number_format($invoicepo->purchaseorder->price * $invoicepo->purchaseorder->qty, 0, '.', ',') }}<br>
                        Output Tax (PPN)
                        11%&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        Rp.&nbsp;&nbsp;
                        {{ number_format($invoicepo->purchaseorder->price * $invoicepo->purchaseorder->qty * 0.11, 0, '.', ',') }}<br>
                        Final
                        Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        Rp.
                        {{ number_format($invoicepo->purchaseorder->price * $invoicepo->purchaseorder->qty * 0.11 +$invoicepo->purchaseorder->price * $invoicepo->purchaseorder->qty,0,'.',',') }}<br>
                    </td>
                </table>
            </div>

            <div class="row invoice-info">
                <div class="col invoice-col">
                    <strong>Alamat
                        Kirim</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Notes<br>
                    Kp.Kebon RT.02/02 No.8, Desa.Jejalenjaya<br>
                    Kec.Tambun Utara - Bekasi<br>
                </div>
                <!-- /.col -->
            </div><br>
            <!-- /.row -->

            <div class="row col-6 invoice-info">
                <div class="col invoice-col">
                    &emsp;&emsp;&emsp;Dibuat<br><br><br><br>
                    &emsp;&emsp;&emsp;({{ $invoicepo->dibuat }})
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                    &emsp;&emsp;Disetujui<br><br><br><br>
                    &emsp;&emsp;(YUDI WAHYUDI)
                </div>
                <!-- /.col -->
            </div>
        </section><br><br><br>
    </div>

    <center>
        <footer>
            <strong>PT.WINDU SELARAS LESTARI</strong>
        </footer>
    </center>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>

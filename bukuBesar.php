<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css">

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
           <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="index.php" class="dropdown" data-toggle="dropdown">Akuntansi App</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jurnal <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="jurnalpembelian.php">Jurnal Pembelian</a></li>
                            <li><a href="jurnalpenjualan.php">Jurnal Penjualan</a></li>
                            <li><a href="jurnalpenggajian.php">Jurnal Penggajian</a></li>
                            <li><a href="jurnalkas.php">Jurnal Penerimaan Kas</a></li>
                            <li><a href="jurnalpengeluaran.php">Jurnal Pengeluaran Kas</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="jurnalUmum.php" class="dropdown-toggle">Jurnal Umum </a>
                    </li>
                    <li class="active">
                        <a href="bukuBesar.php" class="dropdown-toggle">Buku Besar </a>
                    </li>
                </ul>
            </div>
    </div>
</div>
<div class="container">
<div class="panel" style="padding-top: 100px">

    <h2 style="text-align: center; padding-bottom: 20px;">KAS Data</h2>
    <div class="col-md-6">
        <table class = "table table-bordered table-striped">
        <tr>
        <td>Tanggal</td>
        <td>Jurnal</td>
        <td>Nama Akun</td>
        <td>Debit</td>
        </tr>
        <?php
        require ('koneksi.php');
        $sql = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_kredit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
        $sql2 = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_debit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
       
        while ($data = mysqli_fetch_array($sql)){
            echo "
                    <tr>
                    <td>$data[tgl_pembelian]</td>
                    <td>$data[jurnal]</td>
                    <td>$data[akun_debit]</td>
                    <td>$data[total_debit]</td>
                    </tr>";
                        };
                    ?> 
            </table>
    </div>
    <div class="col-md-6">
        <table class = "table table-bordered table-striped">
        <tr>
        <td>Tanggal</td>
        <td>Jurnal</td>
        <td>Nama Akun</td>
        <td>Kredit</td>
        </tr>
        <?php
        require ('koneksi.php');
        $sql = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_kredit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
        $sql2 = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_debit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
       
        while ($data = mysqli_fetch_array($sql2)){
            echo "
                    <tr>
                    <td>$data[tgl_pembelian]</td>
                    <td>$data[jurnal]</td>
                    <td>$data[akun_kredit]</td>
                    <td>$data[total_kredit]</td>
                    </tr>";
                        };
                    ?> 
            </table>
    </div>
    
    
    </div>
</div>
<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
</body>
</html>


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
                    <li class="active">
                        <a href="jurnalUmum.php" class="dropdown-toggle">Jurnal Umum </a>
                    </li>
                    <li class="">
                        <a href="bukuBesar.php" class="dropdown-toggle">Buku Besar </a>
                    </li>
                </ul>
            </div>
    </div>
</div>
<div class="container">
<div class="panel panel-default" style="margin-top: 100px">
    <div class="row" style="padding-bottom: 30px; padding-left: 10px; ">
        <div class="col-md-8">
                <h2>Jurnal Umum</h2>
        </div>
    </div>
    
    <table class = "table table-bordered table-striped">
        <tr>
        <td>Tanggal</td>
        <td>Jurnal</td>
        <td>Akun Debit</td>
        <td>Total</td>
        <td>Akun Kredit</td>
        <td>Total</td>
        </tr>
        <?php
        require ('koneksi.php');
        $sql = mysqli_query($koneksi, "SELECT * FROM jurnalumum ORDER BY tgl_pembelian ASC") or die(mysqli_error());
       
        while ($data = mysqli_fetch_array($sql)){
            echo "
                    <tr>
                    <td>$data[tgl_pembelian]</td>
                    <td>$data[jurnal]</td>
                    <td>$data[akun_debit]</td>
                    <td>$data[total_debit]</td>
                    <td>$data[akun_kredit]</td>
                    <td>$data[total_kredit]</td>
                    </tr>";
                    };
                    ?>
                    </table>
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


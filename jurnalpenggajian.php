<?php 

    @session_start();

    include "koneksi.php";

    if (@$_SESSION['admin'] || @$_SESSION['accounting']) {     
 ?>

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
                    <li class="dropdown active">
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
                    <li class="">
                        <a href="bukuBesar.php" class="dropdown-toggle">Buku Besar </a>
                    </li>
                    <li class="">
                        <a href="logout.php" class="dropdown-toggle">Keluar </a>
                    </li>
                </ul>
            </div>
    </div>
</div>
    <div class="panel panel-default" style="padding-top: 100px">
        <div class="panel-heading">
            <h2>Jurnal Penggajian</h2>
        </div>
        <div class="panel-body">
        <div class="col-md-6">
            <div class="form-group">
            <form action="proses.php" method="POST" accept-charset="utf-8">
                <label for="dtp_input2" class="control-label">Tanggal Penggajian</label>
                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" name="tanggal" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                <input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
            <div class="form-group">
              <label for="nbr">No akun </label>
              <input type="number" name="nomor" class="form-control" id="nbr">
            </div>
            <div class="form-group">
              <label for="usr">Nama Akun</label>
              <input type="text" name="akun_user" class="form-control" id="usr">
            </div>
            <div class="form-group">
              <label for="number_saldo">Saldo </label>
              <input type="number" name="saldo" class="form-control" id="number_saldo">
            </div>
            <div class="form-group">
              <label for="jenis_debt">Jenis </label>
                    <select name="jenis_debt" class="form-control" id="sel1">
                    <option></option>
                    <option>Debit</option>
                    <option>Kredit</option>
                </select>
            </div>
            <input type="submit" name="tambah_penggajian" value="Tambah Data" class="btn btn-success">
            <input style="margin-left: 10px" type="reset" value="Reset" class="btn btn-warning">
            </form>
        </div>
        <div class="col-md-6"> 
               <table class = "table table-bordered table-striped">
        <tr>
        <td>Tanggal</td>
        <td>No Akun</td>
        <td>Nama Akun</td>
        <td>Saldo</td>
        <td>Jenis</td>
        </tr>
        <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM jurnal_penggajian ORDER BY tgl_penggajian ASC") or die(mysqli_error());
       
        while ($data = mysqli_fetch_array($sql)){
            echo "
                    <tr>
                    <td>$data[tgl_penggajian]</td>
                    <td>$data[no_akun]</td>
                    <td>$data[nama_akun]</td>
                    <td>$data[saldo]</td>
                    <td>$data[jenis]</td>
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
<?php 
}else{
        header("location:index.php");
}
?>


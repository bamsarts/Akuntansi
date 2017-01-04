<?php 
	
	@session_start();
	include "koneksi.php";

	$user = @$_POST['username'];
	$pass = @$_POST['passlogin'];
	$login = @$_POST['login'];
	
	if (isset($login)) {

			$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND pass = '$pass'") or die(mysqli_error());
			$data = mysqli_fetch_array($sql);
			$cek = mysqli_num_rows($sql);
		
			if ($cek > 0) {
				if ($data['level'] == "admin") {

						@$_SESSION['admin'] = $data['id'];

						header("location:home.php");

					} else if ($data['level'] == "manager") {
						
						@$_SESSION['manager'] = $data['id'];

						header("location:manager/jurnalUmum.php");
					}
					else if ($data['level'] == "accounting") {
						
						@$_SESSION['accounting'] = $data['id'];

						header("location:home.php");
					}					
				
			} 
			else{
				?> <script type="text/javascript">alert("Usename / password salah ");window.location.href='index.php';</script> <?php
			}
		

	}

?>
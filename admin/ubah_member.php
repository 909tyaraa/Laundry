<!doctype html>
<html lang="en">
  <head>
  	<title>Ubah Member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">E-Laundry</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="tampil_user.php"><span class="fa fa-user mr-3"></span> Data User</a>
	          </li>
	          <li>
	              <a href="tampil_member.php"><span class="fa fa-user mr-3"></span> Data Member</a>
	          </li>
              <li>
	              <a href="tampil_outlet.php"><span class="fa fa-user mr-3"></span> Data Outlet</a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
		<?php 
    include "koneksi.php";
    $qry_get_member=mysqli_query($conn,"select * from member where id_member ='".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah Data Pelanggan Laundry</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value= "<?=$dt_member['id_member']?>">
        Nama Pelanggan :
        <input type="text" name="nama" value= "<?=$dt_member['nama']?>" class="form-control">
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_member['alamat']?></textarea>
        Jenis Kelamin : 
        <?php 
        $arr_jenis_kelamin=array('Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                if($key_jenis_kelamin==$dt_member['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_jenis_kelamin?>" <?=$selek?>><?=$val_jenis_kelamin?></option>
            <?php endforeach ?>
        </select>
        No Telepon : 
        <input type="text" name="tlp" value= "<?=$dt_member['tlp']?>" class="form-control">

    <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      </div>
		</div>

    <script src="header/js/jquery.min.js"></script>
    <script src="header/js/popper.js"></script>
    <script src="header/js/bootstrap.min.js"></script>
    <script src="header/js/main.js"></script>
  </body>
</html>
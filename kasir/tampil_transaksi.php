<!doctype html>
<html lang="en">
  <head>
  	<title>Transaksi</title>
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
		  		<h1><a href="home.php" class="logo">E-Laundry</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="home.php"><span class="fa fa-home mr-3"></span> Home</a>
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
            <li>
	              <a href="tampil_paket.php"><span class="fa fa-user mr-3"></span> Data Paket</a>
	          </li>
              <li>
	              <a href="tampil_transaksi.php"><span class="fa fa-user mr-3"></span> Data Transaksi</a>
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
    <body>
    <h3>Tampil Transaksi</h3> <a href="tambah_member.php" class="btn btn-warning">Tambah Member</a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID TRANSAKSI</th>
                    <th>ID MEMBER</th>
                    <th>TGL TRANSAKSI</th>
                    <th>BATAS WAKTU</th>
                    <th>TGL BAYAR</th>
                    <th>STATUS TRANSAKSI</th>
                    <th>DIBAYAR</th>
                    <th>TOTAL</th>
                    <th>ID USER</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_transaksi=mysqli_query($conn,"select * from transaksi");
                $no=0;
                while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $no++;?>
                <tr>              
                <td><?=$data_transaksi['id_transaksi']?></td>
                <td><?=$data_transaksi['id_member']?></td>
                <td><?=$data_transaksi['tgl']?></td>
                <td><?=$data_transaksi['batas_waktu']?></td> 
                <td><?=$data_transaksi['tgl_bayar']?></td>
                <td><?=$data_transaksi['status']?></td>
                <td><?=$data_transaksi['dibayar']?></td>
                <td><?=$data_transaksi['total']?></td>
                <td><?=$data_transaksi['id_user']?></td>
                <td><a href="ubah_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" 
                class="btn btn-success">v</a> | <a href="hapus_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" 
                onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
                class="btn btn-danger">x</a> | <a href="bayar.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" 
                onclick="return confirm('Apakah anda yakin membayar data ini?')" 
                class="btn btn-primary">Pay</a> </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
        <a href="tambah_transaksi.php" class="btn btn-warning">Tambah Data</a>
        <a class="btn btn-warning" href="#" onclick="window.print();" role = "button">Cetak Laporan</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      </div>
		</div>

    <script src="header/js/jquery.min.js"></script>
    <script src="header/js/popper.js"></script>
    <script src="header/js/bootstrap.min.js"></script>
    <script src="header/js/main.js"></script>
  </body>
</html>
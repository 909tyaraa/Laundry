<!doctype html>
<html lang="en">
  <head>
  	<title>User</title>
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
        <h3>Tampil User</h3> <a href="tambah_user.php" class="btn btn-success"> Tambah User</a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>NAMA USER<th>USERNAME</th>
                    <th>ROLE</th><th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_user=mysqli_query($conn,"select * from user");
                $no=0;
                while($data_user=mysqli_fetch_array($qry_user)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_user['nama']?></td>
                    <td><?=$data_user['username']?></td>
                    <td><?=$data_user['role']?></td>
                    <td><a href="ubah_user.php?id_user=<?=$data_user['id_user']?>"
                    class="btn btn-success">Ubah</a> | <a
                    href="hapus_user.php?id_user=<?=$data_user['id_user']?>"
                    onclick="return confirm('Apakah Anda yakin menghapus data ini?')" 
                    class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
        crossorigin="anonymous"></script>
      </div>
		</div>

    <script src="header/js/jquery.min.js"></script>
    <script src="header/js/popper.js"></script>
    <script src="header/js/bootstrap.min.js"></script>
    <script src="header/js/main.js"></script>
  </body>
</html>
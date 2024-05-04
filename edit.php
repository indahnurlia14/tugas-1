<!DOCTIYPE html>
<html>

<html>
    <title>CODING</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
	    <h1>UPDATE BARANG</h1>
		<div class="card">
		    <div class="card-header bg-success text-white ">
			    UPDATE BARANG
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>NAMA</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form group">
						<label>HARGA</label>
						<input type="text" name="harga" class="form-control">
					</div>

				  <div class="form-group">
					   <label>Deskripsi</label>
					   <textarea class="form-control" name="deskripsi"></textarea>
				  </div>

				  <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button  submit diklik maka akan menjalankan perintah simpan di bawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
                    $id = $_GET['id'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];
					
					//query untuk menambahkan barang ke database,pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "UPDATE barang SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id='$id'") or die(mysqli_error($koneksi));
					
					echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
				}
				?>
				
			   </div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>	
</body>

</html>	
				
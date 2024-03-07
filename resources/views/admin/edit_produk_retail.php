<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>JRP Insurance Lampung</title>
    <link href="assets/img/jrpLogo.png" rel="icon">
  <link href="assets/img/jrpLogo.png" rel="apple-touch-icon">
</head>

<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i>JRP Insurance</a>
		<ul class="side-menu">
            <li><a href="/dashboard" class="active"><i class='bx bxs-dashboard icon'></i>Beranda</a></li>
			<li>
				<a href="#"><i class='bx bxs-inbox icon'></i>Data Produk<i class='bx bx-chevron-right icon-right'></i></a>
				<ul class="side-dropdown">
					<li><a href="/produk-korporasi">Korporasi</a></li>
					<li><a href="">Retail</a></li>
				</ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i>Data Tentang Kami<i class='bx bx-chevron-right icon-right'></i></a>
				<ul class="side-dropdown">
					<li><a href="">Sejarah Prusahaan</a></li>
                    <li><a href="">Visi & Misi</a></li>
                    <li><a href="">Struktur Organisasi</a></li>
				</ul>
            </li>
            <li>
				<a href="#"><i class='bx bxs-inbox icon'></i>Data Layanan<i class='bx bx-chevron-right icon-right'></i></a>
				<ul class="side-dropdown">
					<li><a href="">Klaim</a></li>
					<li><a href="">Kontak</a></li>
				</ul>
            </li>
			<li><a href="#"><i class='bx bxs-notepad icon'></i>Keluar </a></li>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar'></i>
			<form action="#">
			</form>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href=""><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>

        <main>
            <div class="container mt-5">
                            <div class="container mt-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-8">
                                    <form id="regForm" action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_method" value="PUT">
                                        <h1 id="register">Ubah Produk Retail</h1><br>

                                <h6>Nama Produk</h6>
                                <p>
                                    <input oninput="this.className = ''" class="form-control" placeholder="Nama Produk" aria-label="Nama Produk" aria-describedby="basic-addon1" name="namaProduk" value="" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </p>
                                <h6>Deskripsi</h6>
                                <p>
                                    <input oninput="this.className = ''" class="form-control" placeholder="Deskripsi" aria-label="Deskripsi" aria-describedby="basic-addon1" name="deskripsi" value="" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </p>
                                <h6>Kelengkapan Klaim</h6>
                                <p>
                                    <input oninput="this.className = ''" class="form-control" placeholder="Kelengkapan Klaim" aria-label="Kelengkapan Klaim" aria-describedby="basic-addon1" name="kelengkapanKlaim" value="" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </p>
                                <h6>Foto Produk</h6>
                                <p>
                                    <input oninput="this.className = ''" class="form-control" placeholder="Foto Produk" aria-label="Foto Produk" aria-describedby="basic-addon1" name="fotoProduk" value="" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </p>
                                <div style="overflow:auto;" id="nextprevious">
                                    <div style="float:right;">
                                        <button type="submit" class="btn btn-custom btn-sm" role="button">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
		<!-- NAVBAR -->
        </section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="('/js/script-admin.js')"></script>
</body>

</html>

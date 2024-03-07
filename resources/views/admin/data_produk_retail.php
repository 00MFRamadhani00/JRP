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
		<!-- NAVBAR -->

        <main>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="mb-3">
							<h5 class="card-title">Data Produk Retail<span class="text-muted fw-normal ms-2">(8)</span></h5>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

							<div>
								<a href="" class="btn btn-primary"><i class="bx bx-plus me-1"></i>Tambah Data</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="">
							<div class="table-responsive">
								<table class="table project-list-table table-nowrap align-middle table-borderless">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Nama Produk</th>
											<th scope="col">Deskripsi</th>
                                            <th scope="col">Kelengkapan Klaim</th>
                                            <th scope="col">Foto Produk</th>
											<th scope="col" style="width: 200px;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>

										<tr>
											<td><?= $i ?></td>
											<td></td>
											<td></td>
                                            <td></td>
                                            <td></td>
											<td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary"><i class="bx bx-pencil font-size-18"></i></a>
                                                    <form action="" method="post" class="d-inline">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="bx bx-trash-alt font-size-18 text-danger"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
											</td>
										</tr>
										<?php $i++; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
        </section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="('/js/script-admin.js')"></script>
</body>

</html>

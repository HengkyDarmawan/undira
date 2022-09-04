<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #243381">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/') ?>img/index.png" alt="Logo" width="100" height="24" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <!-- Menu Profil -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>profile">Profil</a>
                    </li>
                    <!-- Menu Kurikulum -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>kurikulum">Kurikulum</a>
                    </li>
                    <!-- Menu Informasi Akademik -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li class="p-1 fw-bold fs-6">Tugas Akhir</li>
                            <li><a class="dropdown-item" href="#">Prosedur TA</a></li>
                            <li><a class="dropdown-item" href="#">Template Proposal TA</a></li>
                            <li><a class="dropdown-item" href="#">Template Laporan TA</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Dosen Pembimbing TA</a></li>
                            <li><a class="dropdown-item" href="#">Jadwal Seminar Proposal TA</a></li>
                            <li><a class="dropdown-item" href="#">Jadwal Sidang TA</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="p-1 fw-bold fs-6">Kerja Praktek</li>
                            <li><a class="dropdown-item" href="#">Prosedur Kerja Praktek</a></li>
                            <li><a class="dropdown-item" href="#">Template Laporan Kerja Praktek</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Dosen Pembimbing Kerja Praktek</a></li>
                            <li><a class="dropdown-item" href="#">Jadwal Sidang Kerja Praktek</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="p-1 fw-bold fs-6">Pembimbing Akademik</li>
                            <li><a class="dropdown-item" href="#">Prosedur KRS</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Dosen Pembimbing Akademik</a></li>
                            <li><a class="dropdown-item" href="#">Jadwal Bimbingan KRS</a></li>
                        </ul>
                    </li>
                    <!-- Menu Suasana Akademik -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>agenda">Suasana Akademik</a>
                    </li>
                    <!-- Menu Kegiatan Tridharma -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kegiatan Tridharma
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Penelitian Dosen</a></li>
                            <li><a class="dropdown-item" href="#">PKM Dosen</a></li>
                            <li><a class="dropdown-item" href="#">Publikasi Dosen</a></li>
                            <li><a class="dropdown-item" href="#">Kegiatan Tridharma Mahasiswa</a></li>
                        </ul>
                    </li>
                    <!-- Menu Kontak Kami-->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Kontak Kami</a>
                    </li>
                </ul>
                <hr />
                <div class="d-flex">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
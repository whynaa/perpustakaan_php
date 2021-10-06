<?php
  session_start();
  if ($_SESSION['status_admin'] != true) {
    header('location:index.php');
  }
?>
<nav class="navbar navbar-dark bg-dark shadow-sm navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PERPUSTAKAAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="tampil_kelas.php">Data Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_buku.php">Data Buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="proses_logout.php">Logout</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
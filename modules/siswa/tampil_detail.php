<style>
    body {
  font-family: poppins, sans-serif;
  background: #f9fbfd;
  color: #34364a;
}

.sidebar-menu {
  margin-top: 30px;
  margin-left: 30px;
  padding: 30px;
  border-radius: 26px;
  background: #fff;
  width: 290px;
  height: 93vh;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9;
  overflow-y: auto;
}

.sidebar-menu .brand img {
  width: 70px;
  height: 70px;
}

.sidebar-menu .brand h3 {
  color: #34364a;
  font-weight: 600;
  font-size: 21px;
  margin-bottom: 0;
}

.sidebar-menu .menus .item {
  margin-bottom: 36px;
}

.sidebar-menu .menus .item {
  padding-top: 3px;
}

.sidebar-menu .menus .item i {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #999aa4;
  border: 2px solid #999aa4;
  width: 16px;
  height: 16px;
  padding: 12px;
  border-radius: 41%;
  margin-right: 12px;
}

.sidebar-menu .menus .item a {
  font-size: 16px;
  text-decoration: none;
  font-weight: 500;
  color: #999aa4;
}

.sidebar-menu .menus .item a:hover {
  color: #34364a;
}

.sidebar-menu .menus .item.active i {
  color: #137bf4;
  border: 2px solid #137bf4;
}

.sidebar-menu .menus .item.active a {
  color: #34364a;
}

.mobile-menu {
  padding: 30px;
}

.mobile-menu .bottom-navigation {
  position: fixed;
  bottom: 0;
  right: 0;
  left: 0;
  z-index: 1200;
}

.mobile-menu .card-men u {
  background: #fff;
  padding: 20px;
}

.item-menu a {
  color: #999aa4;
  text-decoration: none;
}

.item-menu a:hover {
  color: #137bf4;
  text-decoration: none;
}

.item-menu a i {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #999aa4;
  text-decoration: none;
  border: 2px solid #999aa4;
  width: 16px;
  height: 16px;
  padding: 12px;
  border-radius: 41%;
  margin-right: 12px;
}

.item-menu.active a i {
  color: #137bf4;
  text-decoration: none;
  border: 2px solid #137bf4;
}

.content-wrapper {
  margin-left: 330px;
  margin-right: auto;
  position: relative;
  padding: 50px 20px;
}

.table {
  --bs-table-striped-bg: #f9f9f9;
}

tbody,
td,
tfoot,
th,
thead,
tr {
  border-color: #f9f9f9;
  border-style: solid;
  border-width: 0;
}

.btn-brand {
  color: #fff;
  background-color: #137bf4;
  padding: 11px 42px;
  font-weight: 500;
  border-color: #137bf4;
  border-radius: 100rem;
  box-shadow: 0 0.125rem 0.25rem rgba(13, 20, 49, 0.07);
}

.btn-brand:hover {
  color: #fff;
  background-color: #137bf4;
  border-color: #137bf4;
}

.btn-brand.focus,
.btn-brand:focus {
  box-shadow: 0 0.125rem 0.25rem rgba(13, 20, 49, 0.07),
    0 0 0 0.0625rem rgba(241, 106, 106, 0.5);
}

.btn-brand.disabled,
.btn-brand:disabled {
  color: #fff;
  background-color: #137bf4;
  border-color: #137bf4;
}

.btn-brand:not(:disabled):not(.disabled).active,
.btn-brand:not(:disabled):not(.disabled):active,
.show > .btn-brand.dropdown-toggle {
  color: #fff;
  background-color: #137bf4;
  border-color: #137bf4;
}

.btn-brand:not(:disabled):not(.disabled).active:focus,
.btn-brand:not(:disabled):not(.disabled):active:focus,
.show > .btn-brand.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.0625rem rgba(241, 106, 106, 0.5);
}

.btn-outline-brand {
  color: #137bf4;
  padding: 10px 40px;
  font-weight: 500;
  border: 2px solid #137bf4;
  border-radius: 100rem;
}

.btn-outline-brand:hover {
  color: #fff;
  background-color: #137bf4;
  border-color: #137bf4;
}

.btn-check:focus + .btn-outline-brand,
.btn-outline-brand:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
}

.btn-check:checked + .btn-outline-brand,
.btn-check:active + .btn-outline-brand,
.btn-outline-brand:active,
.btn-outline-brand.active,
.btn-outline-brand.dropdown-toggle.show {
  color: #fff;
  background-color: #137bf4;
  border-color: #137bf4;
}

.btn-check:checked + .btn-outline-brand:focus,
.btn-check:active + .btn-outline-brand:focus,
.btn-outline-brand:active:focus,
.btn-outline-brand.active:focus,
.btn-outline-brand.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
}

.btn-outline-brand:disabled,
.btn-outline-brand.disabled {
  color: #137bf4;
  background-color: transparent;
}

.btn-outline-secondary {
  color: #999aa4;
  padding: 10px 40px;
  font-weight: 500;
  border: 2px solid #999aa4;
  border-radius: 100rem;
}

.btn-outline-secondary:hover {
  color: #fff;
  background-color: #999aa4;
  border-color: #999aa4;
}

.btn-check:focus + .btn-outline-secondary,
.btn-outline-secondary:focus {
  box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.5);
}

.btn-check:checked + .btn-outline-secondary,
.btn-check:active + .btn-outline-secondary,
.btn-outline-secondary:active,
.btn-outline-secondary.active,
.btn-outline-secondary.dropdown-toggle.show {
  color: #fff;
  background-color: #999aa4;
  border-color: #999aa4;
}

.btn-check:checked + .btn-outline-secondary:focus,
.btn-check:active + .btn-outline-secondary:focus,
.btn-outline-secondary:active:focus,
.btn-outline-secondary.active:focus,
.btn-outline-secondary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary:disabled,
.btn-outline-secondary.disabled {
  color: #999aa4;
  background-color: transparent;
}

.form-control {
  color: #34364a !important;
}

.form-control:focus {
  border-color: #e5e9f2;
  box-shadow: 0 0 0 0.2rem rgba(49, 49, 106, 0.2);
}

.form-select {
  color: #34364a !important;
}

.form-select:focus {
  border-color: #e5e9f2;
  box-shadow: 0 0 0 0.2rem rgba(49, 49, 106, 0.2);
}

.form-check-inline {
  display: inline-table;
  margin-right: 1rem;
}

.is-invalid ~ .invalid-feedback-inline,
.is-invalid ~ .invalid-tooltip,
.was-validated :invalid ~ .invalid-feedback-inline,
.was-validated :invalid ~ .invalid-tooltip {
  display: inline-block;
  margin-left: 0;
}

.form-search input {
  border-color: #ced4da;
  padding: 0.7rem 1.5rem;
  padding-right: calc(2em + 1.2rem);
  background-image: url(../img/search-icon.svg);
  background-repeat: no-repeat;
  background-position: right calc(1em + 0.3rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.form-search .was-validated .form-control:invalid,
.form-control.is-invalid {
  border-color: #137bf4;
  padding-right: calc(2em + 1.2rem);
  background-image: url(../img/search-icon.svg);
  background-repeat: no-repeat;
  background-position: right calc(1em + 0.3rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.form-search .was-validated .form-control:valid,
.form-control.is-valid {
  border-color: #28a745;
  padding-right: calc(2em + 1.2rem);
  background-image: url(../img/search-icon.svg);
  background-repeat: no-repeat;
  background-position: right calc(1em + 0.3rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.flatpickr-day {
  border-radius: 15px;
}

.flatpickr-day.selected,
.flatpickr-day.startRange,
.flatpickr-day.endRange,
.flatpickr-day.selected.inRange,
.flatpickr-day.startRange.inRange,
.flatpickr-day.endRange.inRange,
.flatpickr-day.selected:focus,
.flatpickr-day.startRange:focus,
.flatpickr-day.endRange:focus,
.flatpickr-day.selected:hover,
.flatpickr-day.startRange:hover,
.flatpickr-day.endRange:hover,
.flatpickr-day.selected.prevMonthDay,
.flatpickr-day.startRange.prevMonthDay,
.flatpickr-day.endRange.prevMonthDay,
.flatpickr-day.selected.nextMonthDay,
.flatpickr-day.startRange.nextMonthDay,
.flatpickr-day.endRange.nextMonthDay {
  background: #fff;
  color: #137bf4;
  font-weight: 500;
  border: 2px solid #137bf4;
  line-height: 37px;
}

.foto-profil {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 100px;
}

.foto-profil-detail {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 200px;
  height: 200px;
}

.icon-title {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #34364a;
  border: 2px solid #34364a;
  width: 18px;
  height: 18px;
  padding: 14px;
  font-size: 18px;
  border-radius: 41%;
  margin-right: 12px;
  margin-bottom: 8px;
}

.icon-title-content {
  color: #137bf4;
  font-size: 19px;
  margin-right: 12px;
  padding-top: 4px;
}

.icon-widget {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #137bf4;
  border: 2px solid #137bf4;
  width: 25px;
  height: 25px;
  padding: 23px;
  font-size: 27px;
  border-radius: 41%;
}

#my-element h5 {
  color: #137bf4;
}

.widget h5 {
  color: #137bf4;
}

.icon-widget-kelas {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #999aa4;
  border: 2px solid #999aa4;
  width: 35px;
  height: 35px;
  padding: 33px;
  font-size: 37px;
  border-radius: 41%;
}

.breadcrumb .breadcrumb-item a:hover {
  color: #137bf4 !important;
  text-decoration: none;
}

.pagination-pill .page-link {
  display: flex;
  border-radius: 41% !important;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  padding: 0;
}

.page-link {
  position: relative;
  display: block;
  color: #6c757d;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #dee2e6;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.page-link:hover {
  color: #137bf4;
  text-decoration: none;
  background-color: #fff;
}

.page-item .page-link {
  margin: 0 7px;
}

.page-item.active .page-link {
  z-index: 3;
  color: #137bf4;
  font-weight: 500;
  background-color: #fff;
  border: 2px solid #137bf4;
}

.text-brand {
  color: #137bf4 !important;
}

.text-dark {
  color: #34364a !important;
}

.text-justify {
  text-align: justify !important;
}

.rounded-4 {
  border-radius: 14px !important;
}

.p-4-2 {
  padding: 2rem !important;
}

.mb-4-1-7 {
  margin-bottom: 1.7rem !important;
}

.mb-4-2 {
  margin-bottom: 2rem !important;
}

.fs-7 {
  font-size: 0.75rem !important;
}

.alert-secondary {
  color: #34364a;
  background-color: #e5e9f2;
  border-color: #e5e9f2;
}

@media (max-width: 575px) {
  .content-wrapper {
    margin-left: 0;
    margin-right: auto;
    position: relative;
    padding: 30px 18px 50px;
  }
}

@media (min-width: 576px) and (max-width: 767px) {
  .container,
  .container-sm {
    max-width: none;
  }

  .content-wrapper {
    margin-left: 0;
    margin-right: auto;
    position: relative;
    padding: 30px 30px 50px;
  }
}

@media (min-width: 992px) {
  .p-lg-4-2 {
    padding: 2rem !important;
  }
}

</style>

<div class="d-flex flex-column flex-lg-row mb-4">
    <!-- judul halaman -->
    <div class="flex-grow-1 d-flex align-items-center">
        <i class="fa-regular fa-user icon-title"></i>
        <h3>Siswa</h3>
    </div>
    <!-- breadcrumbs -->
    <div class="ms-5 ms-lg-0 pt-lg-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://ibrahimelgibran.com/" class="text-dark text-decoration-none"><i class="fa-solid fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="?module=siswa" class="text-dark text-decoration-none">Siswa</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Detail</li>
            </ol>
        </nav>
    </div>
</div>

<?php
// mengecek data GET "id_siswa"
if (isset($_GET['id'])) {
    // ambil data GET dari tombol detail
    $id_siswa = $_GET['id'];

    // sql statement untuk menampilkan data dari tabel "tbl_siswa" berdasarkan "id_siswa" dan tabel "tbl_kelas" berdasarkan "id_siswa"
    $query = mysqli_query($mysqli, "SELECT a.id_siswa, a.tanggal_daftar, a.kelas, a.nama_lengkap, a.jenis_kelamin, a.alamat, a.email, a.whatsapp, a.foto_profil, b.nama_kelas 
                                    FROM tbl_siswa as a INNER JOIN tbl_kelas as b ON a.kelas=b.id_kelas 
                                    WHERE a.id_siswa='$id_siswa'")
                                    or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
    // ambil data hasil query
    $data = mysqli_fetch_assoc($query);
}
?>

<div class="mb-5">
    <div class="d-grid gap-3 d-sm-flex flex-sm-row-reverse">
        <div class="d-grid gap-3 d-sm-flex">
            <!-- button ubah data -->
            <a href="?module=form_ubah_siswa&id=<?php echo $data['id_siswa']; ?>" class="btn btn-outline-brand px-4">
                <i class="fa-regular fa-pen-to-square me-2"></i> Ubah
            </a>
            <!-- button hapus data -->
            <a href="modules/siswa/proses_hapus.php?id=<?php echo $data['id_siswa']; ?>" onclick="return confirm('Anda yakin ingin menghapus data siswa <?php echo $data['nama_lengkap']; ?>?')" class="btn btn-outline-brand px-4">
                <i class="fa-regular fa-trash-can me-2"></i> Hapus
            </a>
        </div>
        <!-- button kembali ke halaman tampil data -->
        <a href="?module=siswa" class="btn btn-outline-secondary px-4 me-sm-auto">
            <i class="fa-solid fa-angle-left me-2"></i> Kembali
        </a>
    </div>
</div>

<?php
// menampilkan pesan sesuai dengan proses yang dijalankan
// jika pesan tersedia
if (isset($_GET['pesan'])) {
    // jika pesan = 1
    if ($_GET['pesan'] == 1) {
        // tampilkan pesan sukses ubah data
        echo '<div class="alert alert-success alert-dismissible rounded-4 fade show mb-4" role="alert">
                <strong><i class="fa-solid fa-circle-check me-2"></i>Sukses!</strong> Data siswa berhasil diubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
}
?>

<div class="bg-white rounded-4 shadow-sm p-4 mb-4">
    <!-- judul form -->
    <div class="alert alert-secondary rounded-4 mb-5" role="alert">
        <i class="fa-solid fa-list-ul me-2"></i> Detail Data Siswa
    </div>
    <!-- tampilkan data -->
    <div class="d-flex flex-column flex-xl-row">
        <div class="flex-shrink-0 text-center mb-5 mb-xl-0">
            <div class="foto-profil-detail">
                <img src="images/<?php echo $data['foto_profil']; ?>" alt="Foto Profil" class="img-fluid rounded-circle">
            </div>
        </div>
        <div class="flex-grow-1 text-muted fw-light ms-xl-5">
            <div class="table-responsive">
                <table class="table table-striped lh-lg">
                    <tr>
                        <td width="200">ID Siswa</td>
                        <td width="10">:</td>
                        <td><?php echo $data['id_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Daftar</td>
                        <td>:</td>
                        <td><?php echo tanggal_indo($data['tanggal_daftar']); ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?php echo $data['nama_kelas']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $data['nama_lengkap']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $data['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                        <td>WhatsApp</td>
                        <td>:</td>
                        <td><?php echo $data['whatsapp']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
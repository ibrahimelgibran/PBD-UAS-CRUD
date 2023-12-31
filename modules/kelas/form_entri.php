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
        <i class="fa-solid fa-chalkboard icon-title"></i>
        <h3>Kelas</h3>
    </div>
    <!-- breadcrumbs -->
    <div class="ms-5 ms-lg-0 pt-lg-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://ibrahimelgibran.com/" class="text-dark text-decoration-none"><i class="fa-solid fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="?module=kelas" class="text-dark text-decoration-none">Kelas</a></li>
                <li class="breadcrumb-item" aria-current="page">Entri</li>
            </ol>
        </nav>
    </div>
</div>

<div class="bg-white rounded-4 shadow-sm p-4 mb-4">
    <!-- judul form -->
    <div class="alert alert-secondary rounded-4 mb-5" role="alert">
        <i class="fa-solid fa-pen-to-square me-2"></i> Entri Data Kelas
    </div>
    <!-- form entri data -->
    <form action="modules/kelas/proses_simpan.php" method="post" class="needs-validation" novalidate>
        <div class="row">
            <div class="mb-3">
                <label class="form-label">Nama Kelas <span class="text-danger">*</span></label>
                <input type="text" name="nama_kelas" class="form-control" autocomplete="off" required>
                <div class="invalid-feedback">Nama kelas tidak boleh kosong.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi <span class="text-danger">*</span></label>
                <textarea name="deskripsi" rows="10" class="form-control" autocomplete="off" required></textarea>
                <div class="invalid-feedback">Deskripsi tidak boleh kosong.</div>
            </div>
        </div>

        <div class="pt-4 pb-2 mt-5 border-top">
            <div class="d-grid gap-3 d-sm-flex justify-content-md-start pt-1">
                <!-- button simpan data -->
                <input type="submit" name="simpan" value="Simpan" class="btn btn-outline-brand px-4">
                <!-- button kembali ke halaman tampil data -->
                <a href="?module=kelas" class="btn btn-outline-secondary px-4">Batal</a>
            </div>
        </div>
    </form>
</div>
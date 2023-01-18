<?= $this->extend('kampus/layouts/layout') ?>
<?= $this->section('content') ?>
<div class="page-content">

  <div class="d-flex align-items-center justify-content-center">
    <div class="container">
      <div class="card py-5">
        <div class="row g-0">
          <div class="col col-xl-6">
            <div class="card-body p-4">
              <h1 class="text-primary">Selamat Datang di Kampus Bersama</h1>
              <p>Anda telah mendaftar sebagai <?= ($session['ROLE'] == "LEARNER") ? "Calon Mahasiswa" : ucwords(strtolower($session['ROLE'])) ?> di Kampus Bersama.
                <br>Segera Lengkapi data diri Anda.
                <br>Agar akun teraktivasi.
              </p>
              <div class="mt-5">
                <a href="<?= base_url() ?>" class="btn btn-primary btn-lg px-md-5 radius-30">Go Home</a>
                <a href="<?= base_url() ?>" class="btn btn-outline-dark btn-lg ms-3 px-md-5 radius-30">Back</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <img src="<?= base_url() ?>/images/pict-dashboard.webp" class="img-fluid" alt="">
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
  </div>

</div>
<?= $this->endSection() ?>
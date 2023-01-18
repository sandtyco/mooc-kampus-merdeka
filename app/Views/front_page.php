<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title><?= $page_title ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

  <!-- JQuery-->
  <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>

  <!--plugins-->
  <link href="<?= base_url() ?>/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- loader-->
  <link href="<?= base_url() ?>/assets/css/pace.min.css" rel="stylesheet" />
  <script src="<?= base_url() ?>/assets/js/pace.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/css/app.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/css/icons.css" rel="stylesheet">
  <!-- Theme Style CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/dark-theme.css" />
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/semi-dark.css" />
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/header-colors.css" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .drk:after {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: black;
      opacity: 0.6;
      z-index: 1;
    }

    .carousel-caption {
      z-index: 2;
    }

    .carousel-inner {
      margin-top: 30px;
    }

    .select2-container--open {
      z-index: 9999999
    }

    .dropdown-menu {
      -webkit-animation: .6s cubic-bezier(.25, .8, .25, 1) 0s normal forwards 1 animdropdown;
      animation: .6s cubic-bezier(.25, .8, .25, 1) 0s normal forwards 1 animdropdown;
      -webkit-box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
      box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
      border: 0 solid #e9ecef;
      border-radius: 10px;
      font-size: 14px;
      vertical-align: middle;
      margin-right: 10px;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>/assets/css/carousel.css" rel="stylesheet">
</head>

<body>
  <!--start header -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-3">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?= base_url() ?>/images/logo-white-kampusmerdeka.webp" alt="Kampus Bersama" class="image-0-0-19 contain-0-0-21" style="background-color: transparent;">
        </a>
        <!-- Button Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- End Button Mobile -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="flex-grow-1 position-relative">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item"> <a class="nav-link active text-white" style="font-size:16px;" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a></li>
              <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" style="font-size:16px;" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-home-alt me-1'></i>Program Studi</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Informatika</a></li>
                  <li><a class="dropdown-item" href="#">Sistem Informasi</a></li>
                  <li><a class="dropdown-item" href="#">Teknologi Informasi</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Bisnis DIgital</a></li>
                  <li><a class="dropdown-item" href="#">Ilmu Komunikasi</a></li>
                </ul>
              </li>
              <li class="nav-item"> <a class="nav-link text-white" style="font-size:16px;" href="#"><i class='bx bx-microphone me-1'></i>Contact</a></li>
              <li class="nav-item"> <a class="nav-link text-white" style="font-size:16px;" href="#"><i class='bx bx-user me-1'></i>About</a></li>
            </ul>
          </div>
          <div class="top-menu ms-auto">
            <div class="text-center dropdown dropdown-large">
              <?php if (empty($session['NAMA'])) : ?>
                <button type="button" class="btn btn-outline-light me-2" id="btn-masuk" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-user mr-1"></i>MASUK</button>
                <div class="dropdown-menu dropdown-menu-end mt-3" id="dropdown-masuk">
                  <div class="border p-4 rounded">
                    <div class="text-center">
                      <h3 class="">Masuk</h3>
                      <div class="login-separater text-center"> <span>MASUK DENGAN EMAIL</span>
                        <hr />
                      </div>
                    </div>
                    <div class="form-body">
                      <form class="row g-3" id="form-login">
                        <div class="col-12">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <div id="error-login" class="invalid-feedback">Please provide a valid city.</div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Ingat Saya</label>
                          </div>
                        </div>
                        <div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Lupa Password?</a>
                        </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button type="submit" class="btn btn-primary" id="login"><i class="bx bxs-lock-open"></i>Masuk</button>
                            <!-- <a href="<?= base_url() ?>/dashboard" class="btn btn-primary">MASUK</a> -->
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-message-square-edit"></i>REGISTRASI</button>
                <div class="dropdown-menu dropdown-menu-end mt-3">
                  <div class="border p-4 rounded">
                    <div class="text-center">
                      <h3 class="">Registrasi</h3>
                      <div class="login-separater text-center mb-4"> <span>REGISTRASI</span>
                        <hr />
                      </div>
                    </div>
                    <div class="form-body">
                      <div class="row g-3">
                        <button type="button" class="btn btn-success col-12" data-bs-toggle="modal" data-bs-target="#modal-registrasi-mahasiswa"><i class="bx bx-user-circle"></i>Registrasi Mahasiswa</button>
                        <button type="submit" class="btn btn-outline-primary col-12" data-bs-toggle="modal" data-bs-target="#modal-registrasi-kampus"><i class="lni lni-graduation"></i>Registrasi Kampus</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php else : ?>
                <div class="user-box dropdown">
                  <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url() ?>/assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                    <div class="user-info ps-3" style="text-align: left;">
                      <p class="user-name text-white mb-0"><?= $session['NAMA'] ?></p>
                      <?php $user_role = ($session['ROLE'] == "LEARNER") ? "MAHASISWA" : $session['ROLE'] ?>
                      <p class="designattion mb-0"><?= $user_role ?></p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>/dashboard"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                    </li>
                    <li>
                      <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>/auth/logout"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                  </ul>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!--end header -->

  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item drk active">
          <img src="<?= base_url() ?>/images/bg1.webp" alt="Kampus Bersama" class="card-img" style="object-fit: cover;">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 class="text-primary">Kampus Bersama</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class=" btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item drk">
          <img src="<?= base_url() ?>/images/bg2.webp" alt="Kampus Bersama" style="object-fit: cover;" aria-hidden="true" focusable="false">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="text-primary">Kampus Bersama</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item drk">
          <img src="<?= base_url() ?>/images/bg3.webp" alt="Kampus Bersama" style="object-fit: cover;" aria-hidden="true" focusable="false">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1 class="text-primary">Kampus Bersama</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Apa itu <b>Kampus Bersama?</b></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="<?= base_url() ?>/images/wisudawan.webp" alt="Kampus Bersama" class="card-img" style="object-fit: cover;">
        </div>
      </div>


      <hr class="featurette-divider">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <div class="widgets-icons rounded-circle mx-auto bg-gradient-scooter text-white" style="width: 120px; height:120px; margin-bottom:20px; font-size:50px;"><img src="<?= base_url() ?>/images/logo-white-kampusmerdeka.webp" alt="Kampus Bersama" class="card-img" style="width: 50px; height:auto;"></div>

          <h2>Kampus Merdeka</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widgets-icons rounded-circle mx-auto bg-gradient-bloody text-white" style="width: 120px; height:120px; margin-bottom:20px; font-size:50px;"><i class='lni lni-graduation'></i></div>

          <h2>Bebas Pilih Kampus</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widgets-icons rounded-circle mx-auto bg-gradient-ohhappiness text-white" style="width: 120px; height:120px; margin-bottom:20px; font-size:50px;"><i class='lni lni-school-bench-alt'></i></div>
          <h2>Bebas Pilih Kelas</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

  </main>

  <!-- FOOTER -->
  <div class="bg-dark" style="margin-bottom: -60px;">
    <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5 class="text-white">
              <img src="<?= base_url() ?>/images/logo-white-kampusmerdeka.webp" alt="Kampus Bersama" class="image-0-0-19 contain-0-0-21" style="background-color: transparent;">
            </h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5 class="text-white">Program Studi</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Informatika</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sistem Informasi</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teknologi Informasi</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bisnis DIgital</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ilmu Komunikasi</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5 class="text-white">Panduan</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Registrasi Mahasiswa</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Registrasi Kampus</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5 class="text-white">Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-white">
          <p>© 2022 Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex" style="font-size: 30px; margin-top:-20px;">
            <li class="ms-2"><a class="link-light" href="#"><i class="bx bxl-facebook-square"></i></a></li>
            <li class="ms-2"><a class="link-light" href="#"><i class="bx bxl-twitter"></i></a></li>
            <li class="ms-2"><a class="link-light" href="#"><i class="bx bxl-instagram"></i></a></li>
          </ul>
        </div>
      </footer>
    </div>
  </div>

  <!-- Modal Registrasi Mahasiswa -->
  <div class="modal fade" id="modal-registrasi-mahasiswa" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div><i class="bx bxs-user me-1 font-22 text-default"></i></div>
          <h5 class="mb-0 text-default">Registrasi Mahasiswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-top border-0 border-1 border-default">
          <div class="card-body p-4">
            <form class="row g-3" id="registrasi-mahasiswa">
              <div class="col-md-12">
                <label for="inputNamaMahasiswa" class="form-label">Nama Lengkap</label>
                <input type="email" class="form-control" id="inputNamaMahasiswa" name="inputNamaMahasiswa" placeholder="Nama Lengkap">
                <div id="validation-inputNamaMahasiswa"></div>
              </div>
              <div class="col-md-6">
                <label for="inputEmailMahasiswa" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmailMahasiswa" name="inputEmailMahasiswa" placeholder="Email">
                <div id="validation-inputEmailMahasiswa"></div>
              </div>
              <div class="col-md-6">
                <label for="inputPhoneMahasiswa" class="form-label">Telp/HP</label>
                <input type="email" class="form-control" id="inputPhoneMahasiswa" name="inputPhoneMahasiswa" placeholder="Telp/HP">
                <div id="validation-inputPhoneMahasiswa"></div>
              </div>
              <div class="col-md-6">
                <label for="inputPasswordMahasiswa" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPasswordMahasiswa" name="inputPasswordMahasiswa" placeholder="Password">
                <div id="validation-inputPasswordMahasiswa"></div>
              </div>
              <div class="col-md-6">
                <label for="ulangiPasswordMahasiswa" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="ulangiPasswordMahasiswa" name="ulangiPasswordMahasiswa" placeholder="Ulangi assword">
                <div id="validation-ulangiPasswordMahasiswa"></div>
              </div>
              <div class="col-12">
                <label for="inputAlamatMahasiswa" class="form-label">Alamat</label>
                <textarea class="form-control" id="inputAlamatMahasiswa" name="inputAlamatMahasiswa" placeholder="Alamat..." rows="3"></textarea>
                <div id="validation-inputAlamatMahasiswa">Test</div>
              </div>
              <div class="col-md-6">
                <label for="inputProvinsiMahasiswa" class="form-label">Provinsi</label>
                <select class="form-select" id="inputProvinsiMahasiswa" name="inputProvinsiMahasiswa">
                  <option value="DKI Jakarta">DKI Jakarta</option>
                  <option value="Jawa Barat">Jawa Barat</option>
                  <option value="Jawa Tengah">Jawa Tengah</option>
                  <option value="Jawa Timur">Jawa Timur</option>
                </select>
                <div id="validation-inputProvinsiMahasiswa"></div>
              </div>
              <div class="col-md-6">
                <label for="inputKabupatenMahasiswa" class="form-label">Kabupaten</label>
                <select class="form-select" id="inputKabupatenMahasiswa" name="inputKabupatenMahasiswa">
                  <option>Kabupaten Banyumas</option>
                  <option>Kabupaten Purbalingga</option>
                  <option>Kabupaten Banjarnegara</option>
                  <option>Kabupaten Cilacap</option>
                  <option>Kabupaten Kebumen</option>
                </select>
                <div id="validation-inputKabupatenMahasiswa"></div>
              </div>
              <div class="col-md-6">
                <label for="inputKecamatan" class="form-label">Kecamatan</label>
                <select class="form-select" id="inputKecamatanMahasiswa" name="inputKecamatanMahasiswa">
                  <option>Purwokerto Utara</option>
                  <option>Purwokerto Timur</option>
                  <option>Purwokerto Selatan</option>
                  <option>Purwokerto Barat</option>
                  <option>Baturaden</option>
                </select>
                <div id="validation-inputKecamatanMahasiswa"></div>
              </div>
              <div class="col-md-6">
                <label for="inputZipMahasiswa" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="inputZipMahasiswa" name="inputZipMahasiswa" placeholder="Kode Pos">
                <div id="validation-inputZipMahasiswa"></div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-daftar-mahasiswa">Daftar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Registrasi Kampus -->
  <div class="modal fade" id="modal-registrasi-kampus" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div><i class="bx bxs-user me-1 font-22 text-default"></i></div>
          <h5 class="mb-0 text-default">Registrasi Kampus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-top border-0 border-1 border-default">
          <div class="card-body">
            <form class="row g-3" id="registrasi-kampus">
              <div class="col-md-12">
                <label for="inputNamaKampus" class="form-label">Nama Kampus</label>
                <input type="email" class="form-control" id="inputNamaKampus" name="inputNamaKampus" placeholder="Nama Kampus">
                <div id="validation-inputNamaKampus"></div>
              </div>
              <div class="col-md-6">
                <label for="inputEmailKampus" class="form-label">Email Kampus</label>
                <input type="email" class="form-control" id="inputEmailKampus" name="inputEmailKampus" placeholder="Email">
                <div id="validation-inputEmailKampus"></div>
              </div>
              <div class="col-md-6">
                <label for="inputPhoneKampus" class="form-label">Telp/HP Kampus</label>
                <input type="email" class="form-control" id="inputPhoneKampus" name="inputPhoneKampus" placeholder="Telp/HP">
                <div id="validation-inputPhoneKampus"></div>
              </div>
              <div class="col-md-6">
                <label for="inputPasswordKampus" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPasswordKampus" name="inputPasswordKampus" placeholder="Password">
                <div id="validation-inputPasswordKampus"></div>
              </div>
              <div class="col-md-6">
                <label for="ulangiPasswordKampus" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="ulangiPasswordKampus" name="ulangiPasswordKampus" placeholder="Ulangi assword">
                <div id="validation-ulangiPasswordKampus"></div>
              </div>
              <div class="col-12">
                <label for="inputAlamatKampus" class="form-label">Alamat Kampus</label>
                <textarea class="form-control" id="inputAlamatKampus" name="inputAlamatKampus" placeholder="Alamat..." rows="3"></textarea>
                <div id="validation-inputAlamatKampus">Test</div>
              </div>
              <div class="col-md-6">
                <label for="inputProvinsiKampus" class="form-label">Provinsi</label>
                <select class="form-select" id="inputProvinsiKampus" name="inputProvinsiKampus">
                  <option value="DKI Jakarta">DKI Jakarta</option>
                  <option value="Jawa Barat">Jawa Barat</option>
                  <option value="Jawa Tengah">Jawa Tengah</option>
                  <option value="Jawa Timur">Jawa Timur</option>
                </select>
                <div id="validation-inputProvinsiKampus"></div>
              </div>
              <div class="col-md-6">
                <label for="inputKabupatenKampus" class="form-label">Kabupaten</label>
                <select class="form-select" id="inputKabupatenKampus" name="inputKabupatenKampus">
                  <option>Kabupaten Banyumas</option>
                  <option>Kabupaten Purbalingga</option>
                  <option>Kabupaten Banjarnegara</option>
                  <option>Kabupaten Cilacap</option>
                  <option>Kabupaten Kebumen</option>
                </select>
                <div id="validation-inputKabupatenKampus"></div>
              </div>
              <div class="col-md-6">
                <label for="inputKecamatan" class="form-label">Kecamatan</label>
                <select class="form-select" id="inputKecamatanKampus" name="inputKecamatanKampus">
                  <option>Purwokerto Utara</option>
                  <option>Purwokerto Timur</option>
                  <option>Purwokerto Selatan</option>
                  <option>Purwokerto Barat</option>
                  <option>Baturaden</option>
                </select>
                <div id="validation-inputKecamatanKampus"></div>
              </div>
              <div class="col-md-6">
                <label for="inputZipKampus" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="inputZipKampus" name="inputZipKampus" placeholder="Kode Pos">
                <div id="validation-inputZipKampus"></div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-daftar-kampus">Daftar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/chartjs/js/Chart.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="<?= base_url() ?>/assets/js/index.js"></script>
  <!--app JS-->
  <script src="<?= base_url() ?>/assets/js/app.js"></script>
  <script type="text/javascript">
    $('.btn-daftar-mahasiswa').on('click', function() {
      var formdata = new FormData($('#registrasi-mahasiswa')[0]);
      $.ajax({
        url: '<?= base_url() ?>/registrasi/registrasi_learner',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        dataType: 'JSON',
        success: function(result) {
          if (result.validation) {
            var name = Object.keys(result.validation);
            var notempty = result.notempty;
            var html = '';
            for (i = 0; i < notempty.length; i++) {
              $("[name=" + notempty[i] + "]").attr("class", "form-control");
              $("#validation-" + notempty[i]).html('');
            }
            for (i = 0; i < name.length; i++) {
              $("[name=" + name[i] + "]").attr("class", "form-control is-invalid");
              $("#validation-" + name[i]).attr("class", "invalid-feedback");
              $("#validation-" + name[i]).html(result.validation[name[i]]);
            }
          } else {
            if (result.insert == true) {
              window.location.href = "<?= base_url() ?>/dashboard";
            }
          }
        },
        error: function(result) {
          // alert(result);
        }
      });
    })

    $('.btn-daftar-kampus').on('click', function() {
      var formdata = new FormData($('#registrasi-kampus')[0]);
      $.ajax({
        url: '<?= base_url() ?>/registrasi/registrasi_kampus',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        dataType: 'JSON',
        success: function(result) {
          if (result.validation) {
            var name = Object.keys(result.validation);
            var notempty = result.notempty;
            var html = '';
            for (i = 0; i < notempty.length; i++) {
              $("[name=" + notempty[i] + "]").attr("class", "form-control");
              $("#validation-" + notempty[i]).html('');
            }
            for (i = 0; i < name.length; i++) {
              $("[name=" + name[i] + "]").attr("class", "form-control is-invalid");
              $("#validation-" + name[i]).attr("class", "invalid-feedback");
              $("#validation-" + name[i]).html(result.validation[name[i]]);
            }
          } else {
            if (result.insert == true) {
              window.location.href = "<?= base_url() ?>/dashboard";
            }
          }
        },
        error: function(result) {
          // alert(result);
        }
      });
    })

    $('#login').on('click', function(evt) {
      evt.preventDefault();
      var formdata = new FormData($('#form-login')[0])
      $.ajax({
        url: '<?= base_url() ?>/auth/login',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        dataType: 'JSON',
        success: function(result) {
          if (result.error) {
            $("#error-login").html(result.error);
            $("#error-login").show();
            $("#btn-masuk").addClass('show');
            $("#dropdown-masuk").addClass('show');
            $("#dropdown-masuk").attr('data-bs-popper', 'none');
          } else {
            window.location.href = "<?= base_url() ?>/dashboard";
          }
        },
        error: function(result) {
          // alert(result);
        }
      });
    })
    $(document).ready(function() {})
  </script>
</body>

</html>
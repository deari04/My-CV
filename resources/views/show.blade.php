<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My CV</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>

  <body class="body">
    <nav class="navbar sticky-top navbar-expand-lg">
      <div class="container">
        <div class="navbar-brand" href="#">ARI Setiawan.</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#certificate">Certificate</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="home text-white" id="home">
      <div class="container mt-4">
        <div class="row p-4">
          <div class="col-md-8 d-flex flex-column justify-content-center">
            <div class="d-flex flex-column justify-content-center">
                @foreach ($data as $data)
                <h1>Hi, I'm {{ $data->nama }}</h1>
                <h1>Web Designer</h1>
                
            </div>
            <div class="d-flex align-items-center mt-4">
              <span class="me-3"
                ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                {{ $data->umur }}</span
              >
              <span
                ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                </svg>
                {{ $data->alamat }}</span
              >
            </div>
            <h6 class="lead mt-3">{{ $data->keterangan }}</h6>
            @endforeach
          </div>
          <div class="col-md-4 d-flex justify-content-center align-items-center">
            <img src="assets/img/profile.jpeg" class="rounded" alt="Profile Picture" width="300px" height="355px" />
          </div>
        </div>
        <hr class="my-4" />
      </div>

      <div class="container">
        <h1>Education</h1>
        <div class="container-fluid bg-white education rounded shadow-sm">
          <div class="row d-flex align-items-center text-dark p-4">
            <div class="col-md-6 text-center">
              <img src="assets/img/logo/logo_pnb.png" alt="" width="115px">
            </div>
            <div class="col-md-6 text-center">
              @foreach ($education as $education)
                <h4>{{ $education->tahun }}</h4>
                <h5>{{ $education->sekolah }}</h5>
                <h5>{{ $education->jurusan }}</h5>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <br />

    <section class="experience" id="experience">
      <div class="container mt-4">
        <div class="container-fluid bg-3 text-center">
          <h1 class="text-white">Experience</h1>
          <div class="row d-flex align-items-center mt-3 mb-4 justify-content-center">
            <div class="col-sm-6">
              <div class="container-fluid bg-white experience rounded-3 shadow-sm">
                <h3 class="card-title text-center">Internship</h3>
                <img src="assets/img/logo/logo_bdi_denpasar.png" alt="logo" style="width: 100px" class="rounded" />
                <p class="ms-3 mt-2">Aug 2024 - Feb 2025 (6 Months)<br />Balai Diklat Industri Denpasar</p>
                <img src="assets/img/experience/bdi_denpasar.png" class="img-responsive margin rounded" style="width: 100%" alt="BDI Denpasar" />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container-fluid bg-white experience rounded-3 shadow-sm">
                <h3 class="card-title text-center">Organization</h3>
                <img src="assets/img/logo/logo_ukm.png" alt="logo" style="width: 100px" class="rounded" />
                <p class="ms-3 mt-2">2022 - 2023 (1st - 3rd Semester)<br />UKM Tenis Meja - Politeknik Negeri Bali</p>
                <img src="assets/img/experience/table_tennis.png" class="img-responsive margin rounded" style="width: 100%" alt="Tenis Meja" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="skills" id="skills">
      <div class="container mt-4">
        <div class="container-fluid bg-3 text-center">
          <h1 class="text-white">Skills</h1>
          <div class="row d-flex mt-3 mb-4 justify-content-center">
            <div class="col-sm-6">
              <div class="container-dark bg-white gap-3 rounded-3 shadow-sm">
                <h3>Website</h3>
                <div class="row mt-4">
                  <div class="col">
                    <img src="assets/img/skills/html.svg" alt="html" width="100px" />
                    <p class="mt-2">HTML</p>
                  </div>
                  <div class="col">
                    <img src="assets/img/skills/css.svg" alt="css" width="100px" />
                    <p class="mt-2">CSS</p>
                  </div>
                  <div class="col">
                    <img src="assets/img/skills/bootstrap.svg" alt="bootstrap" width="100px" />
                    <p class="mt-2">Bootstrap</p>
                  </div>
                </div>
                <br />
                <div class="row mt-4">
                  <div class="col">
                    <img src="assets/img/skills/php.svg" alt="php" width="100px" />
                    <p class="mt-2">PHP</p>
                  </div>
                  <div class="col">
                    <img src="assets/img/skills/laravel.svg" alt="laravel" width="100px" />
                    <p class="mt-2">Laravel</p>
                  </div>
                  <!-- <div class="col">
                    <img src="assets/img/skills/javascript.svg" alt="javascript" width="100px" />
                    <p class="mt-2">JavaScript</p>
                  </div> -->
                </div>
              </div>
            </div>
            <br>
            <div class="col-sm-6">
              <div class="container-dark bg-white rounded-3 shadow-sm">
                <h3>Basic</h3>
                <div class="row mt-4">
                  <div class="col">
                    <img src="assets/img/skills/canva.png" alt="canva" width="100px" class="rounded" />
                    <p class="mt-2">Canva</p>
                  </div>
                  <div class="col">
                    <img src="assets/img/skills/word.svg" alt="word" width="100px" />
                    <p class="mt-2">Word</p>
                  </div>
                  <div class="col">
                    <img src="assets/img/skills/ppt.svg" alt="powerpoint" width="100px" />
                    <p class="mt-2">Powerpoint</p>
                  </div>
                </div>
                <br />
                <div class="row mt-4">
                  <div class="col">
                    <img src="assets/img/skills/figma.svg" alt="php" width="100px" />
                    <p class="mt-2">Figma</p>
                  </div>
                  <div class="col">
                    <img src="assets/img/skills/premiere.svg" alt="premiere" width="100px" />
                    <p class="mt-2">Adobe Premiere</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="projects" id="projects">
      <div class="container mt-4">
        <div class="container-fluid bg-3 text-center">
          <h1 class="text-white">Projects</h1>
          <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="card-body rounded p-4">
                  <img src="assets/img/projects/simple_crud.png" alt="projects" class="d-block w-100" />
                  <h5 class="card-title mt-3">Simple CRUD Website (PHP)</h5>
                  <p class="card-text mb-3">Personal Project.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="card-body rounded p-4">
                  <img src="assets/img/projects/web_laravel_simple.png" alt="projects" class="d-block w-100" />
                  <h5 class="card-title mt-3">E-Comerce Website (Laravel 11)</h5>
                  <p class="card-text mb-3">Group Project.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-body rounded p-4">
                  <img src="assets/img/projects/web_php_simple.png" alt="projects" class="d-block w-100" />
                  <h5 class="card-title mt-3">Booking Table Website (PHP)</h5>
                  <p class="card-text mb-3">Group Project.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="certificate" id="certificate">
      <div class="container mt-4">
        <div class="container-fluid bg-3 mb-3 text-center">
          <h1 class="text-white">Certificate</h1>
          <div id="carouselExampleIndicators" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card mb-3">
                  <img src="assets/img/certificate/mikro_2023.jpg" class="card-img-top" alt="certificate">
                  <div class="card-body">
                    <h5 class="card-title mt-2">2023</h5>
                    <p class="card-text mb-2"> Kelompok Ilmiah Teknik Elektro (MIKRO)
                      “One Step Further, To Compete In Technology”.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card mb-3">
                  <img src="assets/img/certificate/aws_cloud_foundations-copy.jpg" class="card-img-top shadow-sm" alt="certificate">
                  <div class="card-body">
                    <h5 class="card-title mt-2">2024</h5>
                    <p class="card-text mb-2"> AWS Academy Graduate 
                      AWS Academy Cloud Foundations.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card mb-3">
                  <img src="assets/img/certificate/kuliah_tamu_ti.jpg" class="card-img-top shadow-sm" alt="certificate">
                  <div class="card-body">
                    <h5 class="card-title mt-2">2024</h5>
                    <p class="card-text mb-2"> Kuliah Tamu Jurusan Teknologi Informasi
                      “Menuju Era Baru: Mempersiapkan Diri Menjadi 
                     Progammer AI yang Adaptif dan Inovatif”.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card mb-3">
                  <img src="assets/img/certificate/E-Certificate Seminar Nasional.jpg" class="card-img-top" alt="certificate">
                  <div class="card-body">
                    <h5 class="card-title mt-2">2022</h5>
                    <p class="card-text mb-2"> Seminar Nasional Peluang Public Speaking untuk Membangun Bisnis di Era Digital.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card mb-3">
                  <img src="assets/img/certificate/PPC_2023.jpg" class="card-img-top" alt="certificate">
                  <div class="card-body">
                    <h5 class="card-title mt-2">2023</h5>
                    <p class="card-text mb-2"> Panitia PNB Ping Pong Competition.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card mb-3">
                  <img src="assets/img/certificate/pengda_Pong_Cup_8.jpg" class="card-img-top" alt="certificate">
                  <div class="card-body">
                    <h5 class="card-title mt-2">2023</h5>
                    <p class="card-text mb-2"> Panitia Pong Cup Competition #8.</p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <footer class="container-fluid bg-4 text-center" style="padding: 20px 20px">
      <h6>Copyright © 2024 Ari Setiawan</h6>
      <br />
      <h6>Contact Me</h6>
      <a href="https://www.linkedin.com/in/ari-setiawan-7a7a7b309/" target="_blank" style="margin: 0 10px"
        ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
          <path
            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
          /></svg
      ></a>
      <a href="https://mail.google.com/mail/u/0/" target="_blank" style="margin: 0 10px"
        ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path
            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"
          /></svg
      ></a>
      <a href="https://github.com/deari04" target="_blank" style="margin: 0 10px"
        ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path
            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
          /></svg
      ></a>
      <a href="https://www.instagram.com/de_ari.4/" target="_blank" style="margin: 0 10px"
        ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path
            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
          /></svg
      ></a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

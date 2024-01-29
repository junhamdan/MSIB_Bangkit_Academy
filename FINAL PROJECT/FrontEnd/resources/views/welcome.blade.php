<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SentDash</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/logo/logo.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style2.css" rel="stylesheet">

  <!-- =======================================================

  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto ">
        
        <h1><a href="index.html">SentDash</a></h1>

        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Telusuri Analisis Sentimen Kami untuk Wawasan Data yang Mendalam
            </h1>
            <h2>Analisis Respons Emosional Pengguna pada Produk atau Layanan Anda.</h2>
            <a href="#about" class="btn-get-started scrollto">Mulai Cari Tahu</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img " data-aos="fade-left" >
          <img src="/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>Tentang Kami</h3>
              <p class="fst-italic">
                Tim kami dibentuk untuk menggali perasaan dan pendapat masyarakat serta mengoptimalkan pemahaman terhadap sentimen pengguna. Kami berkomitmen memberikan wawasan berharga untuk mendukung pengambilan keputusan cerdas dengan solusi analisis sentimen yang efektif dan berdampak positif.

              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Menyediakan Pemahaman Mendalam Melalui Data </li>
                <li><i class="bi bi-check-circle"></i> Mengidentifikasi Tren Sentimen yang Mendalam </li>
                <li><i class="bi bi-check-circle"></i> Mengintegrasikan Analisis Multisumber </li>
                <li><i class="bi bi-check-circle"></i> Mewujudkan Visi Bersama, Satu Tugas Akhir pada Waktunya</li>
              </ul>
              <p>
                
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-5 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Jelajahi Sentimen Trafik</h4>
                  <p>Menelusuri Dinamika Sentimen Positif dan Negatif di Ruang Digital</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Sentimen Terbuka</h4>
                  <p>Menganalisis Review dan Opini Pengguna di Play Store</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Visualisasi yang Mudah Dimengerti</h4>
                  <p>Grafik Data yang Menyajikan Informasi dengan Lebih Mudah di Dashboard</p>
                </a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="/assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="/assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="/assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="/assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>Kami menggunakan analisis sentimen dari berbagai platform, termasuk YouTube, berita, dan ulasan Play Store, untuk memahami respons pengguna secara menyeluruh
          </p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bi bi-youtube"></i></div>
              <h4 class="title mt-3"><a href="">Youtube</a></h4>
              <p class="description">Kami menganalisis sentimen dari komentar pengguna di platform YouTube untuk memahami respons dan umpan balik pengguna dengan lebih baik.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bi bi-google-play"></i></div>
              <h4 class="title mt-3"><a href="">Playstore</a></h4>
              <p class="description">Sentimen dari review pengguna di Play Store memberikan pandangan mendalam tentang kepuasan dan pengalaman pengguna. Kami terus memperhatikan umpan balik ini untuk terus meningkatkan layanan dan produk.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bi bi-newspaper"></i></div>
              <h4 class="title mt-3"><a href="">News Headline</a></h4>
              <p class="description">Sentimen dari berita utama menjadi sumber wawasan penting bagi kami. Dengan memahami respons publik terhadap berita terkini, kami dapat merancang langkah-langkah yang responsif dan sesuai dengan kebutuhan saat ini.</p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->

   


<!-- ======= TEKNOLOGI Section ======= -->
<section id="clients" class="clients">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Teknologi</h2>
      <p>kami mengutamakan pemanfaatan teknologi terbaru dalam merancang dan membangun project kami, berikut adalah beberapa teknologi yang kami gunakan.</p>
    </div>

    <div class="row" data-aos="zoom-in">
        <div align="center">
                 
         
          <a href="https://www.python.org" target="_blank">
            <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="python" width="60" height="60"></a>
          
            <a href="https://www.tensorflow.org" target="_blank">
              <img src="/assets/img/logo/Tensorflow.png" alt="tensorflow" width="60" height="60">
            </a>
            
            <a href="https://scikit-learn.org/" target="_blank">
              <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Scikit_learn_logo_small.svg" alt="scikit_learn" width="60" height="60">
            </a>

            <a href="https://www.nltk.org/" target="_blank">
              <img src="/assets/img/logo/nltk.png" alt="scikit_learn" width="60" height="60">
            </a>
            <a href="https://keras.io/" target="_blank">
              <img src="/assets/img/logo/keras.png" alt="Laravel" width="120" height="55"></a>

            <br><br>
             
             
            <a href="https://laravel.com/" target="_blank">
              <img src="/assets/img/logo/laravel.svg" alt="Laravel" width="60" height="60"></a>
            <a href="https://getbootstrap.com/" target="_blank">
              <img src="/assets/img/logo/bootstrap.svg" alt="MySQL" width="60" height="60"></a>
          <a href="https://flask.palletsprojects.com/" target="_blank">
            <img src="https://www.vectorlogo.zone/logos/pocoo_flask/pocoo_flask-icon.svg" alt="flask" width="60" height="60">
          </a>        
          <a href="https://firebase.google.com/?gad_source=1&gclid=CjwKCAiApaarBhB7EiwAYiMwqjO6kwtYJWcMV1VMAFhXauex3dRSQ5hsGPs9rdaCzfDjYZaav_7RUxoCeBoQAvD_BwE&gclsrc=aw.ds" target="_blank">
            <img src="/assets/img/logo/firebase.png" alt="hugging_face" width="60" height="60">
          </a>
          <a href="https://www.docker.com/" target="_blank">
            <img src="/assets/img/logo/docker.svg" alt="fast_api" width="60" height="60">
          </a>
          <a href="https://cloud.google.com/" target="_blank">
            <img src="https://seeklogo.com/images/G/google-cloud-logo-ADE788217F-seeklogo.com.png" alt="gcp" width="50" height="40">
          </a>
         
        </p>
      </div>

    </div>
  </div>
</section><!-- End TEKNOLOGI Section -->



<!-- ======= Kolaborasi Section ======= -->
<section id="clients" class="clients section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Kolaborasi</h2>
      <p>Melalui kolaborasi hebat Kampus Merdeka, Bangkit, dan  BrainCore Company dalam proyek ini, kami bersama membangun fondasi keunggulan, mendorong pertumbuhan, dan mengarahkan arus perubahan menuju kesuksesan bersama.</p>
    </div>

    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo" data-aos="zoom-in">
          <img src="/assets/img/clients/logo kampus merdeka indonesia jaya.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
          <img src="/assets/img/clients/MSIB.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
          <img src="/assets/img/clients/bangkit.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
          <img src="/assets/img/clients/braincore.png" class="img-fluid" alt="">
        </div>
      </div>

      </div>

    </div>

  </div>
</section><!-- End Kolaborasi Section -->






   
    
   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team Project</h2>
          <p>Tim ini terdiri dari individu yang berbakat dan berkomitmen, membawa keberagaman ide dan keahlian untuk mencapai tujuan bersama. Setiap orang membawa kontribusi unik, membentuk fondasi solid untuk keberhasilan kolaboratif kami
          </p>
        </div>

        <div class="row justify-content-center">


          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in">
              <div class="pic"><img src="/assets/img/team/tim1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Oriza Sativa Retiar Nalunfiy</h4>
                <span>Machine Learning</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="/assets/img/team/tim2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>M Rakha Adhipratama</h4>
                <span>Machine Learning</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="/assets/img/team/tim3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Setia Mukti <br> Azizah</h4>
                <span>Machine Learning</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="/assets/img/team/tim4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Fajar Syafruddin</h4>
                <span>Machine Learning</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="/assets/img/team/tim5.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Oriza Sativa <br>Retiar Nalunfiy</h4>
                <span>Machine Learning</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          


          <div class="row justify-content-center mb-5" style="margin-top: 4rem;">

            <div class="col-lg-2 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="/assets/img/team/tim6.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Aebil Taskari <br>Rusydi</h4>
                  <span>Cloud Computing</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>


<div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="/assets/img/team/tim7.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 >Jason <br>Kanggara</h4>
                <span>Cloud Computing</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="/assets/img/team/tim8.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Arya Anandya Diphayana</h4>
                <span>Cloud Computing</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="/assets/img/team/tim9.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ryan Bahri &nbsp;Harahap</h4>
                <span>Cloud Computing</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="/assets/img/team/tim10.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Junior Hamdan Nasution</h4>
                
                <span>Cloud Computing</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Team Section -->

 

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
          <div class="container">
    
            <div class="row" data-aos="zoom-in">
              <div class="col-lg-9 text-center text-lg-start">
                <h3>Diskusi Lebih lanjut dengan tim kami</h3>
                
              </div>
              <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Diskusi di Sini</a>
              </div>
            </div>
    
          </div>
        </section><!-- End Cta Section -->

     

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kontak</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Letjen S. Parman No.28</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sentimental@email.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>+1 2345 6789 10</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6591830399225!2d106.78929841413706!3d-6.176359362240449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f65f73d4c9cb%3A0x144ec1e5914e9cc3!2sAPL%20Tower%2C%20RT.3%2FRW.5%2C%20Tj.%20Duren%20Sel.%2C%20Kec.%20Grogol%20petamburan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011470!5e0!3m2!1sid!2sid!4v1640794746998!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Sentimental</h3>
              <p>
                Sentiment Analyst <br>
                Capstone Project by Braincore<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Pintasan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sentiment Analyst</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Berita Terbaru Kami</h4>
            <p>Selalu terkini dengan informasi terbaru kami! Jelajahi berita terkini dan perbaruan terbaru di situs kami.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sentimental</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
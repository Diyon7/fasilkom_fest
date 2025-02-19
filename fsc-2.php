<!DOCTYPE HTML>
<html>

<head>
  <title>FSC 2019</title>
  <meta charset="utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
  <meta name="theme-color" content="#4527a0">
  <link href="img/logo/logo-fsc1.png" rel="shortcut icon">
  <link rel="stylesheet" text="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" text="text/css" href="css/fonts.css">
  <link rel="stylesheet" text="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" text="text/css" href="css/animate.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
  <link rel="stylesheet" text="text/css" href="css/styles.css">
  <link rel="stylesheet" text="text/css" href="css/timeline-fsc.min.css">
  <link rel="stylesheet" text="text/css" href="css/sweet.min.css">
  <link rel="stylesheet" text="text/css" href="css/loader.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/loader.js"></script>
  <script src="js/timeline.min.js"></script>
  <script src="js/styles.fsc.js"></script>
  <script src="js/faq.js"></script>
  <script src="js/sweet.min.js"></script>
  <?php
    include("_include/APIInclude.php");
  ?>
</head>

<body>
  <div class="ff-row" id="body">
    <div class="col s12 ff-layout deep-purple darken-3" id="home">
      <div class="ff-header">
        <!-- Navigation bar content -->
        <!-- Navigation bar for PC -->
        <nav class="ff-navbar deep-purple darken-3 noselect">
          <a data-target="slide-out" class="ff-hamburger sidenav-trigger">
            <i class="fa fa-bars"></i> &nbsp;
            <font class="ff-navbar-tittle">FSC 2019</font>
          </a>
          <div class="nav-wrapper">
            <ul class="ff-navbar-tittle-pc hide-on-med-and-down">
              <li><a onclick="location.reload()"><i><img src="img/logo/logo-fsc1.png"></i>FSC 2019</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a onclick="scrollToElement('#home')">Home</a></li>
              <li><a onclick="scrollToElement('#timeline', true)">Timeline</a></li>
              <li><a onclick="scrollToElement('#about', true)">About</a></li>
              <li><a onclick="scrollToElement('#gift', true)">Prize</a></li>
              <li><a onclick="scrollToElement('#faq', true)">FAQ</a></li>
              <li><a onclick="scrollToElement('#contact', true)">Contact</a></li>
            </ul>
          </div>
        </nav>

        <!-- Navigation bar for Mobile -->
        <ul id="slide-out" class="sidenav noselect">
          <li><div class="user-view">
            <div class="background">
              <div class="ff-doodle deep-purple darken-3"></div>
            </div>
            <a><img class="circle" src="img/logo/logo-fsc1.png"></a>
            <a><span class="white-text name">FSC 2019</span></a>
            <a><span class="white-text email">UPN "Veteran" Jawa Timur</span></a>
          </div></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#home')">Home</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#timeline', true)">Timeline</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#about', true)">About</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#gift', true)">Prize</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#faq', true)">FAQ</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#contact', true)">Contact</a></li>
        </ul>

        <!-- Header content -->
        <div class="container white-text ff-header-content">
          <div class="row ff-row">
            <div class="col s12 l7 right noselect">
              <div class="ff-header-bg">
                <img src="img/header/header-fsc1.png">
              </div>
            </div>
            <div class="col s10 offset-s1 l4 offset-l1">
              <p class="primary center">FSC 2019</p>
              <div class="tagline-event center">
                "TYDAC ADA"
              </div>
              <span class="ff-header-button">
                <div class="countdown">
                  <div class="row">
                    <div class="col s3">
                      <font id="days" class="value">00</font>
                      <font class="desc center">Hari</font>
                    </div>
                    <div class="col s3">
                      <font id="hours" class="value">00</font>
                      <font class="desc center">Jam</font>
                    </div>
                    <div class="col s3">
                      <font id="minutes" class="value">00</font>
                      <font class="desc center">Menit</font>
                    </div>
                    <div class="col s3">
                      <font id="seconds" class="value">00</font>
                      <font class="desc center">Detik</font>
                    </div>
                    <div class="col s12 ff-progress">
                      <div class="ff-progress-layout">
                        <div class="filler pink">
                          <div class="percentage">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <span class="ff-header-button center">
                  <a class="waves-effect btn white akademik" onclick="scrollToElement('#about',true)">SELENGKAPNYA</a>
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 ff-layout secondary white" id="timeline">
      <div class="container" style="width: 100% !important">
        <div class="row ff-row">
          <div class="col s12 ff-event-tittle">
            TIMELINE
          </div>
        </div>
        <div class="row ff-row ff-timeline">
          <div class="col s12">
            <div class="timeline" id="timeline-horizontal">
              <div class="timeline__wrap">
                <div class="timeline__items">
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>1 Oktober 2019</h2>
                      <p>Pembukaan pendaftaran FSC</p>
                    </div>
                  </div>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>1 Oktober 2019 - 15 Oktober 2019</h2>
                      <p>Penutupan pendaftaran FSC</p>
                    </div>
                  </div>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>28 Oktober 2019 - 31 Oktober 2019</h2>
                      <p>Babak penyisihan FSC</p>
                    </div>
                  </div>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>1 November 2019</h2>
                      <p>Babak Final dan pengumuman juara FSC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 ff-layout secondary pink" id="about">
      <div class="container" style="width: 100% !important">
        <br>
        <div class="row ff-row">
          <div class="col s12 m3 ff-about-icon right">
            <div class="col s12 m8">
              <i class="fa fa-quote-left"></i>
            </div>
          </div>
          <div class="col s12 m8 offset-m1">
            <p class="ff-about-desc">
              <b>FSC</b> atau <b>Fasilkom Sport Competition</b> merupakan serangkaian kegiatan
              <b>FASILKOM FEST 2019</b> yang ditujukan bagi pelajar SMA / SMK / MA / MAK sederajat dan
              mahasiswa FASILKOM UPN "VETERAN" Jawa Timur sendiri dengan beberapa lomba seperti
              Lomba Futsal dan Lomba Mobile Legends.
            </p>
          </div>
        </div>
        <br>
      </div>
    </div>

    <div class="col s12 ff-layout secondary white" id="gift">
      <div class="container" style="width: 100% !important">
        <div class="row ff-row">
          <div class="col s12 ff-event-tittle" style="font-size: 25px">
            KATEGORI LOMBA
          </div>
        </div>
        <div class="row ff-row" style="margin: 60px 0px 0px 0px !important">
          <div class="col l4 s12">
            <div class="ff-gift pink">
              <a class="fa"></a>
              <p class="primary">FUTSAL PUTRA</p>
              <ul style="color: white;">
                  <li>• Setiap angkatan wajib</li>
                  <li>2 tim</li>
                  <li>• Setiap tim berisi 12 orang</li>
                  <li>(5 orang, 5 cadangan</li>
                  <li>, 2 official)</li>
                </ul>
              <div class="gift-list">
                <ul>
                  <li>PENDAFTARAN</li>
                  <li>• Rp 250.000 / Tim</li>
                  <li>LOKASI</li>
                  <li>• GSG Giri Loka</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col l4 s12 center">
            <div class="ff-gift deep-purple">
              <a class="fa"></a>
              <p class="primary">FUTSAL PUTRI</p>
              <ul style="color: white;">
                  <li>• Setiap angkatan wajib</li>
                  <li>1 tim</li>
                  <li>• Setiap tim berisi 12 orang</li>
                  <li>(5 orang, 5 cadangan</li>
                  <li>, 2 official)</li>
                </ul>
              <div class="gift-list">
                <ul>
                  <li>PENDAFTARAN</li>
                  <li>• Rp 200.000 / Tim</li>
                  <li>LOKASI</li>
                  <li>• GSG Giri Loka</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col l4 s12 center">
            <div class="ff-gift cyan">
              <a class="fa"></a>
              <p class="primary">TARIK TAMBANG</p>
              <ul style="color: white;">
                  <li>• Setiap angkatan wajib</li>
                  <li>1 tim</li>
                  <li>• Setiap tim berisi 10 orang</li>
                  <li>(5 orang putra, 5 orang putri)</li>
                  <br>
                </ul>
              <div class="gift-list">
                <ul>
                  <li>PENDAFTARAN</li>
                  <li>• Rp 25.000 / Tim</li>
                  <li>LOKASI</li>
                  <li>• Halaman Gedung FIK</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col l4 s12 center">
            <div class="ff-gift grey">
              <a class="fa"></a>
              <p class="primary">BASKET 3 ON 3</p>
              <ul style="color: white;">
                  <li>• Setiap angkatan wajib</li>
                  <li>minimal 2 tim</li>
                  <li>• Setiap tim terdiri 4 pemain</li>
                  <li>(2 putra, 1 putri,</li>
                  <li>1 cadangan)</li>
                </ul>
                <div class="gift-list">
                <ul>
                  <li>PENDAFTARAN</li>
                  <li>• Rp 120.000 / Tim</li>
                  <li>LOKASI</li>
                  <li>• GSG Giri Loka</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col l4 s12 center">
            <div class="ff-gift green">
              <a class="fa"></a>
              <p class="primary">MOBILE LEGENDS</p>
              <ul style="color: white;">
                  <li>• Setiap angkatan wajib</li>
                  <li>minimal 2 tim</li>
                  <li>• Setiap tim beranggotakan 6 orang</li>
                  <li>(5 pemain, 1 cadangan)</li>
                </ul>
                <div class="gift-list">
                <ul>
                  <li>PENDAFTARAN</li>
                  <li>• Rp 75.000 / Tim</li>
                  <li>LOKASI</li>
                  <li>• Gedung FIK</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col l4 s12 center">
            <div class="ff-gift black">
              <a class="fa"></a>
              <p class="primary">PUBG MOBILE</p>
              <ul style="color: white;">
                  <li>• Tersedia 25 slot dan</li>
                  <li>setiap angkatan minimal</li>
                  <li>2 tim</li>
                  <li>• Setiap tim beranggotakan 4 orang</li>
                </ul>
                <div class="gift-list">
                <ul>
                  <li>PENDAFTARAN</li>
                  <li>• Rp 75.000 / Tim</li>
                  <li>LOKASI</li>
                  <li>• Gedung FIK</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col 10 s12 center">
            <div class="ff-gift teal">
              <a class="fa"></a>
              <p class="primary">PES</p>
                <div class="gift-list">
                <ul>
                  <li>PENDAFTARAN</li>
                  <li>• Rp 20.000 / Tim</li>
                  <li>LOKASI</li>
                  <li>• Gedung FIK</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 ff-layout secondary pink" id="faq">
      <div class="container">
        <div class="row ff-row">
          <div class="col s12 ff-event-tittle white-text">
            FREQUENTLY ASKED QUESTION
          </div>
        </div>
        <br>
        <div class="row ff-row">
          <div class="col s12" id="faq-content">
          </div>
        </div>
        <br><br>
      </div>
    </div>

    <div class="col s12 ff-layout secondary deep-purple darken-3" id="contact">
      <?php
        include("_include/contact.php");
      ?>
    </div>

    <div class="col s12 ff-layout secondary deep-purple darken-4" id="footer">
      <?php
        include("_include/footer.php");
      ?>
    </div>

  </div>

  <?php
    include("_include/loader.php");
  ?>

  <script>
        timeline(document.querySelectorAll('#timeline-horizontal'), {
            forceVerticalMode: 800,
            mode: 'horizontal',
            visibleItems: 4
        });
    </script>

</body>

</html>

<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login1.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foundation Forge</title>
    <link rel="shorcut icon" type="image" href="./IMG/Logo.png" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- LINK FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <head>
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      />
    </head>
    <!-- LINK FONT -->

    <!-- CDNJS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.8/swiper-bundle.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script> -->
    <!-- CDNJS -->

    <!-- STYLE CSS -->
    <!-- <link rel="stylesheet" href="../res/css/default.css"> -->
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="all.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"> -->
    <!-- STYLE CSS -->

    <!-- FOOTER -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> -->
    <!-- FOOTER -->

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        $("img").click(function () {
          $(this).animate({ left: "+=200px" });
        });
      });
    </script>
    <!--JQUERY-->

    <!--bootsrap-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <main>
      <div class="big-wrapper light">
        <!-- Awal Navigation Bar -->
        <header>
          <div class="container">
            <div class="logo">
              <a href="./Index.php"
                ><img src="./IMG/logo hijau.png" alt="Logo"
              /></a>
            </div>
            <div class="navbar">
              <ul>
                <li><a href="#class" class="link">Kelas</a></li>
                <li><a href="#services" class="link">Servis</a></li>
                <li><a href="#achievement" class="link">Penghargaan</a></li>
                <li><a href="#review" class="link">AKM</a></li>
              </ul>
            </div>

            <!--<div class="icons">
            <li><a href="#"><i class="fas fa-user" aria-hidden="true"></i></a></li>
            </div>-->

            <div class="overlay"></div>
            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
          <div class="tombol">
            <button class="toggle-btn"></button>
          </div>
        </header>
        <!-- Akhir Navigation Bar -->

        <!-- Awal Jumbotron -->
        <div class="jumbotron">
          <div class="container">
            <div class="left">
              <h1 data-aos="zoom-in-up">
                Elevate Minds<br />With
                <span>Foundation Forge</span>
              </h1>
              <p data-aos="zoom-in-up" class="par">
                Your journey to knowledge excellence begins here
              </p>
              <br />
              <div data-aos="fade-down">
                  <a href="login1.php" target="blank"><button type="submit">Add Your Project</button></a>
              </div>
            </div>
            <div data-aos="zoom-out-left">
            <div class="right">
              <img src="./IMG/header.png" />
            </div>
            </div>
          </div>
        </div>
        <!-- Akhir Jumbotron -->

        <!--coba coba-->
        <div data-aos="slide-up" class="judulproduct" id="class">
          <div class="container">
            <h1>Kelas</h1>
          </div>
        </div>
        <div data-aos="zoom-in-up" class="product">
          <div class="ag-format-container">
            <div class="ag-courses_box">
              <div class="ag-courses_item" , id="py">
                <a href="login2.php" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>
                  <div class="ag-courses-item_title">Python</div>
                  <div class="ag-courses-item_date-box">
                    Price:
                    <span class="ag-courses-item_date"> $45 </span>
                  </div>
                </a>
              </div>

              <div class="ag-courses_item" id="dz">
                <a href="login2.php" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">Data Visualization</div>

                  <div class="ag-courses-item_date-box">
                    Price:
                    <span class="ag-courses-item_date"> $50 </span>
                  </div>
                </a>
              </div>

              <div class="ag-courses_item" id="ml">
                <a href="login2.php" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">Machine Learning</div>

                  <div class="ag-courses-item_date-box">
                    Price:
                    <span class="ag-courses-item_date"> $70 </span>
                  </div>
                </a>
              </div>

              <div class="ag-courses_item" id="cv">
                <a href="login2.php" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">Computer Vision</div>

                  <div class="ag-courses-item_date-box">
                    Price:
                    <span class="ag-courses-item_date"> $50 </span>
                  </div>
                </a>
              </div>

              <div class="ag-courses_item" id="sql">
                <a href="login2.php" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">SQL</div>

                  <div class="ag-courses-item_date-box">
                    Price:
                    <span class="ag-courses-item_date"> $43 </span>
                  </div>
                </a>
              </div>

              <div class="ag-courses_item" id="dl">
                <a href="login2.php" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">Deep Learning</div>
                  <div class="ag-courses-item_date-box">
                    Price:
                    <span class="ag-courses-item_date"> $40 </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--coba coba-->

        <!--coba-coba versi yg Kenapa FF?-->
        <div data-aos="fade-right" id="services">
        <div class="container1">
          <h1>TenangAja Ada Foundation Forge</h1>
          <div class="box1">
            <ion-icon name="book-outline" class="icon"></ion-icon>
            <h2>Lebih Paham Materi</h2>
            <p>
              Paham materi belajar lebih seru Video belajar animasi dijamin buat
              belajarmu jadi menyenangkan, dilengkapi dengan Rangkuman,
              Infografis, Flash card, dan Kuis supaya belajarmu makin efektif.
            </p>
          </div>
          <div class="box1">
            <ion-icon name="document-outline" class="icon"></ion-icon>
            <h2>Persiapan Ujian</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est
              assumenda beatae sint sapiente suscipit, aperiam maiores
              repellendus odit, magnam id nam accusamus, quas consectetur modi
              nisi temporibus sunt optio dolore.
            </p>
          </div>
          <div class="box1">
            <ion-icon name="people-outline" class="icon"></ion-icon>
            <h2>Belajar dengan Teacher</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit
              sint saepe quod eos quia beatae incidunt nemo perferendis
              cupiditate aspernatur aut consequatur pariatur quidem impedit,
              soluta fuga, amet accusamus aliquid?
            </p>
          </div>
        </div>
        </div>
        <!--batas coba coba versi Kenapa FF?-->

        <!-- Awal Counter-Up -->
        <div data-aos="slide-up" class="judulcounter-up" id="achievement">
          <div class="container">
            <h1>Penghargaan</h1>
          </div>
        </div>

        <div data-aos="slide-up" class="counter-up">
          <div class="container">
            <div class="middle">
              <div class="counting-sec">
                <div class="inner-width">
                  <div class="col">
                    <lord-icon
                      src="https://cdn.lordicon.com/lenjvibx.json"
                      trigger="loop"
                      stroke="light"
                      colors="primary:#3a4d39,secondary:#739072"
                      style="width: 110px; height: 110px"
                    >
                    </lord-icon>
                    <!-- <i class="fas fa-book-open"></i> -->
                    <div class="num">20.000+</div>
                    Konten Belajar
                  </div>

                  <div class="col">
                    <lord-icon
                      src="https://cdn.lordicon.com/bgebyztw.json"
                      trigger="loop"
                      stroke="light"
                      colors="primary:#3a4d39,secondary:#739072"
                      style="width: 110px; height: 110px"
                    >
                    </lord-icon>
                    <div class="num">88</div>
                    Mentor
                  </div>

                  <div class="col">
                    <lord-icon
                      src="https://cdn.lordicon.com/xzalkbkz.json"
                      trigger="loop"
                      stroke="light"
                      colors="primary:#3a4d39,secondary:#739072"
                      style="width: 110px; height: 110px"
                    ></lord-icon>
                    <div class="num">1 Juta</div>
                    Students
                  </div>

                  <div class="col">
                    <lord-icon
                      src="https://cdn.lordicon.com/iiuaqmnt.json"
                      trigger="loop"
                      stroke="light"
                      colors="primary:#3a4d39,secondary:#739072"
                      style="width: 110px; height: 110px"
                    >
                    </lord-icon>
                    <div class="num">30</div>
                    Partner
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Counter-up -->

        <!-- Awal Review -->
        <div data-aos="slide-up" class="judulreview" id="review">
          <div class="container">
            <h1>Apa Kata Mereka?</h1>
          </div>
        </div>
        <section data-aos="fade-up">
          <div class="display">
            <figure class="snip1157">
              <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aut accusamus obcaecati eveniet voluptatem maiores ex, quas recusandae harum ullam odio sequi sapiente ad soluta! Animi nostrum officia laboriosam similique!
                <div class="arrow"></div>
              </blockquote>
              <img src="IMG/Foto Bangkit.jpeg" alt="sq-sample3" />
              <div class="author">
                <h5>Sahara Bangkit <span> sabang.co</span></h5>
              </div>
            </figure>
          </div>

          <div class="display">
            <figure class="snip1157 hover">
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas pariatur vitae beatae a explicabo porro accusantium similique mollitia exercitationem facere rerum ducimus repellat in hic, id odit minus perferendis non.
                <div class="arrow"></div>
              </blockquote>
              <img src="./IMG/Foto Robin.jpeg" alt="sq-sample27" />
              <div class="author">
                <h5>Robin Paulus<br><span>DARPvinci</span></h5>
              </div>
            </figure>
          </div>

          <div class="display">
            <figure class="snip1157">
              <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quasi voluptas unde facilis, recusandae nulla quia laboriosam officiis dicta nihil, iure commodi neque culpa! Consequatur corrupti voluptatibus eaque earum nihil.
                <div class="arrow"></div>
              </blockquote>
              <img src="./IMG/Foto Habib.jpeg" alt="sq-sample17" />
              <div class="author">
                <h5>Muhammad Habib<span> Snackku</span></h5>
              </div>
            </figure>
          </div>
        </section>

        <!-- REVIEW -->

        <!-- My Profile -->
        <div data-aos="fade-right">
        <section id="hero" id="#home">
        <div class="hero-left">
        <h3 class="pre-title">The CEO is</h3>
            <h1 class="hero-name">Fedhilla <span>Fieldhathama</span></h1>
            <p>
              Statistics Student at Diponegoro University | Assistant Lecturer
              at Calculus 1 | Staff of Education and Research Division at
              Himpunan Mahasiswa Statistika 2023 | Machine Learning and Data
              Enthusiast
            </p>
            <br/>
            <h3><a href="https://fedhilla.github.io" style="color:#3a4d39" class="my-profile"><i class="fas fa-user" aria-hidden="true"></i>   Check My Profile</a><h3>
            <ul class="social">
                <a href="https://www.instagram.com/fedhilla07/" target="_blank"
                  ><i class="fab fa-instagram" aria-hidden="true"></i
                ></a>
                <a href="https://www.github.com/fedhilla/" target="_blank"
                  ><i class="fab fa-github" aria-hidden="true"></i
                ></a>
                <a href="https://www.linkedin.com/in/fedhilla-fieldhathama"
                  ><i class="fab fa-linkedin" aria-hidden="true"></i
                ></a>
            </ul>
        </div>
          <div class="hero-right"><img src="./IMG/foto2.png" alt="my picture" /></div>
      </section>
    </div> 
        <!-- My Profile -->

        <!-- Awal Partner -->
        <div class="judulpartner">
          <div class="container">
            <h1>Our Partners</h1>
          </div>
        </div>

        <div class="partner">
          <div class="container">
            <div class="item">
              <a href="#"><img src="./IMG/zenius.jpg" alt="" /></a>
            </div>
            <div class="item">
              <a href="#"><img src="./IMG/pahamify.png" alt="" /></a>
            </div>
            <div class="item">
              <a href="#"><img src="./IMG/kaggle.png" alt="" /></a>
            </div>
            <div class="item">
              <a href="#"><img src="./IMG/google.jpg" alt="" /></a>
            </div>
          </div>
        </div>
        <!-- Akhir Partner -->

        <!--My Profile-->
        <div class="profl"></div>
        <!--Akhir My Profle-->

        <!--Footer-->
        <footer>
          <div class="container">
            <div class="sec aboutus">
              <div class="logo">
                <a href="./index.html"
                  ><img src="./IMG/logo putih.png" alt="Logo"
                /></a>
              </div>
              <p>
                Perusahaan jadi-jadian ini dibuat untuk memenuhi tugas mata
                kuliah Sistem Informasi Manajemen yang mana pada tugas akhir ini
                membuat website individu. Pada website ini saya mengambil konsep
                mengenai website bimbingan belajar yang mewadahi teman-teman
                untuk belajar mengenai Data Science.
              </p>
              <p>-Fedhilla Fieldhathama-</p>

              <ul class="sci">
                <li>
                  <a
                    href="https://www.instagram.com/fedhilla07/"
                    target="_blank"
                    ><i class="fab fa-instagram" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="https://www.x.com/fedhhh/" target="_blank"
                    ><i class="fab fa-twitter" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/fedhilla-fieldhathama"
                    ><i class="fab fa-linkedin" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </div>

            <div class="sec kelas">
              <h2>Kelas</h2>
              <ul>
                <li><a href="#class">Python</a></li>
                <li><a href="#class">Machine Learning</a></li>
                <li><a href="#class">Data Visualization</a></li>
                <li><a href="#class">Computer Vision</a></li>
                <li><a href="#class">Deep Learning</a></li>
                <li><a href="#class">SQL</a></li>
              </ul>
            </div>
          </div>
        </footer>

        <div class="copyrightText">
          <p>Copyright © 2023 Foundation Forge. All Rights Reserved.</p>
        </div>
        <!-- <div class="test">
          <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque excepturi magnam quisquam consequatur sequi adipisci neque. Officia natus voluptatibus dolorem repudiandae aspernatur sapiente quam possimus beatae placeat quibusdam ad ducimus distinctio molestias esse tempora magnam, dicta atque laudantium velit odit eos. Quaerat, neque? Rem ratione expedita non molestias aperiam. Minus?</p>
          </div>
        </div> -->
      </div>
    </main>
    <!--ionicon-->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- Lord Icon -->
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>

    <!-- SCRIPT JS -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="../JS/script.js"></script>
    <!-- SCRIPT JS -->

    <!-- ICON -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- ICON -->
  </body>
</html>

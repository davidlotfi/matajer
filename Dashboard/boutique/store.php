<?php
  require_once('../func/database.php');
  require_once('../controller/view.php');

  $reponse=$dbd->prepare('SELECT * FROM product WHERE id=?');
  $reponse->execute(array($_GET['dd']));
  $donnes=$reponse->fetch();

  session_start(); // Start the session
  // Check if the page view counter session variable exists
  if(isset($_SESSION['page_views'])) {
      // Increment the page view counter
      $_SESSION['page_views']++;
  } else {
      // Set the initial page view counter to 1
      $_SESSION['page_views'] = 1;
  }
  // Display the page view count
  //echo "Page Views: " . $_SESSION['page_views'];
  $view = $_SESSION['page_views'];
  up_view($view);
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Loading page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../images/store-logo-icon.png" rel="icon">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <!-- nta3 slider -->
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<style media="screen">
  .swiper-slide img{
      height: 400px;
  }
  .inputlg{
    height: 50px;
  }
</style>
<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center">
        <strong style="font-size:20px;"> 🚀 مرحبا بكم في متجرك </strong>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Habbidou<span>.</span>com</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../images/<?php echo $donnes['image']; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../images/puzzle.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../images/puzzle.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
                <h3 class=""><?php echo $donnes['name']; ?></h3>
                <div class="d-flex text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                </div>
               <h3 class="text-primary"><?php echo $donnes['prix']; ?> DA <span class="text-secondary text-decoration-line-through">3000 DA</span></h3>
              <div class="card border-warning">
                <div class="card-body text-info">
                  <!-- No Labels Form -->
                  <form class="row g-3" action="../controller/command_post.php" method="post">
                    <div class="col-md-6">
                      <input class="d-none" type="text" name="_id" value="<?php echo $donnes['id']; ?>">
                      <input type="text" class="form-control inputlg" name="_nom" placeholder="Nom" required>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control inputlg" name="_prenom" placeholder="Prenom" required>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="form-control inputlg" name="_telephone" placeholder="Numéro de telephone" required>
                    </div>
                    <div class="col-md-6">
                      <select  class="form-select inputlg" name="_willaya">
                        <option disabled selected>-- willaya --</option>
                        <option value="ADRAR - 01">ADRAR - 01</option>
                        <option value="CHLEF - 02">CHLEF - 02</option>
                        <option value="LAGHOUAT - 03">LAGHOUAT - 03</option>
                        <option value="OUM-EL-BOUAGHI - 04">OUM-EL-BOUAGHI - 04</option>
                        <option value="BATNA - 05">BATNA - 05</option>
                        <option value="BEJAIA - 06">BEJAIA - 06</option>
                        <option value="BISKRA - 07">BISKRA - 07</option>
                        <option value="BECHAR - 08">BECHAR - 08</option>
                        <option value="BLIDA - 09">BLIDA - 09</option>
                        <option value="BOUIRA - 10">BOUIRA - 10</option>
                        <option value="TAMANRASSET - 11">TAMANRASSET - 11</option>
                        <option value="TEBESSA - 12">TEBESSA - 12</option>
                        <option value="TLEMCEN - 13">TLEMCEN - 13</option>
                        <option value="TIARET - 14">TIARET - 14</option>
                        <option value="TIZI-OUZOU - 15">TIZI-OUZOU - 15</option>
                        <option value="ALGER - 16">ALGER - 16</option>
                        <option value="DJELFA - 17">DJELFA - 17</option>
                        <option value="JIJEL - 18">JIJEL - 18</option>
                        <option value="SETIF - 19">SETIF - 19</option>
                        <option value="SAIDA - 20">SAIDA - 20</option>
                        <option value="SKIKDA - 21">SKIKDA - 21</option>
                        <option value="SSIDI-BEL-ABBES - 22">SSIDI-BEL-ABBES - 22</option>
                        <option value="ANNABA - 23">ANNABA - 23</option>
                        <option value="GUELMA - 24">GUELMA - 24</option>
                        <option value="CONSTANTINE - 25">CONSTANTINE - 25</option>
                        <option value="MEDEA - 26">MEDEA - 26</option>
                        <option value="MOSTAGANEM - 27">MOSTAGANEM - 27</option>
                        <option value="M-SILA - 28">M-SILA - 28</option>
                        <option value="MASCARA - 29">MASCARA - 29</option>
                        <option value="OUARGLA - 30">OUARGLA - 30</option>
                        <option value="ORAN - 31">ORAN - 31</option>
                        <option value="L-BAYADH - 32">L-BAYADH - 32</option>
                        <option value="ILLIZI - 33">ILLIZI - 33</option>
                        <option value="BORDJ-BOU-ARRERIDJ - 34">BORDJ-BOU-ARRERIDJ - 34</option>
                        <option value="BOUMERDES - 35">BOUMERDES - 35</option>
                        <option value="EL-TARF - 36">EL-TARF - 36</option>
                        <option value="TINDOUF - 37">TINDOUF - 37</option>
                        <option value="TISSEMSILT - 38">TISSEMSILT - 38</option>
                        <option value="EL-OUED - 39">EL-OUED - 39</option>
                        <option value="KHENCHELA -  40">KHENCHELA -  40</option>
                        <option value="SOUK-AHRAS - 41">SOUK-AHRAS - 41</option>
                        <option value="TIPAZA - 42">TIPAZA - 42</option>
                        <option value="MILA - 43">MILA - 43</option>
                        <option value="AIN-DEFLA -  44">AIN-DEFLA -  44</option>
                        <option value="NAAMA - 45">NAAMA - 45</option>
                        <option value="AIN-TEMOUCHENT - 46">AIN-TEMOUCHENT - 46</option>
                        <option value="GHARDAIA - 47">GHARDAIA - 47</option>
                        <option value="GHELIZANE - 48">GHELIZANE - 48</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control inputlg" name="_address" placeholder="City">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="commit" class="btn btn-warning btn-block">Achat Now</button>
                    </div>
                  </form><!-- End No Labels Form -->
                </div>
              </div>
          </div>
        </div>

        <!-- Description produit  -->
        <div class="col-lg-6 portfolio-description">
          <h2>Image and description prodect</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. enim cum deserunt eius.
          </p>
          <img src="images/1.jpeg" alt="">
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Habbidou.com</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Boukernine abdellatif</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>

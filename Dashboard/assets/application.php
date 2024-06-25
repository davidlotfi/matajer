<?php
   require_once('func/database.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Application</title>
  </head>

<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>

  <main id="main" class="main">
    <section class="section dashboard">
        <div class="col-lg-12">
          <div class="row">
              <h5 class="card-title">Application:</h5>

                      <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                          <div class="card-body">
                            <h5 class="card-title">Facebook Pixel</h5>
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img src="images/meta.png" alt="">
                              </div>
                              <div class="ps-5">
                                <button class="btn btn-primary" type="button" name="button">Ajouter</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Sales Card -->

                      <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                          <div class="card-body">
                            <h5 class="card-title">Google sheets</h5>
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img src="images/sheets.png" alt="">
                              </div>
                              <div class="ps-5">
                                <button class="btn btn-primary" type="button" name="button">Ajouter</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Sales Card -->

                      <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                          <div class="card-body">
                            <h5 class="card-title">Snapchat Pixel</h5>
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <img src="images/snapp.png" alt="">
                              </div>
                              <div class="ps-5">
                                <button class="btn btn-primary" type="button" name="button">Ajouter</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Sales Card -->






          </div>
        </div><!-- End Left side columns -->
    </section>
  </main><!-- End #main -->

  <?php  include('include/footer.php'); ?>

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
    <title>Commandes</title>
  </head>
<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Commandes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                  <h5 class="card-title">les commandes </h5>
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Date</th>
                        <th scope="col">Willaya</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantite</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td>Brahim bob</td>
                        <td class="text-primary fw-bold">0698204123</td>
                        <td>15 min</td>
                        <td>Oum el bouaghi</td>
                        <td>1500 DA</td>
                        <td class="fw-bold">1</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td>Salim bouk</td>
                        <td class="text-primary fw-bold">0660908378</td>
                        <td>1 hours</td>
                        <td>Alger</td>
                        <td>2900 DA</td>
                        <td class="fw-bold">10</td>
                        <td>
                           <span class="badge bg-warning">Pending</span> ou
                           <span class="badge bg-danger">Rejected</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <?php  include('include/footer.php'); ?>

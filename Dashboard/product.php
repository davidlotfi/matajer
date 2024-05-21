<?php
   require_once('func/database.php');
   $reponse=$dbd->query('select * from product ORDER BY id DESC');
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
    <title>Product</title>
  </head>
  <style media="screen">
  .instacart_com{
    border: none;
    margin: 0px 0px 0px 0px;
    cursor: pointer;
    user-select: none;
    touch-action: manipulation;
    position: relative;
    background-color: rgb(10, 173, 10);
    color: rgb(255, 255, 255);
    border-radius: 6px;
    height: 48px;
    padding: 14px;
    width: auto;
   }
   .instacart_com:hover{
     background-color: #38b832;
   }
   label{
    color: #c61c6f;
   }
   .text-success {
    color: #28a745!important;
    }
    .dashboard .top-selling img {
        border-radius: 5px;
        max-width: 70px;
    }
  </style>
<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>

  <main id="main" class="main">
    <section class="section dashboard">
      <button class="instacart_com" data-bs-toggle="modal" data-bs-target="#ExtralargeModal" type="button"><i class="bi bi-images me-1"></i> Add Product</button>
      <br><br>
        <div class="col-lg-12">
          <div class="row">
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Top Selling:</h5>
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qt</th>
                        <th scope="col">Case</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($donnes=$reponse->fetch()) { ?>
                      <tr>
                        <th scope="row"><a href="#"><img class="d-size" src="images/<?php echo $donnes['image'];?>" alt="" style="height:70px; width:70px;"></a></th>
                        <td><a href="#" class="text-primary fw-bold"><?php echo $donnes['name']; ?></a></td>
                        <td class="text-success fw-bold"><?php echo $donnes['prix']; ?> DA</td>
                        <td class="fw-bold"><?php echo $donnes['Qt']; ?></td>
                        <td>
                        <div class="form-check form-switch">
                           <input class="form-check-input"  type="checkbox" name="" checked>
                        </div>
                        </td>
                        <td><i class="bi bi-arrow-up-right-square" style="font-size:25px;"></i></td>
                        <td>
                          <a href="update.php?IDD=<?php echo $donnes['id']; ?>"> <button type="button" class="btn btn-secondary" name="button" style="font-size:12px;"><i class="bi bi-pen"></i></button></a>
                        </td>
                      </tr>
                    <?php  } $reponse->closeCursor(); ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div><!-- End Top Selling -->
          </div>
        </div><!-- End Left side columns -->
    </section>
  </main><!-- End #main -->

  <!-- add Produit modal -->
  <?php  include('include/addProduct.php'); ?>

  <?php  include('include/footer.php'); ?>

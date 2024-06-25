<?php
   require_once('func/database.php');

   $reponse=$dbd->prepare('SELECT * FROM product WHERE id=?');
   $reponse->execute(array($_GET['IDD']));
   $donnes2=$reponse->fetch();
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
  .dashboard .top-selling img {
      border-radius: 5px;
      max-width: none;
  }
  </style>
<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>


  <main id="main" class="main">

    <section class="section dashboard">
      <form class="" action="controller\addProduct.php" method="post">
        <div class="col-lg-12">
              <div class="card top-selling overflow-auto pb-4">
                <div class="card-body pb-0">
                    <h5 class="card-title">Detail of Product:</h5>
                    <div class="row">
                      <div class="col-lg-9">
                        <input class="d-none" type="text" name="_id" value="<?php echo $donnes2['id']; ?>" style="">
                        <div class="form-group mb-3">
                          <label for="" class="col-sm-2 control-label">Name :</label>
                          <input type="text" class="form-control p-2 mt-2" placeholder="description" name="name" value="<?php echo $donnes2['name']; ?>" required>
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Prix :</label>
                          <div class="input-group ">
                            <input type="number" name="price" class="form-control" value="<?php echo $donnes2['prix']; ?>" placeholder="" required>
                            <span class="input-group-text">DA</span>
                         </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Quantité :</label>
                          <div class="input-group ">
                            <input type="number" name="qt" class="form-control" value="<?php echo $donnes2['Qt']; ?>" placeholder="" required>
                            <span class="input-group-text">QT</span>
                         </div>
                        </div>
                        <label for="">Detail :</label>
                        <textarea name="_detail" class="form-control mt-2" rows="3" cols="80"></textarea>
                      </div>
                      <div class="col-lg-3">
                        <div class="card"  style="border: 1px solid #777;">
                          <img class="card-img-top" id="1" src="images/<?php echo $donnes2['image']; ?>" alt="Card image cap" style="height:130px">
                          <div class="card-body">
                             <h6 class="card-title text-success">1000 DA</h6>
                             <p class="card-text">Paper Puzzle Toy Educational Developmental Baby Kids.</p>
                          </div>
                       </div>
                      </div>
                    </div><br>
                    <button class="btn btn-primary" type="submit" name="commitEnregister"><i class="bi bi-check-lg"></i> Save</button>
                    <button class="btn btn-danger" type="button" name="button" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash"></i> Delete</button>
                </div>
              </div>
        </div><!-- End Left side columns -->
    </section>
  </main><!-- End #main -->

  <!-- supp Produit modal -->
    <div class="modal fade" id="basicModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
               </svg>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Really do you want delete the product?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Non</button>
            <button type="submit" class="btn btn-outline-success" name="commitSupprimer"><i class="bi bi-check-lg"></i> Yes</button>
          </div>
        </div>
      </div>
    </div><!-- End supp Produit Modal-->
  </form>

  <?php  include('include/footer.php'); ?>

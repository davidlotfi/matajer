<?php
   require_once('func/database.php');
   $reponse=$dbd->query('select * from commande ORDER BY id DESC');
   function get_image($id){
     global $dbd;
     $reponse2=$dbd->prepare('select image from product WHERE id=?');
     $reponse2->execute(array($id));
     return $reponse2->fetch();
   }
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
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Commandes</title>
  </head>

<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Commandes</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                  <h5 class="card-title">Orders </h5>
                  <table class="table table-borderless datatable">
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
                      <?php while ($orders=$reponse->fetch()){
                        $id=$orders['id_product'];
                        $image=get_image($id);
                        ?>
                      <tr>
                        <th scope="row"><a href="#"><img src="images/<?php echo $image['image'];?>" alt=""></a></th>
                        <td><span class=""><?php echo $orders['client_name']; ?> <?php echo $orders['client_prenom']; ?></span></td>
                        <td><span class="text-primary fw-bold"><?php echo $orders['telephone']; ?></span></td>
                        <td><span class="text-success fw-bold">15 min</span></td>
                        <td><span class="text-secondary fw-bold"><?php echo $orders['willaya']; ?></span></td>
                        <td><span class="text-primary fw-bold"><?php echo $orders['prix']; ?> DA</span></td>
                        <td class="fw-bold"><?php echo $orders['quantite']; ?></td>
                        <td>
                           <span class="badge bg-success">Approved</span>
                        </td>
                      </tr>
                     <?php } $reponse->closeCursor(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <?php  include('include/footer.php'); ?>

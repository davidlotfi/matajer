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
    <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
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
    .btn{
      font-weight: 500;
    }
    .progressbar{
      margin-left:40%;
     }
  </style>
<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>

  <main id="main" class="main">
    <section class="section dashboard">
      <button class="instacart_com" data-bs-toggle="modal" data-bs-target="#ExtralargeModal" type="button"><i class="bi bi-plus-square me-1"></i> Add Product</button>
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
                        <td><a href="boutique/store.php?dd=<?php echo urlencode($donnes['id']); ?>" target="_blank"><i class="bi bi-arrow-up-right-square" style="font-size:25px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Landing Page"></i></a></td>
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

  <form class="" action="controller/addProduct.php" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="progressbar">
              <div class="progress mt-3" style="height:10px; width:150px;">
                   <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
          <div class="modal-body">
            <div class="step d-none">
            <input type="file" name="1" onchange="document.getElementById('1').src = window.URL.createObjectURL(this.files[0])" required/>
            <br><br>
            <div class="row">
              <div class="col-lg-9">
                <div class="form-group mb-3">
                  <label for="" class="col-sm-2 control-label">Description :</label>
                  <input type="text" class="form-control p-2 mt-2" placeholder="titre de Product" name="_name" value="" required>
                </div>
                <div class="form-group mb-3">
                  <label for="">Prix actuel :</label>
                  <div class="input-group ">
                    <input type="number" name="_price" class="form-control" value="" placeholder="1000" required>
                    <span class="input-group-text">DA</span>
                 </div>
                </div>
                <div class="form-group mb-3">
                  <label for="">Ancien Prix :</label>
                  <div class="input-group ">
                    <input type="number" name="_" class="form-control text-decoration-line-through" value="" placeholder="1000" required>
                    <span class="input-group-text text-decoration-line-through">DA</span>
                 </div>
                </div>
                <div class="form-group">
                  <label for="">Autre images :</label><br><br>
                  <input type="file" name="" onchange="document.getElementById('2').src = window.URL.createObjectURL(this.files[0])"/>
                  <input type="file" name="" onchange="document.getElementById('3').src = window.URL.createObjectURL(this.files[0])"/>
                  <input type="file" name="" onchange="document.getElementById('4').src = window.URL.createObjectURL(this.files[0])"/>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card"  style="border: 1px solid #777;">
                  <img class="card-img-top" id="1" src="images/image.png" alt="Card image cap" style="height:130px">
                  <div class="card-body">
                    <div class="d-flex">
                      <h6 class="card-title text-success">1000 DA</h6>
                      &nbsp;&nbsp;
                      <h6 class="card-title text-secondary text-decoration-line-through">1000 DA</h6>
                    </div>
                     <div class="d-flex text-warning">
                         <div class="bi-star-fill"></div>
                         <div class="bi-star-fill"></div>
                         <div class="bi-star-fill"></div>
                         <div class="bi-star-fill"></div>
                         <div class="bi-star-fill"></div>
                     </div>
                     <p class="card-text">Paper Puzzle Toy Educational Developmental Baby Kids.</p>
                  </div>
               </div>
               <div class="row no-gutters">
                 <div class="col-2 col-sm-4">
                   <img class="img-thumbnail" id="2" src="images/image.png" alt="" style="height:70px;">
                 </div>
                 <div class="col-2 col-sm-4">
                   <img class="img-thumbnail" id="3" src="images/image.png" alt="" style="height:70px;">
                 </div>
                 <div class="col-2 col-sm-4">
                   <img class="img-thumbnail" id="4" src="images/image.png" alt="" style="height:70px;">
                 </div>
               </div>
              </div>
            </div>
          </div>
          <div class="step d-none">
            <div class="form-group mb-3">
              <label for="">Quantité :</label>
              <div class="input-group ">
                <input type="number" name="_qt" class="form-control" value="" placeholder="" required>
                <span class="input-group-text">QT</span>
             </div>
            </div>
            <label for="">Detail :</label>
            <textarea name="_detail" class="form-control mt-2" rows="3" cols="80"></textarea>
          </div>
          <div class="step d-none">
            <div class="form-group mb-3">
              <label for="">Quantité :</label>
              <div class="input-group ">
                <input type="number" name="_qt" class="form-control" value="" placeholder="" required>
                <span class="input-group-text">QT</span>
             </div>
            </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="prev-btn"><i class="fa fa-chevron-left"></i> Previous</button>
            <button type="button" class="btn btn-primary" id="next-btn">Next <i class="fa fa-chevron-right"></i></button>
            <button type="submit" name="commit" class="btn btn-primary" id="submit-btn">Terminer</button>
          </div>
        </div>
      </div>
    </div><!-- End Modal-->
  </form>


  <script src="js/script2.js" charset="utf-8"></script>

  <?php  include('include/footer.php'); ?>

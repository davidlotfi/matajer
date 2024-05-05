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
        <div class="col-lg-12">
              <div class="card top-selling overflow-auto pb-4">
                <div class="card-body pb-0">
                    <h5 class="card-title">Detail of Product:</h5>
                    <div class="row">
                      <div class="col-lg-9">
                        <div class="form-group mb-3">
                          <label for="" class="col-sm-2 control-label">Name :</label>
                          <input type="text" class="form-control p-2 mt-2" placeholder="description" name="_name" value="" required>
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Prix :</label>
                          <div class="input-group ">
                            <input type="number" name="_price" class="form-control" value="" placeholder="" required>
                            <span class="input-group-text">DA</span>
                         </div>
                        </div>
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
                      <div class="col-lg-3">
                        <div class="card"  style="border: 1px solid #777;">
                          <img class="card-img-top" id="1" src="images/image.png" alt="Card image cap" style="height:130px">
                          <div class="card-body">
                             <h6 class="card-title text-success">1000 DA</h6>
                             <p class="card-text">Paper Puzzle Toy Educational Developmental Baby Kids.</p>
                          </div>
                       </div>
                      </div>
                    </div><br>
                    <button class="btn btn-primary" type="button" name="button">Save</button>
                </div>
              </div>
        </div><!-- End Left side columns -->
    </section>
  </main><!-- End #main -->



  <?php  include('include/footer.php'); ?>

<?php include_once('controleur/store_post.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>create store</title>
    <style media="screen">
    </style>
  </head>
  <style media="screen">
    .bg-password-image {
       background: url(images/inscrir.jpg);
       background-position: center;
       background-size: cover;
   }
  </style>
  <body class="bg-primary">
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                          <div class="col-lg-6">
                              <div class="step p-5">
                                  <div class="">
                                      <p class="mb-2">choisir un nom a votre store:</p>
                                  </div>
                                  <form class="user" action="" method="post">
                                      <div class="form-group">
                                          <input type="text" class="form-control <?php echo $message_class; ?>" id="" name="_store" placeholder="Name store" value="" >
                                          <div class="valid-feedback">
                                            Looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                            Please select ather name!
                                          </div>
                                      </div>
                                      <button class="btn btn-primary btn-block" type="submit" name="sommit">Finish</button>
                                  </form>
                                  <hr>
                                  <div class="text-center">
                                      <p class="small">Copyright © Habbidou.com 2023</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

<script type="text/javascript">

</script>
  </body>
</html>

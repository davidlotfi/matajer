<?php include_once('controleur/signup_post.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Inscrir to habbidou</title>
    <style media="screen">
    #qbox-container {
      background: url(images/inscrir.jpg);
      background-size:cover;
      filter: brightness(75%);
      position: relative;
      min-height: 643px;
    }
    #title-container {
        text-align: center;
        padding: 40px 28px 28px 28px;
        box-sizing: border-box;
        position: relative;
    }
    </style>
  </head>
  <body>
      <div class= "container-fluid">
        <div class="row g-0 justify-content-center">

          <div class="col-lg-8  mx-0 px-0">
            <div id="qbox-container">
            </div>
          </div>

            <div class="col-lg-4 mx-0 px-0">
              <div id="title-container">
                <h3>Habbidou.com</h3>
                <div class="<?php echo $message_class; ?>" role="alert"><?php echo $message_erro; ?></div>
                <form class="" action="" method="post">
                   <div class="form-group">
                     <label class="float-left" for="">Email address</label>
                     <input class="form-control" type="email" name="_username" value="" required>
                   </div>
                    <div class="form-group">
                      <label class="float-left" for="">Password</label>
                      <input class="form-control" type="password" name="_password" value="" required>
                    </div>
                    <div class="form-group">
                      <label class="float-left" for="">Repeat Password</label>
                      <input class="form-control" type="password" name="repeat_password" value="" required>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" name="commit" value="Sign up">
                 </form>
                <br>
                <p>Don't you have an account? <a href="login.php" class="link-primary">Login</a></p>
                <div class="text-center"><hr>
                  <button type="button" class="btn btn-outline-secondary btn-block"><img src="images/search2.png" alt=""> Continue with Google</button>
               </div><hr>
                <div class="text-center">
                   <p class="d-block small">Copyright © Habbidou.com 2023</p>
               </div>
              </div>
            </div>

        </div><!-- fin row -->
      </div><!-- fin container -->
  </body>
</html>

<?php // require_once('../func/database.php'); ?>
<?php $message_error=''; $message_class=''; ?>
<?php

function get_current_password($email){
  global $dbd;
  $req=$dbd->prepare('SELECT password FROM users WHERE email = :email');
  $req->execute(array(
    'email' => $email));
  $result=$req->fetch();
  $req->closeCursor();
  return $result;
}

function change_password($email,$newpassword){
  global $dbd;
  $req = $dbd->prepare('UPDATE users SET password = :password WHERE email = :email');
  $req->execute(array(
   'password' => $newpassword,
   'email' => $email ));
}



if (isset($_POST['commitPassword'])) {

  $email="doudou@gmail.com"; // for exemple aprés use session >>> $email= $_SESSION['email'];
  $password=$_POST['password'];
  $newpassword=$_POST['newpassword'];
  $renewpassword=$_POST['renewpassword'];
  $result=get_current_password($email);

  if ($password == $result[0]) {
    if (strlen($newpassword) >= 6) {
      if ($newpassword == $renewpassword) {

            change_password($email,$newpassword);
            $message_class = 'alert alert-success bg-success text-light border-0 alert-dismissible fade show';
            $message_error = 'Password change success';
            $icon_class = 'bi bi-check-circle me-1';
      }else {

            $message_class = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
            $message_error = 'error confirmation password!';
            $icon_class = 'bi bi-info-circle me-1';
           }
     }else {

            $message_class = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
            $message_error = 'password au moin 6 characters!';
            $icon_class = 'bi bi-info-circle me-1';
           }
     }else {

           $message_class = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
           $message_error = 'error password!';
           $icon_class = 'bi bi-info-circle me-1';
          }
       }

 ?>

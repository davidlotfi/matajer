<?php require_once('func/database.php'); ?>
<?php $message_erro=''; $message_class=''; ?>
<?php
function login($email, $password){
  global $dbd;
  $req=$dbd->prepare('select id from users where email=:email and password=:password');
  $req->execute(array(
    'email'=>$email,
    'password'=>$password ));
  $result=$req->fetch();
  $req->closeCursor();
  return $result;
}
function redirect_to(){

  echo "welcome to dashbord";
}

// if submitted
 if (isset($_POST['commit'])) {
   $email= $_POST['email'];
   $password= $_POST['password'];
   $result=login($email,$password);
   if (!$result) {
     $message_erro="failed connection !";
     $message_class='alert alert-danger';
   }else {
     //session start and redirect to dashbord
       $message_erro="connection reussir";
       $message_class='alert alert-success';
       sleep(2);
    //   redirect_to();
   }

 }

 ?>

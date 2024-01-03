<?php require_once('func/database.php'); ?>
<?php $message_erro=''; $message_class=''; ?>
<?php
function check_pseudo($email){
  global $dbd;
  $req=$dbd->prepare('SELECT COUNT(*) AS nb_pseudo FROM users WHERE email = ?');
  $req->execute(array($email));
  $nb_pseudo=$req->fetch();
  $req->closeCursor();
  return $nb_pseudo;
}
function add_user($email,$password){
  global $dbd;
  $req1=$dbd->prepare('INSERT INTO users(email,password)VALUES(:email,:password)');
  $req1->execute(array(
    'email' =>$email ,  'password' =>$password ));
  $req1->closeCursor();
}
function redirect_to($location){
  header('location:'.$location);
}

// if submitted
 if (isset($_POST['commit'])) {
   $email=$_POST['_username'];
   $password=$_POST['_password'];
   $repeat_password=$_POST['repeat_password'];
   if (strlen($email)>=10 and strlen($password)>=6) {
     if ($password == $repeat_password) {
          $result=check_pseudo($email);
          if ($result[0]==0) {
               add_user($email,$password);
               $location="store.php";
               $message_erro="Success! Your compte has been created "."<img src='images\check.25.png'>";
               $message_class='alert alert-success';
              // redirect_to($location);
           }else {
               $message_erro="Cette email il exist dejat !";
               $message_class='alert alert-danger';
           }

     } else {
              $message_erro="La confirmation de mot de pass est invalide !";
              $message_class='alert alert-danger';
     }

   }else {
             $message_erro="choisir email valid or password fort !";
             $message_class='alert alert-danger';
   }
 }
 ?>

<?php require_once('../func/database.php'); ?>
<?php

function update_user($value=''){
 global $dbd;
 $req=$dbd->prepare('UPDATE users SET full_name = :FullName, phone = :phone WHERE id = 1');
 $req->execute( array('FullName' =>$_POST['fullName'] ,'phone' => $_POST['phone'] ));
      header("Location:../users-profile.php");
}
//
if (isset($_POST['save'])) {
   update_user();
}else {
  header("Location:../users-profile.php");
}

 ?>

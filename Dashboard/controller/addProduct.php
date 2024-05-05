<?php
  require_once('../func/database.php');

function add_product($image,$name,$price,$quantite){
  global $dbd;
  $req=$dbd->prepare('INSERT INTO product(name,prix,Qt,image) VALUES(?,?,?,?)');
  $req->execute(array($name, $price,$quantite,$image));
  $req->closeCursor();
}



  $name=$_POST['_name'];
  $price=$_POST['_price'];
  $quantite=$_POST['_qt'];
if(isset($_POST['commit'])) {
  if (!empty($_FILES['1']) AND !empty($name)) {
     $ImageName = time().'_'.$_FILES['1']['name'];
     $target= '../images/'.$ImageName;
     move_uploaded_file($_FILES['1']['tmp_name'],$target);
     add_product($ImageName,$name,$price,$quantite);
     header('Location:../product.php');
  }
}


?>

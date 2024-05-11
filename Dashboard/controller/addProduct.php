<?php
  require_once('../func/database.php');

function add_product($image,$name,$price,$quantite){
  global $dbd;
  $req=$dbd->prepare('INSERT INTO product(name,prix,Qt,image) VALUES(?,?,?,?)');
  $req->execute(array($name, $price,$quantite,$image));
  $req->closeCursor();
}

function update_product($value=''){
 global $dbd;
 $req=$dbd->prepare('UPDATE product SET name = :name, prix = :prix, Qt = :qt WHERE id = :Id');
 $req->execute( array('name' =>$_POST['name'] ,'prix' => $_POST['price'] ,'qt' => $_POST['qt'] , 'Id' => $_POST['_id']));
   echo "seccess update";
}
// delet porduct
function delete_product($value=''){
 global $dbd;
 $req=$dbd->prepare('DELETE FROM product WHERE id = :Id');
 $req->execute(array('Id'=>$_POST['_id']));
  // echo "seccess delete";
  header('Location:../product.php');
}

// update Product
if (isset($_POST['commitEnregister']) || isset($_POST['commitSupprimer'])){
  $Id=$_POST['_id'];
  if (isset($_POST['commitEnregister'])) {
    update_product($Id);
  //  $message='seccess update';
  }
  if (isset($_POST['commitSupprimer'])) {
    delete_product($Id);
  //  $message='seccess delete';
  }
}

//add Product
if(isset($_POST['commit'])) {
  $name=$_POST['_name'];
  $price=$_POST['_price'];
  $quantite=$_POST['_qt'];
  if (!empty($_FILES['1']) AND !empty($name)) {
     $ImageName = time().'_'.$_FILES['1']['name'];
     $target= '../images/'.$ImageName;
     move_uploaded_file($_FILES['1']['tmp_name'],$target);
     add_product($ImageName,$name,$price,$quantite);
     header('Location:../product.php');
  }
}


?>

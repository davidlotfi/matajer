
<?php


// delet porduct
function delete_product($value=''){
 global $dbd;
 $req=$dbd->prepare('DELETE FROM product WHERE id = :Id');
 $req->execute(array('Id'=>$_POST['id']));
 //echo "seccess delete";
}

// supp product
$Id=$_POST['_id'];
if (isset($_POST['commitSupprimer'])) {
    //delete_product();
  echo $Id;
}

 ?>

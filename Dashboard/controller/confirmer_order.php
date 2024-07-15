<?php
  require_once('../func/database.php');

  function confirme_order($value=''){
   global $dbd;
   $req=$dbd->prepare('UPDATE commande SET client_name = :nom, client_prenom = :prenom, willaya = :willaya, address = :address, quantite = :quantite, etat= :etat WHERE id = :Id');
   $req->execute( array('nom' =>$_POST['_nom'] ,'prenom' => $_POST['_prenom'] ,'willaya' => $_POST['_willaya'] ,
   'address' => $_POST['_address'] ,'quantite' => $_POST['_quantite'] ,'etat' => $_POST['status'] ,'Id' => $_POST['_id']));
   
     header("Location:../order-detail.php?order=$value");
  }

  if (isset(($_POST['commit']))) {
    $id=$_POST['_id'];
    confirme_order($id);
  }

 ?>

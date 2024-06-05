<?php// require_once('../func/database.php'); ?>
<?php

  function find_all_orders(){
    global $dbd;
    return $dbd->query('select * from commande');
  }
  function find_all_orders_by_product($value=''){
    global $dbd;
    $req=$dbd->prepare('SELECT * FROM commande WHERE id_product=:idProduct');
    $req->execute(array('idProduct' =>$value));
    return $req;
  }
  function count_product_by_orders($id){
    $reponse = find_all_orders_by_product($id);
    return $reponse->rowCount();
  }
  function count_orders(){
    $reponse = find_all_orders();
    return $reponse->rowCount();
  }
  function find_by_sql($sql=""){
    global $dbd;
    return $dbd->query($sql);
  }


 ?>

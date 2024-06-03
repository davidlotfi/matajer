<?php
  
  function find_all_orders(){
    global $dbd;
    return $dbd->query('select * from commande');
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

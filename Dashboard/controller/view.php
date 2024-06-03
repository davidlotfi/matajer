<?php

function up_view($value=''){
  global $dbd;
  $req=$dbd->prepare('UPDATE store SET view = :view WHERE id = 1');
  $req->execute( array('view' =>$value));
}

 ?>

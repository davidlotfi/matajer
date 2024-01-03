<?php
   require_once('config_db.php');

  try {

      $dbd = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);

   } catch (\Exception $e) {

      die($e->getmessage());

  }
 ?>

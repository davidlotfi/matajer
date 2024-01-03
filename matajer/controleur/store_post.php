<?php require_once('func/database.php'); ?>
<?php $message_erro=''; $message_class=''; ?>
<?php
function find_store($store){
global $dbd;
$req=$dbd->prepare('select id from store where name=:store');
$req->execute(array(
  'store'=>$store ));
$result=$req->fetch();
$req->closeCursor();
return $result;
}
function redirect_to(){
  echo "welcome to dashbord";
}
// if submitted
if (isset($_POST['sommit'])) {
  $store= $_POST['_store'];
  $result=find_store($store);
  if ($result) {
    $message_class='is-invalid';
  }else {
    //$message_class='is-valid';
    redirect_to();
  }
}

 ?>

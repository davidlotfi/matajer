<?php require_once('../func/database.php'); ?>
<?php
 function add_command($command=[]){
  global $dbd;
  $req=$dbd->prepare('INSERT INTO commande(id_product,client_name,client_prenom,telephone,willaya,address,prix,quantite)VALUES(:id,:nom,:prenom,:telephone,:willaya,:address,:prix,:quantite)');
  $req->execute(array(
    'id'=>$command[0],
    'nom'=>$command[1],
    'prenom'=>$command[2],
    'telephone'=>$command[3],
    'willaya'=>$command[4],
    'address'=>$command[5] ,
    'prix'=>$command[6] ,
    'quantite'=>$command[7]
  ));
    $req->closeCursor();
}

function redirect_to($location){
  header('location:'.$location);
}

// if submitted
if (isset($_POST['commit']) and !empty($_POST['_willaya']) ) {
    $id=$_POST['_id'];
    $nom= $_POST['_nom'];
    $prenom= $_POST['_prenom'];
    $telephone= $_POST['_telephone'];
    $willaya= $_POST['_willaya'];
    $address= $_POST['_address'];
    $prix=3000;
    $quant=1;
    $dommand=[$id,$nom,$prenom,$telephone,$willaya,$address,$prix,$quant];
     add_command($dommand);
     $location="../boutique/success.php";
     redirect_to($location);
  }else {
    $location="../store.php";
    redirect_to($location);
  }

 ?>

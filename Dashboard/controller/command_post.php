<?php require_once('../func/database.php'); ?>
<?php
 function add_command($command=[]){
  global $dbd;
  $req=$dbd->prepare('INSERT INTO commande(client_name,client_prenom,telephone,willaya,address,prix,quantite)VALUES(:nom,:prenom,:telephone,:willaya,:address,:prix,:quantite)');
  $req->execute(array(
    'nom'=>$command[0],
    'prenom'=>$command[1],
    'telephone'=>$command[2],
    'willaya'=>$command[3],
    'address'=>$command[4] ,
    'prix'=>$command[5] ,
    'quantite'=>$command[6]
  ));
    $req->closeCursor();
}

function redirect_to($location){
  header('location:'.$location);
}

// if submitted
if (isset($_POST['commit']) and !empty($_POST['_willaya']) ) {
    $nom= $_POST['_nom'];
    $prenom= $_POST['_prenom'];
    $telephone= $_POST['_telephone'];
    $willaya= $_POST['_willaya'];
    $address= $_POST['_address'];
    $prix=3000;
    $quant=1;
    $dommand=[$nom,$prenom,$telephone,$willaya,$address,$prix,$quant];
     add_command($dommand);
     $location="../boutique/success.php";
     redirect_to($location);
  }else {
    $location="../store.php";
    redirect_to($location);
  }

 ?>

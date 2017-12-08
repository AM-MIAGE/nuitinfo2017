<?php
$link = mysqli_connect("localhost", "root", "root")
or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysqli_select_db ($link , 'NuitInfo' );

if($_POST["emailUser"]!=null && $_POST["passwordUser"]!=null){
    $nom=$_POST["nomUser"];
    $prenom=$_POST["prenomUser"];
    $paysUser=$_POST["paysUser"];
    $descriptionUser=$_POST["descriptionUser"];
    $typeUser=$_POST["typeUser"];
    $telUser=$_POST["telUser"];
    $emailUser=$_POST["emailUser"];
    $passwordUser= password_hash($_POST["passwordUser"]);
   	$link->query('insert into `user` (`nom`,`prenom`,`email`,`type`,`description`, `pays`,`telephone`) values ("'.$nom.'","'.$prenom.'","'.$emailUser.'","'.$typeUser.'","'.$descriptionUser.'","'.$paysUser.'","'.$telUser.'" )' );
    
}




mysql_close($link);

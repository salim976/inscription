<?php
/*if(isset($_POST['civilite']) AND empty($_POST['civilite'])){
   echo 'Un champs est vide !';
}else if(isset($_POST['nom']) AND empty($_POST['nom'])){
   echo 'Renseigner le nom !';
}else if(isset($_POST['prenom']) AND empty($_POST['prenom'])){
  echo 'Renseigner le prenom !';
}else if(isset($_POST['dateNaiss']) AND empty($_POST['dateNaiss'])){
  echo 'Renseigner la date de naissance !';
}else if(isset($_POST['villeNaiss']) AND empty($_POST['villeNaiss'])){
  echo 'Renseigner la ville de naissance!';
 }else{
   echo 'enregistrement effectué.';
 }*/

 $errors = array();
   if(!array_key_exists('nom', $_POST) || $_POST['nom'] == '') {// on verifie l'existence du champ et d'un contenu
     $errors ['nom'] = "Veuillez renseigner votre nom !!";
   }
   if(!array_key_exists('prenom', $_POST) || $_POST['prenom'] == '') {// on verifie l'existence du champ et d'un contenu
     $errors ['prenom'] = "Veuillez renseigner votre prenom !!";
   }
   if(!array_key_exists('dateN', $_POST) || $_POST['dateN'] == '') {// on verifie l'existence du champ et d'un contenu
     $errors ['dateN'] = "Veuillez renseigner votre date de naissance !!";
   }
   if(!array_key_exists('villeN', $_POST) || $_POST['villeN'] == '') {// on verifie l'existence du champ et d'un contenu
     $errors ['villeN'] = "Veuillez renseigner votre ville de naissance !!";
   }
   if(empty($errors)){
            json_encode('enregistrement effectué');
          }
          echo json_encode($errors); 

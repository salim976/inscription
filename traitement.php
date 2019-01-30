<?php
if(isset($_POST['civilite']) AND empty($_POST['civilite'])){
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
 }

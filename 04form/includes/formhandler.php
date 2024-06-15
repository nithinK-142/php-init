<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $firstname = htmlspecialchars($_POST["firstname"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $favoritepet = htmlspecialchars($_POST["pet"]);

  if(empty($firstname) || empty($lastname) || empty($favoritepet)){
      header("Location: ../index.php");
      exit();
  }

  echo $firstname," ",$lastname;
  echo $favoritepet;

  header("Location: ../index.php");
}else{
  header("Location: ../index.php");
};
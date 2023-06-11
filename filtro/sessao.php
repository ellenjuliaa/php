<?php
session_start();
if (!isset($_SESSION["usuario"]) && strpos($_SERVER['PHP_SELF'], 'login.php') == false) {  
  header("Location: ../web/login.php");
  exit();
}else if(isset($_SESSION["usuario"]) && strpos($_SERVER['PHP_SELF'], 'login.php') == true){
  header("Location: ../web/livro.php");
  exit();
}
?>
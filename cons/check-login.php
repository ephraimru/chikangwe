<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Wed, 31 May 2024 15:00:00 GMT");
if(!isset($_SESSION['user'])){
  $_SESSION['not-logedin'] = "<div class='container'><div class='alert alert-danger' style='color: #2691d9;'><h2 class=' text-center'>Login to gain access.</h2></div></div>";
  header('location:'.SITEURL.'cons/start.php');
  exit();
}

?>
<?php
ob_start();

session_start();

define('COMPANY','Chikangwe');
define('DEV','Memory Chitambadzo');
define('SITEURL','http://localhost/chikangwe/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_NAME','elb');
define('DB_PASSWORD','Efisha@13');
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD);

 $db_select = mysqli_select_db($conn,DB_NAME);
?>




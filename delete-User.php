<?php 
include('../cons/config.php');

 $id = $_GET['id'];

 $sql = "UPDATE tbl_users SET status = 'Delete'
WHERE id='$id'
";

$res = mysqli_query($conn,$sql);
if($res==true){
$_SESSION['delete'] ="<h3 class='text_green'> deleted Successfully</h3>";
header('location:'.SITEURL.'admin/users.php');
}
else{
  $_SESSION['delete'] ="<h3 class='text_red'>fail to delete</h3>";
header('location:'.SITEURL.'admin/users.php');
}

?>
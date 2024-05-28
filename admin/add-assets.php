<?php include('../cons/navbar.php'); ?>
<div class="main-content">
  <div class="wrapper">
    <h1 class="text-center text-primary">Add Asset</h1><br><br>

    <?php
      if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
      }
      if(isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
      }
       ?>
    <form action="" method="post" enctype="multipart/form-data">
      <table class="tbl-30">     
        <tr>
          <td>Serial No.:</td>
          <td><input class="input-text" type="text" name="sn" required placeholder="Enter your Serial No."></td>
        </tr>
        <tr>
          <td>Name of Property:</td>
          <td><input class="input-text" type="text" name="property_name" required placeholder="Enter Your Name of Property name"></td>
        </tr>
        <tr>
          <td>D.O.P:</td>
          <td><input class="input-text" type="date" required name="date"></td>
        </tr>

        <tr>
          <td>department:</td> 
        <td><input class="input-text" type="text" required name="department" placeholder="department"></td> 
        </tr>
        <tr>
          <td>new_old:</td> 
        <td><input class="input-text" type="text" required name="new_old" placeholder="new_old"></td> 
        </tr>
         <tr>
          <td>Status:</td>
          <td><input class="input-text" type="text" required name="status" placeholder="status"></td>
        </tr>
        <tr> 
          <td colspan="2">
            <input type="submit" name="submit" value="Add Asset" class="btn btn-block btn-seagreen ">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

<?php include("../cons/footer.php") ?>

<?php


if(isset($_POST['submit'])){
// echo"button clicked";
$sn = $_POST['sn'];
$property_name = $_POST['property_name'];
$date = $_POST['date'];
$department = $_POST['department'];
$new_old = $_POST['new_old'];
$status = $_POST['status'];

 $sql = "INSERT INTO tbl_assets SET
 sn ='$sn',
 property_name = '$property_name',
 date ='$date',
 department = '$department',
 new_old = '$new_old',
 status= '$status'
 
 ";
echo $sql;

$res = mysqli_query($conn, $sql);

if($res==true)
{

$_SESSION['add'] = "<h3 class='text_green'>product added successfully</h3>";

header("location:".SITEURL.'admin/assets.php');
}
else{
  $_SESSION['add'] = " <h3 class='text_red'>failed to add worker</h3>";

header("location:".SITEURL.'admin/assets.php');
}
}
 ?>
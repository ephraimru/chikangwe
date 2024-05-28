<?php include('../cons/navbar.php'); ?>
<div class="main-content">
  <div class="wrapper">
    <h1 class="text-center text-warning">Add Worker</h1><br><br>

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
          <td>First Name:</td>
          <td><input class="input-text" type="text" name="first_name" required placeholder="Enter your first name"></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input class="input-text" type="text" name="last_name" required placeholder="Enter Your last name"></td>
        </tr>
        <tr>
          <td>D.O.E:</td>
          <td><input class="input-text" type="date" required name="date"></td>
        </tr>
        <tr>
          <td>CV file:</td>
          <td><input type="file" name="image" required class="input-text"></td>
        </tr>
         <tr>
          <td>Department:</td>
          <td><input class="input-text" type="text"required name="department" placeholder="Department"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="submit" value="Add Worker" class="btn btn-block btn-seagreen ">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

<?php include("../cons/footer.php") ?>

<?php
if(isset($_FILES['image']['name'])){

$image_name= $_FILES['image']['name'];

if($image_name !=""){
  $ext = end(explode('.',$image_name));

  $image_name = "efisha-elb-".rand(0000,9999).'.'.$ext;

  $src =$_FILES['image']['tmp_name'];

  $dst ="../cv_files/".$image_name;

  $upload = move_uploaded_file($src, $dst);

  if($upload ==false){


    $_SESSION['upload'] ="<div class='error popup text-danger'>Failed to upload image!!</div>";
    header('location:'.SITEURL.'admin/employees.php');
    die();
  }
else{
  echo "check other eraz";
}
}

}
else{
  $image = "era2";
}

if(isset($_POST['submit'])){
// echo"button clicked";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$department = $_POST['department'];
$date = $_POST['date'];
$status = "active";
$empno = rand(1000,9999).''.substr($last_name,0,1);

 $sql2 = "INSERT INTO tbl_employees SET 
first_name = '$first_name',
last_name = '$last_name',
department = '$department',
date = '$date',
 cv_file = '$image_name',
status='$status',
empno = '$empno'


";
$res = mysqli_query($conn, $sql2) or die();

if($res==true)
{

$_SESSION['add'] = "<h3 class='text_green'>product added successfully</h3>";

header("location:".SITEURL.'admin/employees.php');
}
else{
  $_SESSION['add'] = " <h3 class='text_red'>failed to add worker</h3>";

header("location:".SITEURL.'admin/employees.php');
}
}
 ?>
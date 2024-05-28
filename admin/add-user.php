<?php include("../cons/navbar.php")?>
<div class="main-content">
  <div class="wrapper">
    <h1 class="text-center text-warning">Add User</h1><br><br>

    <?php
      if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
      }

       ?>

    <form action="" method="post">
      <table class="tbl-30">
        <tr>
          <td>Full Name:</td>
          <td><input class="input-text" type="text" required name="full_name" placeholder="Enter Your Full Name"></td>
        </tr>
        <tr>
          <td>UserName:</td>
          <td><input class="input-text" type="text"required name="username" placeholder="Enter Your username"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input class="input-text" type="password"required name="password" placeholder="Enter Your password"></td>
        </tr>

        <tr>
          <td colspan="2">
            <input type="submit" name="submit" value="Add User" class="btn btn-block btn-seagreen ">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php

if(isset($_POST['submit'])){
// echo"button clicked";

 $full_name = $_POST['full_name'];
 $username = $_POST['username'];
 $password = MD5($_POST['password']);
 $sql = "INSERT INTO tbl_users SET 
 full_name = '$full_name',
 username = '$username',
 password = '$password'
 
";
$res = mysqli_query($conn, $sql) or die();

if($res==true)
{

$_SESSION['add'] = "<h3 class='text-success'>User added successfully</h3>";

header("location:".SITEURL.'admin/users.php');

}
else{
  $_SESSION['add'] = " <h3 class='text-danger'>failed to add User</h3>";

header("location:".SITEURL.'admin/users.php');
}


}

 ?>
<?php include("../cons/footer.php")?>
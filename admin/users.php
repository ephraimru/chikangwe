<?php include("../cons/navbar.php")?>

<div class="main-content">
    <div class="container">

<h2 class="text-center text-primary">Manage Users</h2>
<?php
    if(isset($_SESSION['add'])){
      echo $_SESSION['add'];
      unset($_SESSION['add']);
    }
    if(isset($_SESSION['update-User'])){
      echo $_SESSION['update-User'];
      unset($_SESSION['update-User']);
    }
      if(isset($_SESSION['change_password'])){
        echo $_SESSION['change_password'];
        unset($_SESSION['change_password']);
      }


      if(isset($_SESSION['password-not-match'])){
        echo $_SESSION['password-not-match'];
        unset($_SESSION['password-not-match']);
      }

      if(isset($_SESSION['password-changed'])){
        echo $_SESSION['password-changed'];
        unset($_SESSION['password-changed']);
      }
?>

      <div class="container shadow" style="overflow-y: scroll; height: 560px;" >
<table class="tbl-full">
 <tr>
  <th>Id.</th>
    <th>Fullname</th>
    <th>Username</th>
    <th></th>
    <th></th>
    <th>
  <a class="btn btn-block btn-seagreen" href="<?php echo SITEURL;?>admin/add-user.php">Add User</a></th>
  </tr>
<?php
$sql = "SELECT * FROM tbl_users where status='active'";
$res = mysqli_query($conn, $sql);

if($res == true){
  $count = mysqli_num_rows($res);
  $sn = 1;

  if ($count>0) {
    while ($rows = mysqli_fetch_assoc($res)) {
      $id = $rows['id'];
      $full_name = $rows['full_name'];
      $username = $rows['username'];

      ?>
      <tr>
      <td><?php echo $sn++?></td>
      <td><?php echo $full_name?></td>
      <td><?php echo $username?></td>
      <td>
      <a class="btn btn-block btn-outline-warning" href="<?php echo SITEURL; ?>admin/edit-User.php?id=<?php echo $id;?>">Edit</a>
      </td>

      <td class="text-center">
      <a class="btn btn-outline-danger" href="<?php echo SITEURL; ?>admin/delete-User.php?id=<?php echo $id;?>">Delete</a>
      </td>
      <td>
      <a class="btn btn-block btn-outline-primary" href="<?php echo SITEURL; ?>admin/change-User-password.php?id=<?php echo $id;?>">Change password</a>
      </td>
      </tr>

<?php
    }

  }else{

  }
}
else{

}
?>

</table>
    </div>
    </div></div>
<?php include("../cons/footer.php")?>
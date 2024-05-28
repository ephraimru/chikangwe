<?php include('../cons/navbar.php'); ?>
<div class="main-content">
  <div class="wrapper">
    <br><br>
    <h1 class="text-center text-warning">Edit User</h1><br><br>

    <?php 
    $id=$_GET['id'];

    $sql="SELECT * FROM tbl_users WHERE id=$id";

    $res = mysqli_query($conn,$sql);

    if($res==true){
      $count=mysqli_num_rows($res);

      if($count==1){
        // echo "admin available";
        $row = mysqli_fetch_assoc($res);
        $full_name=$row['full_name'];
        $username =$row['username'];
      }else{
        header('lacation:'.SITEURL.'admin/users.php');
      }
    }
     ?>

    <form method="POST">
      <table class="tbl-30">
        <tr>
          <td>Full Name: </td>
          <td>
            <input class="input-text" type="text" value="<?php echo $full_name; ?>" name="full_name" placeholder="Full Name" class="text">
          </td>
        </tr>
        <tr>
          <td>Username</td>
          <td>
            <input class="input-text" type="text" value="<?php echo $username; ?>" name="username" placeholder="Enter Username"
              class="text">
          </td>

        </tr>
             
        <tr>
          <td>
            <input type="hidden" name="id" value="<?php echo $id ?>" class="text">
          </td>
          <td col-span="2">
           
            <input type="submit" name="submit" value="Update" class=" btn btn-block btn-seagreen">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

<?php 

if(isset($_POST['submit'])){

 // echo "button clicked";

$id =$_POST['id'];
$full_name=$_POST['full_name'];
$username=$_POST['username'];

$sql = "UPDATE tbl_users SET 
full_name = '$full_name',
username = '$username'
WHERE id='$id'
";

$res = mysqli_query($conn, $sql);

if($res==true){
$_SESSION['update-user']= "<h4 class='text-success'>user updated successfully</h4>";


header('location:'.SITEURL.'admin/users.php');
}else{
$_SESSION['update-user']= "<h4 class='text-danger'>failed to update user</h4>";
header('location:'.SITEURL.'admin/users.php');
}

}
?>

<?php include('../cons/footer.php'); ?>
<?php include('../cons/navbar.php'); ?>
<div class="main-content">
  <div class="wrapper">
    <br><br>
    <h1 class="text-center text-success">Edit Asset</h1><br><br>

    <?php 
    $id=$_GET['id'];

    $sql="SELECT * FROM tbl_assets WHERE id=$id";

    $res = mysqli_query($conn,$sql);

    if($res==true){
      $count=mysqli_num_rows($res);

      if($count==1){
        // echo "admin available";
        $row = mysqli_fetch_assoc($res);
        $sn=$row['sn'];
        $property_name =$row['property_name'];
        $department =$row['department'];
        $new_old =$row['new_old'];
      }else{
        header('lacation:'.SITEURL.'admin/asset.php');
      }
    }
     ?>

    <form method="POST">
      <table class="tbl-30">
        <tr>
          <td>Serial Number: </td>
          <td>
            <input class="input-text" type="text" value="<?php echo $sn; ?>" name="sn" placeholder="Serial Number" class="text">
          </td>
        </tr>
        <tr>
          <td>Property Name</td>
          <td>
            <input class="input-text" type="text" value="<?= $property_name; ?>" name="property_name" placeholder="Enter property name"
              class="text">
          </td>

        </tr>
        <tr>
          <td>Department</td>
          <td>
            <input class="input-text" type="text" value="<?= $department; ?>" name="department" placeholder="Enter Location of asset"
              class="text">
          </td>

        </tr>
        <tr>
          <td>Condition</td>
          <td>
            <input class="input-text" type="text" value="<?=$new_old; ?>" name="new_old" placeholder="Enter property condition"
              class="text">
          </td>

        </tr>

             
        <tr>
          <td>
            <input type="hidden" name="id" value="<?=$id ?>" class="text">
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
$sn=$_POST['sn'];
$property_name=$_POST['property_name'];
$department=$_POST['department'];
$new_old=$_POST['new_old'];

$sql = "UPDATE tbl_assets SET 
sn = '$sn',
property_name = '$property_name',
department = '$department',
new_old = '$new_old'
WHERE id='$id'
";

$res = mysqli_query($conn, $sql);

if($res==true){
$_SESSION['update-user']= "<h4 class='text-success'>user updated successfully</h4>";


header('location:'.SITEURL.'admin/assets.php');
}else{
$_SESSION['update-user']= "<h4 class='text-danger'>failed to update user</h4>";
header('location:'.SITEURL.'admin/assets.php');
}

}
?>

<?php include('../cons/footer.php'); ?>
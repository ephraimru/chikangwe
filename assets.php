
<?php include("../cons/navbar.php")?>

<div class="main-content">
    <div class="wrapper">

<h2 class="text-center text-primary">Manage Assets</h2>
<?php
    if(isset($_SESSION['add'])){
      echo $_SESSION['add'];
      unset($_SESSION['add']);
    }

?>
<br>

      <div class="container shadow" style="overflow-y: scroll; height: 560px;" >
<table class="tbl-full">
 <tr>
    <th>Serial Number</th>
    <th>Property Name</th>
    <th>Date of Purchase</th>
    <th>Department</th>
    <th>Condition</th>
    <th>
  <a class="btn btn-seagreen" href="<?php echo SITEURL;?>admin/add-assets.php">Add Asset</a></th>

  </tr>
<?php
$sql = "SELECT * FROM tbl_assets";
$res = mysqli_query($conn, $sql);

if($res == true){
  $count = mysqli_num_rows($res);
  $sn = 1;

  if ($count>0) {
    while ($rows = mysqli_fetch_assoc($res)) {
      $id = $rows['id'];
      $sn = $rows['sn'];
      $property_name = $rows['property_name'];
      $date = $rows['date'];
      $department =$rows['department'];
      $new_old =$rows['new_old'];
      
      ?>
      <tr>
      <td><?php echo $sn?></td>
      <td><?php echo $property_name?></td>
      <td><?php echo $date?></td>
      <td><?php echo $department?></td>
      <td><?php echo $new_old?></td>
      <td>
<div class=" text-center">
       <a class="btn btn-outline-success ml-3 pl-4 pr-4" href="<?php echo SITEURL; ?>admin/edit-asset.php?id=<?php echo $id;?>">Edit</a>
      <a class="btn btn-outline-danger ml-3 pl-3" href="<?php echo SITEURL; ?>admin/delete-asset.php?id=<?php echo $id;?>">Delete</a>
</div>
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
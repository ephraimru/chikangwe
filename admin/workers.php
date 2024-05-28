<?php


if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
$sql =  "SELECT * FROM tbl_users ";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
$totalusers = $row;

$sql2 =  "SELECT * FROM tbl_assets ";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_num_rows($result2);
$totalAssets = $row2;

$sql3 =  "SELECT * FROM tbl_employees ";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_num_rows($result3);
$totalWorkers = $row3;

mysqli_close($conn);


?>

<div class="banner bg">
 
   <div class="row justify-content ">

   <div class="col-md-6 border rounded m-2 bg-warning">
    <i class="fa fa-user" style="font-size: 30px"></i>
    <h4>Total Users:</h4>
    <h1><?= $totalusers; ?></h1>

   </div>

   <div class="col-md-6 border rounded m-2 bg-success">
    <i class="fa fa-user-nurse" style="font-size: 30px"></i>
    <h4>Total Employees:</h4>
    <h1><?=$totalWorkers ?></h1>
   </div>

   <div class="col-md-6 border rounded m-2 bg-primary">
    <i class="fa fa-hotel" style="font-size: 30px"></i>
    <h4>Total Assets:</h4>
    <h1><?=$totalAssets ?></h1>
   </div>

</div><br>
<div class="banner2">
<h1><span class="text-danger">Chikange- </span> High School</h1> <br><br>
<h2 class=" text-info text-center">Managing Employees with easy.</h2>
<h3 class=" text-info text-center">Assets syncronization.</h3>
<h4 class=" text-info text-center">Presents</h4>
<h5 class=" text-info text-center">Reality Imagination Systems.</h5>
</div>
  </div>




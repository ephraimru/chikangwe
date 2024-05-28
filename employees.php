<?php
include('../cons/navbar.php');


     if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
      }

      
     if(isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
      }

           if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']);
      }
?>

<div class="wrapper">  
    <h1 class="text-info text-center"> Employees Information</h1>

  <div class="main-content">
      <br>


      <div class="container shadow" style="overflow-y: scroll; height: 560px;" >
        <table class=" table-bordered tbl-full">

          <tr>
            <th>No.</th>
            <th>EC Number.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>D.O.E</th>
            <th>Resume</th>
            <th>department</th>
            <th>
      <a class="btn btn-seagreen" onMouseOver="window.status=' '; return true; "  href="<?php echo SITEURL;?>admin/add-workers.php">Add Employee</a></th>
          </tr>




<?php

$sql = "SELECT * FROM tbl_employees where status!='deleted' ORDER BY date asc";
$res = mysqli_query($conn, $sql);

if($res == true){
  $count = mysqli_num_rows($res);
  $sn = 1;

if ($count> 0) {
    while ($rows = mysqli_fetch_assoc($res)) {
      $id = $rows['id'];
      $empno = $rows['empno'];
      $first_name = $rows['first_name'];
      $last_name = $rows['last_name'];
      $date = $rows['date'];
      $cv_file = $rows['cv_file'];
      $department = $rows['department'];

      ?>
          <tr>
           <td><?php echo $sn++?></td>
           <td><?php echo $empno?></td>
            <td><?php echo $first_name?></td>
            <td><?php echo $last_name?></td>
            <td><?php echo $date?></td>
            <td><img width="50" src="<?php echo SITEURL;?>/cv_files/<?php echo $cv_file?>"></td>
            <td><?php echo $department?></td>
            <td>
      <a  class="btn btn-outline-warning"  href="<?php echo SITEURL; ?>admin/edit-worker.php?id=<?php echo $id;?>">Edit</a>
      <a class="btn btn-outline-success" href="<?php echo SITEURL; ?>admin/view-worker.php?id=<?php echo $id;?>" >View</a>
      <a class="btn btn-outline-danger" href="<?php echo SITEURL; ?>admin/delete-employee.php?id=<?php echo $id;?>">Delete</a>
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
    </div>
      </div>

<?php
include('../cons/footer.php');

?>
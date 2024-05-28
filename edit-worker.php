<?php include('../cons/navbar.php') ?>

<div class="main-content">
  <div class="wrapper">
    <h1 class="text-center text-warning">Update Worker 1306R.</h1>
    <?php 
    $id=$_GET['id'];

    $sql="SELECT * FROM tbl_employees WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true){

      $count=mysqli_num_rows($res);

      if($count==1){
        $row = mysqli_fetch_assoc($res);
        $empno =$row['empno'];
        $first_name=$row['first_name'];
        $last_name =$row['last_name'];
        $department =$row['department'];
      }else{
        header('lacation:'.SITEURL.'admin/employees.php');
      }
    }else {
      
    }
     ?>
    <form method="POST">
      <table class="tbl-30">
          <tr>
          <td>EC Number: </td>
          <td>
            <input type="text" value="<?php echo $empno; ?>" name="empno" placeholder="EC Number" class="input-text">
          </td>
        </tr>
        <tr>
          <td>First Name: </td>
          <td>
            <input type="text" value="<?php echo $first_name; ?>" name="first_name" placeholder="Firstname" class="input-text">
          </td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td>
            <input type="text" value="<?php echo $last_name; ?>" name="last_name" placeholder="Surname."
              class="input-text">
          </td>
        </tr>
        <tr>
          <td>Department: </td>
          <td>
            <input type="text" value="<?php echo $department; ?>" name="department" placeholder="pie department."
              class="input-text">
          </td>
        </tr>
        <tr>
          <td></td>
          <td col-span="2">
            <input type="hidden" name="id" value="<?php echo $id ?>" class="">
            <input type="submit" name="submit" value="Update Worker" class="btn btn-block btn-seagreen">

          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

<?php 

if(isset($_POST['submit'])){
$id =$_POST['id'];
$empno=$_POST['empno'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];

$sql = "UPDATE tbl_employees SET 
empno = '$empno',
first_name = '$first_name',
last_name = '$last_name',
department = '$department'
WHERE id='$id'
";

$res = mysqli_query($conn, $sql);

if($res==true){
$_SESSION['update']= "<h4 class='text_green'>Employee updated successfully</h4>";


header('location:'.SITEURL.'admin/employees.php');
}else{
$_SESSION['update']= "<h4 class='text_red'>failed to update Employee</h4>";
header('location:'.SITEURL.'admin/employees.php');
}

}
?>
<?php include('../cons/footer.php') ?>

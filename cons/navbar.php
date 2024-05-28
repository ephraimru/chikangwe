<?php include('config.php'); ?>
<?php include('check-login.php'); ?>
<?php include('doctype.php');?>

 <hr>
<div class="navbar">
  
  <ul>
    <a href="<?php echo SITEURL;?> " ><li>Home</li></a>
    <a href="<?php echo SITEURL;?>admin/users.php" ><li>Users</li></a>
    <a href="<?php echo SITEURL;?>admin/employees.php" ><li>Employees</li></a>
    <a href="<?php echo SITEURL;?>admin/assets.php" ><li>Assets</li></a>
    <a href="<?php echo SITEURL;?>security/logout.php" ><li>Exit</li></a>
  </ul>
</div>
  <hr>
</body>
</html>
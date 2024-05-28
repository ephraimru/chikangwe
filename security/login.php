<?php
 include('../cons/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo SITEURL?>styles/login.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ELB</title>
</head>
<body>
<div class="wrapper ">
  <div class="login">
    <form action="#" method="post">
      <div class="img">
        <img src="<?php echo SITEURL?>images/logo3.png" width="100">
        </div><br>
              <?php 
                if(isset($_SESSION['login-fail']))
                {
                    echo $_SESSION['login-fail'];
                    unset($_SESSION['login-fail']);
                }
            ?>
        
        <br><br>
          <input type="text" required class=" input-responsive" name="username"> <br><br>
          <input type="password" required class=" input-responsive" name="password"><br><br>
          <input type="submit"  name="login" class=" btn btn-block btn-success input-responsive" value="LogIn">
          <p class=" text-center">&nbsp;<strong>NB* Please avoid online payments</strong></p>
    </form>
  </div>
</div>
</body>
</html>

<?php
if(isset($_POST['login'])){
  Echo("Sweetie Shingi i love you.");

   $username = mysqli_real_escape_string($conn, $_POST['username']);
        
    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);
 
  $sql ="SELECT * FROM tbl_users WHERE username='$username' AND password ='$password'";

   $result = mysqli_query($conn, $sql);
   $count = mysqli_num_rows($result);

   if($count==1)
   {
       $_SESSION['login'] ="<div class='alert alert-success' style='color: #2691d9;'>Login Successfull.</div>";
       $_SESSION['user'] = $username;
       
       header('location:'.SITEURL.'index.php');
   }
   else
   {
       $_SESSION['login-fail'] = "<div class='text-center error'> Username or Password did not match. </div>";

       header('location:'.SITEURL.'security/login.php');
   }


}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_SERVER['HTTP_BACK'])) {
    # code...
    unset($_SESSION);
    header('location:'.SITEURL.'security/login.php');
    exit;

  }else{
    
  }
}

?>

<script>

</script>
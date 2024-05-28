<style>
  .startpage{
    background: url(../images/bg3.jpg),linear-gradient(to left,lightblue,transparent, transparent,transparent, lightblue);
    background-size: cover;
    background-blend-mode: color-burn;
    border-radius: 1px 200px 0px 303px;

  }
  .wrapper1{
    width: 80%;
    margin: 1% 19%;
    box-shadow: 9px 11px 22px blue;
  }
  .wrapper2{
    width: 50%;
    height: 30%;
    margin-left: 25%;
  }
</style>
<?php include('config.php');?>
<?php include('doctype.php');?>
  <div class="main-content">
    <div class="wrapper1">
      <div class="display-flex justify-content-around startpage"><br><br><br>
          <h1 class=" ml-5 f-s-100 text-center text-info">EfishaAI</h1><br><br><br>
          <div class="container">
            <div class="wrapper2">
              <div class=" row p-18 m-5"><br><br><br>
                <a class="btn btn-block btn-gradient m-5" href="<?php echo SITEURL;?>security/login.php">Sign In</a>
              </div>
            </div>


            <h3 class="text-center text-light -success">REALITY IMAGINATION SYSTEMS.</h3>
            <br>
          </div>

      </div>
    </div>
  </div>
  </body>
</html>
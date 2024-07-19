<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="../bootstrap-5.0.2-dist/css/bootstrap.min.css"
    />
    <title>Document</title>
 
  <style>
  .bbg{
  background-image: url("thumb-1920-317196.jpg" );
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 1000px;
  /* position: relative; */
       
}</style>
 </head>
  <body class="bbg">
    <div class="container mt-3">
      <div class="row">
<div class="text-end">
      <a href="./index.php" class="btn btn-primary text-end">BACK</a>
    </div>
      </div>
    </div>
    
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="bg-primary p-5 rounded">
            <form action="admin.php" method="POST">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Admin Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Admin Name"
                  name="name"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Admin Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Admin Password"
                  name="password"
                />
              </div>
              <div class="mb-3">
                 <input type="submit"
                  class="form-control bg-info"
                  name="admin"
                  id="exampleFormControlInput1"
                  value="Login"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
if(isset($_POST['admin']))
{
  echo "hi";
  if(($_POST['name']=="admin")&&($_POST['name']=="admin"))
  {
     echo "<script>alert('login successfully');</script>";
        echo '<meta http-equiv="refresh" content="1;URL=admin_dashboard.php">';
  }
}
?>

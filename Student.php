<?php
session_start();
?>
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
    <title>Student Login </title>
    <style>
  .bbg{
  background-image: url("thumb-1920-317196.jpg" );
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /* position: relative;
   */
  height: 1000px;     
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
            <form action="student.php" method="POST">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Student Email</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Email"
                  name="email"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Password"
                  name="password"
                />
              </div>
              <div class="mb-3">
                 <input type="submit"
                  class="form-control bg-info"
                  name="student"
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
include "db.php";
if(isset($_POST['student']))
{
    $select=mysqli_query($con,"select * from stureg where mid='$_POST[email]' and pass='$_POST[password]'");
    $row=mysqli_fetch_assoc($select);
    if(mysqli_num_rows($select)==1)
    {
      $_SESSION['regno']=$row['reg'];
 echo "<script>alert('login successfully');</script>";
        echo '<meta http-equiv="refresh" content="1;URL=student_dashboard.php">';
  
    }
    else
    { echo "<script>alert('login invalid');</script>";
        echo '<meta http-equiv="refresh" content="1;URL=student.php">';
  

    }
    // while($row=mysqli_fetch_assoc($select))
    // {
          // }
//   echo "hi";
//   if(($_POST['name']=="admin")&&($_POST['name']=="admin"))
//   {
     
//   }
}
?>

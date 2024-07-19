<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link
      rel="stylesheet"
      href="../bootstrap-5.0.2-dist/css/bootstrap.min.css"
    />
    <title>Student Dashboard</title>
</head>
 <style type="text/css">
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    width:auto;
}
li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

  .bbg{
  background-image: url("thumb-1920-317196.jpg" );
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 1000px;
  /* position: relative; */
      
}
</style>
  <body class="bbg">
      <?php include "nav.php";?>
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="bg-primary text-center p-5">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="submit" class="btn btn-info" value="View Student" name="viewStd">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-info" value="Renewal Pass" name="renewal">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-info" value="View Bus Pass" name="BUSPASS">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="bg-info text-center p-2">
                    <H5>DETAILS OF STUDENTS</H5>
                    <?php
                    include "db.php";
                    if(isset($_POST['viewStd']))
                    {
                        $result = mysqli_query($con,"select * from stureg");
                    ?>
                        <table class="table bg-info">
                            <thead>
                                <tr>
                                    <th scope="col"> NAME</th>
                                    <th scope="col">REG NO</th>
                                    <th scope="col">DEPARTMENT</th>
                                    <th scope="col">MAIL ID</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">CONTACT</th>
                                    <th scope="col">FROM</th>
                                    <th scope="col">TO</th>
                                    <th scope="col">FARE</th>
                                    <th scope="col">BUS ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
  
                                        while ($row= $result->fetch_assoc())
                                        {
                                    ?>
                                    <tr>
                                    <th><?php echo $row["name"]; ?></th>
                                    <td><?php echo $row["reg"]; ?></td>
                                    <td><?php echo $row["dept"]; ?></td>
                                    <td><?php echo $row["mid"]; ?></td> 
                                    <td><?php echo $row["ad"]; ?></td>
                                        <td><?php echo $row["cont"]; ?></td>
                                        <td><?php echo $row["frm"]; ?></td>
                                        <td><?php echo $row["too"]; ?></td>
                                        <td><?php echo $row["fare"]; ?></td>
                                        <td><?php echo $row["busid"]; ?></td>
                                    </tr>
                                    <?php
                                        }
                                
                                    }

                                ?>
                                </tbody>
                        </table>
                    <?php
                    if(isset($_POST['renewal']))
                    {
                    ?> 
                        <form action="" method="post" enctype="multipart/form-data">
                            <h1>STUDENT RENEWAL</h1>
                            <div class="mb-3 col-lg-5 offset-lg-4">
                                <label for="exampleFormControlInput1" class="form-label">REG NO:</label>
                                <input type="text"class="form-control"id="exampleFormControlInput1"placeholder="Register Num"name="reg" />
                            </div>
                            <div class="mb-3 col-lg-5 offset-lg-4">
                                <input type="submit"class="form-control bg-success"name="go"id="exampleFormControlInput1"value="Share">
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
         <?php
                    if(isset($_POST['BUSPASS']))
                    {
                        $result = mysqli_query($con,"select * from stureg where reg='$_SESSION[regno]'");
                    ?>
                    
                            <table class="table bg-info">
                                <thead>
                                    <tr>
                                        <th scope="col"> NAME</th>
                                        <th scope="col">REG NO</th>
                                        <th scope="col">DEPARTMENT</th>
                                        <th scope="col">MAIL ID</th>
                                        <th scope="col">ADDRESS</th>
                                        <th scope="col">CONTACT</th>
                                        <th scope="col">FROM</th>
                                        <th scope="col">TO</th>
                                        <th scope="col">FARE</th>
                                        <th scope="col">BUS ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    
                                            while ($row= $result->fetch_assoc())
                                            {
                                        ?>
                                        
                                                <tr>
                                                <th><?php echo $row["name"]; ?></th>
                                                <td><?php echo $row["reg"]; ?></td>
                                                <td><?php echo $row["dept"]; ?></td>
                                                <td><?php echo $row["mid"]; ?></td> 
                                                <td><?php echo $row["ad"]; ?></td>
                                                    <td><?php echo $row["cont"]; ?></td>
                                                    <td><?php echo $row["frm"]; ?></td>
                                                    <td><?php echo $row["too"]; ?></td>
                                                    <td><?php echo $row["fare"]; ?></td>
                                                    <td><?php echo $row["busid"]; ?></td>
                                                    <td>
		                                                <a href="print.php" target="_blank" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print</a>
                                                    </td>
                                                </tr>
                                            
                                        <?php
                                            }
                                    
                                        }

                                    ?>
                                    </tbody>
                            </table>
  </div>
</div> 
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'db.php';

if(isset($_POST['go']))
{
    ?>
    <div class="container col-lg-6">
        <form method="POST" action="">
    <table class="table bg-secondary">
        <tbody>
                                <?php
    $select=mysqli_query($con,"select * from stureg where reg='$_POST[reg]'");
    $_SESSION['reg']=$_POST['reg'];
    while($row=mysqli_fetch_assoc($select))
    {
         ?>
     <tr>
        <th scope="col"> NAME</th>
        <td><input type="text" name="a" value="<?php echo $row["name"]; ?>" disabled></td>
    </tr>
    <tr>
        <th scope="col">REG NO</th>
        <td><input type="text"name="b" value="<?php echo $row["reg"]; ?>"disabled></td>
    </tr>
    
    <tr>
        <th scope="col">DEPARTMENT</th>
      <td><input type="text"name="c" value="<?php echo $row["dept"]; ?>"disabled></td> 
    </tr>
    
    <tr>
        <th scope="col">MAIL</th>
      <td><input type="text"name="d" value="<?php echo $row["mid"]; ?>"disabled></td>  
    </tr>
    
    <tr>
        <th scope="col">ADDRESS</th><td><input type="text"name="e" value="<?php echo $row["ad"]; ?>"disabled></td>  </tr>
    
    <tr>
        <th scope="col">MOBILE</th>
        <td><input type="text"name="f" value="<?php echo $row["cont"]; ?>"disabled></td>  </tr>
    <tr>
        <th scope="col">FROM</th>
         <td><input type="text" name="g"value="<?php echo $row["frm"]; ?>"disabled></td></tr>
    <tr>
        <th scope="col">TO</th>
         <td><input type="text"name="h" value="<?php echo $row["too"]; ?>"disabled></td></tr>
    <tr>
        <th scope="col">FARE</th>
         <td><input type="text"name="i" value="<?php echo $row["fare"]; ?>"></td></tr>
    <tr>
        <th scope="col">BUS ID</th>
         <td><input type="text"name="j" value="<?php echo $row["busid"]; ?>"disabled></td></tr>
    

    <?php
        }
        ?>

</thead>
</table>
<div class="text-center">
       <input type="submit" value="Renewal" class="btn btn-primary mb-3"name="ren">

</div>
    </form>
<?php
}
?>
<?php
include 'db.php';
if(isset($_POST['ren']))
{
    $upp=mysqli_query($con,"update stureg set fare='$_POST[i]' where reg='$_SESSION[reg]' ");
    if($upp)
    {
        echo "<script>window.alert('Success'); </script>";
    }
    else
    {
        echo '<script>window.alert("Failed"); </script>';
    }
}
?>

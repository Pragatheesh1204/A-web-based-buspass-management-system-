
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
</style>
  <body>
      <?php include "nav.php";?>
      
      <div class="container ">
          <div class="row p-5">
              <div class="col-lg-4">
                  <div class="bg-info rounded  p-5 h-10">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="submit"class="form-control bg-primary"name="stu"id="exampleFormControlInput1"value="Student Regsiter">
                        </div>
                        <div class="mb-3">
                            <input type="submit"class="form-control bg-primary"name="busR"id="exampleFormControlInput1"value="Bus Register">
                        </div>
                        <div class="mb-3">
                            <input type="submit"class="form-control bg-primary"name="driver"id="exampleFormControlInput1"value="Drive Register">
                        </div>
                        <div class="mb-3">
                            <input type="submit"class="form-control bg-primary"name="pass"id="exampleFormControlInput1"value="Pass Information"/>
                        </div>
                           <div class="mb-3">
                            <input type="submit"class="form-control bg-primary"name="viewDriver"id="exampleFormControlInput1"value="View Driver"/>
                        </div>
                           <div class="mb-3">
                            <input type="submit"class="form-control bg-primary"name="viewBus"id="exampleFormControlInput1"value="View Bus Details"/>
                        </div>
                    </form> 
                  </div>
              </div>
              <div class="col-lg-8 ">
                <div class="bg-secondary rounded h-100">
                    <div class="container">
                       <div class="row">
                           <div class="col-lg-8 offset-lg-2">
                               <div class="bg-primary text-white text-center mt-5">
                                    <h5 class="p-2">ADMIN PANEL</h5>
                                    <!-- <h6 class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur minus ab quod. Earum fugit beatae consequatur nobis error inventore qui distinctio laudantium reprehenderit doloribus, cumque atque id sint incidunt consectetur?</h6> -->
                               </div>
                           </div>
                           <?php
                                if(isset($_POST['stu']))
                                {
                            ?>
                           <div class="col-lg-6 text-white offset-lg-3 mt-4">
                                <h4 class="text-center ">REGISTRATION FORM</h4>
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                                        <input type="text"class="form-control"id="exampleFormControlInput1"placeholder="Student Name"name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Student Password</label>
                                        <input type="password"class="form-control"id="exampleFormControlInput1"placeholder="Student Password"name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Register Number</label>
                                        <input type="text"class="form-control"id="exampleFormControlInput1"placeholder="Register Number"name="rn">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Department</label>
                                        <input type="text"class="form-control"id="exampleFormControlInput1"placeholder="Department"name="dep">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email"class="form-control"id="exampleFormControlInput1"placeholder="Student MailID"name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                                        <input type="text"class="form-control"id="exampleFormControlInput1"placeholder="Address"name="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                        <input type="number"class="form-control"id="exampleFormControlInput1"placeholder="Mobile Number"
                  name="contact"
                  maxlength="10"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >From</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="From"
                  name="from"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >To</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="To"
                  name="to"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Bus Fare </label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Student busFare"
                  name="busfare"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Bus ID</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Student Busid"
                  name="busid"
                />
              </div>

              <div class="mb-3">
                 <input type="submit"
                  class="form-control bg-info"
                  name="std"
                  id="exampleFormControlInput1"
                  value="Register"
                />
              </div>
            </form>
                </div>
                </div>
                </div>
               <?php
}
?>
<?php
if(isset($_POST['busR']))
{
?>

<!-- findbus -->
<div class="col-lg-6 text-white offset-lg-3 mt-4">
                               <h4 class="text-center ">BUS REGISTER</h4>
                   <form action="" method="POST">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >bus id</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="bus id"
                  name="id"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Bus number</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Bus number"
                  name="busnum"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >No.of.Seats</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Seats"
                  name="seats"
                />
              </div>
               
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >From</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="From"
                  name="from"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >To</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="To"
                  name="to"
                />
              </div>
              <div class="mb-3">
                 <input type="submit"
                  class="form-control bg-info"
                  name="bus"
                  id="exampleFormControlInput1"
                  value="Register"
                />
              </div>
            </form>
                </div>


<?php
}
?>

<!-- findriver -->
<?php
if(isset($_POST['driver']))
{
?>
<div class="col-lg-6 text-white offset-lg-3 mt-4">
                               <h4 class="text-center ">DRIVER REGISTER</h4>
                   <form action="" method="POST">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Driver Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Driver Name"
                  name="name"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Driver id </label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Driver id "
                  name="did"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Age </label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Age "
                  name="age"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >License no </label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="License no "
                  name="lic"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Address</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Address"
                  name="address"
                />
              </div>
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Contact</label
                >
                <div class="mb-3">
                <input
                  type="tel"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Contact"
                  name="contact"
                />
              </div>
                <label for="exampleFormControlInput1" class="form-label"
                  >Bus Id</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Bus Id"
                  name="busid"
                  maxlength="10"
                />
              </div>
               
              <div class="mb-3">
                 <input type="submit"
                  class="form-control bg-info"
                  name="dri"
                  id="exampleFormControlInput1"
                  value="Register"
                />
              </div>
            </form>
                </div>


<?php
}
?>
<?php
if(isset($_POST['pass']))
{
?>
<div class="col-lg-6 text-white offset-lg-3 mt-4">
                               <h4 class="text-center ">PASS INFORMATION</h4>
                   <form action="" method="POST">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Pass Information</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Information"
                  name="text"
                />
              </div>
              
              <div class="mb-3">
                 <input type="submit"
                  class="form-control bg-info"
                  name="go"
                  id="exampleFormControlInput1"
                  value="Share"
                />
              </div>
            </form>
                </div>
               
<?php
}
?>
 <?php
 include "./db.php";

    if(isset($_POST['viewDriver']))
    {
        $result = mysqli_query($con,"select * from driverreg");
        
     ?>
     <table class="table bg-info">
  <thead>
    <tr>
      
      <th scope="col">DRIVER NAME</th>
      <th scope="col">DRIVER ID</th>
      <th scope="col">DRIVER AGE</th>
      <th scope="col">LICENCE NO</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CONTACT</th>
      <th scope="col">BUS ID</th>
    </tr>
  </thead>
  <tbody>
    <?php
  
        while ($row= $result->fetch_assoc())
        {
    ?>
     <tr>
      <th><?php echo $row["dname"]; ?></th>
      <td><?php echo $row["did"]; ?></td>
      <td><?php echo $row["age"]; ?></td>
      <td><?php echo $row["icno"]; ?></td> 
      <td><?php echo $row["ad"]; ?></td>
        <td><?php echo $row["cont"]; ?></td>
         <td><?php echo $row["busid"]; ?></td>
    </tr>
    <?php
        }
  
    }

?>
</tbody>
</table>
<?php
include "./db.php";
if(isset($_POST['viewBus']))
{
          $result = mysqli_query($con,"select * from busreg");

 ?>
     <table class="table bg-info">
  <thead>
    <tr>
      
      <th scope="col">BUS ID</th>
      <th scope="col">BUS NO</th>
      <th scope="col">NO. OF SEATS</th>
      <th scope="col">FROM</th>
      <th scope="col">TO</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
  
        while ($row= $result->fetch_assoc())
        {
    ?>
     <tr>
      <th><?php echo $row["busid"]; ?></th>
      <td><?php echo $row["busno"]; ?></td>
      <td><?php echo $row["seat"]; ?></td>
      <td><?php echo $row["frm"]; ?></td> 
      <td><?php echo $row["too"]; ?></td>
   
    </tr>
    <?php
        }
  
    }

?>
</tbody>
</table>


            </div>
              </div>
          </div>
      </div>
  <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
include "./db.php";
if(isset($_POST['std']))
{
    $name=$_POST['name'];
$pass=$_POST['password'];
$reg_no=$_POST['rn'];
$dept=$_POST['dep'];
$mail=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['contact'];
$from=$_POST['from'];
$to=$_POST['to'];
$fare=$_POST['busfare'];
$bus_id=$_POST['busid'];

    $insert= mysqli_query($con,"insert into stureg(name,pass,reg,dept,mid,ad,cont,frm,too,fare,busid) values ('$name','$pass','$reg_no','$dept','$mail','$address','$phone','$from','$to','$fare','$bus_id')");
    if($insert){
        echo '<script>alert("Registration Successfull :)")</script>;';
         if(mail($_POST['email'],"Your Register Number is",$_POST['rn']))  
         {
           //  echo"mail sent";
            echo'<script>window.alert("Your register number is send your mail id"); </script>';
             
         }
    }
    else{
        echo '<script>alert("Something Went Wrong :(")</script>;';
    }
}
if(isset($_POST['bus']))
{
    $insert=mysqli_query($con,"insert into busreg values('$_POST[id]','$_POST[busnum]','$_POST[seats]','$_POST[from]','$_POST[to]')");
    if($insert){
        echo '<script>alert("Registration Successfull :)")</script>;';
    }
    else{
        echo '<script>alert("Something Went Wrong :(")</script>;';
    }
}
if(isset($_POST['dri']))
{
     $insert=mysqli_query($con,"insert into driverreg values('$_POST[name]','$_POST[did]','$_POST[age]','$_POST[lic]','$_POST[address]','$_POST[contact]','$_POST[busid]')");
    if($insert){
        echo '<script>alert("Registration Successfull :)")</script>;';
    }
    else{
        echo '<script>alert("Something Went Wrong :(")</script>;';
    }
}
if(isset($_POST['go']))
        {
        // $con=mysqli_connect("localhost","root","","bus1");
        $insert=mysqli_query($con,"insert into mailcon values('admin','$_POST[text]')");
        if($insert)
        {
$result = mysqli_query($con,"select * from stureg ");

         while ($row= $result->fetch_assoc())

        {
             
       if(mail($row['mid'],"post from college transportation",$_POST['text']))  
         {
           //  echo"mail sent";
        // echo'<script>window.alert("sent"); </script>';
             
         }
         }
         echo'<script>window.alert("sent"); </script>';
        }
          
        }

   
?>

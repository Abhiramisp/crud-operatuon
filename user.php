<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="insert into  crud (name, email, mobile,password ) values('$name', '$email', '$mobile', '$password')";
  $result = mysqli_query($con, $sql);
  if($result){
    // echo "Data insterted succesfully"
    header("location:display.php");
  
  
  }
  else{
    die(mysqli_error($con));
  }
}
?>





<html>
    
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Crud Operation</title>
    </head>
    <body>
<div class="container my-5">
<form method="post">
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off">
    
  </div>
<div class="form-group">
    <label>Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter number" name="mobile" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"  placeholder="Enter pasword" name="password" autocomplete="off">
    
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </body>
</html>
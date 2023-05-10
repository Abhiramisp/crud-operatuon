<?php
include 'connect.php';
$id= $_GET['updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email']; 
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="update crud set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id ";
  $result = mysqli_query($con, $sql);
  if($result){
    // echo "Data updated succesfully";
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
    <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off" value="<?php echo $name; ?>">
    
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off" value="<?php echo $email; ?>">
    
  </div>
<div class="form-group">
    <label>Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter number" name="mobile" autocomplete="off"value="<?php echo $mobile; ?>">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"  placeholder="Enter pasword" name="password" autocomplete="off" value="<?php echo $password;  ?>">
    
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </body>
</html>
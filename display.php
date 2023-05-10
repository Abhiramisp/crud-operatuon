<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Crud operation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container ">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user </a>
    
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'connect.php';
$sql='select * from crud';
$result= mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id= $row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $pasword=$row['password'];
        // $operation=$row['$operation'];
        echo' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$pasword.'</td>
        <td>
<button class="btn btn-primary"><a href="update.php? updateid='.$id.' " class="text-light">Update</a>
</button>
<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a>

</button>
</td> 
      </tr>
        ';

    }
}
?>

  </tbody>
</table>
    </div>
</body>
</html>>
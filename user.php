
<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql="insert into `crud` (name,address,email,password) 
    values('$name','$address','$email','$password')";
    $result=mysqli_query($con, $sql);
    if($result){
        echo " Data inserted succesfully";
    }else{
        die(mysql_error($con));

    }



}

?>
<?php include 'header.php' ?>



<div class="container my-5">
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" name="name" autocomplete="off" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="name" class="form-control" id="exampleInputEmail1"  name="address" autocomplete="off" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1"   name="email" autocomplete="off" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" autocomplete="off" >
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php include 'footer.php' ?>

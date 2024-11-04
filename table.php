<?php include 'header.php' ?>
<?php include 'connect.php' ?>


<div class="container my-5">
    <button class="btn btn-primary"><a  href="user.php" class=text-light>ADD USER</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
  <tbody>
<?php
  $sql="select * from crud";
  $result=mysqli_query($con, $sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $address=$row['address'];
        $email=$row['email'];
        $password=$row['password'];
        echo '   <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$address.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>
      <button  class="btn btn-primary"><a href="update.php?updateid='.$id.'" class=text-light>EDIT</button>
      <button  class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class=text-light>DELETE</button>
      </td>

    </tr>';

    }

  }
 
?>
  </tbody>
</table>

</div>
<?php include 'footer.php' ?>

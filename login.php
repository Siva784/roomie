<?php
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $seccode=$_POST['seccode'];
  $checkquery="SELECT * FROM `users` WHERE seccode='$seccode' and email='$email'";
  $result2=mysqli_query($conn, $checkquery);
    
    $count = mysqli_num_rows($result2);
    if($count==1)
    {
      $row1 = mysqli_fetch_row($result2);
      $_SESSION['user']=$email;
      $_SESSION['roomid']=$row1[2];
      echo "<script>location.href='splitamount.php'</script>";
    }
    else{
      echo "<script>alert('hello')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>
<body>
<?php
include('nav.php');
?>
<section>
  <div class="container-fluid text-center">    
  <div class="row content" id="tab1">
    <div class="col-sm-5" >

    </div>
    <div class="col-sm-2">
          <h2>Login</h2>
  <form action="#" method="POST" >
    <div class="form-group">
      <!-- <label for="email">Email</label> -->
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <!-- <div class="form-group"> -->
      <!-- <label >RoomId</label> -->
      <!-- <input type="text" class="form-control" id="roomid" placeholder="Enter RoomId" name="roomid">
    </div> -->
    <div class="form-group">
      <!-- <label >Security Code</label> -->
      <input type="text" class="form-control" id="seccode" placeholder="Enter Security Code" name="seccode">
    </div>
    
    <button type="submit" class="submit-btn" name="submit">Login</button>
  </form>
   
    </div>
    <div class="col-sm-5" >
    </div>
   
    </div>
  </div>

</section>
</body>
</html>
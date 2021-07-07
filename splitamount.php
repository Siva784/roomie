
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('head.php');
include('connection.php');
?>
<body>
<?php

include('nav.php');


if($_SESSION['user'])
{

}
else{
	echo "<script>location.href='login.php'</script>";
}
?>
<section>
  <div class="container-fluid">    
  <div class="row content" id="tab1">
    <div class="col-sm-5" >

    </div>
    <div class="col-sm-2">
          
  
    <div class="form-group">
      <label >Enter Amount</label>
      <input type="number" class="form-control" id="amount" value="10" placeholder="Enter amount" name="amount">

    </div>
    <div class="form-group">
      <label >split strategy</label><br>
      <label class="radio-inline">
      <input type="radio" name="optradio" id="optradio1" value="equal" onchange="splitamount()">Equally
    </label>
    
    <label class="radio-inline">
      <input type="radio" name="optradio" id="optradio2" value="different" onchange="splitamount()">Different
    </label>

    </div>
    <?php
    $roomid=$_SESSION['roomid'];
    $user=$_SESSION['user'];
    $query="SELECT `id`, `email` FROM `users` where roomid='$roomid' and email!='$user'  ";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    ?>
    <div id="part1" style="display:none">
    <form action="#" method="POST">
    <div class="form-group">
      <label >split amount for all</label>
      <input type="text" class="form-control"  placeholder="Enter Amount" id='splamount'  name="splamount">
    </div>
    <button type="submit" class="submit-btn">ADD</button>
  </form>
  </div>
  <div id="part2" style="display:none">
  <form action="#" method="POST">
    <?php
    while($row=mysqli_fetch_row($result)){
      ?>
    <div class="form-group">

      <label ><?php echo $row[1] ?></label>
      <input type="text" class="form-control"  placeholder="Enter Amount"   name="<?php echo $row[0] ?>">
    </div>
    <?php
    }
    ?>
    <button type="submit" class="submit-btn">Login</button>
  </form>
</div>
     <input type="number" class="form-control" style="display:none" id="count"  value="<?php echo $count?>" name="count">
    
  
   
    </div>
    <div class="col-sm-5" >
    </div>
   
    </div>
  </div>

</section>
<script>
function splitamount(){
  if(document.getElementById('optradio1').checked){
    document.getElementById('part1').style.display='block';
    document.getElementById('part2').style.display='none';
  var amount=document.getElementById('amount').value;
  var count=document.getElementById('count').value;
  
  document.getElementById('splamount').value=(amount/count).toFixed(2);
}
if(document.getElementById('optradio2').checked){
  document.getElementById('part1').style.display='none';
    document.getElementById('part2').style.display='block';
alert("Enter values differently");
  }
}
</script>
</body>
</html>

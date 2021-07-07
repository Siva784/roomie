
<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
session_start();
?>
<body>
<?php
include('nav.php');
?>

<section>
<div class="container-fluid ">    
  <div class="row content">
    
    <div class="col-sm-12" > 
      <img src="backmain.png" class="img-responsive" >
      
    </div>
    
  </div>
</div>
</section>
<section>
  <div class="container-fluid text-center">    
  <div class="row content" id="tab1">
    <div class="col-sm-4" >

    </div>
    <div class="col-sm-4">
    <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn" onclick="createroom()" style="font-size:18px">Create room</button>
          <button type="button"  class="toggle-btn" onclick="joinroom()" style="font-size:18px">join room</button>
    </div> 
      
  <form action="createroom.php" method="POST" id="createroom">
    <div class="form-group">
      <!-- <label for="email">Email</label> -->
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <!-- <label >RoomId</label> -->
      <input type="text" class="form-control" id="roomid" placeholder="Enter RoomId" name="roomid">
    </div>
    <div class="form-group">
      <!-- <label >Security Code</label> -->
      <input type="text" class="form-control" id="seccode" placeholder="Enter Security Code" name="seccode">
    </div>
    
    <button type="submit" class="submit-btn">Create</button>
  </form>
      <form action="joinroom.php" method="POST" id="joinroom">
        
    <div class="form-group"> 
     <!--  <label for="email">Email</label> -->
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <!-- <label >RoomId</label> -->
      <input type="text" class="form-control" id="roomid" placeholder="Enter RoomId" name="roomid">
    </div>
    <div class="form-group">
      <!-- <label >Security Code</label> -->
      <input type="text" class="form-control" id="seccode" placeholder="Enter Security Code" name="seccode">
    </div>
    
    <button type="submit" class="submit-btn">Join</button>
  </form>
    </div>
    <div class="col-sm-4" >
    </div>
   
    </div>
  </div>

</section>
<footer class="container-fluid text-center">
  <p>Designed my Mounika</p>
</footer>
<script>
        var x=document.getElementById("createroom");
        var y=document.getElementById("joinroom");
        var z=document.getElementById("btn");
        y.style.display="none";
        function joinroom(){
            x.style.display="none"
            y.style.display="block"
            z.style.left="160px";
   
           
        }
        function createroom(){
            y.style.display="none"
            x.style.display="block"
          z.style.left="0px";
        }
        </script>

</body>
</html>

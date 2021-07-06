<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Roomies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel ="stylesheet" href="pp.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      background-color: white;
      margin-bottom: 0;
      border-radius: 0;
      border-color: white;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
input{
  margin:15px 0;
}


  </style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:pink;font-size: 30px">Roomiee</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php" style="color:black;font-size: 20px">Home</a></li>
        <li><a href="#tab1" style="color:black;font-size: 20px">Create/Join</a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(!isset($_SESSION['user'])){
        ?>
        <li><a href="#" style="color:black;font-size:20px"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <?php 
      }
        else{
        ?>
        <li><a href="#" style="color:black;font-size:20px"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
      <?php }?>
      </ul>
    </div>
  </div>
</nav>
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
      <form action="#" id="joinroom">
        
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


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
  <div class="row content">
    <div class="col-sm-5" >

    <?php
    
    $id=$_SESSION['id'];
    $roomid=$_SESSION['roomid'];
    $user=$_SESSION['user'];
    if(isset($_POST['view']))
    {
      $spec=$_POST['spec'];
      $specname=$_POST['specname'];
      $query="select t.fromid,u.email,t.amount,t.time_date,t.purpose,t.status from transactions t,users u where u.id=t.fromid and t.toid='$id' and t.fromid='$spec'";
      $result=mysqli_query($conn,$query);
      $count=mysqli_num_rows($result);
    }
    
    ?>
    

    </div>
    <div class="col-sm-3 text-center">
        <div class="card">
          <h3>From <?php echo $specname ?></h3>
      <?php 
        while($row=mysqli_fetch_row($result)){?>
          <div class="card1">
            <table width="100%">
              <tr>
                <td>
            <h5><b>Dated</b> </h5>
            <?php 
            $pieces = explode(" ", $row[3]);
            echo $pieces[0]."<br>";
            // echo $pieces[1]."<br>";
             ?>

          </td>
          <td>
            <h3 style="color:red"><?php echo $row[2] ?> Rs</h3>
          </td>
        </tr>
        <tr>
            <td>
            <h5><b>purpose</b> </h5>
            <?php 
            echo $row[4]."<br>" ?>
          </td>
          <td>
            <!-- <button></button> -->
          </td>
        </tr>
        <tr>
            <td>
            <h5><b>status</b> </h5>
            <?php 
            if($row[5]==0)
            {
              echo "Not Received";
            }
            elseif($row[5]==1){
              echo "received";
            }
            else{
              echo "balanced";
            }

             ?>
            
          </td>
          <td>
            <?php 
            if($row[5]==0)
            {
               echo "<button>Received</button>";
            }
            
             ?>
           
          </td>
        </tr>
      </table>
          </div>
          
          
          
       <?php   
        }
      ?>
          
    </div>
    

    </div>
    <div class="col-sm-4" >
    </div>
   
    </div>
  </div>
  <?php
include('footer.php');
?>
</section>
<script>

</script>
</body>
</html>

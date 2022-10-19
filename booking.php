<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("config.php");
?>
<form action="bookingaction.php" method="post" enctype="multipart/form-data">
<div class="container" style="width:100%;margin-left:18%;margin-bottom: 5%;padding-top:10%" >

  <div class="row">
  <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 14px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
  </div>
<h2 style="text-align: center;margin-top: 6%;font-family: fantasy;"> PARISHHALL BOOKING </h2>
  <br>
   <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Family : </label>
      </div>
      
      <div class="col-md-6">
       <?php
     
     $sql=mysqli_query($con,"select * from tbl_family_registration");
     ?>
     <select name="family" class="form-control"  style="width:500px;" >
     <option value="0">---Select---</option>
     <?php
     while($row=mysqli_fetch_array($sql))
     {
     ?>
     <option value="<?php echo $row['family_id'] ?>"> <?php echo $row['family_name'];?> </option>
     <?php
     }
     ?>
     </select>
        
      </div>
    </div>
    <br>
     <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Event : </label>
      </div>
      
      <div class="col-md-6">
       <?php
     
     $sql=mysqli_query($con,"select * from tbl_event_registration");
     ?>
     <select name="event" class="form-control"  style="width:500px;" >
     <option value="0">---Select---</option>
     <?php
     while($row=mysqli_fetch_array($sql))
     {
     ?>
     <option value="<?php echo $row['event_id'] ?>"> <?php echo $row['event_name'];?> </option>
     <?php
     }
     ?>
     </select>
        
      </div>
    </div>
    <br>
    
    
     
   
    <br>
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Event Date : </label>
      </div>
      
     <div class="col-md-6">
        <input type="date" class="form-control" name="evdate" style="width:500px;"  required autofocus>
      </div>
    </div>
    
   <br>
     
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Booking Description: </label>
      </div>
      
      <div class="col-md-6">
        
        <textarea name="desc" class="form-control" style="width:500px;" placeholder="Description" required></textarea>
      </div>
    </div><br>
     
    <div class="row">
     <div class="col-md-3" style="text-align:right">
        <label>Time Details: </label>
      </div>
      
      <div class="col-md-6">
        
        <textarea name="detail" class="form-control" style="width:500px;" placeholder="Enter time details" required></textarea>
      </div>
    </div>
    
    <br>
    <div class="row">
      <input type="submit" name="submit" value="Boook" class="btn btn-primary" style="margin-left:63%">
    </div>
    </div>
     </div>
     </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>
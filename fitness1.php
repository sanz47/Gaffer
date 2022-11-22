<?php

 $user = 'root';
 $password = '';
 $database = 'test';
 $servername='localhost';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
 $sql = " SELECT * FROM player_info";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Squad Selection</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./fitness.css">
  <script src="/Users/sanz/Documents/Code/Project/fitness.js"></script>
  </head>
  <style>

</style>
<body>
 <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">Infomation</a>
  <a href="#contact">Contact</a>
  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="./logout_process.php">Logout</a>
  </div>
</div>
  
<section class="width-800px">
  <div class="container2">
  	<img src="./goalpost.png" alt="indoor_football" class="image" width="800"><div class="center">Team Selection</div>
</div>
</section>
<div class="manager">

<table id="customers" style="width:100%">
 <table>
             <tr>
                 <th>Player ID</th>
                 <th>Name</th>
                 <th>Height(cm)</th>
                 <th>Weight(kg)</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Availability</th>
        <th>Position</th>
        <th>Time to recover(days)</th>
        <th>Kit no</th>
        <th>Fit</th>
             </tr>
             <?php
                 while($rows=$result->fetch_assoc())
                 {
             ?>
             <tr>
                 
               </label>
                 <td><label class="container"><?php echo $rows['playerid'];?></label></td>
                 <td><label class="container"><?php echo $rows['name'];?></label></td>
                 <td><label class="container"><?php echo $rows['height'];?></label></td>
                 <td><label class="container"><?php echo $rows['weight'];?></label></td>
        <td><label class="container"><?php echo $rows['dob'];?></label></td>
        <td><label class="container"><?php echo $rows['gender'];?></label></td>
        <td><label class="container"><?php echo $rows['availability'];?></label></td>
        <td><label class="container"><?php echo $rows['position'];?></label></td>
        <td><label class="container"><?php echo $rows['timetorecover'];?></label></td>
        <td><label class="container"><?php echo $rows['kitno'];?></label></td>
                
             </tr>
             <?php
                 }
             ?>
         </table>
		 <form action="server/update_fitness.php" method="post">
		 <center>
		 <div class="form-group">
				<label for="playerid">Player ID</label>
					<input
					type="number"
					class="form-control"
					id="playerid"
					name="playerid"
					/>
				</div>
                <div class="form-group">
                <label for="fitness">Fitness Status: </label>
                
                  <label for="fit" class="radio-inline"
                    ><input
                      type="radio"
                      name="fitness"
                      value="y"
                      id="fit"
                    />Fit</label
                  >
                  <label for="unfit" class="radio-inline"
                    ><input
                      type="radio"
                      name="fitness"
                      value="n"
                      id="unfit"
                    />Unfit</label>
                
              </div>
			  <input type="submit" class="button button7" /></center>
			  </form>
 </div>
</body>
</html>
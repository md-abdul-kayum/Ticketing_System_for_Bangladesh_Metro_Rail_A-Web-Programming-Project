<?php
session_start();

?>
	
<?php  
 	if (isset($_POST['submit']))
 { 
  $message = "Are You sure you want to cancel the ticket";
  echo "<script type='text/javascript'>alert('$message');</script>";
 }
 ?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<title>Bangladesh Metro Rail | Admin_Booking_Details</title>
        
		
    <head>
        <title>Bangladesh Metro Rail | Admin_Booking_Details</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

	  <link rel="stylesheet" href="styles.css">
	  <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="nav1.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
  
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
    </head>
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="font-family:Comic Sans MS">
		<a class="navbar-brand" href="#" ><img class="logo1" src="dk_metro.png" alt=""> <b><span class="sp3">Bangladesh</span> Metro <span class="sp1">Rail</span></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="admin_add_train.php">Add Train </a>
                </li>
				
                <li class="nav-item">
                  <a class="nav-link" href="admin_add_route.php">Add Route</a>
                </li>
				
				<li class="nav-item active">
                  <a class="nav-link" href="admin_booking_details.php">Booking Details</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="home.php">Logout</a>
                </li>
				
            </div>
          </nav>
		  
		  
		  <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="metro4.webp" alt="home">
                </div> 
            </div>
          </div>
		 <br> <br>

		  <h1 class="mainheading">Booking Details</h1>
	     <hr/><br/>
		 <div class="myDiv">
		 <form  class="form-horizontal forminput" action="" method="post">
		   
		  <table class="center" border="9" cellpadding="6" >
        	<tr>
        		<th>   Booking ID   </th>
				<th>   Username   </th>
                <th>   Passenger Name  </th>	
				<th>   Gender   </th>
				<th>   Age   </th>			
        		<th>   Train Name	</th>
        		<th>   Seat Class	 </th>
				<th>   Booking Date   </th>
				<th>   Booked Seates   </th>
				<th>   Route  </th>
				<th>   Traveling Date  </th>
				<th>   Fare  </th>
				<th>   Cancel  </th>
				
        	</tr>
			<?php
				$username = "root"; 
				$password = ""; 
				$database = "myrailway"; 
				
				// CREATE CONNECTION

				$mysqli = new mysqli("localhost", $username, $password, $database); 

				//	check connection
				if ($mysqli->connect_error) 
				{
					die("Connection failed: " . $conn->connect_error);
				}

				$query = "SELECT * from bookings";

				if($result = $mysqli->query($query))
				{
					while ($row = $result->fetch_assoc())
					{
						$BookingID = $row["BookingID"];
						$Username = $row["Username"];
						$NameOfPassenger = $row["NameOfPassenger"];
						$Gender = $row["Gender"];
						$Age = $row["Age"];
						$TrainName=$row["TrainName"];
						$SeatClass = $row["SeatClass"];
						$BookingDate = $row["BookingDate"];
						$TotalBookedSeats = $row["TotalBookedSeats"];
						$FromStation= $row["FromStation"];
						$ToStation= $row["ToStation"];
						$TravelingDate = $row["TravelingDate"];
						$TotalFare = $row["TotalFare"];

						echo '<tr> 
									<td>'.$BookingID.'</td> 
									<td>'.$Username.'</td> 
									<td>'.$NameOfPassenger.'</td> 
									<td>'.$Gender.'</td> 
									<td>'.$Age.'</td> 
									<td>'.$TrainName.'</td> 
									<td>'.$SeatClass.'</td> 
									<td>'.$BookingDate.'</td> 
									<td>'.$TotalBookedSeats.'</td> 
									<td>'.$FromStation.' to '.$ToStation.'</td> 
									<td>'.$TravelingDate.'</td> 
									<td>'.$TotalFare.'</td> 
									<td ><input class="btn btn-danger " type="submit" value="Cancel" name="submit" /></td>
								</tr>';
					}
					$result->free();
				}
			?>
        <table>	
		
		<br/>
		<br/>
	
</form>
</div>

<!-- ---------------------------------------------fotter------------------------------------ -->

<footer class="foot">

<div class="footer-content">
    <!-- <div class="div_logo"></div> -->
    <img class="logo" src="dk_metro.png" alt="">
    <h3 class="h3"><span class="sp3">Bangladesh</span> Metro <span class="sp1">Rail</span></h3>
    <p>For more about us and get touched throw:</p>
    <ul class="social">
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
    </ul>
</div>

<div class="footer-bottom">

    <p>copyright &copy;2022 Md.Abdul <span class="sp2">Kaiyum</span></p>

</div>

</footer>
<!-- ---------------------------------------------fotter------------------------------------ -->
    </body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>
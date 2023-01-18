<?php
session_start();
$conn = mysqli_connect("localhost","root","","myrailway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit1']))
{

$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$sql = "INSERT INTO customers (username, name, email, phoneno, address, gender, age) VALUES ('$username', '$name','$email','$phoneno', '$address', '$gender',  '$age');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
	
}
else
{  
	$message = "Could not insert record...!"; 
}

$sql1 = "INSERT INTO user_login (username, passwords) VALUES ('$username', '$pw');";
	if(mysqli_query($conn, $sql1))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}

	echo "<script type='text/javascript'>alert('$message');</script>";

}
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<title>Bangladesh Metro Rail | UserRegistration</title>
 	
    <head>
        <title>Bangladesh Metro Rail | UserRegistration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
		
	    <link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="nav1.css">
        <link rel="stylesheet" href="form.css">
        <link rel="stylesheet" href="registration.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<SCRIPT src="validationregistration.js"></SCRIPT>
		<SCRIPT src="validationlogin.js"></SCRIPT>
		<SCRIPT src="validationloginadmin.js"></SCRIPT>

		<style>
			body{
				background: url(metro2.jpg);
				background-repeat: no-repeat;
                background-position: cover;
                background-attachment: fixed;
                background-size: 100%;
			}
		</style>

    </head>
	
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
	
	<div id="loginModaladmin" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
            <div class="modal-header" id="clr2">
                <h4 class="modal-title" style="font-family:Didot, serif; font-size: 30px;" > 
                   Admin Login
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;

                </button>
            </div>
            <div class="modal-body" id="clr">
			    	
				<form id="clr1" action="login.php"  method="post" name="login" onsubmit="return validateloginadmin()">
				<div class="mylogin">
				<center>
	    <div class="form">
        <input type="text" id="AdminUsername" name="AdminUsername" class="form__input" autocomplete="off" placeholder=" " style="border: 2px solid #d62121;"/>
        <label for="Username" class="form__label"> Username </label>
        </div>
        <br>
        <div class="form">
        <input type="password" id="Password" name="Password" class="form__input" autocomplete="off" placeholder=" " style="border: 2px solid #d62121;"/>
        <label for="Passwords" class="form__label"> Password </label>
        </div>
        </center>
				
				<br/>
				<div class="text-center">
				<button style=" width:40%" type="button" class="btn btn-danger " class="close" data-dismiss="modal"><a> Close </a> </button>
				<INPUT style=" width:40%" class="btn btn-success " TYPE="Submit" value="Login" name="done" id="done" class="button">
				</div>
				</div>
				</form>
					
                
            </div>
        </div>
    </div>
</div>
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
            <div class="modal-header" id="clr2">
                <h4 class="modal-title" style="font-family:Didot, serif; font-size: 30px;" > 
                   User Login
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;

                </button>
            </div>
            <div class="modal-body" id="clr">
			    	
				<form id="clr1" action="login.php"  method="post" name="login">
				<div class="mylogin">
				<center>
	<div class="form">
        <input type="text" id="Username" name="Username" class="form__input" autocomplete="off" placeholder=" " style="border: 2px solid #d62121;"/>
        <label for="Username" class="form__label"> Username </label>
        </div>
        <br>
        <div class="form">
        <input type="password" id="Passwords" name="Passwords" class="form__input" autocomplete="off" placeholder=" " style="border: 2px solid #d62121;"/>
        <label for="Passwords" class="form__label"> Password </label>
        </div>
        </center>
				
				<br/>
				<div class="text-center">
				<button style=" width:40%" type="button" class="btn btn-danger " class="close" data-dismiss="modal"><a> Close </a> </button>
				<INPUT style=" width:40%" class="btn btn-success " TYPE="Submit" value="Login" name="submit" id="submit" class="button">
				</div>
				</div>
				</form>
					
                
            </div>
        </div>
    </div>
</div>
			<nav  class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="font-family:Comic Sans MS">
					<a class="navbar-brand" href="#" ><img class="logo1" src="dk_metro.png" alt=""> <b><span class="sp3">Bangladesh</span> Metro <span class="sp1">Rail</span></b></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
				  
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					  <ul class="navbar-nav ml-auto">
						<li class="nav-item ">
						  <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item ">
                        <a class="nav-link" href="search_train.php">Search</a>
                        </li>
						<li class="nav-item ">
						  <a class="nav-link " href="places.php" >Metro Station</a>
						
						</li>
						<li class="nav-item active" >
						  <a class="nav-link active" href="registration_page.php">Register</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link " id="log_in" data-toggle="Modal" data-target="#loginmodal" href="#" aria-disabled="true">Login</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#process">Contact</a>
						</li>
						<li class="nav-item">
                  <a class="nav-link " id="log_in_admin" data-toggle="Modal" data-target="#loginmodaladmin" href="#" aria-disabled="true">Admin</a>
                </li>
					  </ul>

					</div>
				  </nav>

				  
			<form action="registration_page.php" name="registration_page" method="post" style="border:1px solid #ccc;" onsubmit="return validate()">
			
				<div class="container" style="background: transparent;background: rgba(72,168,179,0.5); ">
					<center><h1 class="signupheading">User Registration</h1></center>
					<div class="signup">
					<hr/>
                        <div class="alert info">
						<span class="closebtn">&times;</span>  
						<strong>Info...!</strong>  Please fill up the form to create an account...!!!
						</div>
						
						
					
					  <div class="row">
						<div class="col-25">
						  <label for="name" style="font-family: trebuchet ms;"><b>Full Name :</b></label>
						</div>
						<div class="col-75">
						  
						  <input class="form-control" type="text" id="name" name="name" placeholder="Enter your First & Last Name. ." autocomplete="off" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="username" style="font-family: trebuchet ms;"><b>Username :</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="username" name="username" placeholder="Alphabets or Digits. ." autocomplete="off" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="email" style="font-family: trebuchet ms;"><b>Email:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="email" name="email" placeholder="your_email@gmail.com" autocomplete="off" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="phoneno" style="font-family: trebuchet ms;"><b>Phone No.:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="phoneno" name="phoneno" maxlength="11" placeholder="01xxxxxxxxx" autocomplete="off" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="address" style="font-family: trebuchet ms;"><b>Address:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="address" name="address" placeholder="Enter your Address. .">
						</div>
					  </div>
						
					  <div class="row">
						<div class="col-25">
						  <label for="gender" style="font-family: trebuchet ms;"><b>Gender:</b></label>
						</div>
						<div class="col-75">
						<INPUT type="radio" name="gender" value="Male" align="center" id="gender">Male
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="gender" value="Female" align="center" id="gender">Female
						</div>
					  </div>

					  <div class="row">
						<div class="col-25">
						  <label for="age" style="font-family: trebuchet ms;"><b>Age :</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="number" id="age" name="age" placeholder="Ener your Age. .">
						</div>
					  </div>

					  <div class="row">
						<div class="col-25">
						  <label for="password" style="font-family: trebuchet ms;"><b>Password:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="password" id="pw" name="pw" placeholder="Enter Password. ." required>
						</div>
					  </div>  
					 
					  <div class="row">
						<div class="col-25">
						  <label for="password" style="font-family: trebuchet ms;"><b>Repeat Password:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="password" id="cpw" name="cpw" placeholder="Repeat Your Password. ." required>
						</div>
					  </div> 
					   <div class="row">
							<p ><b>By creating an account you agree to our</b> <a href="#" style="color: aqua;">Terms & Privacy</a>.</p>
					   </div>	
						   <div class="text-center">
								<button style=" width:49.5%" class="rset" class="btn btn-warning " TYPE="Reset" value="Reset" id="reset">Reset</button>

								<button  style=" width:49.5%" class="sign" TYPE="Submit" value="Submit" name="submit1" id="submit" class="btn btn-success ">  Signup</button>
						</div>
				
				    </div>
				</div>

            </form>

			 <!-- ---------------------------------------------fotter------------------------------------ -->

 <footer class="mt-5" id="process">
	    <div class="container">
            <div class="row">
                <div class="col-lg-6">
				    <h1><span class="fa fa-question-circle"></span> Have a Complain...?</h1>
                    <br>
                    <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Complain</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your complain here.."></textarea>
                            <button type="button" class="btn">Submit Complain</button>
                        </div>
                        </form>
                </div>
                <div class="col-lg-6 ">
                    <h1><span class="fa fa-user"></span> Contact Info</h1>
                    <p class="mt-5"><span><i class="fa fa-envelope" aria-hidden="true"></i>    Gmail : bd_metro@kaiyum.com</span></p>
                    <p class="mt-3"><span ><i class="fa fa-phone" aria-hidden="true"></i>  Phone No : +88 01961859445</span></p>
                    <p class="mt-3"><span ><i class="fa fa-fax "></i>                      Telephone No : 16247</span></p>
                </div>
            </div>
        </div>
    </footer>
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
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
		<script>
			  $('#log_in').click(function(){
						$('#loginModal').modal();

					});

		</script> 
		
		<script>
      $('#log_in_admin').click(function(){
                $('#loginModaladmin').modal();

            });
</script>

    </body>
</html>
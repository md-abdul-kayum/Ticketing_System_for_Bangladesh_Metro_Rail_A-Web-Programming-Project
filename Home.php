<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>Bangladesh Metro Rail</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="nav1.css">
        <link rel="stylesheet" href="clock.css">
        <link rel="stylesheet" href="form.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
		<SCRIPT src="validationlogin.js"></SCRIPT>
		<SCRIPT src="validationloginadmin.js"></SCRIPT>
		<style>
.wrap{
	background-color:#FFFFFF;
	padding:0 10px;
	border:solid 1px;
	-o-box-shadow: 10px 10px 5px #888;
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 0px 0px 25px #666;

}

		</style>
    </head>
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50" onload="initClock()">
	    
        <nav  class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="font-family:Comic Sans MS">
            <a class="navbar-brand" href="#" ><img class="logo1" src="dk_metro.png" alt=""> <b><span class="sp3">Bangladesh</span> Metro <span class="sp1">Rail</span></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="Home.php"><span class="spn">Home</span> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="search_train.php"><span class="spn">Search</span></a>
                </li>
				
                <li class="nav-item ">
                  <a class="nav-link " href="places.php" ><span class="spn">Metro Station</span></a>
                
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="registration_page.php"><span class="spn">Register</span></a>
                </li>
				
                <li class="nav-item">
                  <a class="nav-link " id="log_in" data-toggle="Modal" data-target="#loginmodal" href="#" aria-disabled="true"><span class="spn">Login</span></a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="#process"><span class="spn">Contact</span></a>
                </li>
				<li class="nav-item">
                  <a class="nav-link " id="log_in_admin" data-toggle="Modal" data-target="#loginmodaladmin" href="#" aria-disabled="true"><span class="spn">Admin</span></a>
                </li>
              </ul>

            </div>
          </nav>

        <div class="jumbotron" >
            <div class="row">
                <div class="  col-lg-6">
					  <br/><h1 class="welcome">Welcome to <span class="spn1">Bangladesh</span> <span class="metro">Metro</span> <span class="spn2">Rail</span></h1>
					<div >
 <!--digital clock start-->
 <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>

    <script src="clock.js"></script>
    <!--digital clock end-->

							<div  Style="float:right;">
							<hr />
							<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="190px" onmouseover="nestop()" onmouseout="nestrt()">
								<div>
									<p class="lead" style="text-align:center;"><b>Hey dear...Are you looking for a  <span class="metro">Metro</span> tour? Then you are welcome to the official web site of <span class="spn1">Bangladesh</span> <span class="metro">Metro</span> <span class="spn2">Rail</span>. Just match your time, book a ticket and you are all set to make a ride in <span class="spn1">Bangladesh</span> <span class="metro">Metro</span> <span class="spn2">Rail</span></b></p>
									<hr class="my-4">
									<center><p><b>We believe in speed, safty and credibility.</b></p></center>
								</div>
							</marquee>
							</div>
				    </div>
                              
                </div>
				
                         <div class="col-lg-6">
						 <br/><div class="slider">
							<img src="home.webp" width="100%"; height="400px"; style="opacity: 75%;"/>
						</div>
                         </div>
		
            </div> 
        </div>

<marquee class="marque" bgcolor="#50AAB4 "  scrolldelay="1"><h5>Welcome To <span class="spn1">Bangladesh</span> <span class="metro">Metro</span> <span class="spn2">Rail</span>. Thank you for visiting <span class="spn1">Bangladesh</span> <span class="metro">Metro</span> <span class="spn2">Rail</span> web site. You are just one step away of booking ticket and make a dream journey in <span class="spn1">Bangladesh</span> <span class="metro">Metro</span> <span class="spn2">Rail</span>.</h5></marquee>


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
			    	
				<form id="clr1" action="login.php"  method="POST" name="login" onsubmit="return validateloginadmin()">
				<div class="mylogin">
				<!-- <div  ><label for="Username" class=" col-form-label"><b>Username :</b></label></div>
				<div ><input type="text" id="AdminUsername" size="30" maxlength="30" name="AdminUsername" autofocus placeholder="-- Username Here --" class=" form-control"/></div>
				<div >
					<label for="Password" class="col-form-label"><b>Password : </b></label>
				</div>
				<div >
					<input type="password" id="Password" size="30" maxlength="30" name="Password" placeholder="-- Password Here --" class=" form-control"/>
				</div> -->
				
        <center>
	      <div class="form">
        <input type="text" id="AdminUsername" name="AdminUsername" class="form__input" autocomplete="off" placeholder=" " />
        <label for="Username" class="form__label"> Username </label>
        </div>
        <br>
        <div class="form">
        <input type="password" id="Password" name="Password" class="form__input" autocomplete="off" placeholder=" " />
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
                <h4 class="modal-title" style="font-family: Arial, serif; font-size: 28px;" > 
                   User Login
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;

                </button>
            </div>
            
            <!-- <div class="modal-body" id="clr">
			    	
				<form id="clr1" action="Home.php"  method="POST" name="login" >
				<div class="mylogin">
				<div  ><label for="Username" class=" col-form-label"><b>Username :</b></label></div>
				<div ><input type="text" id="Username" size="30" maxlength="30" name="Username" autofocus placeholder="-- Username Here --" class=" form-control"/></div>
				<div >
					<label for="Password" class="col-form-label"><b>Password : </b></label>
				</div>
				<div >
					<input type="password" id="Passwords" size="30" maxlength="30" name="Passwords" placeholder="-- Password Here --" class=" form-control"/>
				</div> -->

				<!-- -------------Log In Style-2------------ -->
        <div class="modal-body" id="clr">
			    	
        <form id="clr1" action="login.php"  method="POST" name="login" >
				<div class="mylogin">
          <center>
				<div class="form">
        <input type="text" id="Username" name="Username" class="form__input" autocomplete="off" placeholder=" " />
        <label for="Username" class="form__label"> Username </label>
        </div>
        <br>
        <div class="form">
        <input type="password" id="Passwords" name="Passwords" class="form__input" autocomplete="off" placeholder=" " />
        <label for="Passwords" class="form__label"> Password </label>
        </div>
        </center>
           <!-- -----------------Log In Style-2------------ -->

				<br>
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
  
<about class="aboutus">
      <h1 class="mainheading">About Us</h1>
	  <hr/>
    
    <p id="p1">Dhaka is a city of traffic congestion. A lot of time is spent on traffic every day. For this, it is necessary to work on removing traffic congestion. Metro rail is one such step. Metro rail is the second largest project of the current government of Bangladesh. It's a long-time dream of Dhaka city. Metro rail will play an important role in reducing the pressure of a large number of passengers and vehicles in Dhaka. It is expected that the metro rail will carry 60,000 passengers per hour.  It will have stations on 16 points of the city. As a result, people will be able to move easily from one place to another. Work on the metro rail began on June 26, 2016 and It is expected that the metro rail can be partially open at the end of 2022.</p>
    
	<hr>
     </about> 

	<div >
		  <iframe src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Dhaka+(Bangladesh%20Metro%20Rail)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
	
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
    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>
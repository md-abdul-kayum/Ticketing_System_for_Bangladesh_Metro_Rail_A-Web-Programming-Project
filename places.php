
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>Bangladesh Metro Rail | Famous Places</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

		<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="nav1.css">
    <link rel="stylesheet" href="form.css">
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<SCRIPT src="validationlogin.js"></SCRIPT>
		<SCRIPT src="validationloginadmin.js"></SCRIPT>


<style>
</style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="font-family:Comic Sans MS">
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
                
                <li class="nav-item active">
                  <a class="nav-link " href="places.php" >
                  Metro Station
                  </a>
				  <li class="nav-item">
                  <a class="nav-link" href="registration_page.php">Register</a>
                </li>
                
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

<!--
    Carousel
-->

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
        <input type="text" id="Username" name="Username" class="form__input" autocomplete="off" placeholder=" " />
        <label for="Username" class="form__label"> Username </label>
        </div>
        <br>
        <div class="form">
        <input type="password" id="Passwords" name="Passwords" class="form__input" autocomplete="off" placeholder=" " />
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


          <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="station2.jpg" alt="dhaka">
                    <div class="carousel-caption d-none d-md-block">
					    <!-- <h2>Travel Quotes </h2>
                        <p>“TWENTY YEARS FROM NOW YOU WILL BE MORE DISAPPOINTED BY THE THINGS YOU DIDN’T DO THAN BY THE ONES YOU DID DO” </p>   -->
                        <h4><span class="badge badge-danger"> ~ Uttara Metro Rail Station ~ </span>		</h4>
                        
                    </div>
                </div>
              
                <div class="carousel-item ">
                    <img class="d-block img-fluid" src="station1.jpg" alt="buffet">

                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h2>Travel Quotes </h2>
                        <p>” THE REAL VOYAGE OF DISCOVERY CONSISTS NOT IN SEEKING NEW LANDSCAPES, BUT IN HAVING NEW EYES.” </p>     -->
                        <h4><span class="badge badge-danger">~ Agargaon Metro Rail Station ~</span></h4>
				   </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block img-fluid" src="station4.jpg" alt="Alberto">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h2>Travel Quotes </h2>
                        <p>“I WOULD RATHER OWN A LITTLE AND SEE THE WORLD THAN OWN THE WORLD AND SEE A LITTLE OF IT.” </p>    -->
                        <h4><span class="badge badge-danger">~ Motijheel Metro Rail Station ~</span></h4>
					</div>

                </div>

            </div>
            <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active "></li>
                <li data-target="#mycarousel" data-slide-to="1"></li>
                <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <a href="#mycarousel" class="carousel-control-prev" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
            <a href="#mycarousel" class="carousel-control-next" role="button" data-slide="next"><span class="carousel-control-next-icon"></span></a>
       
     
        <button class="btn btn-danger btn-sm " id="carouselButton">
            <span class="fa fa-pause"></span>
        </button>


          </div>
          
          <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; length:12rem;">
                        <img src="metro7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                         <center> <h5 class="card-title">From Uttara to Motijheel</h5>
                          <p class="card-text"><h6>Timing:</h6> 8:00am</p>
                          <p class="card-text"><h6>Timing:</h6> 12:00pm</p>
                          <p class="card-text"><h6>Timing:</h6> 4:00pm</p>
                          <a href="search_train.php" class="btn btn-primary">Check Details</a>
                          </center>
                      </div>
                    </div>
                </div>
                    <div class="col-lg-4">
                      <div class=" card" style="width: 18rem; length:12rem;">
                        <img src="metro7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <center>
                          <h5 class="card-title">From Motijheel to Uttara</h5>
                          <p class="card-text"><h6>Timing:</h6> 6:00am</p>
                          <p class="card-text"><h6>Timing:</h6> 1:00pm</p>
                          <p class="card-text"><h6>Timing:</h6> 7:30pm</p>
                          <a href="search_train.php" class="btn btn-primary">Check Details</a>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card" style="width: 18rem; length:12rem;">
                        <img src="metro7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <center>
                          <h5 class="card-title">From Uttara to Kamalapur</h5>
                          <p class="card-text"><h6>Timing:</h6> 9:00am</p>
                          <p class="card-text"><h6>Timing:</h6> 11:00pm</p>
                          <p class="card-text"><h6>Timing:</h6> 2:25pm</p>
                          <a href="search_train.php" class="btn btn-primary">Check Details</a>
                          </center>
                        </div>
                        </div>
                      </div>  
        
            </div>
          
          <br/>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="metro7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <center>
                          <h5 class="card-title">From Kamalapur to Uttara</h5>
                          <p class="card-text"><h6>Timing:</h6> 5:50am</p>
                          <p class="card-text"><h6>Timing:</h6> 2:30pm</p>
                          <p class="card-text"><h6>Timing:</h6> 9:00pm</p>
                          <a href="search_train.php" class="btn btn-primary">Check Details</a>
                          </center>
                      </div>
                    </div>
                </div>
                    <div class="col-lg-4">
                      <div class=" card" style="width: 18rem;">
                        <img src="metro7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <center>
                          <h5 class="card-title">From Agargaon to Uttara</h5>
                          <p class="card-text"><h6>Timing:</h6> 10:00am</p>
                          <p class="card-text"><h6>Timing:</h6> 4:30pm</p>
                          <p class="card-text"><h6>Timing:</h6> 6:30pm</p>
                          <a href="search_train.php" class="btn btn-primary">Check Details</a>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card" style="width: 18rem;">
                        <img src="metro7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <center>
                          <h5 class="card-title">From Uttara to Agargaon</h5>
                          <p class="card-text"><h6>Timing:</h6> 9:00am</p>
                          <p class="card-text"><h6>Timing:</h6> 11:00pm</p>
                          <p class="card-text"><h6>Timing:</h6> 2:25pm</p>
                          <a href="search_train.php" class="btn btn-primary">Check Details</a>
                          </center>
                        </div>
                        </div>
                      </div>  
        
            </div>
          </div>

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

	  <script>
		$(document).ready(function(){
			$('#mycarousel').carousel({interval : 2000});
			$('#carouselButton').click(function(){
				if($('#carouselButton').children("span").hasClass('fa-pause')){
					$('#mycarousel').carousel('pause');
					$('#carouselButton').children("span").removeClass('fa-pause');
					$("#carouselButton").children("span").addClass('fa-play');
				}
				else if($('#carouselButton').children("span").hasClass('fa-play')){
					$('#mycarousel').carousel('cycle');
					$('#carouselButton').children("span").removeClass('fa-play');
					$("#carouselButton").children("span").addClass('fa-pause');
				}

								});
		
		});
	</script>

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
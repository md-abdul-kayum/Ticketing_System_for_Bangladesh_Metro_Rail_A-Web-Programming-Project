
<!DOCTYPE html>
<html lang="en">

    <head>

        <!--Meta Data -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Bangladesh Metro Rail | SearchTrains </title>
        <!--Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
         <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="styles.css">
       <link rel="stylesheet" href="footer.css">
       <link rel="stylesheet" href="button.css">
       <link rel="stylesheet" href="nav1.css">
       <link rel="stylesheet" href="form.css">
       
	   <SCRIPT src="validationlogin.js"></SCRIPT>
	   <SCRIPT src="validationloginadmin.js"></SCRIPT>

    </head>

    <style type="text/css">
    body {
    background-image: url(1a.jpg);
    -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
  }
  .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #6699ff;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
  </style> 

    <body>
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
                <li class="nav-item active">
                  <a class="nav-link" href="search_train.php">Search</a>
                </li>
				
                <li class="nav-item ">
                  <a class="nav-link " href="places.php" >Metro Station</a>
                
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="registration_page.php">Register</a>
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
	<br/><br/><br/>
  
    <div class="site-wrapper">
      <h1 class="mainheading">Search Train</h1>
        <div class="input-field col s40">
			<!-- <input type="text" name="search_text" id="search_text" class="form-control" placeholder="-- Search Train --" autofocus /> -->
      <div class="form1">
        <input type="text" id="search_text" name="search_text" class="form__input" autocomplete="off" placeholder=" "/>
        <label for="Search" class="form__label" style="background: white;"> Search train </label>
        </div>
			<br/>
			
	<div class="alert info">
	<span class="closebtn">&times;</span>  
	<strong>Warning!</strong> For booking you need to login first...!!!
	</div>

         </div>
         <div class="container">
            <h3>Search Result</h3>
         <div id="result"></div>
        </div>
    </div>
	

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
    </body>
</html>
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

<script>
    $(document).ready(function () {

        load_data();

        function load_data(query)
        {
            $.ajax({
                url: "fetchtrain.php",
                method: "POST",
                data: {query: query},
                success: function (data)
                {
                    $('#result').html(data);
                }
            });
        }
        $('#search_text').keyup(function () {
            var search = $(this).val();
            if (search != '')
            {
                load_data(search);
            } else
            {
                load_data();
            }
        });
    });
</script>
<?php 



if(isset($_POST['sub'])){
$address = $_POST['email'];
$message = $_POST['msg'];
$subject = "You have just received e-mail!";
$headers  = "From: ".$address;
if(empty($address) || empty($message)){
} else {
	$to = "team@shamsinasolar.com";
	$message ="Message: ".$message;
	if(mail($to, $subject, $message, $headers)){
 echo '<meta http-equiv="refresh" content="0; url=?successfull-submit">';
	}
  } 
}

if(isset($_POST['sub1'])){
$address1 = $_POST['email1'];
$subject1 = "You have just received e-mail!";
$headers1  = "From: ".$address1;
if(empty($address1)){
} else {
	$to = "team@shamsinasolar.com";
	$message1 ="E-mail: ".$address1;
	if(mail($to, $subject1, $message1, $headers1)){
 echo '<meta http-equiv="refresh" content="0; url=?successfull-submit">';
	}
  } 
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Shamsina</title>
	<link rel="icon" href="src/imgs/icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="src/css/style.css">
</head>

<body>
	<nav class="nav1 navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="src/imgs/logo2.png" alt="" loading="lazy">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto text-center">
					<li class="nav-item">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="facts.php">#ShamsinaFacts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="thoughts.php">Thoughts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="press.php">Press</a>
					</li>
					<li class="nav-item">
						<a class="nav-link la" href="#" data-toggle="modal" data-target="#model1">Join Our Pilot</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="head">
		<div class="container">
			<div class="header1">
				<img src="src/imgs/thoughts.png" alt="">
				<h1>Thoughts</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="thoughts row">
			<div class="col-lg-4 img-wrap">
				<img src="src/imgs/thoughts/img11.jpg" alt="" class="img-wrapped">
				<h4 class="img-h">Universal access to energy is a major challenge for the Arab world. Here's why</h4>
				<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">weforum</p>
				<p class="sm"><img src="src/imgs/user.png" class="mr-2" alt="">Sarah Mousa, Deena Mousa</p>
				<p class="img-p">
					<span>
					As home to some of the world’s top energy suppliers, the Arab world is often associated with energy wealth. Saudi Arabia, Iraq, the United Arab Emirates and Kuwait are listed among the top 10 global oil producers.
					</span>
				</p>
				<a href="https://www.weforum.org/agenda/2018/12/even-in-the-arab-world-access-to-energy-is-a-challenge/" target="_blank">Read More</a>
			</div>
			
		</div>
	</div>

			


	<footer class=footer1>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-lg-left text-center">
					<h5>Follow us:
						<a href="https://www.instagram.com/shamsina.solar/?hl=en"><img src="src/imgs/icons/insta.png" alt="insta" class="f1"></a>
						<a href="https://twitter.com/shamsinasolar?lang=en"><img src="src/imgs/icons/tw.png" alt="tw" class="f2"></a>
						<a href="https://www.linkedin.com/company/shamsina/"><img src="src/imgs/icons/li.png" alt="li" class="f3"></a>
						<a href="https://www.facebook.com/shamsina.solar"><img src="src/imgs/icons/fb.png" alt="fb" class="f4"></a>
					</h5>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-7 offset-lg-1">
							<a href="#"
							data-toggle="modal" data-target="#model2">
								<p class="org text-lg-right text-center">Sign-up for our newsletter</p>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#" data-toggle="modal" data-target="#model1">
								<p class="org text-lg-right text-center">Contact us</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	
<div class="modal fade" id="model1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="text-center">
       <img src="src/imgs/rocket.png" alt="">
       
        <h5>Join Our Pilot</h5>
      	<p>If you would like to pilot Shamsina's solar water heater, send us a message with information about your self and your water heating needs.</p>
      	<form action="thoughts.php" method="post">
          <div class="form-group">
            
            <input type="email" class="form-control" id="recipient-name" placeholder="E-mail" name="email" required>
          </div>
          <div class="form-group">
        
            <textarea class="form-control" id="message-text" placeholder="Message (optional)" name="msg"></textarea>
          </div>
        <div class="row" style="margin:0 19px;">
        <button type="button" class="btn cn" data-dismiss="modal" style="width:200px;margin:0 5px">Cancel</button>
        <input type="submit" class="btn jn" name="sub" value="Join" style="width:200px!important;margin:0 5px">
        </div>
        </form>
        </div>
        </div>
    </div>
  </div>
</div>




<div class="modal fade" id="model2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="text-center">
       <img src="src/imgs/rocket.png" alt="">
        <h5>Sign-up for our newsletter</h5>
      	<p>Enter your e-mail to get all excited news about Shamsina</p>
      	<form action="thoughts.php" method="post">
          <div class="form-group">
            <input type="email" class="form-control" id="recipient-name" placeholder="E-mail" name="email1" required>
          </div>
        <button type="button" class="btn cn" data-dismiss="modal" style="width:200px;margin:0 5px">Cancel</button>
        <input type="submit" class="btn jn" name="sub1" value="Signup" style="width:200px!important;margin:0 5px">
        </form>
        </div>
        </div>
    </div>
  </div>
</div>







	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="src/js/script.js"></script>
</body></html>

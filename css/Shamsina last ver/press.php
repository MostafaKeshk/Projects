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
	<nav class="nav1 navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
						<a class="nav-link" href="thoughts.php">Thoughts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="press.php">Press</a>
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
				<img src="src/imgs/presentation.png" alt="">
				<h1>Press</h1>
			</div>
		</div>
	</div>
	<div class="press">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img2.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<h5 class="img-h">EGYPTIAN SOLAR HEATER STARTUP SHAMSINA RECOGNISED IN HARVARD PRESIDENT’S INNOVATION CHALLENGE</h5>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thestartupscene</p>
							<p class="img-p">Created by sisters Deena and Sarah Mousa, Shamsina’s low-cost solar heaters were named as one of the top five finalists in the challenge’s Social Impact or Cultural Innovation track in a virtual prize ceremony earlier this week.</p>
							<a href="https://thestartupscene.me/BehindTheStartup/Egyptian-Solar-Heater-Startup-Shamsina-Recognised-in-Harvard-President-s-Innovation-Challenge" target="_blank">Read More</a>
						</div>
					</div>

					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img3.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<h5 class="img-h">President’s Innovation Challenge taps students’ ingenuity</h5>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">harvard</p>
							<p class="img-p">Developing a device that can provide continuous ventilation to patients, affordable solar technologies, and real-time incentives for healthier lifestyles are just three of the 25 projects named finalists in the 2020 President’s Innovation Challenge, the Harvard Innovation Labs announced today.</p>
							<a href="https://news.harvard.edu/gazette/story/2020/04/presidents-innovation-challenge-names-25-finalists-for-2020/" target="_blank">Read More</a>
						</div>
					</div>

					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img4.png" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<h5 class="img-h">10 start-ups that are helping to change the Arab world</h5>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">weforum</p>
							<p class="img-p">In 2018, $900 million was invested across the region in 386 deals, an increase of 31% in total funding in 2017, according to a report released ahead of the World Economic Forum on the Middle East and North Africa, which is taking place in Jordan on 6-7 April.</p>
							<a href="https://www.weforum.org/agenda/2019/04/10-start-ups-that-are-helping-to-change-the-arab-world/" target="_blank">Read More</a>
						</div>
					</div>

					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img5.png" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<h5 class="img-h">Meet the 100 Arab start-ups shaping the Fourth Industrial Revolution</h5>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">weforum</p>
							<p class="img-p">The World Economic Forum and the Bahrain Economic Development Board (EDB) have partnered and selected 100 Arab start-ups shaping the Fourth Industrial Revolution in 2019. This builds on the success of the initiative, which began in 2017.</p>
							<a href="http://widgets.weforum.org/arabstartups/" target="_blank">Read More</a>
						</div>
					</div>

					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img6.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<h5 class="img-h">What we learned at WEF Mena 2019</h5>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">wamda</p>
							<p class="img-p">The World Economic Forum (WEF) on the Middle East and North Africa (Mena) concludes today, drawing more than 1000 government, business and civil society leaders from 50 countries. Its aim, according to the statement beneath its logo is “committed to improving the state of the world”.</p>
							<a href="https://www.wamda.com/2019/04/what-learned-wef-mena-2019" target="_blank">Read More</a>
						</div>
					</div>

					<div class="row img-wrap pb-5">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img7.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<h5 class="img-h">Shamsina – Shamsina: Solar Water Heaters For The Energy Poor</h5>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thepollinationproject</p>
							<p class="img-p">Shamsina designs and manufactures affordable solar technologies for energy deficient communities, and equips the public with the tools to build innovative and clean energy solutions.</p>
							<a href="https://thepollinationproject.org/grants-awarded/shamsina-shamsina-solar-water-heaters-for-the-energy-poor/" target="_blank">Read More</a>
						</div>
					</div>


				</div>
				
<!--
				<div class="col-lg-4 d-lg-block d-none">
				<div class="read">
					<h4 class="ml-3 h5 mt-3">Read also...</h4>
					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img7.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<a href="https://thepollinationproject.org/grants-awarded/shamsina-shamsina-solar-water-heaters-for-the-energy-poor/" target="_blank" class="img-h">Shamsina – Shamsina: Solar Water Heaters For The Energy Poor</a>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thepollinationproject</p>
						</div>
					</div>
					
					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img7.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<a href="https://thepollinationproject.org/grants-awarded/shamsina-shamsina-solar-water-heaters-for-the-energy-poor/" target="_blank" class="img-h">Shamsina – Shamsina: Solar Water Heaters For The Energy Poor</a>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thepollinationproject</p>
						</div>
					</div>
					
					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img7.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<a href="https://thepollinationproject.org/grants-awarded/shamsina-shamsina-solar-water-heaters-for-the-energy-poor/" target="_blank" class="img-h">Shamsina – Shamsina: Solar Water Heaters For The Energy Poor</a>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thepollinationproject</p>
						</div>
					</div>
					
					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img7.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<a href="https://thepollinationproject.org/grants-awarded/shamsina-shamsina-solar-water-heaters-for-the-energy-poor/" target="_blank" class="img-h">Shamsina – Shamsina: Solar Water Heaters For The Energy Poor</a>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thepollinationproject</p>
						</div>
					</div>
					
					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img7.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<a href="https://thepollinationproject.org/grants-awarded/shamsina-shamsina-solar-water-heaters-for-the-energy-poor/" target="_blank" class="img-h">Shamsina – Shamsina: Solar Water Heaters For The Energy Poor</a>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thepollinationproject</p>
						</div>
					</div>
					
					<div class="row img-wrap">
						<div class="col-3 col-md-2 img-wrapped">
							<img src="src/imgs/thoughts/img7.jpg" alt="#">
						</div>
						<div class="col-9 col-md-10">
							<a href="https://thepollinationproject.org/grants-awarded/shamsina-shamsina-solar-water-heaters-for-the-energy-poor/" target="_blank" class="img-h">Shamsina – Shamsina: Solar Water Heaters For The Energy Poor</a>
							<p class="sm"><img src="src/imgs/document.png" class="mr-2" alt="">thepollinationproject</p>
						</div>
					</div>
				</div>
				</div>
-->
			</div>
		</div>
	</div>



	<footer class=footer2>
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
							<a href="#">
								<p class="org text-lg-right text-center" data-toggle="modal" data-target="#model2">Sign-up for our newsletter</p>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#">
								<p class="org text-lg-right text-center"data-toggle="modal" data-target="#model1" >Contact us</p>
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

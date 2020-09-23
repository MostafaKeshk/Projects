
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
						<a class="nav-link active" href="facts.php">#ShamsinaFacts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="thoughts.php">Thoughts</a>
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
				<img src="src/imgs/facts.png" alt="">
				<h1>#ShamsinaFacts</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="main">
			<p>#ShamsinaFacts is a series about energy access in the Arab world. The series mixes statistics, quotes and experiences to challenge misconceptions about energy poverty.</p>
		</div>
		<div class="facts row p-5 p-lg-0">
			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img1.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						الحزام الشمس العالمي - الذي يشمل منطقة الشرق الأوسط وشمال إفريقيا - هو المنطقة التي تحتوي على أعلى كمية من الإشعاع الشمسي في العالم.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						The Global Sun Belt – which includes the MENA region – is the area with the highest amount of solar radiation in the world.
					</span>
					<br>
					<a href="https://www.instagram.com/p/B4abFzdgGIg/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img2.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						استنشاق دخان الكيروسين يعادل تدخين عبوتين من السجائر يوميًا.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						Breathing kerosene fumes is the equivalent of smoking two packets of cigarettes a day. </span>
					<br>
					<a href="https://www.instagram.com/p/B4KcfLEgw5Z/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img3.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						”إن جعل الطاقة أنظفًا ومتاحًا عالميًا هو أكبر استثمار يمكننا القيام به في العالم“ —بيل غيتس

					</span>
					<br>
					———
					<br>
					<span class="ltr">
						“Making energy cleaner and universally available is the biggest investment we can make in the world” —Bill Gates, 2016 </span>
					<br>
					<a href="https://www.instagram.com/p/B4tkZWsAWVT/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img4.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						في الدرب الأحمر - أحد الأحياء في القاهرة - 25٪ من الأسر تسخين المياه باستخدام الكيروسين. </span>
					<br>
					———
					<br>
					<span class="ltr">
						In Al-Darb Al-Ahmar – a district in Cairo – an estimated 25% of families heat water over kerosene lamps. </span>
					<br>
					<a href="https://www.instagram.com/p/B33o-sqh_vz/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img5.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						قطاع غزة: الكهرباء متوفرة لمدة ٤ ساعات في اليوم.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						In the Gaza Strip, electricity is only available – on average – for 4 hours each day.
					</span>
					<br>
					<a href="https://www.instagram.com/p/B3kL-aVBCGK/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img6.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						في لبنان، يمكن أن تستمر انقطاع كهرباءي لمدة تصل إلى 13 ساعة في اليوم.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						In Lebanon, blackouts can reach 13 hours per day. </span>
					<br>
					<a href="https://www.instagram.com/p/B3Sk7txBvdG/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img7.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						في اليمن، ٤٦٪ من الأسر ليس لديها كهرباء.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						In Yemen, 46% of households lack access to electricity.</span>
					<br>
					<a href="https://www.instagram.com/p/B0b8f6Fh9cD/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 img-wrap">
				<img src="src/imgs/insta/img8.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						في السودان ، هناك ٢٤ مليون شخص بدون كهرباء - وكان معدل الكهرباء في عام 2014 كان ٤٠٪.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						In Sudan, 24 million go without electricity - and the electrificatin rate in 2014 was 40%. Sources: the Washington Post and the World Bank
					</span>
					<br>
					<a href="https://www.instagram.com/p/B0KiVAIhjQM/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>
<div class="col-12 text-center">
				<button>View more</button>
			</div>
			<div class="col-lg-3 img-wrap dis dis1">
				<img src="src/imgs/insta/img9.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						تؤثر تخفيضات دعم الطاقة على أسعار العديد من السلع الأساسية من خلال زيادة تكاليف التصنيع والنقل وتعريض المزيد من الناس لخطر الفقر.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						Energy subsidy cuts influence the price of many essential goods by increasing manufacturing and transportation costs and put more people at risk of poverty.
					</span>
					<br>
					<a href="https://www.instagram.com/p/Bz_wV_ZBUWP/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
			</div>
			
			<div class="col-lg-3 col-md-6 img-wrap dis dis1">
				<img src="src/imgs/insta/img10.jpg" alt="" class="img-wrapped">
				<p class="img-p text-center">
					<span class="rtl">
						قامت العديد من الدول العربية بخفض دعم الطاقة ، تاركة الكثير منها تكافح لدفع فواتير الكهرباء بانتظام.
					</span>
					<br>
					———
					<br>
					<span class="ltr">
						Many Arab countries have been cutting energy subsidies, leaving residents struggling to pay regular electricity bills.
					</span>
					<br>
					<a href="https://www.instagram.com/p/Bz3P3JDBBjM/" target="_blank"><img src="src/imgs/external.png" alt="ex"></a>
				</p>
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
							<a href="#">
								<p class="org text-lg-right text-center" data-toggle="modal" data-target="#model2">Sign-up for our newsletter</p>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#">
								<p class="org text-lg-right text-center" data-toggle="modal" data-target="#model1">Contact us</p>
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

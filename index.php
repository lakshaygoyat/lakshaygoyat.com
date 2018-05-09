<?php
		 error_reporting(0);
		 if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$no=$_POST['no'];
		$msg=$_POST['message'];
        $to = "lakshaygoyat@gmail.com";
         $subject = "Enquiry by Someone";
		 $message = "<h1>$email</h1><br/>";
		 $message .= "<h1>$no.</h1><br/>";
         $message .= "<h3>$msg<h3>";
         $header = "From:&to\r\n";
         $header .= "Cc:\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           ?><script> swal({
  title: "Thank you for contacting me",
  imageUrl: "images/thumbs-up.jpg"
});</script>
		   <?php
         }else {
			 ?>
			 <script>swal({
  title: "Error!",
  text: "Message not send",
  confirmButtonText: "OK"
});</script><?php
         } 
	}
		 ?>

<!DOCTYPE html>
<head>
<title>Lakshay Goyat || lakshay goyat</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="lakshaygoyat,lakshay"/>
<meta name="description" content="Resume/CV,lakshaygoyat.com ">
<meta name="author" content="lakshaygoyat"> 
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- gallery -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />

<!-- //gallery -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- CSS FOR the LOADER
<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/Preloader_8.gif) center no-repeat #fff;
}
</style>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<!--<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>-->


<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Gidugu" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!--<div class="se-pre-con"></div>-->
<div class="main" id="home">

<style>
#mainpic{
	width:330;
	height:300;
}

@media (max-width:640px){
	#mainpic {
		margin-top:40px;
		height:125px !important;
		width:100px !important;
	}

</style>


<!-- banner -->
	<div class="banner">
			<!--Slider-->
			<img src="images/lakshaypic.jpg" class="img-circle" alt="Lakshay" id="mainpic" width="330" height="300" style="border:none !important;"><br>
					<h2 style="color: #0099FF; font: italic bold 24x/30px Georgia, serif;">Lakshay Goyat</h2>
					<span id="head-title" style="color: #FF9966!important"></span>
				
		<br><br>
					<ul class="top-links">
									<li><a href="https://www.facebook.com/lakshay.goyat"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://github.com/lakshaygoyat/"><i class="fa fa-github"></i></a></li>
									<li><a href="https://www.linkedin.com/in/lakshaygoyat/"><i class="fa fa-linkedin"></i></a></li>
								</ul>
	</div>
<!-- //banner -->
	</div>
<!-- header -->
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#38A3A5;">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<!--<div class="logo">
						<h1><a class="navbar-brand" href="index.html"><span class="one">Lakshay</span></a></h1>
					</div>-->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1" id="cl-effect-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#home" class="scroll" href="index.html">Home</a></li>
							<li><a href="#about" class="scroll hvr-bounce-to-bottom">About</a></li>
							<li><a href="#education" class="scroll hvr-bounce-to-bottom">Experience</a></li>
							<li><a href="http://www.polymathsparse.blogspot.com">Blog</a></li>
							<li><a href="#gallery" class="scroll hvr-bounce-to-bottom">Projects</a></li>
							<li><a href="#mail" class="scroll hvr-bounce-to-bottom">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
</div>
<!-- //header -->
<!-- about -->
	<div class="about" id="about">
		<div class="container">
					<h3 class="w3l_head">About Me</h3>
				<div class="col-md-12 w3ls-agile-left">
					<div class="w3ls-agile-left-info">
						<h4>Title</h4>
						<p>Programmer / Web Developer</p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>Name</h4>
						<p>Lakshay Goyat</p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>Mobile</h4>
						<p> <a href="#mail">Contact Me </a></p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>Email Address</h4>
						<p><a href="mailto:lakshaygoyat@email.com">lakshaygoyat@gmail.com</a></p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>CV</h4>
						<p><a target="_blank" href="cv.pdf"><i><u>Download</u></i></a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
<!-- //about-bottom -->
<!-- /education -->
          <div class="education" id="education">
	    <div class="col-md-6 education-w3l">
		     <h3 class="w3l_head three">My Education</h3>
			  <div class="education-agile-grids">
				  <div class="education-agile-w3l">
				     <div class="education-agile-w3l-year">
					       <h4>2014-2018</h4>
						   <h6>Graduation Degree</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <br><h4>UPES</h4>
						   <p>B.Tech CSE </p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l two">
				     <div class="education-agile-w3l-year">
					       <h4>2013-2014</h4>
						   <h6>12th</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>K.L Arya D.A.V Public School </h4>
						   <p>12th</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>		 
			  </div>
		</div>
		<div class="col-md-6 skills">
		<h3 class="w3l_head two">My Skills</h3>
	     <div class="skill-agile">
						<div class='bar_group'>
						<div class='bar_group__bar thin elastic' label='Java' aria-valuenow="65"
  aria-valuemin="0" aria-valuemax="100" style="width:65%"></div>
						<div class='bar_group__bar thin elastic' label='PHP' aria-valuenow="75"
  aria-valuemin="0" aria-valuemax="100" style="width:75%"></div>
						<div class='bar_group__bar thin elastic' label='JS & JQuery' aria-valuenow="75"
  aria-valuemin="0" aria-valuemax="100" style="width:75%"></div>
						<div class='bar_group__bar thin elastic' label='AWS' aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:65%"></div>
						</div>
		 </div>
		 <div class="clearfix"> </div>
		</div>
		</div>
 <!-- //education -->
 <!-- /experience -->
 <div class="education" id="education two">
 		<div class="col-md-6 skills two">
		<h3 class="w3l_head two">More Skills</h3>
	     <div class="skill-agile">
			<div class="col-sm-4 abt-gd-left text-center">
			<div id="demo-pie-1" class="pie-title-center" data-percent="70"> <span class="pie-value"></span> </div>
			<h4>Machine Learning</h4>
		</div>
		
		<div class="col-sm-4 abt-gd-left text-center">		   
			<div id="demo-pie-3" class="pie-title-center" data-percent="80"> <span class="pie-value"></span> </div>
			<h4>MySQL</h4>
		</div>
		<div class="col-sm-4 abt-gd-left text-center">		   
			<div id="demo-pie-4" class="pie-title-center" data-percent="65"> <span class="pie-value"></span> </div>
			<h4>Python</h4>
		</div>
		<div class="clearfix"></div>
</div>
		 </div>
	    <div class="col-md-6 education-w3l">
		     <h3 class="w3l_head three">My Experience</h3>
			  <div class="education-agile-grids">
				  <div class="education-agile-w3l">
				     <div class="education-agile-w3l-year">
					       <h4>May 2016-July 2016</h4>
						   <h6>VSV Developer</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Summer Internship</h4>
						   <p>Back End Developer--Worked on PHP,JQuery.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l">
				     <div class="education-agile-w3l-year">
					       <h4>May 2017-July 2017</h4>
						   <h6>PK Online Ventures Pvt Ltd.</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Summer Internship</h4>
						 <p>Data Analyst</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l two">
				     <div class="education-agile-w3l-year">
					       <h4>Dec 2016- Jan 2017</h4>
						   <h6>BSNL</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Winter Internship</h4>
						   <p>Main Frame Distribution,Line Handling.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l three">
				     <div class="education-agile-w3l-year">
					       <h4>Aug 2016-Nov 2016</h4>
						   <h6>Coursera Online Courses (Stanford University).</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Certification</h4>
						 <p>Machine Learning.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l four">
				     <div class="education-agile-w3l-year">
					       <h4>May 2015-July 2015</h4>
						   <h6>NIIT</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Summer Training</h4>
						 <p>Core Java</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				 
			  </div>
		</div>

		 <div class="clearfix"> </div>
		</div>
 <!-- //experience -->
 <!-- /gallery-->
	<div class="portfolio" id="gallery">
		<div class="container">
				<h3 class="w3l_head">Projects</h3>
			<p class="w3ls_head_para">See My Work</p>
				<div class="agileits_portfolio_grids">
				<div class="col-md-4 agileits_portfolio_grid">
					<div class="agileinfo_portfolio_grid hovereffect">
						<a class="cm-overlay" href="images/proj1.png">
							<img src="images/proj1.png" alt="Transport Management System " class="img-responsive" style="height:192px !important">
							<p>Transport Management System</p>
							<div class="overlay">
								<h4>Transport Management System</h4>
								
							</div>
						</a>
					</div>
					<div class="agileinfo_portfolio_grid hovereffect">
						<a class="cm-overlay" href="images/stock.jpg">
							<img src="images/stock.jpg" alt="Regression Analysis Of Stock Market" class="img-responsive" style="height:192px !important">
							<p>Regression Analysis Of Stock Market</p>
							<div class="overlay">
								<h4>Regression Analysis Of Stock Market</h4>
							
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 agileits_portfolio_grid">
					<div class="agileinfo_portfolio_grid hovereffect">
						<a class="cm-overlay" href="images/proj6.png">
							<img src="images/proj6.png" alt="E-Commerce Website " class="img-responsive" style="height:192px !important">
							<p>E-Commerce Online Website</p>
							<div class="overlay">
								<h4>E-Commerce Online Website</h4>
								
							</div>
						</a>
					</div>
					<div class="agileinfo_portfolio_grid hovereffect">
						<a class="cm-overlay" href="images/proj2.png">
							<img src="images/proj2.png" alt="Online Test Application" class="img-responsive" style="height:192px !important">
							<p>Online Test Application</p>
							<div class="overlay">
								<h4>Online Test Application</h4>
								
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 agileits_portfolio_grid">
					<div class="agileinfo_portfolio_grid hovereffect">
						<a class="cm-overlay" href="images/tweet.jpg">
							<img src="images/tweet.jpg" alt="Twitter Sentiment Analysis" class="img-responsive" style="height:192px !important">
							<p>Twitter Sentiment Analysis</p>
							<div class="overlay">
								<h4>Twitter Sentiment Analysis</h4>
								
							</div>
						</a>
					</div>
					<div class="agileinfo_portfolio_grid hovereffect">
						<a class="cm-overlay" href="images/r1.jpg">
							<img src="images/r1.jpg" alt="Recommendation System " class="img-responsive" style="height:192px !important">
							<p>Recommendation System</p>
							<div class="overlay">
								<h4>Recommendation System</h4>
							
							</div>
						</a>
					</div>
				</div>


				<div class="clearfix"> </div>
			</div>

			
		</div>
	</div>
<!-- //gallery -->
<!-- mail -->
	<div class="mail" id="mail">
		<div class="container">
			<h3 class="w3l_head w3l_head1">Contact Me</h3>
			<div class="w3_mail_grids">
				<form action="index.php" method="POST">
					<div class="col-md-6 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " required="" name="name">
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="" name="email">
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="" name="no">
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
							</label>
						</span>
						
					</div>
					<div class="col-md-6 w3_agile_mail_grid">
						<textarea name="message" placeholder="Your Message" required="" id="m23"></textarea>
						<input type="submit" value="Submit" name="submit">
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	
<!-- //mail -->
<!-- footer -->
	<div class="w3l_footer">
		<div class="container">
		</div>
		<div class="w3l_footer_pos">
			<p>© All Rights Reserved</p>
		</div>
	</div>
<!-- //footer -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- skills -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#44c7f4',
                trackColor: '#fff',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#44c7f4',
                trackColor: '#fff',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#44c7f4',
                trackColor: '#fff',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
			
			$('#demo-pie-4').pieChart({
                barColor: '#44c7f4',
                trackColor: '#fff',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
        });
    </script>
<!-- skills -->	
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							 <!-- js -->
				<script src="js/jquery.tools.min.js"></script>
				<script src="js/jquery.mobile.custom.min.js"></script>
				<script src="js/jquery.cm-overlay.js"></script>
				<script>
					$(document).ready(function(){
						$('.cm-overlay').cmOverlay();
					});
				</script>
<!-- js files -->

<!--sweetalert-->
<link type="text/css" rel="stylesheet" href="dist/sweetalert.css"/>
<script src="dist/sweetalert.min.js"></script>
<script src="dist/sweetalert-dev.js"></script>

<!--Typed.js-->
	<script src="js/typed.js"></script>
    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["PROGRAMMER", "WEB DEVELOPER" ,"ANALYST"],
            typeSpeed: 250,
            loop: true,
            startDelay: 100
          });
      });
    </script>

<script src="js/bars.js"></script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- //js -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
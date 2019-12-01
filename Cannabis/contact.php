<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153563772-1"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-153563772-1');
		</script>
		<meta charset="utf-8">
		<meta name="description" content="CanDo">
  		<meta name="author" content="Brad Chaplin">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CanDo</title>
		<link rel="stylesheet" media="(min-width: 901px)" href="home.css" />
		<link rel="stylesheet" media="(max-width: 900px)" href="small.css" />
		<link rel="stylesheet" href="https://use.typekit.net/mcs4nef.css">
		<style>
		.error {color: #FF0000;}
		</style>
		<script type="application/javascript" src="index.js"></script>
	</head>

	<body>
				<div id="page-container">
   					<div id="content-wrap">


		<header>
			<div class="header">
				<a class="homelogo" href="home.html"><img src="images/logo.png"></a>
			</div>
		</header>

		<nav class="navstyle" id="nav">

			<li class="navstyle" title="navigation"> <a href="home.html" title="home">home</a> </li>

			<li class="navstyle" title="navigation"> <a href="products.html" title="products">products</a> </li>

			<li class="navstyle" title="navigation"> <a href="contact.html" title="contact">contact</a> </li>

			<li class="navstyle" title="navigation"> <a href="about.html" title="about">about</a> </li>

			<li class="navstyle" title="navigation"> <a href="faq.html" title="faq">faq</a> </li>

		</nav>

		<section class="middlecontent">
			<div class="section">

					<h1 class="homerun">We value our customers.</h1>
							<p class="serif2">Please let us know how we can better serve you, or let us know if you have a question that is not addressed on our <a href="faq.html" title="faq" class="sectionLink">frequently asked questions page.</a></p>
				<div class="flex-grid">
					<div class="col-1">
						<div class="sectionitemtitle3">
							<div class="serif-contact"><img class="padding-right" src="images/phone.png">Call us</div>
							<div class="sectionitem3"><a class="phonestyle" href="tel:1-800-CAN-DOIT">1-800-CAN-DOIT</a></div>
						</div>
						<div class="sectionitemtitle3">
							<div class="serif-contact"><img class="padding-right" src="images/location.png">Address</div>
							<div class="sectionitem3">
								420 Tree Bud Way<br>
								Jonestown, State<br>
								22222</div>
						</div>
					</div>
					<div class="col-2">
						<div class="sectionitemtitle3">
							<div class="serif-contact"><img class="padding-right" src="images/mail.png">Email</div>
							<div class="sectionitem3">info@cando.com</div>
						</div>
						<div class="sectionitemtitle3">
							<div class="serif-contact"><img class="padding-right" src="images/hours.png">Hours of operation</div>
							<div class="sectionitem3">Mon-Sat 10am-8pm <br> Sun 10am-6pm</div>
						</div>
					</div>
					
					<div class="col-3">
						
						<div class="container">
  						<form action="action_page.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

   						<div class="leftjustify">
   							<!--<label for="fname">First Name</label>-->
    						<input type="text" id="fname" name="firstname" max="32" placeholder="Your name.." value="<?php echo $fname;?>" required>
    						<span class="error">* <?php echo $fnameErr;?></span>
    						<!--<label for="lname">Last Name</label>-->
    						<input type="text" id="lname" name="lastname" max="32" placeholder="Your last name.." value="<?php echo $lname;?>" required>
    						<span class="error">* <?php echo $lnameErr;?></span>
   							<!--<label for="email">Email</label>-->
    						<input type="text" id="email" name="emailaddress" max="254" placeholder="Your email address.." value="<?php echo $email;?> required>
    						<span class="error">* <?php echo $emailErr;?></span>
    						<!--<label for="website">Website</label>-->
    						<input type="text" id="website" name="website" max="254" placeholder="Your website.." value="<?php echo $email;?> required>
    						<span class="error">* <?php echo $websiteErr;?></span>
    						<!--<label class="labletext" for="subject">Subject</label>-->
   							<textarea id="subject" name="subject" max="32" placeholder="Write something.." style="height:200px" <?php echo $subject;?> required></textarea>
   							<div class="rightjustify">
    						<input type="submit" value="Submit" title="submit">
    						</div>
    					</div>
 						</form>
					</div>
				</div>
			</div>
		</section>

					</div> <!-- for "page-container"-->
   		<footer id="footer">
   			<a class="sm" href="https://www.twitter.com" target="blank"><img src="images/twitter.png"></a>
   			<a class="sm" href="https://www.facebook.com" target="blank"><img src="images/facebook.png"></a><br>
   			© Copyright 2019 Brad Chaplin. All rights reserved.
   		</footer>
				</div><!-- for "content=wrap"-->

	</body>

</html>

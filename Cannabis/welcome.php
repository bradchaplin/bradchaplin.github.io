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
		<link rel="stylesheet" media="(min-width: 901px)" href="home.css">
		<link rel="stylesheet" media="(max-width: 900px)" href="small.css">
		<link rel="stylesheet" href="https://use.typekit.net/mcs4nef.css">
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

		<section>
			<section>
			<div class="section">
				<div class="sectionLink">
					<h1 class="homerun">Welcome</h1>
<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr =  $websiteErr = "";
$fname = $lname = $email = $subject = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
    }
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  Last name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Subject: <textarea name="subject" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<div class="container">

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $subject;
?>
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

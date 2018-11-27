<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Why Choose Us CREATIVES CAPSULE</title>
<link href="Stylesheet.css" rel="stylesheet" type="text/css">
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>


<div id="header">
<div id="logo">
  <div align="left">
    <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="240" height="84">
      <param name="movie" value="Logo_transition1.swf">
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="6.0.65.0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="Logo_transition1.swf" width="240" height="84">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="swfversion" value="6.0.65.0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
  </div>
</div>
<div id="banner">
  <div align="center">	<img src="Images/google.png">
    <img src="Images/facebook.png">
    <img src="Images/twitter.png">
    <img src="Images/pint.png">
    <img src="Images/rss.png">
  </div>
</div>

</div>

<div id="nav">
<ul class="dropdown dropdown-horizontal">
	<li><a href="Home.html">Home</a></li>
	<li><a href="Aboutus.html" class="dir">About US</a>
		<ul>
			<li><a href="Whoweare.html">Who we are</a></li>
			<li><a href="Locations.html">Locations</a></li>
		</ul>
	</li>
	<li><a href="Why.html">Why Choose Us</a></li>
	<li><a href="Services.html" class="dir">CREATIVE WEB DESIGN</a>
		<ul>
			<li><a href="Services1.html">Landing Page Design</a></li>
			<li><a href="Services2.html">Full flash site</a></li>
			<li><a href="Services3.html">Interactive Design</a></li>
			<li><a href="Services4.html">E-Commerce Site</a></li>
			<li><a href="Services5.html">Custom Design</a></li>
		</ul>
	</li>
	<li><a href="Otherser.html" class="dir">Other Services</a>
		<ul>
			<li><a href="Hosting.html">WEB HOSTING AND SUPPORT</a></li>
			<li><a href="CMS.html">CONTENT MANAGEMENT SYSTEM </a></li>
			<li><a href="Otherser2.html">SOCIAL MEDIA MARKETING</a></li>
            <li><a href="SEO.html">SEARCH ENGINE OPTIMIZATION</a></li>
			<li><a href="logo.html">LOGO DESIGN AND BRANDING</a></li>
			<li><a href="Brand.html">MULTIMEDIA AND CORPORATE PRESENTATIONS</a></li>
        	<li><a href="Otherser2.html#C6">CUSTOM PROGRAMMING</a></li>
		</ul>
	</li>
		<li><a href="Technology.html" class="dir">Applied Expertise</a>
		<ul>
			<li><a href="Technology.html#C1">Adobe Photoshop CS6</a></li>
			<li><a href="Technology.html#C2">Adobe Dreamweaver CS6</a></li>
			<li><a href="Technology.html#C3">Adobe Flash Professional CS6</a></li>
			<li><a href="Technology.html#C4">Adobe InDesign CS6</a></li>
			<li><a href="Technology.html#C5">Adobe ColdFusion 10 </a></li>
			<li><a href="Technology.html#C6">Adobe Illustrator CS6</a></li>
            <li><a href="Technology.html#C7">PHP</a></li>
			<li><a href="Technology.html#C8">WordPress</a></li>
			<li><a href="Technology.html#C9">MySQL</a></li>
            <li><a href="Technology.html#C10">HTML 5</a></li>
			<li><a href="Technology.html#C11">CSS</a></li>
			<li><a href="Technology.html#C12">JavaScript</a></li>
		</ul>
	</li>

	<li><a href="Portfolio.html" class="dir">Portfolio</a>
		<ul>
			<li><a href="Portfolio.html">Web Design</a></li>
			<li><a href="Portfolio.html">Corporate Videos</a></li>
			<li><a href="Portfolio.html">Newsletters</a></li>
			<li><a href="Portfolio.html">Multimedia/Corporate Presentations</a></li>
		</ul>
	</li>
    <li><a href="Blog.html">&nbsp;Blog</a></li>
	<li><a href="Contactus.html">Contact Us</a></li>
    
</ul>
</div>

<div id="main">
<div id="main_hori">
<div id="ver"></div>
<div id="ver1">
<div id="menu">
<div id="menubody">
 <ul id="menulist">
 <li><a href="Contactus.html">CONTACT US</a></li>
 <br><br>
 </ul>
 </div>
<div id="menubottom"></div>
<div id="ver_bottom">
<img src="Images/Banner7.png"></div>
</div>
</div>

</div>

<div id="main_content">
<div align="center"><img src="Images/Contact.png"align="middle">
</div>
<div id="main_content_ins">
<p class="alct_body"><br></p>
  	<h2 class="alct"><b>Contact Us</b></h2>
<p class="alct_body"><br>

<?php
if(isset($_POST['email'])) {
	
	$email_to = "info@creativescapsule.com";
	$email_subject = "website html form submissions";

	$first_name = $_POST['control2361326']; // required
	$phone_number = $_POST['control2361329']; // required
	$email_from = $_POST['control2361327']; // required
	$website = $_POST['control2361335']; // not required
	$service = $_POST['control2361339']; // required
	$comments = $_POST['control2361328']; // required
	$website = $_POST['control2361339']; // not required 
	$budget = $_POST['control2361353']; // not required
	$referral = $_POST['control2361367']; // not required 
	
	$email_message = "Form details below.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Sender Name: ".clean_string($first_name)."\n";
	$email_message .= "Phone No: ".clean_string($phone_number)."\n";
	$email_message .= "Email Address: ".clean_string($email_from)."\n";
	$email_message .= "Sender Website: ".clean_string($website)."\n";
	$email_message .= "Services Required: ".clean_string($service)."\n";
	$email_message .= "Message: ".clean_string($comments)."\n";
	$email_message .= "Monthly Budget: ".clean_string($budget)."\n";
	$email_message .= "Referral: ".clean_string($referral)."\n";
	
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- place your own success html below -->

Thank you for contacting us. We will be in touch with you very soon.

<?php
}
die();
?>
</p>
</div>
</div>
</div>

<div id="footer">
<p align="center"> <span class="sp_top"><strong><a href="Copyright&Privacy.html" class="alct_body">While using this site, you agree to have read and accepted our terms of use and privacy policy.<br>
Copyright © 2012 Creatives Capsule Inc. All Rights Reserved. <br>
Creatives Capsule Inc, Staten Island, NewYork 10314| 917.209.4288 | LEGAL STATEMENT | SITE MAP</a></strong></span><strong><a href="Copyright&Privacy.html" class="alct_body"></a> </strong></p></div>

<script type="text/javascript">
swfobject.registerObject("FlashID2");
</script>

</body>
</html>

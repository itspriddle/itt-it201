<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IT201: Joshua Priddle &amp; Anthony Montemorano</title>
<link href="./css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page-container">
  <h1 id="header"><span class="hidden">IT201: Anthony Montemorano and Joshua Priddle</span></h1>
  <div id="nav"> <a href="./?page=home">home</a> <a href="./?page=boneyard">boneyard</a> <a href="./?page=incubator">incubator</a> <a href="./?page=portfolio">portfolio</a> <a href="./?page=services">services</a> <a href="./?page=contact">contact</a> </div>
  <div id="content">
  <?php if (($_GET['page'] == 'home') or (!isset($_GET['page'])))  { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>hey <span>there...</span></h2>
      <p>Good to see you. We've got all sorts of stuff for you.</p>
      <p>The <strong>boneyard</strong> is a special little place for all of our &quot;lost&quot; work. These are layouts that, for one reason or another, never quite made the final cut. Anyway, there're over 100 of them, and it chronicles our progress as web designers for the past few years. </p>
      <p>Moving on the the <strong>incubator</strong>, we have current projects. Probably not much to see there yet, most of them have moved on up to the portfolio.</p>
      <p>Of course, the <strong>portfolio</strong> is stuff we think was better than everything else. A few personal sites, as well as our client work.</p>
      <p>If you like what you see, we offer a variety of <strong>services</strong>. There we keep an updated list of our current services and promotions.</p>
      <p>We love to read. So please <strong>contact us</strong> for a quote or anything else.</p>
    </div>
  </div>
  <?php } elseif ($_GET['page'] == 'boneyard') { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>the <span>boneyard</span> </h2>
      <p>The boneyard is our spot to remember our long lost layouts. There're quite a few, but you can really see how we've progressed as designers. </p>
      <?php
//	 $server_status = @include "http://png.nevercraft.net/images.php?start=$start";
	 $start = $_GET['start'];
	 $page = "boneyard";
	 $server_status = include "/home/priddle/www/png/images.php";
	 if ($server_status == FALSE) {
		 echo "<p>Sorry, the media server appears to be down right now.  Try again later.</p>";
	 }
      ?>
    </div>
  </div>
  <?php } elseif ($_GET['page'] == 'incubator') { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>the <span>incubator</span> </h2>
      <p>Every newborn needs some love.</p>
      <p>Here's the place for screenshots of anything we might have in the works. </p>
      <p><strong>Scripts: </strong><a href="cal_index.php">calendar</a></p>
      <p><a href="./incubator/images/blue.png"><img src="./incubator/images/thumbs/blue.png" alt="IT201 Beta 1" width="200" height="192" /></a><br />
        IT201 Beta 1 </p>
    </div>
  </div>
  <?php } elseif ($_GET['page'] == 'portfolio') { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>the <span>portfolio</span> </h2>
      <p>Here is a small list of sites we've worked on. </p>
      <p><a href="http://www.nevercraft.net">Nevercraft.net</a> - Josh<br />
        <a href="http://www.creativedancearts.org">Creativedancearts.org</a> - Josh<br />
        <a href="http://www.crawfordinsagency.com">Crawfordinsagency.com</a> - Josh<br />
        <a href="http://www.inglenookrealtyinc.com">Inglenookrealtyinc.com</a> - Josh &amp; Tony </p>
      <p>&nbsp;</p>
    </div>
  </div>
  <?php } elseif ($_GET['page'] == 'services') { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>our <span>services</span> </h2>
      <p>What exactly can we do for you? </p>
      <p>We create custom layouts for your web site, and
        currently test with all of today's top browsers.  
        This means you'll have a unique looking website that is
        accessible by everyone.</p>
      <p>We can do a variety of things, the list could go on forever.
        A few commonly requested features are: Password protection,
        news posting, image galleries, and contact forms.  Why not <a href="./?page=contact">ask</a> if what you're looking for wasn't 
        in this list?
      <p>We use: <br />
        (X)HTML, CSS, PHP, MySQL, and a dash of XML<br />
        Fireworks, Dreamweaver, Flash</p>
      <p>We can also:<br />
        Fix computers, setup servers, and network.  If you need 
        help with these <a href="./?page=contact">contact</a> us.</p>
    </div>
  </div>
  <?php } elseif ($_GET['page'] == 'contact') { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>contact <span>us</span> </h2>
      <p>We love hearing from people. If you need a quote, like the site, or hate it even,
        tell us why:</p>
      <p><strong>Tony Montemorano</strong><br />
        Graphics<br />
        montemorano@gmail.com</p>
      <p><strong>Joshua Priddle</strong><br />
        Code<br />
        jpriddle@gmail.com </p>
    </div>
  </div>
  <?php } ?>
  </div>
</div>
<div id="footerbuttons"><a href="http://validator.w3.org/check?uri=referer"><img src="./images/buttons/xhtml11.gif" alt="XHTML 1.1 Strict" width="80" height="15" /></a>&nbsp;<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://it201.nevercraft.net/css/main.css"><img src="./images/buttons/css.gif" alt="CSS Validated" width="80" height="15" /></a>&nbsp;<a href="http://www.php.net"><img src="./images/buttons/php.gif" alt="Powered by PHP 5" width="80" height="15" /></a>&nbsp;<a href="http://www.getfirefox.com"><img src="./images/buttons/firefox_copy3.gif" alt="Mozilla Firefox Compliant" width="80" height="15" /></a>&nbsp;<a href="http://www.microsoft.com/windows/ie/"><img src="./images/buttons/ie.gif" alt="Internet Explorer 6 Compliant" width="80" height="15" /></a>&nbsp;<a href="http://www.opera.com"><img src="./images/buttons/opera.gif" alt="Opera 7 Compliant" width="80" height="15" /></a><br />
  <a href="http://www.macromedia.com/software/dreamweaver/"><img src="./images/buttons/dreamweaver2.gif" alt="Made with Dreamweaver 8" width="80" height="15" /></a>&nbsp;<a href="http://www.macromedia.com/software/fireworks/"><img src="./images/buttons/fireworks.gif" alt="Made with Fireworks 8" width="80" height="15" /></a>&nbsp;<a href="http://www.irfanview.com/"><img src="./images/buttons/irfanview.gif" width="80" height="15" alt="IrfanView Rocks!" /></a>&nbsp;<a href="http://www.redbull.com/"><img src="./images/buttons/redbull.gif" width="80" height="15" alt="Powered by Red Bull" /></a></div>
</body>
</html>

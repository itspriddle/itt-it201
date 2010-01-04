<?php if (($_POST['page'] == 'home') or (!isset($_POST['page'])))  { ?>
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
  <?php } elseif ($_POST['page'] == 'boneyard') { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>the <span>boneyard</span> </h2>
      <p>The boneyard is our spot to remember our long lost layouts. There're quite a few, but you can really see how we've progressed as designers. </p>
      <?php include_once ("/home/priddle/www/png/images.php"); ?>
    </div>
  </div>
  <?php } elseif ($_POST['page'] == 'incubator') { ?>
  <div class="content-outer">
    <div class="content-inner">
      <h2>the <span>incubator</span> </h2>
      <p>Every newborn needs some love.</p>
      <p>Here's the place for screenshots of anything we might have in the works. </p>
      <p><strong>Scripts: </strong><a href="cal_index.php">calendar</a></p>
      <p><a href="/incubator/images/blue.png"><img src="/incubator/images/thumbs/blue.png" alt="IT201 Beta 1" width="200" height="192" /></a><br />
        IT201 Beta 1 </p>
    </div>
  </div>
  <?php } elseif ($_POST['page'] == 'portfolio') { ?>
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
  <?php } elseif ($_POST['page'] == 'services') { ?>
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
        news posting, image galleries, and contact forms.  Why not <a href="">ask</a> if what you're looking for wasn't 
        in this list?
      <p>We use: <br />
        (X)HTML, CSS, PHP, MySQL, and a dash of XML<br />
        Fireworks, Dreamweaver, Flash</p>
      <p>We can also:<br />
        Fix computers, setup servers, and network.  If you need 
        help with these <a href="">contact</a> us.</p>
    </div>
  </div>
  <?php } elseif ($_POST['page'] == 'contact') { ?>
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
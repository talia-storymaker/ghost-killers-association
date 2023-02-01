<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include_once $_SERVER['DOCUMENT_ROOT'] . 'ga-tag.html';
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Ghost Killers Association</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/code.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.tile.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.caption2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
</head>

<body>
	<div class="back-to-portfolio"><a href="https://tdegisi.nfshost.com/">By Talia DeGisi</a></div>
	<header>
		<h1>Ghost Killers Association</h1>
	</header>
	<div class="slideshow-holder">
		<div class="slideshow-caption"></div>
		<div class="slideshow">
			<img src="img/horrifying_1920.jpg" alt="Models of ghosts with a pumpkin" data-cycle-title="We will obliterate all spectres, no matter how horrifying they may be">
			<img src="img/terrifying_1920.png" alt="Models of ghosts holding hands" data-cycle-title="Not even the most menacing and monstrous of supernatural phenomena can put a stop to us">
			<img src="img/scary-doggos_1920.jpg" alt="Three dogs in ghost costumes" data-cycle-title="Even these horrific hell hounds are no match for our excellent spirit-eradicating capabilities">
		</div>
	</div>
	<main>
		<p>Are you tired of dealing with spooky spirits? Here at GKA, we will do anything to keep the dead from bothering the living. <strong>Anything.</strong></p>
		<blockquote>"You thought you were dead before?! Ha! You ain't see nothing yet." <span>- Us, to ghosts everywhere</span></blockquote>
		<section id="techniques">
			<h2>Our Techniques</h2>
			<p>Just <strong>how</strong> do we solve your haunting problems? With a smile, ectoplasmic bloodlust, and a set of top-grade equipment personally designed and maintained by our in-house team.</p>
			<section class="equip-explain">
				<h3>Vacuum of Despair</h3>
				<img src="img/vacuum.svg" alt="Vacuum cleaner">
				<p><button data-link="vacuum.html">Learn more</button></p>
			</section>
			<section class="equip-explain">
				<h3>Spirit Containment Jar</h3>
				<img src="img/jar.svg" alt="Jar">
				<p><button data-link="jar.html">Learn more</button></p>
			</section>
			<section class="equip-explain">
				<h3>Soul-Piercing Sword</h3>
				<img src="img/sword.svg" alt="Sword">
				<p><button data-link="sword.html">Learn more</button></p>
			</section>
		</section>
		<section id="testimonials">
			<h2>Read what our satisfied customers have to say:</h2>
			<div class="prev-quote">Prev</div>
			<div class="next-quote">Next</div>
			<blockquote>"Every night, I was disturbed by some strange noises from the basement that sounded like sobbing and screaming. But when I went there to check, there was no one to be seen...only a horrible feeling of coldness and despair. I called the GKA, and they took their equipment down to the basement. I started hearing more horrible screams than I ever had before, like someone was being tortured, and cries of 'All I wanted was a chance to tell my daughter I still love her!!' Then, there was silence, and I've never heard a peep from the ghost since. Prompt service at a great price. What more could I ask for?" <span>~ Kristy from Shawnee</span></blockquote>
			<blockquote>"Some spooky stuff was happening at my house, so I called the GKA. They dropped a nuclear warhead on my house, killing me, my wife, and our three children. Now we're ghosts too. At first, I had no idea what that was supposed to accomplish, but then I realized that GKA cares about nothing but keeping the living from bothering the dead, and now that my home is a nuclear wasteland, no living beings can survive there, and as for me and my family, we no longer matter because we're no longer alive. So, what can I say? Mission accomplished."  <span>~ Dan from Olathe</span></blockquote>
			<blockquote>"I killed my sister, but then her ghost started haunting me... Not only did GKA fix the haunting issue, they also helped me cover up the murder! These guys really go above and beyond."  <span>~ [REDACTED] from [REDACTED]</span></blockquote>
		</section>
		<p>Want great results like these?? Contact us!</p>
		<h2>Contact Us</h2>
		<form id="contact" method="post" action="send_form_email.php">
			<div class="label-and-input">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" required="required">
			</div>
			<div class="label-and-input">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required="required">
			</div>
			<div class="label-and-input">
				<label for="body">Message</label>
				<textarea id="body" name="body" required="required"></textarea>
			</div>
			<button type="submit">Submit</button>
		</form>
	</main>
	<footer>
	</footer>
</body>
</html>

<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pole trójkąta</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a href="index.html" id="logo">Ćwiczenia PHP, CSS, SQL</a></h1>

									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="index.html">Home</a></li>
												<li>
													<a href="#">Projekty</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Magna phasellus</a></li>
														<li>
															<a href="#">Programy testowe cpp-php</a>
															<ul>
																<li><a href="onp.php">Odwrotna Notacja Polska</a></li>
																<li><a href="calc.php">Systemy Liczbowe</a></li>
																<li><a href="form.php">Maska IP</a></li>
																<li><a href="nwdeuk.php">NWD</a></li>
																<li><a href="nwwznwd.php">NWW</a></li>
																<li><a href="fib.php">Ciąg Fibonacciego</a></li>
																<li><a href="liczba_pierwsza.php">Liczba Pierwsza</a></li>
																<li><a href="trojkat.php">Pole trójkąta</a></li>
															</ul>
														</li>
														<li><a href="#">Veroeros feugiat</a></li>
													</ul>
											<!--	</li>
												<li><a href="left-sidebar.html">Left Sidebar</a></li>
												<li><a href="right-sidebar.html">Right Sidebar</a></li>
												<li><a href="no-sidebar.html">No Sidebar</a></li>
											</ul>-->
										</nav>

								</div>
							</header>

						<!-- Banner -->
							<div id="banner">
								<h2><strong>Zadanie:</strong>Obliczenie pola trójkąta za pomocą wzoru Cherona
								<br />

							</div>

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style1">
						<div class="inner">

							<!-- Feature 1 -->
								<section class="container box feature1">
									<div class="row">
										<div class="12u">
											<header class="first major">
												<h2>Pole Trójkąta</h2>
											<!--	<p><strong></strong></p> -->
											</header>
										</div>
									</div>
									<div class="row">
										<div class="4u 12u(mobile)">
Wprowadź długości odcinków:<br />
											<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
												<input type="text" name="liczba1" size="3">
												<input type="text" name="liczba2" size="3">
												<input type="text" name="liczba3" size="3">
													<input type="submit" value="Oblicz" >
											</form>
</div>
<?php
$a=$_POST['liczba1'];
$b=$_POST['liczba2'];
$c=$_POST['liczba3'];
if($a+$b>$c&&$c+$b>$a&&$a+$c>$b)
{
	$wynik=($a+$b+$c)*($a+$b-$c)*($b+$c-$a)*($a+$c-$b);
	$wynik=sqrt($wynik);
	$wynik=$wynik/4;
	echo "Pole trójkąta: $wynik";

}
else echo "Taki trójkąt nie istnieje";
?>
</div>
</section>

</div>
</div>
<!--<div class="wrapper style2">
<div class="inner">
-->
<!-- Feature 2 -->
<!--<section class="container box feature2">
<div class="row">
	<div class="6u 12u(mobile)">
		<section>
			<header class="major">
				<h2>And this is a subheading</h2>
				<p>It’s important but clearly not *that* important</p>
			</header>
			<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
			Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
			Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
			consequat etiam.</p>
			<footer>
				<a href="#" class="button medium icon fa-arrow-circle-right">Let's do this</a>
			</footer>
		</section>
	</div>
	<div class="6u 12u(mobile)">
		<section>
			<header class="major">
				<h2>This is also a subheading</h2>
				<p>And is as unimportant as the other one</p>
			</header>
			<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
			Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
			Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
			consequat etiam.</p>
			<footer>
				<a href="#" class="button medium alt icon fa-info-circle">Wait, what?</a>
			</footer>
		</section>
	</div>
</div>
</section>

</div>
</div>-->
<!--<div class="wrapper style3">
<div class="inner">
<div class="container">
<div class="row">
<div class="8u 12u(mobile)">
-->
	<!-- Article list -->
<!--										<<section class="box article-list">
			<h2 class="icon fa-file-text-o">Recent Posts</h2>
-->
			<!-- Excerpt -->
<!--												<article class="box excerpt">
					<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
					<div>
						<header>
							<span class="date">July 24</span>
							<h3><a href="#">Repairing a hyperspace window</a></h3>
						</header>
						<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
						semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
						feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
					</div>
				</article>
-->
			<!-- Excerpt -->
			<!--	<article class="box excerpt">
					<a href="#" class="image left"><img src="images/pic05.jpg" alt="" /></a>
					<div>
						<header>
							<span class="date">July 18</span>
							<h3><a href="#">Adventuring with a knee injury</a></h3>
						</header>
						<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
						semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
						feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
					</div>
				</article>
-->
			<!-- Excerpt -->
<!--												<article class="box excerpt">
					<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
					<div>
						<header>
							<span class="date">July 14</span>
							<h3><a href="#">Preparing for Y2K38</a></h3>
						</header>
						<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
						semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
						feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
					</div>
				</article>
		</section>
</div>-->
<!--	<div class="4u 12u(mobile)">
-->
	<!-- Spotlight -->
<!--										<section class="box spotlight">
			<h2 class="icon fa-file-text-o">Spotlight</h2>
			<article>
				<a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
				<header>
					<h3><a href="#">Neural Implants</a></h3>
					<p>The pros and cons. Mostly cons.</p>
				</header>
				<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod
				quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam
				lorem. Phasellus quam turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed
				et tempus consequat etiam.</p>
				<p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper
				mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
				<footer>
					<a href="#" class="button alt icon fa-file-o">Continue Reading</a>
				</footer>
			</article>
		</section>

</div>
</div>
</div>
</div>
</div>-->
</div>

<!-- Footer Wrapper -->
<div id="footer-wrapper">
<footer id="footer" class="container">
<div class="row">
<div class="3u 12u(mobile)">

<!-- Links -->
<section>
	<h2>Filler Links</h2>
	<ul class="divided"><!--
		<li><a href="#">Quam turpis feugiat dolor</a></li>
		<li><a href="#">Amet ornare in hendrerit </a></li>
		<li><a href="#">Semper mod quisturpis nisi</a></li>
		<li><a href="#">Consequat etiam phasellus</a></li>
		<li><a href="#">Amet turpis, feugiat et</a></li>
		<li><a href="#">Ornare hendrerit lectus</a></li>
		<li><a href="#">Semper mod quis et dolore</a></li>
		<li><a href="#">Amet ornare in hendrerit</a></li>
		<li><a href="#">Consequat lorem phasellus</a></li>
		<li><a href="#">Amet turpis, feugiat amet</a></li>
		<li><a href="#">Semper mod quisturpis</a></li>
	--></ul>
</section>

</div>
<div class="3u 12u(mobile)">

<!-- Links -->
<section>
	<h2>More Filler</h2>
	<ul class="divided">
		<!--<li><a href="#">Quam turpis feugiat dolor</a></li>
		<li><a href="#">Amet ornare in in lectus</a></li>
		<li><a href="#">Semper mod sed tempus nisi</a></li>
		<li><a href="#">Consequat etiam phasellus</a></li>
-->	</ul>
</section>

<!-- Links -->
<section>
	<h2>Even More Filler</h2>
	<ul class="divided"><!--
		<li><a href="#">Quam turpis feugiat dolor</a></li>
		<li><a href="#">Amet ornare hendrerit lectus</a></li>
		<li><a href="#">Semper quisturpis nisi</a></li>
		<li><a href="#">Consequat lorem phasellus</a></li>
	--></ul>
</section>

</div>
<div class="6u 12u(mobile)">

<!-- About -->
<section>
	<h2><strong>ZeroFour</strong> by HTML5 UP</h2>
	<p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
	template by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
	It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
	licensed so use it for any personal or commercial project (just credit us
	for the design!).</p>
	<a href="#" class="button alt icon fa-arrow-circle-right">Learn More</a>
</section>

<!-- Contact -->
<section>
	<h2>Get in touch</h2>
	<div>
		<div class="row">
			<div class="6u 12u(mobile)">
				<dl class="contact">
					<dt>Twitter</dt>
					<dd><a href="#">@untitled-corp</a></dd>
					<dt>Facebook</dt>
					<dd><a href="#">facebook.com/untitled</a></dd>
					<dt>WWW</dt>
					<dd><a href="#">www.phploleb.cba.pl/a></dd>
					<dt>Email</dt>
					<dd><a href="#">domiino.2012@gmail.com</a></dd>
				</dl>
			</div>
			<div class="6u 12u(mobile)">
				<dl class="contact">
					<dt>Address</dt>
					<dd>
						1234 Fictional Rd<br />
						Nashville, TN 00000-0000<br />
						USA
					</dd>
					<dt>Phone</dt>
					<dd>(000) 000-0000</dd>
				</dl>
			</div>
		</div>
	</div>
</section>

</div>
</div>
<div class="row">
<div class="12u">
<div id="copyright">
<ul class="menu">
	<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
</ul>
</div>
</div>
</div>
</footer>
</div>

</div>

<!-- Scripts -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/skel-viewport.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>

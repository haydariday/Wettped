<html>
<head>
	<title>Wettped</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>Assets/css/style.css">
	<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="HeroBox">
		<div class="containerhome contenthome">
			<div>
				<h2 class="HWW">Hi, we're Wettped.</h2>
				<h3 class="TWW">The world's most-loved social storytelling platform</h3>
				<h4 class="WC">Wettped connects a global community of 70 million readers and writers through the power of story.</h4>
				<div class="buttons">
<<<<<<< HEAD:application/views/index.php
					<button onclick="window.location.href='<?= base_url(); ?>home/register'" class="btn btn-md btn-orange">REGISTER</button>
					<button onclick="window.location.href='<?= base_url(); ?>home/halaman_cerita'" class="btn btn-md btn-orange">LOGIN</button>
=======
					<button onclick="window.location.href='home/register'" class="btn btn-md btn-orange">Start Reading</button>
					<button onclick="window.location.href='home/halaman_cerita'" class="btn btn-md btn-orange">Start Writing</button>
>>>>>>> eae5687d9f13285a95b8e611adc419d6d993ac69:application/views/index.php
				</div>
			</div>
			<div class="imageContainer1">
				<img src="<?= base_url('img/W1.jpg'); ?>" alt="hero-devices">
			</div>
		</div>
	</div>
	<div id="Intro">
		<div class="containerhome contenthome">
			<div class="imageContainer1">
				<a href="https://after.wattpad.com" target="_blank" rel="noopener noreferrer">
					<img src="<?= base_url('img/promoposters.png'); ?>" alt="after movie - promotional poster for the official after movie launch">
				</a>
			</div>
			<div class="textContainer">
				<h3 class="TWW">Your original story could be the next blockbuster</h3>
				<p>Wettped Studios discovers untapped, unsigned, and talented writers on Wettped and connects them to global multi-media entertainment companies. 
					<a href="/writers/" target="_blank">Find out more</a>
				</p>
				<div class="listContainer">
					<h4>See Your Story...</h4>
					<ul>
						<li><img src="<?= base_url('img/book.svg'); ?>" alt="book">Get published</li>
						<li><img src="<?= base_url('img/video.svg'); ?>" alt="reel">Get produced to movie or film</li>
						<li><img src="<?= base_url('img/tv.svg'); ?>" alt="tv">Get adapted to a TV series</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="Logos">
			<div class="containerhome">
				<div id="publishers" class="logo-row">
					<img src="<?= base_url('img/logo1.svg'); ?>" alt="sschuster">
					<img src="<?= base_url('img/logo2.svg'); ?>" alt="hcollins">
					<img src="<?= base_url('img/logo3.svg'); ?>" alt="macmillan">
					<img src="<?= base_url('img/logo4.svg'); ?>" alt="wp_books">
				</div>
				<div id="studios" class="logo-row">
					<img src="<?= base_url('img/logo5.svg'); ?>" alt="nbc">
					<img src="<?= base_url('img/logo6.svg'); ?>" alt="paramount">
					<img src="<?= base_url('img/logo7.svg'); ?>" alt="eone">
					<img src="<?= base_url('img/logo8.svg'); ?>" alt="turner">
				</div>
			</div>
		</div>
	</div>
	<div id="HowWattpadWorks">
		<div class="container content">
			<h2>How Wettped Works</h2>
			<p>Get your story discovered through the power of community and technology on Wattpad.</p>
			<div id="steps">
				<div class="stepContainer">
					<div class="step">
						<h2 class="number">1</h2>
						<div>
							<h3 class="title">Create</h3>
							<p class="description">Share your unique voice and original story on Wattpad. Find the writing resources you need to craft a story only you can tell.</p>
						</div>
					</div>
					<div class="dots">
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<div class="statBubble">
						<div>
							<div class="count">50+</div>
							<div class="title">Writing Resources</div>
						</div>
					</div>
				</div>
				<div class="stepContainer">
					<div class="step">
						<h2 class="number">2</h2>
						<div>
							<h3 class="title">Build</h3>
							<p class="description">Establish a global fan base as your story gains readership and momentum. Connect with other like-minded writers through storytelling.</p>
						</div>
					</div>
					<div class="dots">
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<div class="statBubble">
						<div>
							<div class="count">70 <span>MILLION</span></div>
							<div class="title">Readers</div>
						</div>
					</div>
				</div>
				<div class="stepContainer">
					<div class="step">
						<h2 class="number">3</h2>
						<div>
							<h3 class="title">Amplify</h3>
							<p class="description">Gain Wettped Star status and get your story published or adapted into film or television with Wattpad Studios and Wattpad Books!</p>
						</div>
					</div>
					<div class="dots">
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<div class="statBubble"><div>
						<div class="count">1000+</div>
						<div class="title">Story deals</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="Links">
		<div id="GetDiscovered">
			<div class="container">
				<h3>Get Discovered</h3>
				<div class="links">
					<div class="link">
						<div class="image">
							<img src="<?= base_url('img/dis1.png'); ?>" alt="Writing Contests">
						</div>
						<div class="info">
							<h4>Writing Contests</h4>
							<p>Enter writing contests to get published, win awards, and partner with global brands.</p>
						</div>
					</div>
					<div class="link">
						<div class="image">
							<img src="<?= base_url('img/dis2.png'); ?>" alt="The Wattys">
						</div>
						<div class="info">
							<h4>The Wattys</h4>
							<p>Wettped’s annual awards program committed to celebrating the best stories around the world.</p>
						</div>
					</div>
					<div class="link">
						<div class="image">
							<img src="<?= base_url('img/dis3.png'); ?>" alt="Wattpad Picks">
						</div>
						<div class="info">
							<h4>Wettped Picks</h4>
							<p>Get featured on our hand-picked reading list.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="GetConnected">
			<div class="container">
				<h3>Get Connected</h3>
				<div class="links">
					<div class="link">
						<div class="image">
							<img src="<?= base_url('img/dis4.png'); ?>" alt="WattCon">
						</div>
						<div class="info">
							<h4>WattCon</h4>
							<p>Wettped’s premier annual writers’ conference offers support, mentorship, and career-oriented programming, to connect the Wattpad writer community, hone their craft, and grow their careers.</p>
						</div>
					</div>
					<div class="link">
						<div class="image">
							<img src="<?= base_url('img/dis5.png'); ?>" alt="Community">
						</div>
						<div class="info">
							<h4>Community</h4>
							<p>Join Wettped Community to discuss shared interests and topics with other readers and writers.</p>
						</div>
					</div>
					<div class="link">
						<div class="image">
							<img src="<?= base_url('img/dis6.png'); ?>" alt="Get Social">
						</div>
						<div class="info">
							<h4>Get Social</h4>
							<p>Connect with other passionate readers, writers, comment directly in stories as you read them, and support writers as they create and share their original stories.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="TakeWP">
		<div class="container content">
			<h3>Take Wettped With You</h3>
			<p>Read and write anywhere, even offline.</p>
			<img src="<?= base_url('img/GFooter.png'); ?>" alt="devices" class="devices">
		</div>
	</div>
</body>
<footer id="Footer-container">
	<footer id="footer">
		<ul id="footer-items" role="navigation" aria-label="Footer Links">
			<li>© 2019 Wattpad</li>
		</ul>
	</footer>
</footer>
</html>
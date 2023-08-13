<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>MedEase - Home</title>
	<link rel="icon" type="image/x-icon" href="./public/assets/favicon.svg" />
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<!-- header section starts  -->
	<header class="header">
		<a href="#" class="logo">
			<i><img src="./public/assets/logo-1.svg" style="width: 60px; height: 40px;" /></i> <span style="color:#a5a5a5;">MedEase</span> </a>
		<nav class="navbar">
			<div id="nav-close" class="fas fa-times"></div>
			<a class="home-section" href="#home-section">Home</a>
			<a class="category-section" href="#category-section">Top Rated</a>
			<a class="about-section" href="#about-section">About</a>
			<a class="newsletter-section" href="login.php">Login</a>
			<a class="faq-section" href="#faq-section">FAQ</a>
		</nav>
		<img src="./public/assets/moon.png" id="theme-icon" alt="">
		<div class="icons">
			<div id="menu-btn" class="fas fa-bars"></div>
			<div id="search-btn"></div>
		</div>
	</header>
	<!-- header section ends -->
	<!-- search form  -->
	<div class="search-form">
		<div id="close-search"></div>
	</div>
	<!-- home section starts  -->
	<section class="home" id="home-section">
		<div class="swiper home-slider">
			<!-- <div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="swiper-slide"> -->
						<div class="box">
							<div class="job-img">
								<img id="job" src="./public/assets/images/feature-image.png" alt="Job Image" width="500" height="500" />
							</div>
							<div class="content">
								<span>Get Your </span>
								<h3>Doc at Ease!</h3>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, sed labore! Ex dolorem odit omnis temporibus laborum voluptatum facilis praesentium! Nam sed obcaecati id placeat dolorum velit a nobis ab distinctio et inventore vero excepturi culpa illo tempore saepe, eius blanditiis, repudiandae odit unde ex? Porro ipsum minima a tenetur!
								</p>
								<a href="#" class="btn">Book a trial!</a>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</section>
	<!-- home section ends -->
	<!-- SEARCH Section -->
	<section class="newsletter" id="newsletter-section">
		<div class="content">
			<!-- <h1 class="heading">Search</h1> -->
			<form action="/backend/search_query.php">
				<input type="text" name="" placeholder="Search here..." id="" class="email" />
				<input type="submit" value="Enter" class="btn" />
			</form>
		</div>

		<div class="doctors-chips">
			<div class="chip">
				Cardiologists
			</div>
			<div class="chip">
				Dermatologists
			</div>
			<div class="chip">
				Gastroenterologists
			</div>
			<div class="chip">
				Neurologists
			</div>
			<div class="chip">
				Oncologists
			</div>
		</div>
		
		
	</section>

	<!-- category section starts  -->
	<section class="category" id="category-section">
		<h1 class="heading">Our Top Rated Doctors...</h1>
		<div class="box-container">
			<div class="box">
				<img src="./public/assets/images/doctor-img01.png" alt="" />
				<h3>Dr. Alex Tew</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos culpa veniam, fugit exercitationem architecto quasi.
				</p>
				<a href="#" class="btn">Contact</a>
			</div>
			<div class="box">
				<img src="./public/assets/images/doctor-img02.png" alt="" />
				<h3>Dr. Ryan </h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos culpa veniam, fugit exercitationem architecto quasi.
				</p>
				<a href="#" class="btn">Contact</a>
			</div>
			<div class="box">
				<img src="./public/assets/images/doctor-img03.png" alt="" width="00" height="600" />
				<h3>Dr. Blake</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos culpa veniam, fugit exercitationem architecto quasi.
				</p>
				<a href="#" class="btn">Contact</a>
			</div>
		</div>
	</section>
	<!-- category section ends -->
	<!-- about section starts  -->
	<section class="about" id="about-section">
		<div class="image">
			<img src="./public/assets/whythis.svg" alt="" />
		</div>
		<div class="content">
			<h3>Why this platform?</h3>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, placeat laborum. Minus alias doloremque perspiciatis facilis provident blanditiis deserunt aliquam!
			</p>
			<p>
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum cupiditate quaerat fugit maiores, voluptas voluptatibus unde praesentium hic eligendi nostrum consequuntur mollitia qui libero ipsa ducimus a ea id veniam!
			</p>
			<a href="#" class="btn">Sign up</a>
		</div>
	</section>
	<!-- about section ends -->
	<!-- newsletter section  -->
	<!-- <section class="newsletter" id="newsletter-section">
		<div class="content">
			<h1 class="heading">Search</h1>
			<form action="">
				<input type="email" name="" placeholder="Enter your email" id="" class="email" />
				<input type="submit" value="join us" class="btn" />
			</form>
		</div>
	</section> -->
	<!-- FAQ Section -->
	<section class="faq" id="faq-section">
		<h1 class="heading">FAQs...</h1>
		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-1" aria-expanded="false">
					<span class="accordion-title">How do I book an appointment online?</span>
					<span class="icon" aria-hidden="true"></span>
				</button>
				<div class="accordion-content">
					<p>
						To book an appointment, visit our website and navigate to the "Book Appointment" section. Select your preferred doctor, date, and time, and follow the prompts to confirm your booking.
					</p>
				</div>
			</div>
		</div>

		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-2" aria-expanded="false">
					<span class="accordion-title">Can I see my past and upcoming appointments?</span>
					<span class="icon" aria-hidden="true"></span>
				</button>
				<div class="accordion-content">
					<p>
						Yes, you can view your past and upcoming appointments by logging in to your account and accessing the "My Appointments" section.
					</p>
				</div>
			</div>
		</div>

		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-3" aria-expanded="false">
					<span class="accordion-title">Is my personal and medical information secure?</span>
					<span class="icon" aria-hidden="true"></span>
				</button>
				<div class="accordion-content">
					<p>
						Yes, we take your privacy seriously. Our website employs strict security measures to safeguard your personal and medical information.
					</p>
				</div>
			</div>
		</div>

		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-4" aria-expanded="false">
					<span class="accordion-title">How do I find the right doctor for my needs?</span>
					<span class="icon" aria-hidden="true"></span>
				</button>
				<div class="accordion-content">
					<p>
						Use our search filters to narrow down doctors by specialty, location, availability, and patient reviews. This will help you find a doctor that suits your requirements.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END of FAQ section -->

	<!-- Go to top button -->
	<div class="go-to-top-container" id="goToTop">
		<a class="go-to-top-btn" href="#">
			<i class="fas fa-arrow-up"></i>
		</a>
	</div>

	<!-- Go to top butotn ends -->

	<!-- footer section starts  -->
	<section class="footer" id="footer">
		<div class="box-container">
            <div class="box" style="display:flex; align-items:center;width:65px;"><h1 style="font-size: 2.5rem;color:white;">&copy; Made with ❤️ by Team7</h1></div>
			<div class="box">
				<h3>extra links</h3>
				<a href="#"><span>ask questions</span></a>
				<a href="#"><span>terms of use</span></a>
				<a href="#"><span>privacy policy</span></a>
			</div>
			<div class="box">
				<h3>contact info</h3>
				<a href="mailto:team.opencampus@gmail.com">
					<span><i class="fas fa-envelope"></i>contact@medease.com</span>
					</a>
				<a href="#">
					
					<span><i class="fas fa-map"></i>Kolkata, West Bengal
						700014</span>
				</a>
			</div>
			<div class="box">
				<h3>follow us</h3>
				<a href="https://github.com/priyanshumaitra/Team7">
					<span><i class="fab fa-github"></i> gitHub</span>
				</a>
				
			</div>
		</div>
	</section>
	<!-- footer section ends -->
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<!-- custom js file link  -->

	<script src="./index.js" type="module"></script>
	<script src="./dark-theme/theme.js" type="module"></script>
</body>

</html>
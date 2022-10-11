<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KSGP homePage</title>

	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet" />

	<link rel="stylesheet" href="{{ asset('asset/site/main.css') }}" />
	<link rel="stylesheet" href="{{ asset('asset/site/footer.css') }}">

</head>
<body>
	<header>
		<div class="container">
			<h2><span>KSGP </span></h2>
			<nav>
				<a href="#">Home</a>
				<a href="#services">Services</a>
				<a href="#projects">Projects</a>
                @guest
                {{-- @if (Route::has('login'))
                @endif --}}

                @if (Route::has('register'))
                <a href="{{route('register')}}">Sign up</a>


                @endif
                @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->first_name }}
                </a>
                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->first_name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div> --}}

                @endguest
                {{-- <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul> --}}
			</nav>
			<button class="hamburger">
				<div class="bar"></div>
			</button>
		</div>
	</header>
	<nav class="mobile-nav">
		<a href="#home">Home</a>
		<a href="#">Services</a>
		<a href="#">Projects</a>
		<a href="{{route('register')}}">Sgin up</a>
	</nav>
	<main>
		<section id ="home" class="banner">

			<div class="container">
				<h1>
					King Saud <br class="hide-mob" />
					<span>Graduation</span> Portal
				</h1>

				<h3> The idea of " KSGP" is in line with the Kingdom’s vision 2030 in education,which is shifting traditional learning to digital learning to support students,as one of the main vision points in education.</h3>

				 <a href="{{ route('login') }}" class="button">login</a>
			</div>
		</section>

		<section id="services" class="services">
			<div class="container">
				<h2>Services</h2>

				<div class="services-grid">

					<div class="service">
						<figure class="img-box">
							<img src="{{ asset('asset/site/service-1.jpg') }}" alt="Website Service" class="img" />
						</figure>
						<div class="content">
							<h3>Websites</h3>
							<p>
								A website designed in a way that is suitable for browsing even through a mobile phone, so that the user, whether a student or an administrator, can see the updates.
							</p>
						</div>
					</div>

					<div class="service">
						<figure class="img-box">
							<img src="{{ asset('asset/site/service-2.jpg') }}" alt="Availability" class="img" />
						</figure>
						<div class="content">
							<h3>Availability</h3>
							<p>
								The system shall be available 24 hours
							</p>
						</div>
					</div>

					<div class="service">
						<figure class="img-box">
							<img src="{{ asset('asset/site/service-3.jpg') }}" alt="Scalability" class="img" />
						</figure>
						<div class="content">
							<h3>Scalability</h3>
							<p>
								The system shall be able to serve more than 100 students simultaneously.
							</p>
						</div>
					</div>

					<div class="service">
						<figure class="img-box">
							<img src="{{ asset('asset/site/service-4.jpg') }}" alt="notifications" class="img" />
						</figure>
						<div class="content">
							<h3>notifications</h3>
							<p>
					Students will receive notifications when the supervisor either accept or reject their requests.
							</p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="projects" id="projects">
			<div class="container">
				<h2>Projects</h2>

				<div class="projects-grid">
					<div class="project">
						<div class="content">
							<h3> King Saud Graduation Portal </h3>
							<p>Which is a web portal targeting senior students and supervisors in CCIS, that aims to provide students with all the services they need for their graduation project.</p>
							<a href="GP1-REPORT_KSGP_GROUP1_Updated.pdf" class="button">Learn more</a>
						</div>
					</div>
					<div class="project">
					<div class="content">
							<h3> King Saud Graduation Portal </h3>
							<p>Which is a web portal targeting senior students and supervisors in CCIS, that aims to provide students with all the services they need for their graduation project.</p>
							<a href="GP1-REPORT_KSGP_GROUP1_Updated.pdf" class="button">Learn more</a>
						</div>
					</div>
					<div class="project">
					<div class="content">
							<h3> King Saud Graduation Portal </h3>
							<p>Which is a web portal targeting senior students and supervisors in CCIS, that aims to provide students with all the services they need for their graduation project.</p>
							<a href="GP1-REPORT_KSGP_GROUP1_Updated.pdf" class="button">Learn more</a>
						</div>
					</div>



				<!-- <div class="center">
					<a href="#" class="button">View more</a>
				</div> -->
			</div>
		</section>

		<section class="contact" id="contact">
			<div class="container">
								 <a href="./registeration/registerationsup.html" class="button">  Sign UP in KSGP as supervisor </a> <h2></h2>
								 								 <a href="./registeration/registerationstu.html" class="button">  Sign UP in KSGP as student </a>



				 <!-- <form>
					<div class="form-grid">
						<input type="text" name="name" id="name" placeholder="Name" class="form-element" />
						<input type="email" name="email" id="email" placeholder="Email" class="form-element" />
						<textarea name="message" id="message" placeholder="Messsage" class="form-area"></textarea>
					</div>
					<div class="right-align">
						<input type="submit" value="Send message" class="button" />
					</div>
				</form> -->
			</div>
		</section>
		<footer>


    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2022 <a href="#">KSGP Group.</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>

	</main>
	<script src="{{ asset('asset/site/main.js') }}"></script>
</body>
</html>

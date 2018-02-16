<header>
<div class="topstatic">
	<div class="row">
				<div class="grid_4">
					<div class="logo">
						<a href="/"><img src="/img/logo-word-white.png" alt="" class="hires" style="width:200px;height:50px;margin-top:-10px;margin-left:10px" /></a>
					</div>
				</div>
				<div class="grid_8 text-right">
					<!--start navigation-->
					<div class="call_contact">
						<p style="color:#ffffff">Call us (+62)21 21231056</p>
					</div>
					<div class="clear"></div>
					<div class="topnav">
						<ul>
							<li class="selected">
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/about-us">About</a>

							</li>
							<li>
								<a href="/portfolio">Portfolio</a>
							</li>
							<!-- <li>
								<a href="/contact-us">Contact</a>
							</li> -->
						</ul>

					</div>
					<!--end navigation-->
				</div>

	</div>
	</div>

  <div class="top">
	<div class="row">

		<div class="grid_12">
			<!--start navigation-->
			<nav>
				<ul>
          <li @if(\Request::is('/')) class="selected" @endif>
						<a href="/">Home</a>
					</li>

					<li @if(\Request::is('about-us')) class="selected" @endif>
						<a href="/about-us">About</a>
						<!-- <ul>
							<li><a href="about.html">About us</a></li>
							<li><a href="typography.html">Typography</a></li>
								<ul>
									<li><a href="#">Example menu</a></li>
									<li><a href="#">Example menu</a></li>
								</ul>
							</li>
						</ul> -->
					</li>

					<li @if(\Request::is('portfolio')) class="selected" @endif>
						<a href="/portfolio">Portfolio</a>
					</li>

					<!-- <li @if(\Request::is('contact-us')) class="selected" @endif>
						<a href="/contact-us">Contact</a>
					</li> -->
				</ul>

			</nav>
			<!--end navigation-->
		</div>

	</div>
	</div>

</header>

@extends('layouts.app')

@section('content')

<aside id="featured" class="nopaddingbot marginbottom0">
	<div class="row">
		<div class="grid_12">
			<!-- for mobile only -->
			<div class="mobile-only centered">
				<h2>Clean template with lot of features</h2>
			</div>
			<!-- end mobile -->

			<!-- start slideshow -->
			<div id="iview">

				<!-- start slide #1 -->
				<div data-iview-image="images/slide/trans-1.png">
					<div class="iview-caption" data-x="0" data-y="0" data-transition="fade">
						<h2 class="bold">With awesome features:</h2>
					</div>
					<div class="iview-caption rounded" data-x="0" data-y="50" data-transition="wipeTop" data-easing="easeOutBounce">
						<span class="bold">HTML5</span>
					</div>
					<div class="iview-caption rounded" data-x="90" data-y="50" data-transition="wipeTop" data-easing="easeOutBounce">
						<span class="bold">CSS3</span>
					</div>
					<div class="iview-caption rounded" data-x="170" data-y="50"  data-transition="wipeTop" data-easing="easeOutBounce">
						<span class="bold">jQuery</span>
					</div>
					<div class="iview-caption" data-x="0" data-y="110" data-transition="wipeLeft" data-easing="easeInOutElastic">
						<span class="features">Touch swipe for iOS and Android devices</span>
					</div>
					<div class="iview-caption blackcaption" data-x="0" data-y="130" data-transition="wipeLeft" data-easing="easeInOutElastic">
						<span class="features">Fully resizable and customizable slideshow</span>
					</div>
					<div class="iview-caption blackcaption" data-x="0" data-y="150" data-transition="wipeLeft" data-easing="easeInOutElastic">
						<span class="features">Rich of customizable transition effect</span>
					</div>
					<div class="iview-caption blackcaption" data-x="0" data-y="170" data-transition="wipeLeft" data-easing="easeInOutElastic">
						<span class="features">Freely positionable and stylable elements</span>
					</div>
					<div class="iview-caption blackcaption" data-x="0" data-y="220" data-transition="wipeBottom" data-easing="easeInOutElastic">
						<a href="#" class="jms-link cmedium-button reverse bold">Call desired link here</a>
					</div>
				</div>
				<!-- end slide #1 -->

				<!-- start slide #2 -->
				<div data-iview-image="images/slide/trans-2.png" data-iview-transition="block-drop-random" data-iview-pausetime="4000">
					<div class="iview-caption bgbox" data-x="275" data-y="320" data-transition="expandRight">
						<h2>Multi purpose template, <span class="bold">corporate business</span> are welcome!</h2>
					</div>
				</div>
				<!-- end slide #2 -->

				<!-- start slide #3 -->
				<div data-iview-image="images/slide/trans-3.png">
					<div class="iview-caption highlight bgcolor" data-x="0" data-y="0" data-transition="expandLeft">
						<h2>Clean minimal with lot of <span class="bold">features</span></h2>
					</div>
				</div>
				<!-- end slide #3 -->

			</div>
			<!-- end slideshow -->
		</div>
	</div>

	<div class="row services">
		<div class="grid_12">
			<div class="grid_3 nomargin">
				<div class="wrapped">
					<img src="images/icons/icon32-1.png" alt="" class="left hires" />
					<h4>Web design</h4>
					<h6 class="latin">100% satisfaction guaranteed</h6>
				</div>
			</div>
			<div class="grid_3 nomargin">
				<div class="wrapped">
					<img src="images/icons/icon32-2.png" alt="" class="left hires" />
					<h4>Brand identity</h4>
					<h6 class="latin">Get new experiences from our work</h6>
				</div>
			</div>
			<div class="grid_3 nomargin">
				<div class="wrapped">
					<img src="images/icons/icon32-3.png" alt="" class="left hires" />
					<h4>CMS integration</h4>
					<h6 class="latin">Wordpress or Joomla are welcome!</h6>
				</div>
			</div>
			<div class="grid_3 nomargin">
				<div class="wrapped norightborder">
					<img src="images/icons/icon32-4.png" alt="" class="left hires" />
					<h4>Web programming</h4>
					<h6 class="latin">We eat, drink and sleep with PHP</h6>
				</div>
			</div>
		</div>
	</div>

</aside>

<section id="content">


	<div class="row features">

		<div class="grid_9">
			<h2>Need a pretty website? We will create one for you with <span class="bold color">awesome features</span></h2>

		</div>
		<div class="grid_3">
			<a href="#" class="cmedium-button bold">Request a quote</a>
		</div>


		<div class="grid_12 centered margintop15">
			<div class="grid_3 nomargin">
				<div class="wrapped">
				<img src="images/icons/icon-1.png" alt="" class="hires" />
				<div class="clear"></div>
				<div class="dotted_line"></div>
				<h4>Clean design</h4>
				<h6 class="latin">Suitable for corporate business</h6>
				<a href="#" class="more"><span>Read more..</span></a>
				</div>
			</div>

			<div class="grid_3 nomargin">
				<div class="wrapped">
				<img src="images/icons/icon-2.png" alt="" class="hires" />
				<div class="clear"></div>
				<div class="dotted_line"></div>
				<h4>Premium support</h4>
				<h6 class="latin">24x7 handled by support ticket</h6>

				<a href="#" class="more"><span>Read more..</span></a>
				</div>
			</div>
			<div class="grid_3 nomargin">
				<div class="wrapped">
				<img src="images/icons/icon-3.png" alt="" class="hires" />
				<div class="clear"></div>
				<div class="dotted_line"></div>
				<h4>Responsive layout</h4>
				<h6 class="latin">Works great on all screen sizes</h6>
				<a href="#" class="more"><span>Read more..</span></a>
				</div>
			</div>
			<div class="grid_3 nomargin">
				<div class="wrapped norightborder">
				<img src="images/icons/icon-4.png" alt="" class="hires" />
				<div class="clear"></div>
				<div class="dotted_line"></div>
				<h4>Retina ready</h4>
				<h6 class="latin">Suitable for corporate business</h6>
				<a href="#" class="more"><span>Read more..</span></a>
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="grid_12">
			<div class="dotted_line"></div>
		</div>
	</div>

	<div class="row">
		<div class="grid_12">
			<h4 class="title">Some featured works</h4>
		</div>

	  <div class="selected_works">

	   <ul class="gallery">
			<li class="grid_3 img-wrapper bwWrapper">
				<img src="images/portfolio/img-1.jpg" alt="" class="max-img" />
				<span class="overlay">
					<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="First selected work">Zoom</a>
				</span>
				<h6 class="centered latin"><a href="#">Item description</a></h6>
			</li>
			<li class="grid_3 img-wrapper bwWrapper">
				<img src="images/portfolio/img-2.jpg" alt="" class="max-img" />
				<span class="overlay">
					<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="2nd selected work">Zoom</a>
				</span>
				<h6 class="centered latin"><a href="#">Item description</a></h6>
			</li>
			<li class="grid_3 img-wrapper bwWrapper">
				<img src="images/portfolio/img-3.jpg" alt="" class="max-img" />
				<span class="overlay">
					<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="3rd selected work">Zoom</a>
				</span>
				<h6 class="centered latin"><a href="#">Item description</a></h6>
			</li>
			<li class="grid_3 img-wrapper bwWrapper">
				<img src="images/portfolio/img-4.jpg" alt="" class="max-img" />
				<span class="overlay">
					<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="4th selected work">Zoom</a>
				</span>
				<h6 class="centered latin"><a href="#">Item description</a></h6>
			</li>
	  </ul>

	  </div>


	</div>

</section>

<script type="text/javascript">
	$(document).ready(function(){

	});
</script>

@endsection

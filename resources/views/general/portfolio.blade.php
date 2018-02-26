@extends('layouts.app')

@section('content')

<aside id="featured" class="inner">
	<div class="row">
		<div class="grid_12">
			<ul class="breadcrumb">
				<li class="home"><a href="#">Home</a></li>
				<li><span>Portfolio of Kangkoding</span></li>
			</ul>

			<form id="searchForm">
					<fieldset>
						<div class="input">
							<input type="text" name="search" id="s" onblur="if(this.value=='')this.value='Type and hit enter';" onfocus="if(this.value=='Type and hit enter')this.value='';" value="Type and hit enter"  />
						</div>
							<input type="submit" id="searchSubmit" value="" />
					</fieldset>
			</form>

		</div>
	</div>
</aside>

<section id="content">

	<div class="row">
		<div class="grid_12">
			<!-- portfolio filter -->
				<ul id="portfolio-filter">
					<li><a href="#all" title="">All</a></li>
					<!-- <li><a href="#design" title="">Design</a></li>
					<li><a href="#print" title="">Print</a></li>
					<li class="last"><a href="#theme" title="">Theme</a></li> -->
				</ul>
			<!-- /portolfio filter -->
		</div>
	</div>

	<div class="row">
		<div class="grid_12">
			<div class="solid_line"></div>
		</div>
	</div>

	<div class="row">
	<ul id="portfolio-list" class="gallery">
		<li class="grid_6 img-wrapper bwWrapper theme">
			<img src="/images/portfolio/casico.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="First selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://www.casicophotography.com">www.casicophotography.com</a></h6>
		</li>
		<li class="grid_6 img-wrapper bwWrapper theme">
			<img src="/images/portfolio/misslabel.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="2nd selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://misslabel-indonesia.com/">misslabel-indonesia.com</a></h6>
		</li>

		<li class="grid_6 img-wrapper bwWrapper design">
			<img src="/images/portfolio/inventory.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="3rd selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://207.148.78.72:10002/">www.kangkoding-inventory.com</a></h6>
		</li>

		<li class="grid_6 img-wrapper bwWrapper design">
			<img src="/images/portfolio/tiotora.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="3rd selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://www.tiotora.com">www.tiotora.com</a></h6>
		</li>

		<li class="grid_6 img-wrapper bwWrapper print">
			<img src="/images/portfolio/tricakra.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="4th selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://tricakraperkasa.com">tricakraperkasa.com</a></h6>
		</li>

		<li class="grid_6 img-wrapper bwWrapper print">
			<img src="/images/portfolio/sentragroup.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="4th selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://sentral-group.com/">sentral-group.com</a></h6>
		</li>
		<li class="grid_6 img-wrapper bwWrapper print">
			<img src="/images/portfolio/tamankota.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="4th selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://www.taman-kota.com/">www.taman-kota.com</a></h6>
		</li>
		<li class="grid_6 img-wrapper bwWrapper print">
			<img src="/images/portfolio/tlwoods.png" alt="" class="max-img" />
			<!-- <span class="overlay">
				<a href="images/portfolio/big-1.jpg" data-rel="group" class="zoom" title="4th selected work">Zoom</a>
			</span> -->
			<h6 class="centered latin"><a href="http://tanjunglesungwoods.com">tanjunglesungwoods.com</a></h6>
		</li>

	</ul>

	</div>


</section>

<script type="text/javascript">
	$(document).ready(function(){

	});
</script>

@endsection

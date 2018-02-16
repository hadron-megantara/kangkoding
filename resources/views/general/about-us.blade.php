@extends('layouts.app')

@section('content')

<aside id="featured" class="inner">
	<div class="row">
		<div class="grid_12">
			<ul class="breadcrumb">
				<li class="home"><a href="#">Home</a></li>
				<li><span>About us</span></li>
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
		<div class="grid_8">
			<h4>Our talented peoples</h4>

			<div class="grid_2 alpha centered">
				<div class="boxed">
					<div class="bwWrapper">
						<img src="/img/people/hadron.jpg" class="max-img" alt="" />
					</div>
					<h5>Hadron Megantara</h5>
					<p><span class="role">PHP & iOS Programmer</span></p>
					<p class="phone">+62 85691108802</p>
				</div>
			</div>

			<div class="grid_2 centered">
				<div class="boxed">
					<div class="bwWrapper">
						<img src="/img/people/aji.jpeg" class="max-img" alt="" />
					</div>
					<h5>Ranadi Aji Bismo</h5>
					<p><span class="role">.Net & Android Programmer</span></p>
					<p class="phone">+62 85717977706</p>
				</div>
			</div>

			<div class="grid_2 centered">
				<div class="boxed">
					<div class="bwWrapper">
						<img src="/img/people/hafiz.jpg" class="max-img" alt="" />
					</div>
					<h5>Hafiz Syarwan</h5>
					<p><span class="role">UI/UX Designer</span></p>
					<p class="phone">+62 82383460094</p>
				</div>
			</div>

		</div>
	</div>
<section>

<script type="text/javascript">
	$(document).ready(function(){

	});
</script>

@endsection

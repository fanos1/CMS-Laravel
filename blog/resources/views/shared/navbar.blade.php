

<div class="container" id="commonlinks">
	<div class="col-10">
		<span class="lead">Universe Finishing</span>
	</div>
	<div class="col-2">
		<svg class="icon" style="font-size: 16px;"> <use xlink:href="#icon-phone"></use></svg>	
		<span style="font-size: 20px;">+447724557911</span>
	</div>
</div>


<!-- Mobile nav. Hidden on Desktops -->
<div class="container" id="mobil-nav">
	<hr/>
	<div id="mySidepanel" class="sidepanel">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="#">About</a>
	  <a href="#">Services</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>

	<button class="openbtn" onclick="openNav()">☰ Menu</button> 


	<script>
		function openNav() {
		  document.getElementById("mySidepanel").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidepanel").style.width = "0";
		}
	</script>
</div>


<!-- hidden on mobile -->
<div id="desktop-nav">
	<nav class="container" id="top">
		<div class="col-12">
			<ul>
				<?php
					/* 
					$pages = App\Page::where('menu_id', '=', 1)->get(); // 1 is for TOP NAVBAR
					foreach ($pages as $key => $page) {
						// echo "<h3>".$key . "::". $page."</h3>";
						echo "<h3>". $page->title ."</h3>";
					}
					exit();
					*/
				?>
				<li><a href="/" title="home page">Home</a></li>
				@foreach(App\Page::all() as $page)
				
					@if($page->slug == 'home')					
						<!-- <li><a href="/" title="home page">Home</a></li> -->
					@else
						<li>
							<a href="{!! action('BlogController@show', $page->slug) !!}" title="{!! $page->slug !!}">
								{!! $page->title !!}
							</a>
						</li>
					@endif			
					
				@endforeach
				
			</ul>
		</div>
	</nav>
	
</div>

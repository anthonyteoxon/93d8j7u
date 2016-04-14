<div class="visible-md visible-lg col-xs-3" id="menu">

	<div id="profile-menu" class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-4" id="profile-pic">
					<img class="img-responsive" src="{{ asset('img/profile.png') }}" />
				</div>
				<div class="col-xs-8" id="profile-menu-details">
					<p>Lyra Grazielli Reyes</p>
					<a href="#">View Profile</a> | <a href="#">Sign Out</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<hr />
		</div>
	</div>
	
	<div class="clearfix"></div>

	<div class="row" id="accordion-menu">
		<div class="col-xs-12 menus">
		  <a class="accordion-toggle" data-toggle="collapse" data-target="#menu-categories">TRAVEL CATEGORIES</a>
		  <div id="menu-categories" class="collapse in">
				<a href="{{ url('/package-list') }}"><img src="{{ asset('img/category/cultural.png') }}" class="category-icon" /> Cultural</a>
				<a href="{{ url('/package-list') }}"><img src="{{ asset('img/category/hiking.png') }}" class="category-icon" /> Hiking</a>
				<a href="{{ url('/package-list') }}"><img src="{{ asset('img/category/beach.png') }}" class="category-icon" /> Beach</a>
				<a href="{{ url('/package-list') }}"><img src="{{ asset('img/category/recreational.png') }}" class="category-icon" /> Recreational</a>
				<a href="{{ url('/package-list') }}"><img src="{{ asset('img/category/volunteerism.png') }}" class="category-icon" /> Volunteerism</a>
				<a href="{{ url('/package-list') }}"><img src="{{ asset('img/category/city-experiences.png') }}" class="category-icon" /> City Experiences</a>								
		  </div>
		</div>
		<div class="col-xs-12 menus">
		  <a class="accordion-toggle" data-toggle="collapse" data-target="#menu-hubs">HUBS <span class="badge">3</span></a>
		  <div id="menu-hubs" class="collapse in">
			  
			  <div class="row menu-hubs">
			  	<div class="col-xs-12">
			  		<div class="row">
				  		<div class="col-xs-2">
				  			<a href="#"><img src="{{ asset('img/hub/hub1-small.png') }}"  /></a>
				  		</div>
				  		<div class="col-xs-8">
				  			<div class="row">
				  				<div class="col-xs-12 hub-name">
				  					<a href="#">SEPANX Peeps Unite!</a>
				  				</div>
				  				<div class="col-xs-12 hub-message">
				  					Lyra Reyes: <span class="gray">Hi guys! #SEPANX</span>
				  				</div>
				  				<div class="col-xs-12 hub-date">
				  					March 26, 2016
				  				</div>				  				
				  			</div>
				  		</div>
				  		<div class="col-xs-2">
				  			<span class="participants">+20</span>
				  		</div>					  		
			  		</div>
			  	</div>
			  </div>

			  <div class="row menu-hubs">
			  	<div class="col-xs-12">
			  		<div class="row">
				  		<div class="col-xs-2">
				  			<a href="#"><img src="{{ asset('img/hub/hub2-small.png') }}"  /></a>
				  		</div>
				  		<div class="col-xs-8">
				  			<div class="row">
				  				<div class="col-xs-12 hub-name">
				  					<a href="#">Trash 5 goes to Pulag</a>
				  				</div>
				  				<div class="col-xs-12 hub-message">
				  					Aldrin Buncasan: <span class="gray">Si Ebeb Boy Grounded</span>
				  				</div>
				  				<div class="col-xs-12 hub-date">
				  					March 26, 2016
				  				</div>				  				
				  			</div>
				  		</div>
				  		<div class="col-xs-2">
				  			<span class="participants">+20</span>
				  		</div>					  		
			  		</div>
			  	</div>
			  </div>

			  <div class="row menu-hubs">
			  	<div class="col-xs-12">
			  		<div class="row">
				  		<div class="col-xs-2">
				  			<a href="#"><img src="{{ asset('img/hub/hub3-small.png') }}"  /></a>
				  		</div>
				  		<div class="col-xs-8">
				  			<div class="row">
				  				<div class="col-xs-12 hub-name">
				  					<a href="#">Core Circles goes to</a>
				  				</div>
				  				<div class="col-xs-12 hub-message">
				  					Calvin Coderes: <span class="gray">Talk Shit na si Kuya Dinis</span>
				  				</div>
				  				<div class="col-xs-12 hub-date">
				  					March 26, 2016
				  				</div>
				  			</div>
				  		</div>
				  		<div class="col-xs-2">
				  			<span class="participants">+20</span>
				  		</div>				  		
			  		</div>
			  	</div>
			  </div>			  		  

		  </div>
		</div>
		<div class="col-xs-12 menus">
		  <a href="#">ABOUT US</a>
		</div>
		<div class="col-xs-12 menus">
		  <a href="#">SETTINGS</a>
		</div>	
		<div class="col-xs-12 menus">
		  <a href="#">TERMS & CONDITIONS</a>
		</div>
		<div class="col-xs-12 menus">
		  <a href="#">POLICIES</a>
		</div>

		<div class="col-xs-12 menus">
			<a href="#"><img src="{{ asset('img/appstore.png') }}" class="img-responsive" /></a>			
		</div>	
		<div class="col-xs-12 menus">
			<a href="#"><img src="{{ asset('img/playstore.png') }}" class="img-responsive" /></a>			
		</div>

		<div class="col-xs-12 menus">
			<a href="#"><img src="{{ asset('img/facebook.png') }}" /></a>
			&nbsp;
			<a href="#"><img src="{{ asset('img/instagram.png') }}" /></a>
		</div>							

		<div class="col-xs-12 menus">
			<span class="gray">Copyright @ 2016 goramode.com</span>
		</div>
	</div>
</div>
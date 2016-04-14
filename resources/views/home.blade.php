@extends('layout')

@section('content')
<div class="clearfix"></div>
<div class="col-xs-12">

	<!-- TOP DESTINATIONS //-->
	<div class="heading-title">TOP DESTINATIONS</div>

	<div class="col-xs-12">
		<div class="row">
			<!-- Carousel -->
	    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					@for($i = 1; $i<=4; $i++)
				    <div class="item {{ $i == 1 ? 'active' : '' }}">
				    	<img src="{{ asset('img/package/package' . $i . '.png') }}" alt="">
	                    <!-- Static Header -->
	                    <div class="header-text">
	            			<div class="outer-table">
								<div class="middle-cell">
									<div class="inner-data">
				                        <div class="col-md-12 text-center">
				                            <a href="{{ url('/package-details') }}" class="package-name">Coron Island Ultimate Tour - Coron Palawan</a>
				                            <p>2D1N for 3,999.00/pax good for 10 pax</h4>		          
				                        </div>											
									</div>								
									<div class="col-xs-12 participants">
										<div class="col-xs-6"><p>5 hubs created</p></div> 
										<div class="col-xs-6 text-right"><p>28 pals joined</p></div>             
									</div>							   
								</div>						
							</div>
	                    </div><!-- /header-text -->
				    </div>
				    @endfor

				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div><!-- /carousel -->
		</div>
	</div>

	<!-- NEW PACKAGES //-->
	<div class="heading-title">NEW PACKAGES</div>
	<div class="row">		
		<div class="col-xs-12">
			<div class="img-gallery">
			    <div class="img-gallery-table">
			        <div class="img-gallery-cell">
							<div class="gallery-item">								
								<img src="{{ asset('img/package/package6.png') }}" />
								<div class="col-xs-12 details">
									<p class="title">Vigan City, Ilocos Sur</p>
									<p class="description">2D1N for 3,999.00/pax goot for 10px</p>
								</div>
								<div class="row">
									<div class="col-xs-12 participants">
										<div class="col-xs-6">5 hubs created</div>
										<div class="col-xs-6 text-right">28 pals joined</div>
									</div>
								</div>
							</div>
							<div class="gallery-item">
								<img src="{{ asset('img/package/package5.png') }}" />
								<div class="col-xs-12 details">
									<p class="title">Mt. Pulag, Benguet</p>
									<p class="description">2D1N for 3,999.00/pax goot for 10px</p>
								</div>
								<div class="row">
									<div class="col-xs-12 participants">
										<div class="col-xs-6">5 hubs created</div>
										<div class="col-xs-6 text-right">28 pals joined</div>
									</div>
								</div>							
							</div>
							<div class="gallery-item">								
								<img src="{{ asset('img/package/package4.png') }}" />
								<div class="col-xs-12 details">
									<p class="title">Coron Island Ultimate Tour, Coron Palawan</p>
									<p class="description">2D1N for 3,999.00/pax goot for 10px</p>
								</div>
								<div class="row">
									<div class="col-xs-12 participants">
										<div class="col-xs-6">5 hubs created</div>
										<div class="col-xs-6 text-right">28 pals joined</div>
									</div>
								</div>									
							</div>	

					</div>
			    </div>
			</div>
		</div>
	</div>	

	<!-- TRAVEL CATEGORIES //-->
	<div class="heading-title">CATEGORIES</div>

	<div class="row category-thumbnails">

	    <div class="col-md-4 col-xs-12 thumb">

	        <a class="thumbnail" href="{{ url('/package-list') }}" style="background-image: url('{{ asset('img/package/1.png') }}');">
	            <img class="img-responsive" src="{{ asset('img/category/cultural-large.png') }}" alt="">
	            <p>Cultural</p>	           
	        </a>

	    </div>
	    <div class="col-md-4 col-xs-12 thumb">
	        <a class="thumbnail" href="{{ url('/package-list') }}" style="background-image: url('{{ asset('img/package/2.png') }}');">
	            <img class="img-responsive" src="{{ asset('img/category/hiking-large.png') }}" alt="">
	            <p>Hiking</p>
	        </a>
	    </div>
	    <div class="col-md-4 col-xs-12 thumb">
	        <a class="thumbnail" href="{{ url('/package-list') }}" style="background-image: url('{{ asset('img/package/3.png') }}');">
	            <img class="img-responsive" src="{{ asset('img/category/beach-large.png') }}" alt="">
	            <p>Beaches</p>
	        </a>
	    </div>
	    <div class="col-md-4 col-xs-12 thumb">
	        <a class="thumbnail" href="{{ url('/package-list') }}" style="background-image: url('{{ asset('img/package/4.png') }}');">
	            <img class="img-responsive" src="{{ asset('img/category/recreational-large.png') }}" alt="">
	            <p>Recreational</p>
	        </a>
	    </div>
	    <div class="col-md-4 col-xs-12 thumb">
	        <a class="thumbnail" href="{{ url('/package-list') }}" style="background-image: url('{{ asset('img/package/5.png') }}');">
	            <img class="img-responsive" src="{{ asset('img/category/volunteerism-large.png') }}" alt="">
	            <p>Volunteerism</p>
	        </a>
	    </div>
	    <div class="col-md-4 col-xs-12 thumb">
	        <a class="thumbnail" href="{{ url('/package-list') }}" style="background-image: url('{{ asset('img/package/6.png') }}');">
	            <img class="img-responsive" src="{{ asset('img/category/city-experiences-large.png') }}" alt="">
	            <p>City Experiences</p>
	        </a>
	    </div>	    
	</div>



</div>
@stop

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset( elixir('css/index.css') ) }}" />
@stop

@section('scripts')

@stop

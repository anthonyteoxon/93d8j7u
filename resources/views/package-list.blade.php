@extends('layout')

@section('content')
<div class="col-md-offset-2 col-md-3">
	<div class="sorter">
		<select class="form-control">
		  <option>Sort By</option>
		  <option>Newest First</option>
		  <option>Most hub created</option>
		  <option>Lowest price first</option>
		  <option>Highest price first</option>
		</select>
	</div>
</div>
<div class="clearfix"></div>
<div class="col-xs-12">
	<div class="row" id="package-list">        
	@for( $h =1; $h<=2 ; $h++)
		@for( $i =1; $i<=4 ; $i++)
		<div class="col-xs-12 col-sm-6">
		  <div class="thumbnail">
		   	<a href="{{ url('/package-details') }}"><img src="{{ asset('img/package/package' . $i . '.png') }}" class="img-responsive" /></a>
		      <div class="caption">
		        <h4>Island Hopping Adventure - Boracay Island, Aklan</h4>
		        <p>3D2N for 3,999.00/pax good for 4 pax</p>
		        <div class="row participants">
		            <div class="col-xs-12">
		            	<div class="col-xs-6">5 hubs created</div> 
		            	<div class="col-xs-6 text-right">28 pals joined</div>             
		        	</div>
		    	</div>
		    </div>
		  </div>
		</div>
		@endfor
	@endfor
	</div><!-- End row -->
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 text-center">
			<a class="btn btn-default" id="package-load-more">LOAD MORE<a>
		</div>
	</div>

</div>
@stop

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset( elixir('css/package-list.css') ) }}" />
@stop

@section('scripts')

@stop
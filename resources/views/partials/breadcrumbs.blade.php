@if( !empty($breadcrumbs) )
<div class="col-md-7 col-xs-12">
	<div id="breadcrumbs">
		<a href="{{ url('/') }}"> Home </a> 
		@foreach( $breadcrumbs  as $breadcrumb )
			/ <a href="{{ $breadcrumb['href'] }}" class="{{ $breadcrumb['current'] ? 'current' : '' }}"> {{ $breadcrumb['text'] }} </a>
		@endforeach
	</div>
</div>
@else
<div class="col-xs-12"><p>&nbsp;</p></div>
@endif

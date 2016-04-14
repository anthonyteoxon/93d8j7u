@extends('layout')

@section('content')
<div class="clearfix"></div>
<div class="col-xs-12">

	<div class="col-xs-12" id="package-wrapper">
		<div class="row">
			<div id="package-image" style="background-image: url('{{ asset('img/package/coron.png') }}');"></div>

			<div class="row">
				<div class="col-xs-12">
					<div class="col-xs-4">
						<div id="hub-image" style="background-image: url('{{ asset('img/hub/dp.png') }}');"></div>
					</div>
					<div class="col-xs-4">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
			</div>		
		</div>
	</div>

	<div class="row" id="package-nav">
		<div class="col-xs-12">
			<ul class="nav nav-tabs" id="package-nav">
				<li class="active"><a data-toggle="tab" href="#conversations">Conversations <span class="badge">5</span></a></li>
				<li><a data-toggle="tab" href="#participants">Participants</a></a></li>
			</ul>

			<div class="tab-content">

				<!-- DESCRIPTION //-->
				<div id="conversations" class="tab-pane fade in active">
					<h1>Conversation</h1>
				</div>

				<!-- HUBS //-->	
				<div id="participants" class="tab-pane fade">
					<h1>Participants</h1>
				</div>


			</div>
		</div>
	</div>

</div>

@stop

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset( elixir('css/hub.css') ) }}" />
@stop

@section('scripts')

@stop

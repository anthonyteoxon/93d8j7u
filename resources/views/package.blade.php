@extends('layout')

@section('content')
<div class="clearfix"></div>
<div class="col-xs-12">

	<div class="col-xs-12" id="package-wrapper">

		<!-- PRIMARY IMAGE //-->
		<div class="row">
			<div id="package-image">
				<div class="col-xs-12" id="package-img-cell">
					<div class="row">
						<img src="{{ asset('img/package/coron.png') }}" class="img-responsive package-image" />
					</div>
				</div>
			</div>
		</div>

		<div class="row" id="package-details">
			<div class="col-xs-12 col-md-8">
				<div class="row">
					<div class="col-xs-12" id="package-name">
						Coron Ultimate Tour - Coron, Palawan
					</div>
					<div class="col-xs-12" id="package-description">
						3D/2N for 10 person
					</div>
					<div class="col-xs-10" id="package-icons">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="package-icons">
									<img src="{{ asset('img/package/common/smile.png') }}" />
								</a>
								<a href="#" class="package-icons">
									<img src="{{ asset('img/package/common/tree.png') }}" />
								</a>
								<a href="#" class="package-icons">									
									<img src="{{ asset('img/package/common/hub.png') }}" />
									<span class="package-hub-count">5</span>
								</a>
							</div>
						</div>				
					</div>					
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">	
				<div class="row">
					<div class="col-xs-12">
						<img src="{{ asset('img/flag/ph.png') }}" class="pull-right" />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-right">
						<h2>3,999.00</h2>
						<p>per person</p>
					</div>
				</div>				
			</div>				
		</div>
		<div class="row" id="package-checkout">
			<div class="col-xs-8">
				<div class="row">
					<a class="btn btn-default" id="create-hub"><i class="fa fa-pencil"></i> CREATE HUB</a>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="row">
					<a class="btn btn-default" id="gora"><i class="fa fa-shopping-cart"></i> GORA</a>
				</div>
			</div>				
		</div>


		<div class="row">

			<div class="col-xs-12">
				<div class="img-gallery">
				    <div class="img-gallery-table">
				        <div class="img-gallery-cell">
							<div class="gallery-item">
								<a href="{{ asset('img/package/coron2.png') }}" class="pop">
									<img src="{{ asset('img/package/coron2.png') }}" />
								</a>												
							</div>
							<div class="gallery-item">								
								<a href="{{ asset('img/package/coron3.png') }}" class="pop">
									<img src="{{ asset('img/package/coron3.png') }}" />
								</a>	
							</div>
							<div class="gallery-item">								
								<a href="{{ asset('img/package/coron4.png') }}" class="pop">
									<img src="{{ asset('img/package/coron4.png') }}" />
								</a>
							</div>							
						</div>
				    </div>
				</div>
				<div class="col-xs-12">&nbsp;</div>
			</div>


		</div>
			
	</div>

	<div class="row" id="package-nav">
		<div class="col-xs-12">
			<ul class="nav nav-tabs" id="package-nav">
				<li class="active"><a data-toggle="tab" href="#package-desc">Description</a></li>
				<li><a data-toggle="tab" href="#package-fine-print">Fine Print</a></li>
				<li><a data-toggle="tab" href="#package-hubs">Hubs <span class="badge">5</span></a></a></li>
			</ul>

			<div class="tab-content">
				<!-- DESCRIPTION //-->
				<div id="package-desc" class="tab-pane fade in active">
					<div class="col-xs-12">
						<h3>Description</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>						
					</div>
				</div>

				<!-- FINE PRINT //-->
				<div id="package-fine-print" class="tab-pane fade">
					<div class="col-xs-12">
						<h3>Fine Print</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>						
					</div>
				</div>

				<!-- HUBS //-->	
				<div id="package-hubs" class="tab-pane fade">
					<div class="col-xs-12">
						<div class = "row">		

						<!-- HUB //-->			   
						   <div class = "col-sm-6 col-md-4">
						      <div class = "package-hubs thumbnail">

						      	<div class="package-hub-details">

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align">
							      		<div class="col-xs-6 package-hub-privacy">
							      			<i class="fa fa-unlock"></i>
							      		</div>
							      		<div class="col-xs-6">
							      			<div class="row">
							      				<div class="package-hub-participants pull-right red-bg">3/10</div>
							      			</div>
							      		</div>
								      </div>								      
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="col-xs-12 vertical-align vertical-align-middle">
								      <h1>Team Hugot / Ampalaya</h1>
								      </div>
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align vertical-align-bottom">
						      			<div class="col-xs-3">
						      				<div>admin</div>
						      				<img class="img-responsive round" src="{{ asset('img/profile.png') }}" />
						      			</div>
						      			<div class="col-xs-9">
						      				<div class="row">
						      					<div class="col-xs-12 package-hub-admin">
						      						Lyra Reyes
						      					</div>
						      					<div class="col-xs-12">
						      						<a>Jorrell</a>, <a>Tune</a>, and 7 Pals
						      					</div>						      					
						      				</div>
						      			</div>
								      </div>
								    </div>

						      	</div>						      	
						        <img src = "{{ asset('img/hub/hub1.png') }}"  class="package-hub-img" />
						      </div>
						   </div>

						   <!-- HUB //-->			   
						   <div class = "col-sm-6 col-md-4">
						      <div class = "package-hubs thumbnail">

						      	<div class="package-hub-details">

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align">
							      		<div class="col-xs-6 package-hub-privacy">
							      			<i class="fa fa-unlock"></i>
							      		</div>
							      		<div class="col-xs-6">
							      			<div class="row">
							      				<div class="package-hub-participants pull-right darkgray-bg">3/10</div>
							      			</div>
							      		</div>
								      </div>								      
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="col-xs-12 vertical-align vertical-align-middle">
								      <h1>Team Hugot / Ampalaya</h1>
								      </div>
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align vertical-align-bottom">
						      			<div class="col-xs-3">
						      				<div>admin</div>
						      				<img class="img-responsive round" src="{{ asset('img/profile.png') }}" />
						      			</div>
						      			<div class="col-xs-9">
						      				<div class="row">
						      					<div class="col-xs-12 package-hub-admin">
						      						Lyra Reyes
						      					</div>
						      					<div class="col-xs-12">
						      						<a>Jorrell</a>, <a>Tune</a>, and 7 Pals
						      					</div>						      					
						      				</div>
						      			</div>
								      </div>
								    </div>

						      	</div>						      	
						        <img src = "{{ asset('img/hub/hub2.png') }}"  class="package-hub-img" />
						      </div>
						   </div>


						   <!-- HUB //-->			   
						   <div class = "col-sm-6 col-md-4">
						      <div class = "package-hubs thumbnail">

						      	<div class="package-hub-details">

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align">
							      		<div class="col-xs-6 package-hub-privacy">
							      			<i class="fa fa-unlock"></i>
							      		</div>
							      		<div class="col-xs-6">
							      			<div class="row">
							      				<div class="package-hub-participants pull-right darkgray-bg">3/10</div>
							      			</div>
							      		</div>
								      </div>								      
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="col-xs-12 vertical-align vertical-align-middle">
								      <h1>Team Hugot / Ampalaya</h1>
								      </div>
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align vertical-align-bottom">
						      			<div class="col-xs-3">
						      				<div>admin</div>
						      				<img class="img-responsive round" src="{{ asset('img/profile.png') }}" />
						      			</div>
						      			<div class="col-xs-9">
						      				<div class="row">
						      					<div class="col-xs-12 package-hub-admin">
						      						Lyra Reyes
						      					</div>
						      					<div class="col-xs-12">
						      						<a>Jorrell</a>, <a>Tune</a>, and 7 Pals
						      					</div>						      					
						      				</div>
						      			</div>
								      </div>
								    </div>

						      	</div>						      	
						        <img src = "{{ asset('img/hub/hub3.png') }}"  class="package-hub-img" />
						      </div>
						   </div>						   
						

						   <!-- HUB //-->			   
						   <div class = "col-sm-6 col-md-4">
						      <div class = "package-hubs thumbnail">

						      	<div class="package-hub-details">

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align">
							      		<div class="col-xs-6 package-hub-privacy">
							      			<i class="fa fa-unlock"></i>
							      		</div>
							      		<div class="col-xs-6">
							      			<div class="row">
							      				<div class="package-hub-participants pull-right green-bg">3/10</div>
							      			</div>
							      		</div>
								      </div>								      
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="col-xs-12 vertical-align vertical-align-middle">
								      <h1>Team Hugot / Ampalaya</h1>
								      </div>
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align vertical-align-bottom">
						      			<div class="col-xs-3">
						      				<div>admin</div>
						      				<img class="img-responsive round" src="{{ asset('img/profile.png') }}" />
						      			</div>
						      			<div class="col-xs-9">
						      				<div class="row">
						      					<div class="col-xs-12 package-hub-admin">
						      						Lyra Reyes
						      					</div>
						      					<div class="col-xs-12">
						      						<a>Jorrell</a>, <a>Tune</a>, and 7 Pals
						      					</div>						      					
						      				</div>
						      			</div>
								      </div>
								    </div>

						      	</div>						      	
						        <img src = "{{ asset('img/hub/hub4.png') }}"  class="package-hub-img" />
						      </div>
						   </div>


						   <!-- HUB //-->			   
						   <div class = "col-sm-6 col-md-4">
						      <div class = "package-hubs thumbnail">

						      	<div class="package-hub-details">

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align">
							      		<div class="col-xs-6 package-hub-privacy">
							      			<i class="fa fa-unlock"></i>
							      		</div>
							      		<div class="col-xs-6">
							      			<div class="row">
							      				<div class="package-hub-participants pull-right green-bg">3/10</div>
							      			</div>
							      		</div>
								      </div>								      
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="col-xs-12 vertical-align vertical-align-middle">
								      <h1>Team Hugot / Ampalaya</h1>
								      </div>
								    </div>

						  			<div class="vertical-align-wrap">
								      <div class="row vertical-align vertical-align-bottom">
						      			<div class="col-xs-3">
						      				<div>admin</div>
						      				<img class="img-responsive round" src="{{ asset('img/profile.png') }}" />
						      			</div>
						      			<div class="col-xs-9">
						      				<div class="row">
						      					<div class="col-xs-12 package-hub-admin">
						      						Lyra Reyes
						      					</div>
						      					<div class="col-xs-12">
						      						<a>Jorrell</a>, <a>Tune</a>, and 7 Pals
						      					</div>						      					
						      				</div>
						      			</div>
								      </div>
								    </div>

						      	</div>						      	
						        <img src = "{{ asset('img/hub/hub5.png') }}"  class="package-hub-img" />
						      </div>
						   </div>						   
						   
						</div>


					</div>
				</div>


			</div>
		</div>
	</div>

</div>

@stop

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset( elixir('css/package.css') ) }}" />
@stop

@section('scripts')

@stop

				</div>
			</div>
		</div>
	</div>

	<!-- Image Modal Placeholder-->
	<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">              
	      <div class="modal-body">
	      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <img src="" class="imagepreview" style="width: 100%;" >
	      </div>
	    </div>
	  </div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ asset('js/jquery.js') }}"></script>

	<!-- Wow Plugin -->
	<!-- script type="text/javascript" src="{{ asset('js/wow.js') }}"></script-->
	
	<!-- easing plugin ( optional ) -->
	<script src="{{ asset('js/utop/js/easing.js') }}" type="text/javascript"></script>
	
	<!-- UItoTop plugin -->
	<script src="{{ asset('js/utop/js/jquery.ui.totop.js') }}" type="text/javascript"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset('css/bootstrap/bootstrap.min.js') }}"></script>
    
    <!-- App Scripts -->
	<script src="{{ asset( elixir('js/app.js') ) }}" type="text/javascript"></script>
	
	<!-- Custom Scripts -->
	@yield('scripts')
	<script type="text/javascript">
	// new WOW().init();
	</script>  
	</body>
</html>
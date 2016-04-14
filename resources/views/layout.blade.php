<!-- HEADER //-->
@include('partials.header')

<!-- MENU //-->
@include('partials.menu')

<!-- MENU PLACEHOLDER FOR SPACES //-->
<div class="visible-md visible-lg col-xs-3"></div>

<div class="col-xs-12 col-md-9">
<!-- BREADCRUMBS //-->
@include('partials.breadcrumbs')

<!-- CONTENT //-->
@yield('content')

</div>



<!-- FOOTER //-->
@include('partials.footer')
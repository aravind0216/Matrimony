<!DOCTYPE html>
<html lang="en">

	<head>
		@include('includes.header_link')
	</head>
<style type="text/css">
	.pagination > .active > span{
		background-color:#a4233d !important;
		border-color:#a4233d !important;
	}
</style>
	<body class="index_slider menu-default hover-default scroll-animation slider--slideInUp ">

<!-- Header -->
	@include('includes.header')
<!-- End Header -->

<!-- Aside Menu -->
	@include('includes.homemenu')
<!-- End Aside -->	



<!-- Body -->
@section('body')

@show
<!-- End Body -->


<!-- Footer -->
	@include('includes.footer_link')
<!-- End Footer -->

	</body>
</html>

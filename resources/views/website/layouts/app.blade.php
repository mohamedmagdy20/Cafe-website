<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>{{$setting[0]->value}}</title>  
    <meta name="keywords" content="{{$setting[0]->value}}">
    <meta name="description" content="{{$setting[0]->value}}">
    <meta name="author" content="{{$setting[0]->value}}">
    <meta property="og:image" content="{{asset('uploads/headers/1685522262.jpg')}}">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('website/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
  @include('website.layouts.nav')
	<!-- End header -->
	@yield('front')
	
    @include('website.layouts.footer')
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="{{asset('website/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('website/js/popper.min.js')}}"></script>
	<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{asset('website/js/jquery.superslides.min.js')}}"></script>
	<script src="{{asset('website/js/images-loded.min.js')}}"></script>
	<script src="{{asset('website/js/isotope.min.js')}}"></script>
	<script src="{{asset('website/js/baguetteBox.min.js')}}"></script>
	<script src="{{asset('website/js/form-validator.min.js')}}"></script>
    <script src="{{asset('website/js/contact-form-script.js')}}"></script>
    <script src="{{asset('website/js/custom.js')}}"></script>
</body>
</html>
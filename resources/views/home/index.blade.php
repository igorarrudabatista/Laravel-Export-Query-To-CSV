<style>
body {
	background: #eeeeee;
}
.form-inline {
	display: inline-block;
}
.navbar-header.col {
	padding: 0 !important;
}
.navbar {		
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #d6d6d6;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #555;
	padding-left: 0;
	padding-right: 50px;
	font-family: 'Merienda One', sans-serif;
}
.navbar .navbar-brand i {
	font-size: 20px;
	margin-right: 5px;
}
.search-box {
	position: relative;
}	
.search-box input {
	box-shadow: none;
	padding-right: 35px;
	border-radius: 3px !important;
}
.search-box .input-group-addon {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .nav-item i {
	font-size: 18px;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
}
.navbar .nav-item.open > a {
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: #777;
	padding: 8px 20px;
	line-height: normal;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:active {
	color: #333;
}	
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
}
.navbar .badge {
	color: #fff;
	background: #f44336;
	font-size: 11px;
	border-radius: 20px;
	position: absolute;
	min-width: 10px;
	padding: 4px 6px 0;
	min-height: 18px;
	top: 5px;
}
.navbar a.notifications, .navbar a.messages {
	position: relative;
	margin-right: 10px;
}
.navbar a.messages {
	margin-right: 20px;
}
.navbar a.notifications .badge {
	margin-left: -8px;
}
.navbar a.messages .badge {
	margin-left: -4px;
}	
.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
	background: transparent !important;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 1199px){
	.form-inline {
		display: block;
		margin-bottom: 10px;
	}
	.input-group {
		width: 100%;
	}
}
</style>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SEDUC - </title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset ('/css/style-down.css') }}">
  <link rel="stylesheet" href="{{asset ('/css/style-index.css') }}">
  <link rel="stylesheet" href="{{asset ('/css/style-text.css') }}">

  
</head>
<body>
  <!-- partial:index.partial.html -->
  <div class="wrapper">
    <div class="drop">
      <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <a href="#" class="navbar-brand">  <img src="/img/seduc_logo.jpg" width="80"  class="d-inline-block align-top" alt="">
        </a>  		
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
         
          <div class="navbar-nav ml-auto">
   
            <div class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action">
                <img src="{{ Auth::user()->profile_photo_url }}" class="avatar" alt="Avatar">
                {{ Auth::user()->name }} <b class="caret"></b></a>
              <div class="dropdown-menu">
				<form action="{{ asset('/logout') }}" method="post">
					@csrf
                <button type="submit"  class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout </a>
				</form>
              </div>
            </div>
          </div>
        </div>
      </nav>
    <div class="cont">
      <i class="fa fa-cloud-download"></i>
      <div class="tit">
       Clique para baixar
      </div>
      
      <div class="desc">
        Arquivo será exportado em formato <b> CSV. </b>
        <p> Aguarde o carregamento e download. </p>
      </div>
       {{-- <a href="/alunos/csv"> 
         <div class="browse">
           DOWNLOAD 1
        </div> --}}
        
      </a>
      <a href="{{asset ('/matricula/csv') }}"> 
        <div class="browse">
          DOWNLOAD
       </div>
       
     </a>

     <div class="text">
      <p>Desenvolvido por: </p>
      <p>
        <span class="word wisteria"> SEDUC - TI</span>
        <span class="word belize">SEDUC - TI</span>
        <span class="word pomegranate">SEDUC - TI</span>
        <span class="word green">SEDUC - TI</span>
        <span class="word midnight">SEDUC - TI</span>
        <span class="word wisteria">#Somos Todos Educação</span>
      </p>
    </div>

      <!-- partial -->


<!-- partial -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.4.1/snap.svg-min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomEase.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin.min.js'>
</script>
<script  src="{{asset ('/js/script-down.js') }}"></script>
<script  src="{{asset ('/js/script-text.js') }}"></script>



<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>




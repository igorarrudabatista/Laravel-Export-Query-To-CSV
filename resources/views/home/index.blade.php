
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SEDUC - </title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/style-down.css">
  <link rel="stylesheet" href="/css/style-index.css">
  <link rel="stylesheet" href="/css/style-text.css">

  
</head>
<body>
  <!-- partial:index.partial.html -->
  <div class="wrapper">
    <div class="drop">
      <nav class="navbar navbar-light bg-light justify-content-between">
        <img src="/img/seduc_logo.jpg" width="80"  class="d-inline-block align-top" alt="">
         <form method="POST" class="form-inline" name="logout" action="{{ route('logout') }}" >
          @csrf

       <a href="javascript:document.logout.submit()">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Sair</button> </a>
      </form>
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
<script  src="/js/script-down.js"></script>
<script  src="/js/script-text.js"></script>



<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>




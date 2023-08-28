<!doctype html>
<html lang="en">
  <head>
  	<title>Admin - DIM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo">ADMIN - DIM</a></h1>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="/"><span class="fa fa-home mr-3"></span> D A S H B O A R D</a>
          </li>
          <li>
              <a href="test"><span class="fa fa-file-image-o mr-3"></span> L O G O</a>
          </li>
          <li>
            <a href="slider"><span class="fa fa-picture-o mr-3"></span> S L I D E R</a>
          </li>
          <li>
            <a href="katalog"><span class="fa fa-cart-plus mr-3"></span> K A T A L O G</a>
          </li>
          <li>
            <a href="client"><span class="fa fa-handshake-o mr-3"></span> C L I E N T</a>
          </li>
          <li>
            <a href="brand"><span class="fa fa-laptop mr-3"></span> B R A N D</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-10 pt-5">
        <h2 class="mb-4"><center>@yield('judul halaman')</center></h2>
        @yield ('konten')
      </div>
		</div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  </body>
</html>
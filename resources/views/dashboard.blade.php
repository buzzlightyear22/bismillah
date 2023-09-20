<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>PT. Dinamika Indo Media</title>
    <meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}"/>
    <link rel="icon" href="{{ asset('tests/'.$tests) }}">
    <link rel="stylesheet" href="{{ asset('css/navbar_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main_style.css') }}">
    <script src="js/modernizr.custom.js"></script>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-custom" id="navbar">
            <a class="navbar-brand navbar-logo" href="home"><img src="{{ asset('tests/'.$tests) }}" alt="logo" style="height: 45px;"></a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item active">
                        <a class="nav-link" href="#beranda"><i class="fa fa-home"></i><strong>Beranda</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile"><i class="fa fa-university"></i><strong>Profile</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk"><i class="fa fa-shopping-basket"></i><strong>Product</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#customer"><i class="fa fa-handshake"></i><strong>Customer</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hubungi"><i class="fa fa-phone"></i><strong>Hubungi</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><i></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Image Slider -->
    <div id="hero-slider">
        <div id="logo" class="mask">
            <section id="beranda"><span class="logo-text masked">PT. Dinamika Indo Media</span></section>
        </div>

        <div id="slideshow">
            <div id="slides-main" class="slides">
                <div class="slide" data-index="0">
                    <div class="abs-mask">
                        <div class="slide-image"><img src="{{ asset('sliders/'.$slider1) }}" alt="error"></div>
                    </div>
                </div>
                <div class="slide" data-index="1">
                    <div class="abs-mask">
                    <div class="slide-image"><img src="{{ asset('sliders/'.$slider2) }}" alt="error"></div>
                    </div>
                </div>
                <div class="slide" data-index="2">
                    <div class="abs-mask">
                    <div class="slide-image"><img src="{{ asset('sliders/'.$slider3) }}" alt="error"></div>
                    </div>
                </div>
                <div class="slide" data-index="3">
                    <div class="abs-mask">
                    <div class="slide-image"><img src="{{ asset('sliders/'.$slider4) }}" alt="error"></div>
                    </div>
                </div>
            </div>
            <div id="slides-aux" class="slides mask">
                <h2 class="slide-title slide" data-index="0"><a href="#"></a></h2>
                <h2 class="slide-title slide" data-index="1"><a href="#"></a></h2>
                <h2 class="slide-title slide" data-index="2"><a href="#"></a></h2>
                <h2 class="slide-title slide" data-index="3"><a href="#"></a></h2>
            </div>
        </div>
        <div id="info">
            <div class="slider-title-wrapper">
                <span class="line"></span>
                <h1 class="slider-title">
                </h1>
            </div>
        </div>
        <nav id="slider-nav">
            <span class="current">01</span>
            <span class="total">04</span>
        </nav>
    </div>

    <!-- About Company -->

<div class= "aboutus"><h3 style="font-family: Poppins, sans-serif; font-weight:bold;" id="profile">Dinamika Indo Media</h3><p style="line-height:1.2em;font-size:12pt"><span style="font-weight: bold">PT. DINAMIKA INDO MEDIA</span> berdiri pada hari Kamis tanggal 10 Februari 2011 di Kabupaten Bekasi, saat ini kami bergerak dibidang pengadaan barang untuk pemenuhan kebutuhan instansi, Lembaga, dan satuan kerja pemerintahan yang bertempat di Kota Surabaya.</p></div>

<div class="col1">
<img src="{{ asset('sliders/'.$ecatalogue) }}" alt="">
<div class="col2">
    <h3 style="color: white">Anda mencari mitra yang dapat diandalkan dalam mengembangkan bisnis Anda?</h3>
    <a href="https://e-katalog.lkpp.go.id/info/penyedia/252896"><button class="button" style="vertical-align:middle"><span>E-Catalogue</span></button></a>
</div>
</div>


<section class="service_section layout_padding">
    <div class="service_container3">
        <div class="container3 ">
            <div class="heading_container3">
            <h2 style="font-family: Poppins, sans-serif;">
            Unit <span>Bisnis</span>
            </h2>
            <p style="text-align: center">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            </p>
            </div>
            <div class="row3">
                <div class="col-md-6 ">
                    <div class="box3">
                        <div class="img-box3">
                        <img src="{{ asset('images/customer-service.png') }}" alt="">
                        </div>
                            <div class="detail-box3">
                            <h5 style="font-family: Poppins, sans-serif;">
                            Penyedia Jasa
                            </h5>
                            <p>
                            fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using
                            </p>
                            </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div   div class="box3">
                        <div class="img-box3">
                        <img src="{{ asset('images/sale.png') }}" alt="">
                        </div>
                            <div class="detail-box3">
                            <h5 style="font-family: Poppins, sans-serif;">
                            Retail
                            </h5>
                            <p>
                            fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            The
                            point of using
                            </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class= "brand" style="font-weight:bold; padding: 30px;"><h3 style="font-family: Poppins, sans-serif;">Support <span style="color:#0a97b0;">Brand</span></h3><p></p></div>
    <!-- slider brand -->
    <section id="brand"></section>
    <div class="wrapper">
	<div class="slider">
	    <div class="slide-track">

                <!-- Img Code -->
                @foreach ($brands as $brand)
                    <div class="slide">
                        <img src="{{ asset('brands/'.$brand->image) }}" alt="error">
                    </div>
                @endforeach
                <!-- Img Code End -->

            </div>
        </div>
    </div>
</section>



<div class="col3">
<h2>Penyedia Jasa</h2>
<ul>
    <li>Melayani Pembangunan Sekolah</li>
    <li>Melayani Pembangunan Kantor/Instansi</li>
    <li>Melayani Pembangunan Gudang</li>
</ul>
<div class="col4">
<img src="{{ asset('sliders/'.$kontruksi) }}" alt="">
</div>
</div>

<section class="con-retail">
<div class="col1-retail">
        <img src="{{ asset('sliders/'.$retail) }}" alt="">
        <div class=col2-retail>
            <h2>Retail</h2>
            <ul>
            @foreach ($katalogs as $katalog)
                <li>
                    {{ $katalog->title }}
                </li>
            @endforeach
        </ul>
        </div>
    </div>
</section>


<div class= "produk" style="font-weight=bold;"><h3 style="font-family: Poppins, sans-serif;" id="produk">Produk <span style="color:#0a97b0;">Kami</span></h3><p>Kami telah meningkatkan kinerja perusahaan dengan menjalin kerja sama bersama beberapa klien.</p></div>
    <ul class="grid cs-style-3">
        @foreach ($katalogs as $katalog)
        <li>
            <figure>
                <img src="{{ asset('katalogs/'.$katalog->image) }}" alt="img04">
                <figcaption>
                    <h3>{{ $katalog->title }}</h3>
                    <span>{!! $katalog->content !!}</span>
                </figcaption>
            </figure>
        </li>
        @endforeach
	</ul>

    <div class= "customer" style="font-weight:bold;"><h3 style="font-family: Poppins, sans-serif;">Customer <span style="color:#0a97b0;">Kami</span></h3><p>"Kami besar dengan kepercayaan pelanggan dan kami memiliki visi untuk mengembangan produk kami hingga ke luar negeri."</p></div>
    <!-- slider customer -->
    <section id="customer"></section>
    <div class="wrapper">
	<div class="slider">
	    <div class="slide-track">

                <!-- Img Code -->
                @foreach ($clients as $client)
                    <div class="slide">
                        <img src="{{ asset('clients/'.$client->image) }}" alt="error">
                    </div>
                @endforeach
                <!-- Img Code End -->

            </div>
        </div>
    </div>

    

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <div class="row3">
      <div class="col">
        <img src="{{ asset('tests/'.$tests) }}" class="logo">
        <section id="hubungi"><p><span style="font-weight: bold">PT. DINAMIKA INDO MEDIA</span> berdiri pada hari Kamis tanggal 10 Februari 2011
          di Kabupaten Bekasi, saat ini kami bergerak dibidang pengadaan barang
          untuk pemenuhan kebutuhan instansi, Lembaga, dan satuan kerja
          pemerintahan yang bertempat di Kota Surabaya</p></section>
      </div>
      <div class="col">
        <h3>Office</h3>
        <p>JL. Karah Agung 45</p>
        <p>Surabaya, Jawa Timur</p>
        <p class="email-id"> info.jepepress@gmail.com</p>
        <h4>+62318289999</h4>
      </div>
      <div class="col">
        <h3>Links</h3>
        <ul>
          <li><a href="https://siplah.temprina.co.id/">SIPLah Temprina</a></li>
          <li><a href="https://www.jpbooks.id/">JPBooks Store</a></li>
          <li><a href="https://cahayaquran.com/">Cahaya Quran</a></li>
          <li><a href="https://temprina.com/main/index#">TemaTrade</a></li>
          <li><a href="https://www.temapack.co.id/">TemaPack</a></li>
          <li><a href="https://temprina.com/main/index#">BeLa Pengadaan</a></li>
        </ul>
      </div>
      <div class="col">
        <h3>Email</h3>
        <form>
          <i class="far fa-envelope"></i>
          <input type="email" placeholder="Enter your email id" required style="place-content: white;">
          <button type="Submit"><i class="fas fa-arrow3-right"></i></button>
        </form>
      </div>
    </div>
    </ul>
    <p>&copy;2023 Mahasiswa It Telkom Surabaya | All Right Reserved</p>
  </footer>
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main2.js') }}"></script>
    <script src="{{ asset('js/toucheffects.js') }}"></script>
</body>
</html>
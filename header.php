<header>
  <style>
    /* Carousel styling */
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {height: 100vh;}

    .carousel-item:nth-child(1) {
      background-image: url('/src/img/slider-1.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item:nth-child(2) {
      background-image: url('/src/img/slider-2.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item:nth-child(3) {
      background-image: url('/src/img/slider-3.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    @media (min-width: 992px) {
      #introCarousel { margin-top: -58.59px; }
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active { height: 50vh; }
    }

    .navbar .nav-link {color: #fff !important;}
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="background-color: #052942; z-index: 2000;">
    <div class="container-fluid">    
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active"><a class="nav-link" aria-current="page" href="../../index.php">Главная</a></li>
            <li class="nav-item"><a class="nav-link" href="/pages/about-us/">О нас</a></li>
            <li class="nav-item"><a class="nav-link" href="/pages/management/">Руководство</a></li>
          </ul>
          <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item me-3 me-lg-0"><button data-mdb-ripple-color="primary" type="button" class="btn btn-light">
                <a href="https://lspd.gta-world.ru/ucp.php?i=pm&mode=compose&u=2249" class="text-black">Связаться с нами</a></button></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
    <ol class="carousel-indicators">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h1 class="mb-3">Прием заявлений в академию</h1>
              <h5 class="mb-4">Подавайте свое заявление прямо сейчас, используя нашу специальную онлайн форму</h5>
              <a class="btn btn-outline-light btn-lg m-2" href="http://lspdforensics.site/application.php" role="button" rel="nofollow" target="_blank">Подать заявление</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center"><h2>Служба на благо общества</h2></div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="mask" style="background: rgba(0, 0, 0, 0.3);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center"><h2>Качество за счет постоянного совершенствования</h2></div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Предыдущее</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Следующее</span>
    </a>
  </div>
</header>
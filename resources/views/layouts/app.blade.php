
<!DOCTYPE html>
<html lang="hy">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Style -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/dist/css/style.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="icon" href="{{ asset ('/bower_components/admin-lte/dist/image/icons/logo.png') }}">
  <title>Fast Food | ԳԼԽԱՎՈՐ</title>
  <body>
  </head>

  <!-- header -->
  <header id="up"class="container-fluid p-0 ">
    <!-- Navbar -->
    <nav class="row navbar navbar-expand-lg fixed-top  nav-bg">
      <button class="navbar-toggler bg-danger ml-md-3 ml-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- logo -->

      <div class="nav-logo d-flex justify-content-center mx-lg-4 mr-md-4 mx-sm-4 mx-2">
        <a href="home"><img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/logo.png') }}" class="pb-2" width="45px"></i></a>
      </div>
      <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto pt-lg-2">
          <li class="nav-item mx-lg-2 ml-3 ml-md-3 {{ 'home' == request()->path() ? 'active' : '' }}">
            <a class="nav-link" href="home"><b>ԳԼԽԱՎՈՐ</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mx-lg-1 ml-3 ml-md-3 {{ 'menu' == request()->path() ? 'active' : '' }}">
            <a class="nav-link" href="menu"><b>ՄԵՆՅՈՒ</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mx-lg-1 ml-3 ml-md-3 {{ 'about' == request()->path() ? 'active' : '' }}">
            <a class="nav-link" href="about"><b>ՄԵՐ ՄԱՍՆԻ</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mx-lg-1 ml-3 ml-md-3 mb-sm-2 mb-2 {{ 'contact' == request()->path() ? 'active' : '' }}">
            <a class="nav-link" href="contact"><b>ԿԱՊ</b><span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!-- basket -->
        <div class="nav-basket d-lg-flex justify-content-center ml-lg-0 ml-xl-0 ml-3 mb-2 mb-lg-0">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop-basket"><i class="fas fa-shopping-basket text-white pr-2 m-0 pt-1"></i><span class="badge badge-dark bg-dark">3</span></button>
        </div class="nav-log-in d-flex justify-content-lg-center justify-content-md-start mt-lg-0 mt-md-3 mt-sm-3 mt-2">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('register'))
        <button type="button" class="btn btn-success mr-lg-3 mr-md-3 mr-sm-3 mr-2 ml-md-3 ml-3" data-toggle="modal" data-target="#staticBackdrop-signup">{{ __('Գրանցում') }}</button>
        <button type="button" class="btn btn-danger text-white mr-2" data-toggle="modal" data-target="#staticBackdrop-login">{{ __('Մուտք') }}</button>
        @endif
        @else
        <div class="btn-group my-2">
          <a class="mr-3" href="myaccount"><i class="fas fa-user-circle text-success ml-3"></i></a>
          <a class="dropdown-item bg-danger text-white rounded mr-2 py-2 px-3" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt m-0 pt-1"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
      @endguest
    </div>
    <div class="tel-number d-flex justify-content-center mr-lg-4 ml-lg-0 mt-md-2 mt-sm-2 mt-2 mx-md-3 mx-3">
      <a class="d-flex pb-lg-2 ml-lg-2"><i class="fas fa-phone-volume nav-number text-danger pr-2 "></i><p class="text-white header-tell-sizeing">(+374) 77 00-00-00</p></a>
    </div>
  </nav>
  <!-- slaid -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade w-100" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner active">
      <!-- slide active -->
      <div class="carousel-item active slide-bg d-flex">
        <div class="text w-100 d-flex justify-content-center align-items-center col-lg-7">
          <div>
            <h3 class="text-danger col-lg-12 text-header mx-lg-5 text-center">Հատուկ առաջարկ</h3>
            <p class="text-white-50 text-price m-lg-5 my-sm-5 my-md-5 col-lg-12"><img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/food-and-restaurant.png') }}"> + <img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/food.png') }}"> + <img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/cola.png') }}"> = 1900 դրամ</p>
            <button type="button" class="btn btn-danger float-right mr-lg-5">Տեսնել ավելին</button>
          </div>
        </div>
        <div class="image w-100 d-lg-flex justify-content-center align-items-center d-none d-lg-inline-block col-lg-5">
          <img src="{{ asset ('/bower_components/admin-lte/dist/image/combo-1.png') }}" class="w-100">
        </div>
      </div>
      <!-- slide 1 -->
      <div class="carousel-item slide-bg d-flex">
        <div class="image w-100 d-lg-flex justify-content-center align-items-center d-none d-lg-inline-block col-lg-5">
          <img src="{{ asset ('/bower_components/admin-lte/dist/image/combo-2.png') }}"class="w-100">
        </div>
        <div class="text w-100 d-flex justify-content-center align-items-center col-lg-7">
          <div>
            <h3 class="text-danger col-lg-12 text-header mx-lg-5 text-center">Հատուկ առաջարկ</h3>
            <p class="text-white-50 text-price m-lg-5 my-sm-5 my-md-5 col-lg-12"><img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/sandwich.png') }}"> + <img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/pasta.png') }}"> + <img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/cola.png') }}"> = 2500 դրամ</p>
            <button type="button" class="btn btn-danger float-left ml-lg-5">Տեսնել ավելին</button>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>
<!-- main -->
<main class="container-fluid p-0">
  @yield('content')
</main>
<!-- footer -->
<footer class="container-fluid w100 text-white">
  <div class="">
    <div class="row ">
      <a class="col-lg col-sm rounded-0 btn btn-danger text-light stretched-link {{ 'home' == request()->path() ? 'footer-active' : '' }}" href="home">ԳԼԽԱՎՈՐ</a>
      <a class="col-lg col-sm rounded-0 btn btn-danger text-light stretched-link {{ 'menu' == request()->path() ? 'footer-active' : '' }}" href="menu">ՄԵՆՅՈՒ</a>
      <a class="col-lg col-sm rounded-0 btn btn-danger text-light stretched-link {{ 'about' == request()->path() ? 'footer-active' : '' }}" href="about">ՄԵՐ ՄԱՍԻՆ</a>
      <a class="col-lg col-sm rounded-0 btn btn-danger text-light stretched-link {{ 'contact' == request()->path() ? 'footer-active' : '' }}" href="contact">ԿԱՊ</a>
    </div>
    <div class="row footer-bg p-5">
      <div class="col-lg-4 col-sm-6">
        <h3 class="d-flex justify-content-center text-white-50 pb-4">ԿՈՆՏԱԿՏ</h3>
        <p class="d-flex justify-content-center">
          <p class="footer-adress mb-4"><i class="fas fa-map-marker-alt pr-2"></i>Ք. Երևան, ...</p>
          <p class="footer-tell mb-4"><i class="fas fa-phone-volume pr-2"></i>(+374) 77 00-00-00</p>
          <a class="footer-gmail text-decoration-none" href=""><i class="fas fa-envelope pr-2"></i>fast-food@gmail.com</a>
        </p>
      </div>
      <div class="col-lg-4 col-sm-6">
        <h3 class="d-flex justify-content-center text-white-50 pb-4">ՀԵՏԵՎԵՔ ՄԵԶ</h3>
        <p class="d-flex justify-content-center py-lg-5 py-md-5 py-sm-5 py-0 pb-0">
          <a href="https://www.facebook.com/" class="pr-3" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/" class="pl-3" target="_blank"><i class="fab fa-instagram"></i></a>
        </p>
      </div>
      <div class="col-lg-4">
        <h3 class="d-flex justify-content-center text-white-50 pb-4">ՔԱՐՏԵԶ</h3>
        <iframe class=" border border-0 embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97583.88432296038!2d44.41852698337978!3d40.15350050921393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406aa2dab8fc8b5b%3A0x3d1479ae87da526a!2z1LXWgNaH1aHVtiwg1YDVodW11aHVvdW_1aHVtg!5e0!3m2!1shy!2s!4v1588101524424!5m2!1shy!2s" width="100%" height="180px" allowfullscreen></iframe>
      </div>
    </div>
    <div class="row d-flex justify-content-center footer-bottom-bg">
      <p class="p-2 m-0 text-white"><b><span class="text-danger">FAST FOOD</span></b> &copy; 2020. Բոլոր իրավունքները պաշտպանված են.</p>
    </div>
  </div>
  <a class="up" href="#up">
    <i class="fas fa-chevron-up"></i>
  </a> 
</footer>
<!-- MODAL -->
<!-- Basket modal -->
<div class="modal fade show" id="staticBackdrop-basket" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-modal="true">
  <div class="modal-dialog d-flex justify-content-center mr-lg-2 mr-md-2 pt-5 float-lg-right float-md-left modal-basket-h-w modal-dialog-scrollable" role="document">
    <div class="modal-content modal-home-widht">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="staticBackdropLabel">ԶԱՄԲՅՈՒՂ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
          <div class="mr-auto">
            <div class="text-dark modal-basket-h1 mb-2">
              <b>Խոզի խորոված</b><span class="text-danger"> X 5</span>
            </div>
            <div class="py-0 modal-basket-p">
              xxxx դրամ
            </div>
          </div>
          <div>
            <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
        <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
          <div class="mr-auto">
            <div class="text-dark modal-basket-h1 mb-2">
              <b>Խոզի խորոված</b><span class="text-danger"> X 5</span>
            </div>
            <div class="py-0 modal-basket-p">
              xxxx դրամ
            </div>
          </div>
          <div>
            <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
        <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
          <div class="mr-auto">
            <div class="text-dark modal-basket-h1 mb-2">
              <b>Խոզի խորոված</b><span class="text-danger"> X 1</span>
            </div>
            <div class="py-0 modal-basket-p">
              xxxx դրամ
            </div>
          </div>
          <div>
            <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
        <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
          <div class="mr-auto">
            <div class="text-dark modal-basket-h1 mb-2">
              <b>Խոզի խորոված</b><span class="text-danger"> X 3</span>
            </div>
            <div class="py-0 modal-basket-p">
              xxxx դրամ
            </div>
          </div>
          <div>
            <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <b class="text-dark modal-basket-footer-p mr-auto">Ընդամենը՝ xxxxx դրամ</b>
        <a type="submit" class="btn btn-danger text-white  ml-1 dicoration" href="order">Պատվիրել</a>
      </div>
    </div>
  </div>
</div>      
<!-- log in modal -->
<div class="modal fade" id="staticBackdrop-login"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center pt-lg-5 pt-md-5" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="staticBackdropLabel">Մուտք գործել</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <div class="container-fluid">
          <form class="px-4 py-3 w-100" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group w-100 col-12">
              <label for="email">{{ __('Էլ.փոստ') }}</label>
              <div class="col-12 p-0">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group w-100 col-12">
              <label for="password">{{ __('Գաղտնաբառ') }}</label>
              <div class="col-12 p-0">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group d-flex justify-content-between p-3">
             <div class="">
                @if (Route::has('register'))
                <a class="btn btn-link text-success p-0" href="register">
                  {{ __('Գրանցվել') }}
                </a> 
                @endif
              </div>
              <div class="">
                <button type="submit" class="btn btn-danger text-white text-right ml-3">
                  {{ __('Մուտք գործել') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>   
<!-- Sing in modal -->
<div class="modal fade" id="staticBackdrop-signup" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center pt-lg-5 pt-md-5" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="staticBackdropLabel">Գրանցվել</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <div class="container-fluid">
          <form method="POST" class="px-4 py-3 w-100" action="{{ route('register') }}">
            @csrf
            <div class="form-group w-100 col-12">
              <label for="name" class="text-dark px-3">{{ __('Անուն') }}</label>
              <div class="form-group w-100 col-12">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group w-100 col-12">
              <label for="email" class="text-dark px-3">{{ __('Էլ.փոստ') }}</label>
              <div class="form-group w-100 col-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group w-100 col-12">
              <label for="password" class="text-dark px-3">{{ __('Գաղտնաբառ') }}</label>
              <div class="form-group w-100 col-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group w-100 col-12">
              <label for="password-confirm" class="text-dark px-3">{{ __('Կրկնել Գաղտնաբառ') }}</label>
              <div class="form-group w-100 col-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
                        <div class="form-group d-flex justify-content-between p-3">
             <div class="">
                @if (Route::has('register'))
                <a class="btn btn-link text-danger p-0" href="register">
                  {{ __('Մուտք գործել') }}
                </a> 
                @endif
              </div>
              <div class="">
                <button type="submit" class="btn btn-success text-white text-right ml-3">
                  {{ __('Գրանցվել') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>    
<!-- Modal menu -->
<?php
if (!empty($products)) {
  foreach ($products as $key => $value) {
    ?>
    <div class="modal fade p-0" id="product<?php echo $value['id'] ?>"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-danger" id="staticBackdropLabel"><b><?php echo $value['title'] ?></b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="row modal-body p-0">
            <div class="container-fluid d-lg-flex">
              <div class="col-lg-5 col-sm-12">
                <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img" alt="...">
              </div>
              <div class="col-lg-7">
                <div class="card-body">
                  <p class="card-text text-muted mb-2 text-left"><?php echo $value['description'] ?></p>
                  <p class="card-text text-muted mb-2 text-left"><?php echo $value['size'] ?></p>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label text-muted" for="customCheck1">Սոխ</label>
                  </div> 
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label text-muted" for="customCheck2">Կանաչի</label>
                  </div> 
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label text-muted" for="customCheck3">Կետչուպ</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label text-muted" for="customCheck4">Մայոնեզ</label>
                  </div> 
                  <div class="d-flex justify-content-between">
                    <form class="d-flex mt-2">
                      <p class="text-danger mr-2">Քանակ՝</p>
                      <input value="0" type="text" class="number text-muted" maxlength="2" name="quantity">
                    </form>  
                    <p class="card-text text-danger text-left d-flex justify-content-between align-items-center"><b><?php echo $value['price'] ?></b></p>
                  </div>               
                </div>
              </div> 
            </div>
          </div>
          <div class="modal-footer"> 
            <button type="submit" class="btn btn-danger text-white mr-auto ml-3" data-dismiss="modal">Ավելացնել Զամբյուղ</button>
            <button type="button" class="btn btn-dark mr-4" data-dismiss="modal">Փակել</button>
          </div>
        </div> 
      </div>
    </div>   
  <?php }} ?>

  <?php
  if (!empty($fastfoods)) {
    foreach ($fastfoods as $key => $value) {
      ?>
      <div class="modal fade p-0" id="fastfood<?php echo $value['id'] ?>"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="staticBackdropLabel"><b><?php echo $value['title'] ?></b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row modal-body p-0">
              <div class="container-fluid d-lg-flex">
                <div class="col-lg-5 col-sm-12">
                  <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img" alt="...">
                </div>
                <div class="col-lg-7">
                  <div class="card-body">
                    <p class="card-text text-muted mb-2 text-left"><?php echo $value['description'] ?></p>
                    <p class="card-text text-muted mb-2 text-left"><?php echo $value['size'] ?></p>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label text-muted" for="customCheck1">Սոխ</label>
                    </div> 
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label text-muted" for="customCheck2">Կանաչի</label>
                    </div> 
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label text-muted" for="customCheck3">Կետչուպ</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                      <label class="custom-control-label text-muted" for="customCheck4">Մայոնեզ</label>
                    </div> 
                    <div class="d-flex justify-content-between">
                      <form class="d-flex mt-2">
                        <p class="text-danger mr-2">Քանակ՝</p>
                        <input value="0" type="text" class="number text-muted" maxlength="2" name="quantity">
                      </form>  
                      <p class="card-text text-danger text-left d-flex justify-content-between align-items-center px-3"><b><?php echo $value['price'] ?></b></p>
                    </div>               
                  </div>
                </div> 
              </div>
            </div>
            <div class="modal-footer"> 
              <button type="submit" class="btn btn-danger text-white mr-auto ml-3" data-dismiss="modal">Ավելացնել Զամբյուղ</button>
              <button type="button" class="btn btn-dark mr-4" data-dismiss="modal">Փակել</button>
            </div>
          </div> 
        </div>
      </div>   
    <?php }} ?>

  <?php
  if (!empty($soups)) {
    foreach ($soups as $key => $value) {
      ?>
      <div class="modal fade p-0" id="soup<?php echo $value['id'] ?>"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="staticBackdropLabel"><b><?php echo $value['title'] ?></b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row modal-body p-0">
              <div class="container-fluid d-lg-flex">
                <div class="col-lg-5 col-sm-12">
                  <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img" alt="...">
                </div>
                <div class="col-lg-7">
                  <div class="card-body">
                    <p class="card-text text-muted mb-2 text-left"><?php echo $value['description'] ?></p>
                    <p class="card-text text-muted mb-2 text-left"><?php echo $value['size'] ?></p>
                    <div class="d-flex justify-content-between">
                      <form class="d-flex mt-2">
                        <p class="text-danger mr-2">Քանակ՝</p>
                        <input value="0" type="text" class="number text-muted" maxlength="2" name="quantity">
                      </form>  
                      <p class="card-text text-danger text-left d-flex justify-content-between align-items-center px-3"><b><?php echo $value['price'] ?></b></p>
                    </div>               
                  </div>
                </div> 
              </div>
            </div>
            <div class="modal-footer"> 
              <button type="submit" class="btn btn-danger text-white mr-auto ml-3" data-dismiss="modal">Ավելացնել Զամբյուղ</button>
              <button type="button" class="btn btn-dark mr-4" data-dismiss="modal">Փակել</button>
            </div>
          </div> 
        </div>
      </div>   
    <?php }} ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>

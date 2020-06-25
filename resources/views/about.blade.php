@extends('layouts.app')

@section('content')
    <main class="container-fluid p-0">
      <div>
        <h1 class="main-header text-danger text-center p-5 m-0">ՄԵՐ ՄԱՍԻՆ</h1>
      </div>
      <section class="row w-100 px-3 py-lg-5 my-lg-0 my-md-3 m-0">
        <div class="col-lg-6 mx-lg-0 mx-md-4 pt-2 my-lg-0 my-md-0 my-3">
          <p class="text-white-50 text-center about-us-text px-4 mb-md-3 m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
        </div>
        <div class="col-lg-6 mt-2 mx-lg-0 mx-5 my-md-3 my-sm-3 d-lg-inline-block d-md-inline-block d-none">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset ('/bower_components/admin-lte/dist/image/about-img-1.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset ('/bower_components/admin-lte/dist/image/about-img-2.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset ('/bower_components/admin-lte/dist/image/about-img-3.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection


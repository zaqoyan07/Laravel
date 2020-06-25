@extends('layouts.app')

@section('content')
<div>
  <h1 class="main-header text-danger text-center p-5 m-0">ՄԻՇՏ ԹԱՐՄ ԵՎ ՀԱՄԵՂ</h1>
</div>
<div class="main-1-bg"></div>
<h1 class="main-header text-center text-danger p-5 m-0">ՄԵՆՅՈԻ</h1>
<section class="row w-100 p-lg-3 pb-md-2 m-0 m-lg-0 m-md-0 m-sm-0 pt-sm-5 d-flex justify-content-center nav nav-pills" id="pills-tab" role="tablist">
  <a class="text-decoration-none text-danger main-menu-barbecue m-md-4 m-sm-4 m-4 col-lg col-md-4 col-sm-6 col-8 d-flex justify-content-center align-items-center" id="pills-barbecue-tab" data-toggle="pill" href="#pills-barbecue"  role="tab" aria-controls="pills-barbecue" aria-selected="true" ><h3>ԽՈՐՈՎԱԾ</h3></a>
  <a class="text-decoration-none text-danger main-menu-fast-food m-md-4 m-sm-4 m-4 col-lg col-md-4 col-sm-6 col-8 d-flex justify-content-center align-items-center" id="pills-fast-food-tab" data-toggle="pill" href="#pills-fast-food" role="tab" aria-controls="pills-fast-food" aria-selected="true"><h3>ԱՐԱԳ ՍՆՈՒՆԴ</h3></a>
  <a class="text-decoration-none text-danger main-menu-hot-dish m-md-4 m-sm-4 m-4 col-lg col-md-4 col-sm-6 col-8 d-flex justify-content-center align-items-center" id="pills-hot-dish-tab" data-toggle="pill" href="#pills-hot-dish" role="tab" aria-controls="pills-hot-dish" aria-selected="true"><h3>ՏԱՔ ՈՒՏԵՍՏ</h3></a>
  <a class="text-decoration-none text-danger main-menu-drink m-md-4 m-sm-4 m-4 col-lg col-md-4 col-sm-6 col-8 d-flex justify-content-center align-items-center" id="pills-drink-tab" data-toggle="pill" href="#pills-drink" role="tab" aria-controls="pills-drink" aria-selected="true"><h3>ԸՄՊԵԼԻՔ</h3></a>
</section>
<div class="container-sm tab-content rounded p-lg-0 main-pills-bg col-lg-10" id="pills-tabContent">
  <!-- Barbecue -->
  <div class="row tab-pane fade p-1 m-0 mb-5" id="pills-barbecue" role="tabpanel" aria-labelledby="pills-barbecue-tab">
    <div class="tab-pane p-0 m-0 menu-display">
      <?php 
      foreach ($products as $key => $value) {
        ?>
        <div class="card border-0 d-lg-inline-block m-lg-4 mx-auto my-4 pr-0 col-lg-5 col-md-11 col-sm-11 col-10">
          <div class="row no-gutters h-100">
            <div class="col-md-5 col-sm-5 col-12">
              <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img" alt="...">
            </div>
            <div class="col-md-7 col-sm-7 col-12">
              <div class="card-body  m-0 p-2 d-flex flex-column bd-highlight mb-3 h-100">
                <div class="p-2 bd-highlight"><h5 class="card-title text-danger text-center m-0"><b><?php echo $value['title'] ?></b></h5></div>
                <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['description'] ?></p></div>
                <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['size'] ?></p></div>
                <div class="mt-auto p-2 bd-highlight"><p class="card-text text-danger text-left d-flex justify-content-between align-items-center"><b><?php echo $value['price'] ?></b><a href="menu.html" class="btn btn-danger text-white" data-toggle="modal" data-target="#product<?php echo $value['id'] ?>">ԱՎԵԼԱՑՆԵԼ</a></p></div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>          
    </div>
  </div>
  <!-- Fast-food -->
  <div class="row tab-pane fade p-1 m-0 mb-5" id="pills-fast-food" role="tabpanel" aria-labelledby="pills-fast-food-tab">
    <div class="tab-pane p-0 m-0 menu-display">
      <?php 
      foreach ($fastfoods as $key => $value) {
        ?>
        <div class="card border-0 d-lg-inline-block m-lg-4 mx-auto my-4 pr-0 col-lg-5 col-md-11 col-sm-11 col-10">
          <div class="row no-gutters h-100">
            <div class="col-md-5 col-sm-5 col-12">
              <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img" alt="...">
            </div>
            <div class="col-md-7 col-sm-7 col-12">
              <div class="card-body  m-0 p-2 d-flex flex-column bd-highlight mb-3 h-100">
                <div class="p-2 bd-highlight"><h5 class="card-title text-danger text-center m-0"><b><?php echo $value['title'] ?></b></h5></div>
                <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['description'] ?></p></div>
                <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['size'] ?></p></div>
                <div class="mt-auto p-2 bd-highlight"><p class="card-text text-danger text-left d-flex justify-content-between align-items-center"><b><?php echo $value['price'] ?></b><a href="menu.html" class="btn btn-danger text-white" data-toggle="modal" data-target="#fastfood<?php echo $value['id'] ?>">ԱՎԵԼԱՑՆԵԼ</a></p></div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>          
    </div>
  </div>
  <!-- Hot dish -->
  <div class="row tab-pane fade p-1 m-0 mb-5" id="pills-hot-dish" role="tabpanel" aria-labelledby="pills-hot-dish-tab">
    <div class="tab-pane p-0 m-0 menu-display">
      <?php 
      foreach ($soups as $key => $value) {
        ?>
        <div class="card border-0 d-lg-inline-block m-lg-4 mx-auto my-4 pr-0 col-lg-5 col-md-11 col-sm-11 col-10">
          <div class="row no-gutters h-100">
            <div class="col-md-5 col-sm-5 col-12">
              <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img" alt="...">
            </div>
            <div class="col-md-7 col-sm-7 col-12">
              <div class="card-body  m-0 p-2 d-flex flex-column bd-highlight mb-3 h-100">
                <div class="p-2 bd-highlight"><h5 class="card-title text-danger text-center m-0"><b><?php echo $value['title'] ?></b></h5></div>
                <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['description'] ?></p></div>
                <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['size'] ?></p></div>
                <div class="mt-auto p-2 bd-highlight"><p class="card-text text-danger text-left d-flex justify-content-between align-items-center"><b><?php echo $value['price'] ?></b><a href="menu.html" class="btn btn-danger text-white" data-toggle="modal" data-target="#soup<?php echo $value['id'] ?>">ԱՎԵԼԱՑՆԵԼ</a></p></div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>          
    </div>    
  </div>
  <!-- Drink -->
  <div class="row tab-pane fade p-1 m-0 mb-5" id="pills-drink" role="tabpanel" aria-labelledby="pills-drink-tab">
    <div class="tab-pane p-0 m-0 menu-display">
      <?php 
      foreach ($drinks as $key => $value) {
        ?>
        <div class="card d-inline-block m-4 p-0 col-lg-3 col-md-5 col-sm-10 col-10">
          <h4 class="card-title text-danger text-center mb-1 mt-3"><?php echo $value['title'] ?></h4>
          <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img-top" alt="...">
          <div class="card-body  m-0 p-2 d-flex flex-column bd-highlight">
            <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['size'] ?></p></div>
            <div class="p-2 bd-highlight"><p class="card-text text-danger text-left d-flex justify-content-between align-items-center"><b><?php echo $value['price'] ?></b><a href="menu.html" class="btn btn-danger text-white" data-toggle="modal" data-target="#drink<?php echo $value['id'] ?>">ԱՎԵԼԱՑՆԵԼ</a></p></div>
          </div>
        </div>
        <?php
      }
      ?>

    </div>
  </div>
</div>
<div class="text-center mb-5"><a href="menu" class="btn btn-danger text-white col-lg-2 col-md-4 col-sm-6 col-7">Տեսնել ավելին</a></div>
<div>
  <h1 class="main-header text-danger text-center p-5 m-0">ՄԵՐ ՄԱՍԻՆ</h1>
</div>
<section class="row m-0 pt-5">
  <div class="text-center text-white-50 main-about-us-text">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.</p>
  </div>
  <div class="card-columns py-5">
    <div class="card">
      <img src="{{ asset ('/bower_components/admin-lte/dist/image/main-img-1.jpg') }}" class="card-img-top" alt="...">
    </div>
    <div class="card">
      <img src="{{ asset ('/bower_components/admin-lte/dist/image/main-img-2.jpg') }}" class="card-img-top" alt="...">
    </div>
    <div class="card">
      <img src="{{ asset ('/bower_components/admin-lte/dist/image/main-img-3.jpg') }}" class="card-img-top" alt="...">
    </div>
    <div class="card">
      <img src="{{ asset ('/bower_components/admin-lte/dist/image/main-img-4.jpg') }}" class="card-img-top" alt="...">
    </div>
    <div class="card">
      <img src="{{ asset ('/bower_components/admin-lte/dist/image/main-img-5.jpg') }}" class="card-img-top" alt="...">
    </div>
    <div class="card">
      <img src="{{ asset ('/bower_components/admin-lte/dist/image/main-img-6.jpg') }}" class="card-img-top" alt="...">
    </div>
  </div>
</section>
@endsection

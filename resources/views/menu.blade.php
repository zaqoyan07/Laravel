@extends('layouts.app')

@section('content')
<h1 class="main-header text-center text-danger p-5 m-0">ՄԵՆՅՈԻ</h1>
<div class="row menu-width-100 mx-auto my-4">
  <a href="#barbecue" class="btn btn-danger rounded-0 d-flex align-items-center justify-content-center mx-3 mx-sm-1 col-lg col-md col-sm">ԽՈՐՈՎԱԾ</a>
  <a href="#fast-food" class="btn btn-danger rounded-0 d-flex align-items-center justify-content-center mx-3 mx-sm-1 col-lg col-md col-sm">ԱՐԱԳ ՍՆՈՒՆԴ</a>
  <a href="#hot-dish" class="btn btn-danger rounded-0 d-flex align-items-center justify-content-center mx-3 mx-sm-1 col-lg col-md col-sm">ՏԱՔ ՈՒՏԵՍՏ</a>
  <a href="#drink" class="btn btn-danger rounded-0 d-flex align-items-center justify-content-center mx-3 mx-sm-1 col-lg col-md col-sm">ԸՄՊԵԼԻՔ</a>
</div>
<div class="container-sm mb-5 p-0 bg-white border-none main-pills-bg rounded">
  <!-- barbecue -->
  <div class="w-100 text-white-50 bg-dark p-3"><h3 id="barbecue" class="ml-5">ԽՈՐՈՎԱԾ</h3></div>
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
  <!-- Fast-food -->
  <div class="w-100 text-white-50 bg-dark p-3"><h3 id="fast-food" class="ml-5">ԱՐԱԳ ՍՆՈՒՆԴ</h3></div>
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
    <!-- Hot-dish -->
    <div class="w-100 text-white-50 bg-dark p-3"><h3 id="hot-dish" class="ml-5">ՏԱՔ ՈՒՏԵՍՏ</h3></div>
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
    <!-- drink -->
    <div class="w-100 text-white-50 bg-dark p-3"><h3 id="drink" class="ml-5">ԸՄՊԵԼԻՔ</h3></div>
    <div class="tab-pane p-0 m-0 menu-display">
      <?php 
      foreach ($drinks as $key => $value) {
        ?>
        <div class="card d-inline-block m-4 p-0 col-lg-3 col-md-5 col-sm-10 col-10">
          <h4 class="card-title text-danger text-center mb-1 mt-3"><?php echo $value['title'] ?></h4>
          <img src="{{ asset('/bower_components/admin-lte/dist/image/').'/'. $value['image'] }}" class="card-img-top" alt="...">
          <div class="card-body  m-0 p-2 d-flex flex-column bd-highlight">
            <div class="p-2 bd-highlight"><p class="card-text text-muted"><?php echo $value['size'] ?></p></div>
            <div class="p-2 bd-highlight"><p class="card-text text-danger text-left d-flex justify-content-between align-items-center"><b><?php echo $value['price'] ?></b><a href="menu.html" class="btn btn-danger text-white" data-toggle="modal" data-target="#drink<?php echo $value['id'] ?>  ">ԱՎԵԼԱՑՆԵԼ</a></p></div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  @endsection


@extends('admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">
          <h1 class="m-0 text-center text-dark">Փոփոխել Ապրանքը(Արագ Սնունդ)</h1>
        </div>
        </div>
      </div>
    </div>
    <div>
      <form method="POST" action="{{ route('fastfood_update') }}" class="container-sm">
        @csrf
        <input type="hidden" class="inp" name="id" value="<?php echo $fastfoods['id'] ?>">
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="title">Անվանում</label>
          <input name="title" type="text" class="form-control" id="title" value="<?php echo $fastfoods['title'] ?>">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="image">Նկար</label>
          <input name="image" type="text" class="form-control" id="image" value="<?php echo $fastfoods['image'] ?>">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="description">Նկարագրություն</label>
          <input name="description" type="text" class="form-control" id="description" value="<?php echo $fastfoods['description'] ?>">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="size">Չափս</label>
          <input name="size" type="text" class="form-control" id="size" value="<?php echo $fastfoods['size'] ?>">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="price">Գին</label>
          <input name="price" type="text" class="form-control" id="price" value="<?php echo $fastfoods['price'] ?>">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <button type="submit" class="btn btn-outline-success col-12">Հաստստել Փոփոխությունը</button>
        </div>
      </form>
    </div>    
    <!-- /.content -->
  </div>

  @endsection

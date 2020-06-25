@extends('admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">
          <h1 class="m-0 text-center text-dark">Ավելացնել Նոր Ապրանք(Խորոված)</h1>
        </div>
        </div>
      </div>
    </div>
    <div>
      <form method="POST" action="{{ route('product_store') }}" class="container-sm">
        @csrf
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="title">Անվանում</label>
          <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="image">Նկար</label>
          <input name="image" type="text" class="form-control" id="image">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="description">Նկարագրություն</label>
          <input name="description" type="text" class="form-control" id="description">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="size">Չափս</label>
          <input name="size" type="text" class="form-control" id="size">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="price">Գին</label>
          <input name="price" type="text" class="form-control" id="price">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <button type="submit" class="btn btn-outline-success col-12">Ավելացնել</button>
        </div>
      </form>
    </div>    
    <!-- /.content -->
  </div>

  @endsection

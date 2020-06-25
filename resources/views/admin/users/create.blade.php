@extends('admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">
          <h1 class="m-0 text-center text-dark">Ավելացնել Օգտատեր</h1>
        </div>
        </div>
      </div>
    </div>
    <div>
      <form method="POST" action="{{ route('user_store') }}" class="container-sm">
        @csrf
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="name">Անուն</label>
          <input name="name" type="name" class="form-control" id="name">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="email">Էլ-փոստ</label>
          <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="password">Գաղտնաբար</label>
          <input name="password" type="password" class="form-control" id="password">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <label for="ConfirmPassword">Կրկնել Գաղտնաբարը</label>
          <input name="password" type="password" class="form-control" id="ConfirmPassword">
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7 d-flex">
          <div class="form-check mr-3">
            <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="admin" >
            <label class="form-check-label" for="exampleRadios1">
              Admin
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="user">
            <label class="form-check-label" for="exampleRadios2">
              User
            </label>
          </div>
        </div>
        <div class="form-group mx-auto col-lg-6 col-md-7">
          <button type="submit" class="btn btn-outline-success col-12">Ավելացնել</button>
        </div>
      </form>
    </div>    
    <!-- /.content -->
  </div>

  @endsection

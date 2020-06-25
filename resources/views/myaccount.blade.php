@extends('layouts.app')

@section('content')

<div>
  <h1 class="main-header text-danger text-center p-5 m-0">Իմ Հաշիվը</h1>
</div>
<section class="container-sm bg-white mx-auto border-0 p-4">
  <form class="form-row">
    <div class="form-group col-lg-6">
      <label for="modalName">Անուն</label>
      <input name="name" type="text" class="form-control" id="modalName" value="{{Auth::user() ? Auth::user()->name : 'Anun' }}">
    </div>
    <div class="form-group col-lg-6">
      <label for="inputEmail4">Էլ.փոստ</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" value="{{Auth::user() ? Auth::user()->email : 'email' }}">
    </div>
    <div class="form-group col-lg-6">
      <label for="inputPassword4">Գաղտնաբառ</label>
      <input name="password" type="password" class="form-control" id="inputPassword4" >
    </div>
    <div class="form-group col-lg-6">
      <label for="inputPassword4">Կրկնել Գաղտնաբառ</label>
      <input name="password" type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="d-flex justify-content-end mr-3 mt-3 w-100"><button type="submit" class="btn btn-danger">Հաստատել փոփոխությունները</button></div>
  </form>
</section>

@endsection


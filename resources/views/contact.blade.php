@extends('layouts.app')

@section('content')
      <div>
        <h1 class="main-header text-danger text-center p-5 m-0">ԿԱՊ</h1>
      </div>
      <section class="row w-100 m-0">
        <div class="container-sm bg-white mx-auto border-0">
          <h3 class="text-center text-danger mt-3">Գրեք մեզ հաղորդագրություն</h3>
          <p class="text-center text-dark">Մենք միշտ պատրաստ ենք պատասխանել Ձեր հարցերին</p>
          <form class="row">
            <div class="form-group col-lg-6">
              <label for="modalName">Անուն</label>
              <input type="text" class="form-control" id="modalName"  value="{{Auth::user() ? Auth::user()->name : 'Անուն' }}">
            </div>
            <div class="form-group col-lg-6">
              <label for="inputEmail4">Էլ.փոստ</label>
              <input type="email" class="form-control" id="inputEmail4"  value="{{Auth::user() ? Auth::user()->email : 'Էլ-փոստ' }}">
            </div>
            <div class="form-group col-lg-12">
              <label for="inputCity">Հաղորդագրություն</label>
              <textarea type="text" class="form-control" id="inputCity" placeholder="..."></textarea>
            </div>
            <div class="form-group text-danger border border-danger rounded h-100 mr-auto input-hover ml-3">
              <label class="m-0">
                <input type="file" name="file" class="d-none">
                <span class=""><i class="fas fa-folder-open"></i>Բեռնել</span>
              </label>
            </div>
            <div class="form-group mr-4">
              <button type="button" class="btn btn-danger">ՈԻղարկել</button>
            </div>            
          </div>
        </form>
      </section>
@endsection


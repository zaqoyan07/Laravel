@extends('layouts.app')

@section('content')
<div>
  <h1 class="main-header text-danger text-center p-5 m-0">Մտքու գործել</h1>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="bg-white">
        <div class="card-body">
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
@endsection

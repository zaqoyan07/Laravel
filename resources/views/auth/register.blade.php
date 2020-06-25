@extends('layouts.app')

@section('content')
<div>
  <h1 class="main-header text-success text-center p-5 m-0">Գրանցվել</h1>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="bg-white">
        <div class="card-body">
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

              <div class="pl-3">
                @if (Route::has('login'))
                <a class="btn btn-link text-danger  p-0" href="login">
                  {{ __('Մուտք գործել') }}
                </a> 
                @endif
              </div>
              <div class="px-3 text-right">
                <button type="submit" class="btn btn-success">
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
@endsection

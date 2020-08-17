@extends('layouts.fullLayoutMaster')
{{-- title --}}
@section('title','Giriş Yap')
{{-- page scripts --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/authentication.css')}}">
<style>
  nav.header-navbar.main-header-navbar.navbar-expand-lg.navbar.navbar-with-menu.fixed-top {
    display: none;
}
</style>
@endsection

@section('content')
<!-- login page start -->
<section id="auth-login" class="row flexbox-container">
  <div class="col-xl-8 col-11">
    <div class="card bg-authentication mb-0">
      <div class="row m-0">
        <!-- left section-login -->
        <div class="col-md-6 col-12 px-0">
          <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
            <div class="card-header pb-1">
              <div class="card-title">
                <h4 class="text-center mb-2">Lütfen Giriş Yapınız</h4>
              </div>
            </div>
            <div class="card-content">
              <div class="card-body">
                
                
                {{-- form  --}}
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group mb-50">
                    <label class="text-bold-600" for="email">Email Adresi</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="text-bold-600" for="password">Şifre</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Şifre">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
                  <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                    <div class="text-left">
                      <div class="checkbox checkbox-sm">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                          <small>Beni Hatırla</small>
                        </label>
                      </div>
                    </div>
                    <div class="text-right">

                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary glow w-100 position-relative">Login
                    <i id="icon-arrow" class="bx bx-right-arrow-alt"></i>
                  </button>
                </form>
                <hr>

              </div>
            </div>
          </div>
        </div>
        <!-- right section image -->
        <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
          <div class="card-content">
            <img class="img-fluid" src="{{asset('images/pages/login.png')}}" alt="branding logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- login page ends -->
@endsection

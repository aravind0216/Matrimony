@extends('includes.layout1')

@section('body')		
		<div class="site-wrap js-site-wrap">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">About</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <div class="center">
          <div class="container">
            <div class="row">
              <section class="site">
                <header class="site__header">
                  <h1 class="site__title">Login</h1>
                  <h2 class="site__headline">Enter your login and password</h2>
                </header>
                <div class="site__main">
                  <div class="widget js-widget ">
                    <div class="widget__content">
                      <div class="auth auth--inline">
                        <div class="auth__wrap auth__wrap--login">
                          <!-- BEGIN AUTH LOGIN-->
                          <h5 class="auth__title">Login in your account</h5>
                          
                          <form action="/userlogin" method="post" class="form " novalidate="">
                            {{ csrf_field() }}
<div class="row">
    <!-- @if (count($errors->login) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->login->all() as $error)
      <p>{{ $error }}</p>
       @endforeach
    </div>
    @endif  -->
@if (Session::has('message'))
  <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif
@if (Session::has('mobile'))
<div id="deletesuccess" style="background-color: #a4233d !important;color: #fff !important;" class="site__panel">
  <span class="site__header-text">Sucessfully Register Your Data<br>Login User Id : {{ Session::get('mobile') }}<br>Login User Password : {{ Session::get('password') }}</span>
</div>
@endif

</div>




                            <div class="row">
                              <div class="form-group">
                                <label class="control-label">Mobile Number</label>
                                <input value="<?php echo old('mobile'); ?>" type="number" name="mobile" id="mobile" required="" class="form-control">
                                <label class="alert-danger"><?php echo $errors->login->first('mobile'); ?></label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Password</label>
                                <input value="{{ old('password') }}" type="password" name="password" id="password" required="" class="form-control">
                                <label class="alert-danger"><?php echo $errors->login->first('password'); ?></label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form__options form__options--forgot"><a href="/password/reset">Forgot password ?</a>
                              </div>
                              <button type="submit" class="form__submit">Sign in</button>
                            </div>
                            
                            <div class="form__remember">
                              <input type="checkbox" id="remember-in-inline" class="in-checkbox" data-parsley-multiple="remember-in-inline">
                              <label for="remember-in-inline" class="in-label">Remember me</label>
                            </div>
                            <div class="row">
                              <div class="form__options">Not a user yet?<a href="/register">Get an account</a>
                              </div>
                            </div>
                          </form>
                          <!-- end of block .auth__form-->
                          <!-- END AUTH LOGIN-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
              

        </div>


@endsection

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
                  <h1 class="site__title">Restore</h1>
                  <h2 class="site__headline">Enter your User Name or Email</h2>
                </header>
                <div class="site__main">
                  <div class="widget js-widget widget--main widget--no-border ">
                    <div class="widget__content">
                      <div class="auth auth--inline">
                        <div class="auth__wrap auth__wrap--restore">
                          <!-- BEGIN AUTH RESTORE-->
                          <h5 class="auth__title">Reset password</h5>
                          <form method="POST" action="/passwordreset" class="form form--flex form--auth form--restore js-restore-form js-parsley" novalidate="">
                             {{ csrf_field() }}
                            <div class="row">
                              <div class="form-group">
                                <label for="restore-email-inline" class="control-label">Enter your User Name or Email</label>
                                <input type="email" name="email" id="email" required="" class="form-control">
                              </div>
                            </div>
                            <div class="row">
                              <button type="submit" class="form__submit">Reset password</button>
                            </div>
                            <div class="row">
                              <div class="form__options">Back to<a href="/login">Log In</a>or<a href="/register">Registration</a>
                              </div>
                              <!-- end of block .auth__links-->
                            </div>
                          </form>
                          <!-- end of block .auth__form-->
                          <!-- END AUTH RESTORE-->
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
<script src="{{asset('custom/contact.js')}}"></script>
@endsection
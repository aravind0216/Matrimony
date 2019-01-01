@if (session()->get('name'))
@extends('includes.layout1')

@section('body')		
<!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Settings</a></li>
            </ul>
          </div>
        </nav>
<!-- BEGIN CENTER SECTION-->
        <div class="center">
          <div class="container">
            <div class="row">
              <header class="site__header">
                <h1 class="site__title site__title--center">Change Password</h1>
              </header>
              <!-- BEGIN LISTING-->
              <div class="site site--dashboard">
                <div class="site__main">
    
<div class="row">
    @if (count($errors->changepass) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->changepass->all() as $error)
      <p>{{ $error }}</p>
       @endforeach
    </div>
    @endif 
</div>

<form  class="form " method="post" action="settings" enctype="multipart/form-data">
  {{csrf_field()}}
  <input value="{{session()->get('id')}}" type="hidden" name="id" id="id">
    <div class="widget js-widget widget--main widget--no-margin widget--no-border widget--collapse">
        <div class="widget__header">
         <div class="widget__content">
          <div class="row">
            
            <!-- <div class="form-group ">
              <label class="control-label">old Password</label>
              <input type="text" name="oldpass" id="oldpass" class="form-control">
            </div> -->

            <div class="form-group ">
              <label class="control-label">New Password</label>
              <input type="text" name="password" id="password" class="form-control">
            </div>

            <div class="form-group ">
              <label class="control-label">cofirm Password</label>
              <input type="text" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

          </div>
        </div>
    </div> 
    </div>     
    <div class="row">
      <button type="submit" class="form__submit">Submit</button>
    </div>
</form>                    

  </div>
</div>
<!-- END LISTING-->
<!-- BEGIN SIDEBAR-->
@include('admin.adminsidebar')
<!-- END SIDEBAR-->

      <div class="clearfix"></div>
    </div>
  </div>
</div>
        
@endsection

@else
  <?php
  Session::flash ( 'message', "Your Session has Expired! , Please Login Again." );
        echo redirect('login'); ?>
@endif
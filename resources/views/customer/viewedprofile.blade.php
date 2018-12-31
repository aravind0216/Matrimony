@if (session()->get('name'))
@extends('includes.layout1')

@section('body')    
<!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Already Viewd Profiles</a></li>
            </ul>
          </div>
        </nav>
<!-- BEGIN CENTER SECTION-->
        <div class="center">
          <div class="container">
            <div class="row">

              <!-- BEGIN LISTING-->
              <div class="site site--main">
                <header class="site__header">
                  <!-- <h1 class="site__title">FILTER</h1> -->
                </header>
                
                
                <div class="site__main">
                  <div class="widget js-widget widget--main">
                    <div class="widget__content">
                      <div class="listing listing--grid">
@if( !empty($profile) )
  @foreach($profile as $row) 
    <div class="listing__item">
      <div class="properties properties--grid">
        <!-- <div class="properties__header"><span class="properties__state properties__state--hidden">Hidden</span>
          <div class="properties__right">
            <button class="properties__link">Edit</button>
            <button class="properties__link">Delete</button>
          </div>
        </div> -->

<div class="properties__thumb"><a href="viewprofile\<?php echo $row->id; ?>" class="item-photo item-photo--static">

@if($row->url != "")
    <img style="width: 277px;height: 180px;" src="{{asset('uploads/').'/'.$row->url}}" alt="">
@else
  <svg>
    <use xlink:href="#icon-avatar"></use>
  </svg>
@endif
                                
    <figure class="item-photo__hover">
      <span class="item-photo__more">View Details</span>
    </figure>
  </a>
</div>

<div class="properties__info">
    <a href="#" class="properties__address properties__address--simple">
    <span class="properties__address-street"><?php echo $row->name; ?> (<?php echo $row->userid; ?>)</span>
    <span class="properties__address-city"><?php echo $row->age; ?> Yrs</span>
    <span class="properties__address-city"><?php echo $row->subcaste; ?></span>
    <span class="properties__address-city"><?php echo $row->education; ?></span>
    <span class="properties__address-city"><?php echo $row->district; ?></span>
    </a>
</div>
                          
    </div>
  </div>
  @endforeach
@else
  <h2 class="site__headline">No Results</h2>
@endif
                                                
        </div>
<center>{{ $profile->links() }}</center>


      </div>
    </div>
  </div>
</div>                

<!-- END LISTING-->

<!-- BEGIN SIDEBAR-->
@include('customer.sidebar')
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
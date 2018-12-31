@if (session()->get('name'))
  

@extends('includes.layout1')

@section('body')		
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Dashboard</a></li>
            </ul>
          </div>
        </nav>
<!-- BEGIN CENTER SECTION-->
        <div class="center">
          <div class="container">
            <div class="row">
              <header class="site__header">
                <h1 class="site__title site__title--center">Dashboard</h1>
              </header>
              <!-- BEGIN LISTING-->
              <div class="site site--dashboard">
                <div class="site__main">

                					 <div class="widget js-widget widget--dashboard">
                                      <!-- <div class="widget__header">
                                        <h2 class="widget__title">Statistics</h2><a href="dashboard_statistics.html" class="widget__btn js-widget-btn">See all statistics</a>
                                      </div> -->
                                      <?php 
                                      $payment1=0;
                                      foreach ($payment as $key => $value) {
                                        $payment1+=$value->plan_amount;
                                      }
                                      ?>
                                      <div class="widget__content">
                                        <section class="info info--statistics">
                                          <div class="info__list">
                                            <div class="info__column">
                                              <div class="info__item">
                                                <div class="info__title">Total Male Profiles</div>
                                                <div class="info__value">{{$maleprofile}}</div>
                                                <!-- <div class="info__trend info__trend--positive">Up 3%<i class="fa fa-arrow-up"></i></div> -->
                                              </div>
                                            </div>
                                            <div class="info__column">
                                              <div class="info__item">
                                                <div class="info__title">Total Female Profiles</div>
                                                <div class="info__value">{{$femaleprofile}}</div>
                                                <!-- <div class="info__trend info__trend--negative">Down 1%<i class="fa fa-arrow-down"></i></div> -->
                                              </div>
                                            </div>
                                            <div class="info__column">
                                              <div class="info__item">
                                                <div class="info__title">Total Paid</div>
                                                <div class="info__value">₹ {{$payment1}}</div>
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                                      </div>
                                    </div>

                                    
    <!-- <div class="widget js-widget widget--dashboard">
       	<div class="widget__header">
<h2 class="widget__title">Profile</h2><a href="/customerprofile/{{session()->get('id') }}" class="widget__btn js-widget-btn">Edit Profile</a>
        </div>
      	<div class="widget__content">
            <div class="worker worker--profile">
                <div class="worker__item">
                  
                    <div class="worker__photo">
                        <a href="/customerprofile/{{session()->get('id') }}" class="item-photo item-photo--static">
            <?php if(session()->get('url') != ""){ ?>
              <img style="width: 100%;height: 200px;margin-top:-25px !important;" src="{{asset('uploads/').'/'.session()->get('url')}}" alt="" class="photo">
              <figure class="item-photo__hover">
                                <span class="item-photo__more">View Details</span>
                            </figure>
            <?php } else{ ?>
              <svg>
                <use xlink:href="#icon-avatar"></use>
              </svg>
            <?php } ?>
                        </a>
                    </div>
                   	<div class="worker__intro">
                        <h3 class="worker__name fn">{{session()->get('name') }}</h3>
                        <div class="worker__post">Real Estate Professional</div>
                            <div class="worker__contacts">
                            <div class="worker__intro-col">
                              <div class="tel">
                              	<span class="type">Education</span>
                              	<a class="uri value">{{session()->get('education') }}</a>
                              </div>
                              <div class="tel">
                              	<span class="type">Mobile</span>
                              	<a class="uri value">{{session()->get('mobile') }}</a>
                              </div>
                            </div>
                            <div class="worker__intro-col">
                              <div class="email"><span class="type">Email</span><a href="mailto:{{session()->get('email') }}" class="uri value">{{session()->get('email') }}</a></div>
                              <div class="skype"><span class="type">UserId</span><a class="uri value">{{session()->get('userid') }}</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                                    
                   -->                  
                                   
                                    
                                   
                                  
                                    
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
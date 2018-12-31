@if (session()->get('name'))
@extends('includes.layout1')

@section('body')		
<!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Filter</a></li>
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
                      <div class="pricing">
                        <form>
                        <div class="pricing__row">
                         @foreach($plan as $row)
                          <div class="pricing__col3">
                            <div class="pricing__item">
                              <dl class="pricing__list">
                                <dt class="pricing__type">{{$row->plan_name}}</dt>
                                <dd class="pricing__total"><span class="pricing__currency">$</span><span class="pricing__summa">{{$row->plan_amount}}</span><span class="pricing__period">/Year</span></dd>
                                <dd class="pricing__feature"><strong>{{$row->description}}</strong></dd>
                                <!-- <dd class="pricing__feature"><strong>1</strong>Agent Profiles</dd>
                                <dd class="pricing__feature">Agency Profiles</dd>
                                <dd class="pricing__feature">Featured Properties</dd> -->
                              </dl>
                              <div class="pricing__actions">
                                @if(session()->get('plan') == $row->id && session()->get('nextduedate') > date('Y-m-d'))
                                <a href="#" class="pricing__button">Applied</a>
                                @else
                                <a href="/createRequest/{{$row->id}}" class="pricing__button">Apply</a>
                                @endif
                              </div>
                            </div>
                          </div>
                          @endforeach
                                                
                        </div>
                        </form>
                        
                      </div>
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
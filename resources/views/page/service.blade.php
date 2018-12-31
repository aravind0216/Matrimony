@extends('includes.layout1')

@section('body')		
		<div class="site-wrap js-site-wrap">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Services</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <div class="center">
          <div class="container">
            <div class="row">
              <div class="site">
                <header class="site__header">
                  <h1 class="site__title">Our Services</h1>
                  <!-- <h2 class="site__headline">Recent Profile</h2> -->
                </header>
                <div class="site__panel">
                  
                </div>
                
                <div class="site__main">
                  <div class="widget js-widget widget--main">
                    <div class="widget__content">
                      <div class="listing listing--grid">
                        <?php foreach ($service as $key => $row) { ?>
                        <div class="listing__item">
                          <div class="properties properties--grid">
                            <!-- <div class="properties__header"><span class="properties__state properties__state--hidden">Hidden</span>
                              <div class="properties__right">
                                <button class="properties__link">Edit</button>
                                <button class="properties__link">Delete</button>
                              </div>
                            </div> -->
                            <div class="properties__thumb">
<?php if($row->url != ""){ ?>
  <a href="#" class="item-photo item-photo--static">
    <img style="width: 400px;height: 200px;" src="{{asset('upload_service/').'/'.$row->url}}" alt="">
    <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure>
  </a>
<?php } else{ ?>
  <a href="#" class="item-photo item-photo--static">
    <img style="width: 400px;height: 200px;" src="assets/media-demo/avatars/01.jpg" alt="">
    <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure>
  </a>
<?php } ?>
                              

                              </div>
                            <div class="properties__info">
                                <a href="#" class="properties__address properties__address--simple">
                                <span class="properties__address-street">{{$row->title}}</span>
                                <span class="properties__address-city">{{$row->description}}</span>
                                </a>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                       
                        
                      </div>
                      <center>{{ $service->links() }}</center>
                    </div>
                  </div>
                </div>
              
              <div class="clearfix"></div>
            </div>
          </div>
          </div>
        </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $('.service').addClass('active');
</script>		
@endsection
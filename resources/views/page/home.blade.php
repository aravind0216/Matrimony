@extends('includes.layout')

@section('body')	
<style type="text/css">
  .layer {
    background-color: rgba(248, 247, 216, 0.7);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>	
     <div class="site-wrap js-site-wrap">
        <div class="widget js-widget">
          <div class="widget__content">
            <!-- BEGIN SLIDER-->
            <div class="widget js-widget">
          <div class="widget__content">
            <div class="banner js-banner banner--wide">
              <div style="background-image: url(&quot;images/slider/m3.jpg&quot;);" class="banner__item layer">
                <!-- <div class="map map--index map--banner">
                  <div class="map__buttons">
                    <button type="button" class="map__change-map js-map-btn">Property Map</button>
                  </div>
                  <div class="map__wrap">
                    <div data-infobox-theme="white" class="map__view js-map-index-canvas"></div>
                  </div>
                </div> -->
      <div class="container">
        <div class="row">
          <div style="float: left !important;" class="banner__search">
            <form  method="post" action="#" class="form form--flex form--search js-search-form form--banner-sidebar">
              <div class="row">
                <button onclick="event.preventDefault()" style="background:rgba(255, 255, 255, 0.3) !important;" class="form__submit">Filter</button>
                <div class="form-group">
                  <label class="control-label">I'm looking for a</label>
                  <select data-placeholder="-SELECT-" class="form-control">
                    <option label=" "></option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div style="width: 50% !important;float:left !important;" class="form-group">
                  <label class="control-label">Age From</label>
                  <select data-placeholder="Age From" class="form-control">
                    <option label=" "></option>
                    <?php for($x = 20; $x <= 50; $x++) { ?>
                      <option><?php echo $x; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div style="width: 50% !important;float:right !important;" class="form-group">
                  <label class="control-label">Age To</label>
                  <select data-placeholder="Age To" class="form-control">
                    <option label=""></option>
                    <?php for($x = 20; $x <= 50; $x++) { ?>
                      <option><?php echo $x; ?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <!-- <div class="form-group">
                  <label class="control-label">Age From</label>
                  <input type="text" placeholder="Age From" class="form-control"> 
                </div>

                <div class="form-group">
                  <label class="control-label">Age To</label>
                  <input type="text" placeholder="Age To" class="form-control"> 
                </div> -->
                
                <div class="form-group">
                  <label class="control-label">Education</label>
                  <select data-placeholder="-SELECT-" class="form-control">
                    <option label=" "></option>
                    <?php  foreach ($education as $educations) { ?>
                      <option><?php echo $educations->education; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Star</label>
                  <select data-placeholder="-SELECT-" class="form-control">
                    <option label=" "></option>
                    <?php  foreach ($star as $stars) { ?>
                      <option value="<?php echo $stars->id; ?>"><?php echo $stars->star; ?></option>
                    <?php } ?>
                  </select>
                </div>
                      
                      
                      <div class="form__buttons form__buttons--double">
                        <button type="button" class="form__reset js-form-reset">Reset</button>
                        <button type="button" class="form__submit">Search</button>
                      </div>
                    </div>
                  </form>
                </div>

                    <!-- <div class="banner__caption">
                      <h1 class="banner__title">The Best Way to Find Your Perfect Home</h1>
                      <h3 class="banner__subtitle">With over 700,000 active listings, Realtyspace has the largest inventory of apartments in the United States.</h3>
                      <span class="banner__btn">Get started</span>
                      <div class="banner__arrow-circle">•</div>
                      <svg class="banner__arrow-end js-arrow-end">
                        <use xlink:href="#icon-arrow-end"></use>
                      </svg>
                      <div class="banner__arrow">
                        <svg id="banner-line" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 774 284" enable-background="new 0 0 774 284" xml:space="preserve">
                          <path  fill="none" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="0,2004.009" d="M220.6,239.6
                          c-3.6-15.5-17.5-27.1-34.1-27.1h-150c-19.3,0-35,15.7-35,35c0,19.3,15.7,35,35,35c0,0,88,0,150,0c169,0,244.9-7.5,291-19
                          c41.3-10.2,114.1-33.7,118-83c4.2-53.5-59.4-67.5-102-54c-47.2,15-52.3,78.2,1,90c58.1,12.9,169.6-53.6,274.7-210"/>
                        </svg>
                      </div>
                    </div> -->
                    <div style="float: right !important;" style="margin-top: 0px;" class="banner__search">
                      <!-- <h4 class="banner__sidebar-title">The Best Way to Find Your Perfect Home</h4> -->
                      <!-- BEGIN SEARCH-->

                      <form  method="post" action="/homelogin" class="form form--flex form--search js-search-form form--banner-sidebar">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="form-group">
                            <!-- @if (count($errors->home) > 0)
                            <div class="alert alert-danger">
                              @foreach ($errors->home->all() as $error)
                              <p>{{ $error }}</p>
                              @endforeach
                            </div>
                            @endif  -->
                            @if (Session::has('message'))
                              <div class="alert alert-danger">{{ Session::get('message') }}</div>
                            @endif
                          </div>
                        </div>
                        <div class="row">
                            <button onclick="event.preventDefault()" style="background:rgba(255, 255, 255, 0.3) !important;" class="form__submit">Sign In With</button>
                          <div class="form-group">
                            <label class="control-label">Mobile Number</label>
                            <input name="mobile" id="mobile" type="number" placeholder="Mobile Number" class="form-control">
                            <label style="color: #000;text-transform:capitalize !important;" class="control-label alert-danger"><?php echo $errors->home->first('mobile'); ?></label>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Password</label>
                            <input name="password" id="password" type="password" placeholder="Password" class="form-control">
                            <label style="color: #000;text-transform:capitalize !important;" class="control-label alert-danger"><?php echo $errors->home->first('password'); ?></label>
                          </div>
                          
                          
                          <div class="form__buttons">
                            <button type="submit" class="form__submit">Login</button>
                          </div>
                          <div class="form__buttons">
                            <a style="width: 100%;margin-right:20px;" href="/register">
                              <button class="form__submit" type="button">Free Registration</button>
                            </a>
                          </div>
                        </div>
                      </form>
                      <!-- end of block-->
                      <!-- END SEARCH-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <!-- END SLIDER-->
          </div>
        </div>
        <div class="widget js-widget widget--landing">
          <div class="widget__header">
            <!-- <h2 class="widget__title"><span class="title-thin">Find your</span> home</h2>
            <h5 class="widget__headline">Our agents are licensed professionals that specialise in searching, evaluating and negotiating the purchase of property on behalf of the buyer. They will sell you real estate. Insights, tips & how-to guides on selling property and preparing your home or investment property for sale and working to maximise your sale price.</h5> -->
          </div>
          <div class="widget__content">
            <!-- BEGIN SEARCH-->
            <form action="" class="form form--flex form--search js-search-form form--wide form--wide-default">
              <div class="row">
                <div class="form-group">
                  <label class="control-label">I'm looking for a</label>
                  <select data-placeholder="-SELECT-" class="form-control">
                    <option label=" "></option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Age From</label>
                  <input type="text" placeholder="Age From" class="form-control"> 
                </div>

                <div class="form-group">
                  <label class="control-label">Age To</label>
                  <input type="text" placeholder="Age To" class="form-control"> 
                </div>
                
                <div class="form-group">
                  <label class="control-label">Education</label>
                  <select data-placeholder="-SELECT-" class="form-control">
                    <option label=" "></option>
                    <?php  foreach ($education as $educations) { ?>
                      <option><?php echo $educations->education; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Star</label>
                  <select data-placeholder="-SELECT-" class="form-control">
                    <option label=" "></option>
                    <?php  foreach ($star as $stars) { ?>
                      <option value="<?php echo $stars->id; ?>"><?php echo $stars->star; ?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form__buttons form__buttons--double">
                  <button type="button" class="form__reset js-form-reset">Reset</button>
                  <button type="submit" class="form__submit">Search</button>
                </div>
              </div>
            </form>
            <!-- end of block-->
            <!-- END SEARCH-->
          </div>
        </div>
        
        <div class="widget js-widget">
          <div class="widget__content">
            <!-- BEGIN SECTION FEATURE-->
            <section class="feature">
<style type="text/css">
.feature__picture{
    background: url('images/slider/banner.jpg') 100% 0 !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    width: 44%;
    position: center;
    top: 0;
    bottom: 0;
    left: 0;
}
</style>              
              <div class="feature__picture"></div>
              <!-- end of .feature__picture-->
              <div class="container">
                <div class="feature__content">
                  <div class="feature__header">
                    <h3 data-sr="enter right ease-in-out 150px" class="feature__title">Who are we ?</h3>
                    <h4 style="text-align: justify;" data-sr="enter right ease-in-out 250px" class="feature__headline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pondicherry Thulluva vellalar marriage information and service center has been trusted since 1998. This match making service was founded by a group of well wishers from the same community to provide the best match making experience to our members. Priorly this was a non profitable service center with a minimum registration fees and the fee was used for many service oriented endeavors like helping the unprivileged school students and senior citizens.</h4>
<h4 style="text-align: justify;" data-sr="enter right ease-in-out 250px" class="feature__headline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We strongly care about the family and wish to bring them together like minded people and help them up for what we hope is a long and successful marriage.</h4>
<h4 style="text-align: justify;" data-sr="enter right ease-in-out 250px" class="feature__headline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For the past 20 years we have been following the traditional match making service only to Thuluva vellar community where people visit us to match the appropriate candidates with each other, in a way that both the parties are satisfied.</h4>
<h4 style="text-align: justify;" data-sr="enter right ease-in-out 250px" class="feature__headline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The internet has effectively made it possible to find the preferred life partner from any place. That is why we have built a custom matching system that checks your compatibility with other people and we believe ours is the best available.We aim to help out those who wish to get married through online matrimonial service , so we have invested a lot of time and money into this project and we strongly believe in it.</h4>
                  </div>
                  <!-- end of block .feature__header-->
                  <!-- <div class="feature__list">
                    <div data-sr="enter right ease 150px" class="feature__item">
                      <svg class="feature__icon feature__icon--money-save">
                        <use xlink:href="#icon-money-save"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">Save money</h3>
                        <div class="feature__text">
                          <p>It starts with our living database of more than 110 million U.S. homes &ndash; including homes for sale, homes for rent and homes not currently on the market.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- end of block .feature__item-->
                    <!-- <div data-sr="enter right ease 250px" class="feature__item">
                      <svg class="feature__icon feature__icon--good-sales">
                        <use xlink:href="#icon-good-sales"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">Good sales&amp;marketing</h3>
                        <div class="feature__text">
                          <p>In addition, RealtySpace operates the largest real estate and rental advertising networks in the U.S. in partnership with Livemile Homes!</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- end of block .feature__item-->
                    <!-- <div data-sr="enter right ease 150px" class="feature__item">
                      <svg class="feature__icon">
                        <use xlink:href="#icon-comfort"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">Comfort</h3>
                        <div class="feature__text">
                          <p>We are transforming the way consumers make home-related decisions and connect with professionals.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- end of block .feature__item-->
                    <!-- <div data-sr="enter right ease 250px" class="feature__item">
                      <svg class="feature__icon">
                        <use xlink:href="#icon-easy"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">Easy to find</h3>
                        <div class="feature__text">
                          <p>It starts with our living database of more than 110 million U.S. homes &ndash; including homes for sale, homes for rent and homes not currently on the market.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- end of block .feature__item-->
                  </div>
                  <!-- end of block .feature__list-->
                </div>
                <!-- end of .feature__content-->
              </div>
            </section>
            <!-- END SECTION FEATURE-->
          </div>
        </div>
        
        
        <!-- <div class="widget js-widget widget--landing widget--achievement">
          <div class="widget__content">
            <div class="achievement">
              <div class="container">
                <div class="row">
                  <div data-sr="enter right move 0 over 0 wait 0s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
                    <svg class="achievement__icon">
                      <use xlink:href="#icon-transactions"></use>
                    </svg>
                    <div data-count-end="755300" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
                    <div class="achievement__counter">755 300</div>
                    <div class="achievement__name">Transactions</div>
                  </div>
                  <div data-sr="enter right move 0 over 0 wait 0.5s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
                    <svg class="achievement__icon">
                      <use xlink:href="#icon-customers"></use>
                    </svg>
                    <div data-count-end="17620" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
                    <div class="achievement__counter">17 620</div>
                    <div class="achievement__name">Satisfied Customers</div>
                  </div>
                  <div data-sr="enter right move 0 over 0 wait 1s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
                    <svg class="achievement__icon">
                      <use xlink:href="#icon-agency"></use>
                    </svg>
                    <div data-count-end="790" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
                    <div class="achievement__counter">790</div>
                    <div class="achievement__name">Agencies</div>
                  </div>
                  <div data-sr="enter right move 0 over 0 wait 1.5s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
                    <svg class="achievement__icon">
                      <use xlink:href="#icon-sales"></use>
                    </svg>
                    <div data-count-end="1528715" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
                    <div class="achievement__counter">1 528 715</div>
                    <div class="achievement__name">Sales &amp; Rents</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        
        <div class="widget js-widget">
          <div class="widget__content">
            <!-- BEGIN BLOCK GO SUBMIT-->
            <div data-sr="flip 45deg over 0.5s" class="gosubmit">
              <div class="container">
                <div class="gosubmit__title">
                  <div class="gosubmit__title__row gosubmit__title__row--first">Searching</div>
                  <div class="gosubmit__title__row gosubmit__title__row--second"><span class="gosubmit__title__option">Your</span></div>
                  <div class="gosubmit__title__row gosubmit__title__row--third">Life Partner?</div>
                </div>
                <!-- end of block .gosubmit__title--><a href="/register" class="gosubmit__btn">Free Register</a>
              </div>
            </div>
            <!-- END BLOCK GO SUBMIT-->
          </div>
        </div>
        <div class="center">
          <div class="container">
          </div>
        </div>
        <!-- END CENTER SECTION-->
        <!-- BEGIN AFTER CENTER SECTION-->
        <!-- <div class="widget js-widget widget--landing">
          <div class="widget__header">
            <h2 class="widget__title"><span class="title-thin">Our</span> Partners</h2>
            <h5 class="widget__headline">At RS, our partners make great digital experiences possible by offering our products, consulting expertise and the products of our technology partners</h5>
          </div>
          <div class="widget__content">
            <div id="partners-slider" class="partners">
              <div class="partners__slider js-slick-slider"><a class="partners__item"><img src="assets/media-demo/partners/logo-company-1.png" alt=""><span class="partners__name">Elite Construction Group, LLC</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-2.png" alt=""><span class="partners__name">Pro Era Limited</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-3.png" alt=""><span class="partners__name">Otdelka Real Estate LTD</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-4.png" alt=""><span class="partners__name">Fermer Realty Group</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-5.png" alt=""><span class="partners__name">Pro Era Limited</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-3.png" alt=""><span class="partners__name">Fermer Realty Group</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-2.png" alt=""><span class="partners__name">Otdelka Real Estate LTD</span></a>
              </div>
              <div class="partners__controls">
                <button class="partners__arrow partners__arrow--prev js-partners-prev"></button>
                <button class="partners__arrow partners__arrow--next js-partners-next"></button>
              </div>
            </div>
          </div>
        </div> -->
        <!-- END PARTNERS-->
        <div class="widget js-widget">
          <div class="widget__content">
            <!-- BEGIN SUBSCRIBE-->
            <div class="subscribe">
              <form action="#" class="subscribe__form js-subscribe-form">
                <h4 class="subscribe__title">Newsletters</h4>
                <div class="subscribe__group form-group">
                  <label class="sr-only">Newsletters</label>
                  <input type="email" placeholder="Input your e-mail" name="email" required data-parsley-trigger="change" class="subscribe__field form-control js-subscribe-email">
                </div>
                <button type="submit" class="btn--action subscribe__submit js-subscribe-submit">SUBMIT</button>
              </form>
              <!-- end of block .subscribe__form-->
            </div>
            <!-- END SUBSCRIBE-->
          </div>
        </div>
        <!-- END AFTER CENTER SECTION-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $('.home').addClass('active');
</script>
@endsection
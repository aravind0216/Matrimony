@extends('includes.layout1')

@section('body')		
<div class="site-wrap js-site-wrap">
        
    <!-- BEGIN BREADCRUMBS-->
    <nav class="breadcrumbs">
      <div class="container">
        <ul>
          <li class="breadcrumbs__item"><a href="/home" class="breadcrumbs__link">Home</a></li>
          <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">About</a></li>
        </ul>
      </div>
    </nav>
    <!-- END BREADCRUMBS-->

    <div class="center">
          <div class="container">
            <div class="row">
              <!-- BEGIN site-->
              <div class="site site--main">
                <header class="site__header">
                  <h1 class="site__title">About Us</h1>
                  <!-- <h2 class="site__headline">Check out our new market updates</h2> -->
                </header>
                <div class="site__main">
                  <div class="widget js-widget widget--main widget--no-margin">
                    <div class="widget__content">
                      <article class="article article--list article--details">
                        <div class="article__body">
<h3><strong>Who are we ?</strong></h3>

<p><strong>Pondicherry Thulluva vellalar marriage information and service center has been trusted since 1998.</strong> This match making service was founded by a group of well wishers from the same community to provide the best match making experience to our members. Priorly this was a non profitable service center with a minimum registration fees and the fee was used for many service oriented endeavors like helping the unprivileged school students and senior citizens.</p>

<p><strong>We strongly care about the family and wish to bring them together like minded people and help them up for what we hope is a long and successful marriage.</strong></p>

<p><strong>For the past 20 years we have been following the traditional match making service only to Thuluva vellar community where people visit us to </strong> match the appropriate candidates with each other, in a way that both the parties are satisfied.</p>

<p>The internet has effectively made it possible to find the preferred life partner from any place. That is why we <strong>have built a custom matching system that checks your compatibility with other people and we believe ours is the best available.We aim to help out those who wish to get married through online matrimonial service , so we have invested a lot of time and money into this project and we strongly believe in it.</strong></p>
<!-- <img src="assets/media-demo/properties/870x480/02.jpg" alt="">  -->     
<h3><strong>Why choose us?</strong></h3>

<p>Our site is simple to use and we provide a convenient matrimonial match making experience to our members. Register with us to find your better half as we understand the importance of choosing the right partner for your wedlock. </p>

<h3><strong>Privacy</strong></h3>

<p>Your privacy is our at most priority and your personal details will not be shared without your authorization.our database are secured and It <strong>is only for people who are serious about marriage. </strong></p>


Please get to know us better by visiting us in person . All our online profile are available in hardcopies in our office and it will be beneficial to our non-internet users also.

Thank you for visiting us and hope we can provide you the best in the matrimonial service.                    
                          
                          <!-- <p><img src="assets/media-demo/properties/277x180/07.jpg" alt="" style="float: right; margin: 0 0 10px 10px;">The home&rsquo;s price tag reflects its Palo Alto address, and Foy told us the market at the epicenter of the Bay Area shows no signs of slowing. While the college city continues its red-hot pace, the agent told us he&rsquo;s also seen renewed interest in Palo Alto Eichlers.</p> -->
                        
                      </article>
                    </div>
                  </div>
                </div>
                <!-- END site-->
              </div>
              <!-- BEGIN SIDEBAR-->
              <div class="sidebar">
                
                <div style="margin-top: 0px;" class="widget js-widget widget--sidebar widget--first-no-head">
                  <div class="widget__header">
                    <h2 class="widget__title">Recently Added</h2>
                    <!-- <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5> -->
                    <a class="widget__btn js-widget-btn widget__btn--toggle">Recently Added</a>
                  </div>
                  <div class="widget__content">
                    <div class="listing listing--sidebar">
                      <?php foreach ($limitprofile as $key => $row) { ?>
                      <div class="listing__item">
                        <div data-sr="enter bottom move 80px, scale(0), over 0s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--sidebar">
                          <div class="worker__photo">
                            <a href="#" class=" ">
<?php if($row->url != ""){ ?>
    <img style="width: 200px;height: 100px;" src="{{asset('uploads/').'/'.$row->url}}" alt="" class="photo">
<?php } else{ ?>
  <img style="width: 200px;height: 100px;" src="assets/media-demo/workers/worker-1.jpg" alt="" class="photo"/>
<?php } ?>
                              <figure class="item-photo__hover">
                                <span class="item-photo__more">View</span>
                              </figure>
                            </a>
                          </div>
                          <h3 class="worker__name fn"><?php echo $row->name; ?>(<?php echo $row->userid; ?>)</h3>
                          <div class="worker__post"><?php echo $row->age; ?> yrs</div>
                          <div class="worker__post"><?php echo $row->subcaste; ?></div>
                          <div class="worker__post"><?php echo $row->education; ?></div>
                          <div class="worker__post"><?php echo $row->district; ?></div>
                        </div>
                        <!-- end of block .worker-->
                      </div>
                    <?php } ?>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SIDEBAR-->
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        
              
        
	<div class="clearfix"></div>
</div>
          
<!-- <script src="{{asset('custom/contact.js')}}"></script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $('.about').addClass('active');
</script>
@endsection
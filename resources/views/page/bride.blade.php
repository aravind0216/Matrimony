@extends('includes.layout1')

@section('body')    
    <div class="site-wrap js-site-wrap">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Bride</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <div class="center">
          <div class="container">
            <div class="row">
              <div class="site site--main">
                <header class="site__header">
                  <h1 class="site__title">Bride</h1>
                  <!-- <h2 class="site__headline">Recent Profile</h2> -->
                </header>
                <div class="site__panel">
                  <div class="listing__sort">
                    <h4 style="font-size: 18px;color: #fff">Recent Profile</h4>
                    <!-- <div class="form-group">
                      <label for="in-listing-sort" class="control-label">Sort by:</label>
                      <div class="form-control--select">
                        <select id="in-listing-sort" class="form-control js-in-select">
                          <option>Price + P&amp;P: Highest First</option>
                          <option>Time: Ending Soonset</option>
                          <option>Time: Newly Listed</option>
                          <option>Price + P&amp;P: Lowest First</option>
                          <option>Price + P&amp;P: Highest First</option>
                          <option>Price: Lowest First</option>
                          <option>Price: Highest First</option>
                          <option>Distance: Nearest First</option>
                          <option>Condition: New First</option>
                          <option>Condition: Used First</option>
                          <option>Best Match</option>
                        </select>
                      </div>
                    </div> -->
                  </div>
                  
                  <div class="listing__add"><a href="/register" class="btn--action">Add Your Profile</a></div>
                </div>
                <div class="site__main">
                  <div class="widget js-widget widget--main">
                    <div class="widget__content">
                      <div class="listing listing--grid">
                        <?php foreach ($profile as $key => $row) { ?>
                        <div class="listing__item">
                          <div class="properties properties--grid">
                            <div class="properties__thumb"><a href="#" class="item-photo item-photo--static">
                              <?php if($row->url != ""){ ?>
                                <img style="width: 277px;height: 180px;" src="{{asset('uploads/').'/'.$row->url}}" alt="">
                              <?php } else{ ?>
                                <img style="width: 277px;height: 180px;" src="assets/media-demo/avatars/01.jpg" alt="">
                              <?php } ?>
                                
                              <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a></div>
                            <div class="properties__info">
                                <a href="#" class="properties__address properties__address--simple">
                                <span class="properties__address-street"><?php echo $row->name; ?>(<?php echo $row->userid; ?>)</span>
                                <span class="properties__address-city"><?php echo $row->age; ?> Yrs</span>
                                <span class="properties__address-city"><?php echo $row->subcaste; ?></span>
                                <span class="properties__address-city"><?php echo $row->education; ?></span>
                                <span class="properties__address-city"><?php echo $row->district; ?></span>
                                </a>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                      </div>

                      <center>{{ $profile->links() }}</center>

                    </div>
                  </div>
                </div>
              </div>
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
                            <a href="#" class="">
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
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $('.bride').addClass('active');
</script>
@endsection

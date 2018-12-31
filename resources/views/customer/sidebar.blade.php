<div class="sidebar sidebar--dashboard">

<div style="margin-top: -10px;" class="widget js-widget widget--sidebar widget--first-no-head">
  <div class="widget__header"><a class="widget__btn js-widget-btn widget__btn--toggle">Show Profile</a>
  </div>
    <div class="widget__content">
      <!-- BEGIN WORKER PROFILE-->
      <div class="worker sidebar-advanced">
        <h3 class="worker__name">{{session()->get('name')}}</h3>
        <div class="worker__photo">
          <div class="worker__avatar">
            <?php if(session()->get('url') != ""){ ?>
              <img style="width: 100%;height: 150px;margin-top:-25px !important;" src="{{asset('uploads/').'/'.session()->get('url')}}" alt="">
            <?php } else{ ?>
              <svg>
                <use xlink:href="#icon-avatar"></use>
              </svg>
            <?php } ?>
            
          </div>
          <!-- <button class="worker__avatar-upload">Upload your profile picture</button> -->
        </div>
               	<nav class="nav nav--sidebar">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/customerdashboard" class="nav__link active">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-dashboard"></use>
                            </svg>Dashboard</a>
                        </li>
                        <li class="nav__item">
                            <hr class="nav__separator">
                        </li>
                        <li class="nav__item"><a href="/filter" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-favorite-search"></use>
                            </svg>Filter</a>
                        </li>
                        <li class="nav__item"><a href="/customerprofile/{{session()->get('id')}}" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-user-admin"></use>
                            </svg>Profile</a>
                        </li>
                        <li class="nav__item"><a href="/viewedprofile" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-favorite-agents"></use>
                            </svg>Viewd Profiles</a>
                        </li>
                        <li class="nav__item"><a href="/yourplan" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-financials"></use>
                            </svg>Plans</a>
                        </li>
                        <li class="nav__item"><a href="/settings" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-favorite-listings"></use>
                            </svg>Settings</a>
                        </li>
                        <li class="nav__item"><a href="/logout" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-news"></use>
                            </svg>Signout</a>
                        </li>
                    </ul>
                </nav>
                <!-- end of block .worker__nav-->
            </div>
            <!-- end of block .worker__item-->
            <!-- END WORKER PROFILE-->
          </div>
        </div>
                
      </div>
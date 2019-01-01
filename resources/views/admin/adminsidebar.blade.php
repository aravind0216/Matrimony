<!-- BEGIN SIDEBAR-->
<div class="sidebar sidebar--dashboard">
 <div style="margin-top: -50px;" class="widget js-widget widget--sidebar widget--first-no-head">
    <div class="widget__header"><a class="widget__btn js-widget-btn widget__btn--toggle">Show profile</a>
    </div>
    <div class="widget__content">
      <!-- BEGIN WORKER PROFILE-->
      <div class="worker sidebar-advanced">
        <h3 class="worker__name">{{session()->get('name') }}</h3>
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
                        <li class="nav__item"><a href="/admindashboard" class="nav__link active">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-dashboard"></use>
                            </svg>Dashboard</a>
                        </li>
                        <li class="nav__item">
                            <hr class="nav__separator">
                        </li>
                        <li class="nav__item"><a href="/admincreateprofile" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-user-admin"></use>
                            </svg>Create Profile</a>
                        </li>
                        <li class="nav__item"><a href="/adminviewprofile" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-favorite-search"></use>
                            </svg>View Profile</a>
                        </li>
                        <li class="nav__item"><a href="/admin/report" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-financials"></use>
                            </svg>Payment Report</a>
                        </li>
                        <li class="nav__item"><a href="/admin/service" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-news"></use>
                            </svg>Services</a>
                        </li>
                        <li class="nav__item"><a href="/adminsettings" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-property-edit"></use>
                            </svg>Change Password</a>
                        </li>
                        <li class="nav__item"><a href="/logout" class="nav__link">
                            <svg class="nav__icon">
                              <use xlink:href="#icon-property-edit"></use>
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
<!-- END SIDEBAR-->
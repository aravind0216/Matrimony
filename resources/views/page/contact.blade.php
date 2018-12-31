@extends('includes.layout1')

@section('body')		

<div class="site-wrap js-site-wrap">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Contact us</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        
        <div class="center">
          <div class="container">
            <div class="widget js-widget widget--landing">
              <div class="widget__header">
                <h2 class="widget__title">Contact Us</h2>
                <h5 class="widget__headline">Use the information provided below to reach us OR leave us a message using contact form.</h5>
              </div>
              <div class="widget__content">
                <div class="contacts">
                  <div class="row">
                    <div class="contacts__column">
                      <div class="contacts__address">
                        <address class="contacts__address-item">
                          <!-- <span class="contacts__address-title">NEW YORK</span> -->
                          <dl class="contacts__address-column">
                            <dt class="contacts__address-column__title">Address:</dt>
                            <dd> 5,Subramaniyar koil street
                  Old Saram (opp to Hotel Annamalai)
                   Puducherry-605013.<br>India</dd>
                          </dl>
                          <dl class="contacts__address-column">
                            <dt class="contacts__address-column__title">Telephone:</dt>
                            <dd>+91 9443494936</dd>
                            <dt class="contacts__address-column__title">Email:</dt>
                            <dd><a href="mailto:vellalamudhaliyarpondy@gmail.com">vellalamudhaliyarpondy@gmail.com</a><br><br></dd>
                            <!-- <dt class="contacts__address-column__title">Fax:</dt>
                            <dd>+1 202 555 0135</dd> -->
                          </dl>
                          <!-- <dl class="contacts__address-column">
                            <dt class="contacts__address-column__title">Email:</dt>
                            <dd><a href="mailto:vellalamudhaliyarpondy@gmail.com">vellalamudhaliyarpondy@gmail.com</a><br><br></dd>
                             <dt class="contacts__address-column__title"> Skype:</dt>
                            <dd><a href="">jobisdone</a></dd>
                          </dl> -->
                        </address>
                      </div>
                      
                    </div>
                    <div class="contacts__column">
                      <div class="contacts__form">
                        <!-- <div class="alert alert-info">Attention! This form requires working php server for successful submit!</div> -->
                        <form action="#" method="POST" class="form form--flex js-contact-form form--contacts">
                          <div class="row">
                            <div class="form-group required">
                              <label for="in-form-name" class="control-label">Your Name</label>
                              <input id="in-form-name" type="text" name="name" required class="form-control">
                            </div>
                            <div class="form-group form-group--col-6">
                              <label for="in-form-phone" class="control-label">Telephone</label>
                              <input id="in-form-phone" type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group form-group--col-6 required">
                              <label for="in-form-email" class="control-label">E-mail</label>
                              <input id="in-form-email" type="email" name="email" required data-parsley-trigger="change" class="form-control">
                            </div>
                            <div class="form-group required">
                              <label for="in-form-message" class="control-label">Message</label>
                              <textarea id="in-form-message" name="message" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-validation-threshold="10" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment.." class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <button type="submit" class="form__submit">Submit</button>
                          </div>
                        </form>
                        <!-- end of block form-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="map">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=5%2CSubramaniya%20koil%20street%20%2C%20Old%20Saram%20(opp%20to%20Hotel%20Annamalai)%20%2C%20Puducherry-605013.&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:400px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div>
        </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $('.contact').addClass('active');
</script>
@endsection
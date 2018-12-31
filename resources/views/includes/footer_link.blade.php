
        <!-- BEGIN FOOTER-->
        <footer class="footer">
          <div class="container">
            <div class="footer__wrap">
              <div class="footer__col footer__col--first">
                <div class="widget js-widget widget--footer">
                  <!-- <div class="widget__header">
                    <h2 class="widget__title">Menu</h2>
                  </div> -->
                  <!-- <div class="widget__content">
                    <nav class="nav nav--footer"><a href="index.html">Home</a><a href="properties_listing_grid.html">Realty</a><a href="agents_listing_grid.html">Agents</a><a href="gallery.html">Gallery</a><a href="blog.html">Blog</a><a href="pricing.html">Pricing</a><a href="contacts.html">Contacts</a><a href="feature_ui.html">UI</a></nav>
                  </div> -->
                </div>
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">About</h2>
                  </div>
                  <div class="widget__content">
                    <aside class="widget_text">
                      <div class="textwidget">
                        <strong>Pondicherry Thulluva vellalar marriage information and service center has been trusted since 1998. This match making service was founded by a group of well wishers from the same community to provide the best match making experience to our members.</strong>For the past 20 years we have been following the traditional match making service only to Mudhaliyar community where people visit us to match the appropriate candidates with each other, in a way that both the parties are satisfied.

                      </div>
                      
                    </aside>
                  </div>
                </div>
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Social</h2>
                  </div>
                  <div class="widget__content">
                    <div class="social social--footer"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                    <!-- end of block .social-footer-->
                  </div>
                </div>
              </div>
              <!-- end of block .footer__col-first-->
              <div class="footer__col footer__col--second">
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Contact</h2>
                  </div>
                  <div class="widget__content">
                    <section class="address address--footer">
                      <h4 class="address__headline">Our office</h4>
                      <span>5,Subramaniya koil street , Old Saram (opp to Hotel Annamalai) , Puducherry-605013.</span>
                        
                    </section>
                    <!-- end of block .address-->
                  </div>
                  <div class="widget__content">
                    <a href="tel:+919443494936">+91 9443494936</a><br>
                    <a style="min-width:5px;max-width:10px !important; " href="mailto:vellalamudhaliyarpondy@gmail.com">vellalamudhaliyarpondy@gmail.com</a>
                  </div>
                </div>
                
              </div>
              <!--end of block .footer__col-second-->
              <div class="footer__col footer__col--third">
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Feedback</h2>
                  </div>
                  <div class="widget__content">
                    <!-- BEGIN SECTION FEEDBACK-->
                    <form action="#" class="form form--flex form--footer js-parsley">
                      <div class="row">
                        <div class="form-group">
                          <label for="in-email" class="sr-only control-label">E-mail</label>
                          <input id="in-email" type="email" name="email" placeholder="E-mail" required data-parsley-trigger="change" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="in-message" class="sr-only control-label">Message for Us</label>
                          <textarea id="in-message" name="message" placeholder="Message for Us" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-validation-threshold="10" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment.." class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <button type="submit" class="form__submit">Send</button>
                      </div>
                    </form>
                    <!-- end of block .form__wrap-->
                    <!-- END SECTION FEEDBACK-->
                  </div>
                </div>
              </div>
              <!-- end of block .footer__col-third-->
              <div class="clearfix"></div><span class="footer__copyright">&copy; 2018 RealtySpace. All rights reserved</span>
              <!-- end of block .footer__copyright-->
            </div>
          </div>
        </footer>
        <!-- end of block .footer-->
        <!-- END FOOTER-->
      </div>
    </div>
    <button type="button" class="scrollup js-scrollup"></button>
    <!-- end of block .scrollup-->
    <!-- BEGIN SCRIPTS and INCLUDES-->
    
    
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,drawing,geometry"></script>
    <script type="text/javascript" src="http://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    <!--
    Contains vendor libraries (Bootstrap3, Jquery, Chosen, etc) already compiled into a single file, with
    versions that are verified to work with our theme. Normally, you should not edit that file.
    -->
    <!-- build:jsvendor-->
    <script type="text/javascript" src="{{asset('assets/js/vendor.js')}}"></script>
    <!-- endbuild-->
    <!--
    This file is used for demonstration purposes and contains example property items, that are mostly used to
    render markers on the map. You can safely delete this file, after you've adapted the demo.js code
    to use your own data.
    -->
    <!-- build:jsdemodata-->
    <script type="text/javascript" src="{{asset('assets/js/demodata.js')}}"></script>
    <!-- endbuild-->
    <!--
    The library code that Realtyspace theme relies on, in order to function properly.
    Normally, you should not edit this file or add your own code there.
    -->
    <!-- build:jsapp-->
    <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
    <!-- endbuild-->
    <!--
    the main file, that you should modify. It contains lots of examples of
    plugin usage, with detailed comments about specific sections of the code.
    -->
    <!-- build:jsdemo-->
    <script type="text/javascript" src="{{asset('assets/js/demo.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('toastr/toastr.min.js')}}"></script>
    <!-- endbuild--><!-- inject:ga  -->
    <!-- endinject -->
    <!-- END SCRIPTS and INCLUDES-->

<script>
$( "#expire" ).click(function() {
  event.preventDefault();
  alert( "Your Plan is Expired" );
});
$( "#nodata" ).click(function() {
  event.preventDefault();
  alert( "Activate the Plan" );
});

</script> 

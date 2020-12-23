<!--Footer Content Start-->
<footer class="tnit-footer">
                <!--Footer Top Row start-->
                <div class="tnit-footer-tprow">
                     <div class="container">
                          <div class="row">
                              <div class="col-md-4 col-sm-12 col-xs-12">
                                  <!--Widget About Start-->
                                  <div class="widget widget-about">
                                      <strong class="ft-logo">
                                          <a href="index.html"><img src="{{ asset('web/images/ft-logo.png')}}" class="img-responsive"></a>
                                      </strong>
                                      <ul class="about-info-listed">
                                          <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                103, Janak Palace, Manglam Enclave, RPS more Bailey Road, Patna- 801503.
                                          </li>
                                          <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                <a href="tel:+91 80489 24086">+91 80489 24086</a>
                                                <a href="tel:+91 74850 67263">+91 74850 67263</a>
                                          </li>
                                          <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <a href="mailto:kashivishwanathpipe@gmail.com"><span>&nbsp;kashivishwanathpipe@gmail.com</span></a>
                                          </li>
                                      </ul>
                                  </div><!--Widget About End-->
                              </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
                                  <!--Widget Start-->
                                  <div class="widget">
                                      <h4>Services</h4>
                                      <!--Widget Listed Start-->
                                      <ul class="widget-listed">
                                        <li><a href="{{ route('web.about.about') }}">About</a></li>
                                        <li><a href="{{ route('web.category') }}">Product</a></li>
                                        <li><a href="{{ route('web.blog.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('web.testimonial.testimonial') }}">Testimonial</a></li>
                                        <li><a href="{{ route('web.career.career') }}">Career</a></li>
                                        <li><a href="{{ route('web.contact.contact') }}">Contact</a></li>
                                      </ul><!--Widget Listed End-->
                                  </div><!--Widget End-->
                              </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
                                  <!--Widget Start-->
                                  <div class="widget wiget-instagram">
                                      {{-- <h4>Certificate</h4> --}}
                                      <ul class="intagram-listed">
                                          <li>
                                              <a href="#"><img src="{{ asset('web/images/certificate/1.jpg')}}" alt=""></a>
                                          </li>
                                      </ul>
                                  </div><!--Widget End-->
                              </div>                            
                              <div class="col-md-1 col-sm-1 col-xs-1"></div>
                              <div class="col-md-3 col-sm-4 col-xs-12">
                                  <!--Widget Start-->
                                  <div class="widget widget-appointment">
                                        <h4>Get in Touch</h4>
                                        <a href="tel:+91 80489 24086" class="ft-call d-flex">                                            
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p>call Us</p>
                                        </a>
                                        <a href="mailto:kashivishwanathpipe@gmail.com" class="ft-mail d-flex">                                            
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p>Write to us</p>
                                        </a>
                                  </div><!--Widget End-->
                              </div>
                          </div>
                      </div>
                </div><!--Footer Top Row End-->
                <!--CopyRight Row Start-->
                <div class="tnit-copyright-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <p>Copyright © 2020 <span class="th-color">KASHI VISHWANATH</span>, Design by <a href="https://www.webinfotech.net.in/">webinfotech</a>.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <!--Socail Links start-->
                                <ul class="tnit-social-links tnit-social-links_v2">
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/Kashivishwanath-Pipes-Pvt-Ltd-106708927966089"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/Kashiviofficial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com/kashivishwanathpipe/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://in.pinterest.com/pin/653514595925032366/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    </li>
                                </ul><!--Socail Links End-->
                            </div>
                        </div>
                    </div>
                </div><!--CopyRight Row End-->
            </footer><!--Footer Content End-->

        </div><!--Wrapper Content End-->
        
        <!-- ===== Enquiry form Start here ===== -->
        <div class="EnquiryMain" id="equiryform">
            <!-- ///// enquiry tab start -->
            <div class="EnquiryTab">
                <h2>Enquiry Form</h2>
            </div>
            <!-- ///// enquiry tab ends -->

            <!-- ///// enquiry tab start -->
            <div class="EnquiryForm">
                <img src="{{ asset('web/images/logo.png')}}" class="img-responsive" alt="">
                <form action="" method="get" id="enqform">
                    <div class="innerCon">                    
                        <h4>For any trade enquiry call</h4> <h3><a href="tel:18002003466">18005487891</a></h3>
                        <h1>Enquiry Form</h1>
                        <p>Fill in the details below and one of our executives will get back to you shortly.</p>
                        <input name="enq_firstname" id="enq_firstname" type="text" placeholder="Name"  />
                        <input name="enq_emailaddress" id="enq_emailaddress" type="text" placeholder="Email"  />
                        <input name="enq_city" id="enq_city" type="text" placeholder="City"  />
                        <input name="enq_tel" id="enq_tel" pattern="[0-9]{10,10}" type="text" placeholder="10 Digit Mobile" maxlength="10" required="required"  />
                        <textarea name="enq_prof" id="enq_prof" placeholder="Profession"></textarea>
                        <input type="button" class="tnit-btn-style_v2 btn-event EnquiryReset" value="Reset" style="background-color: #fff;color:#353744;margin-right:10px">                    
                        <input name="enq_submit" type="button" id="enq_submit" class="tnit-btn-style_v2 btn-event" value="Submit">                    
                    </div>
                </form>
            </div>
            <!-- ///// enquiry tab ends -->

        </div>
        <!-- ===== Enquiry form Ends here ===== -->
        
        <!--JQuery Files Start-->
        <script src="{{ asset('web/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('web/js/html5shiv.js')}}"></script>
        <script src="{{ asset('web/js/owl-carousel.js')}}"></script>
        <script src="{{ asset('web/js/modernizr.custom.js')}}"></script>
        <script src="{{ asset('web/js//waypoints.min.js')}}"></script> 
        <script src="{{ asset('web/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('web/js/jquery.scrollbar.js')}}"></script>
        <script src="{{ asset('web/js/video-player.js')}}"></script>
        <script src="{{ asset('web/js/wow.min.js')}}"></script>
        <script src="{{ asset('web/js/script.js')}}"></script>
        <script>
            $( ".EnquiryTab, .thankuclose" ).click(function() {
                $( "#equiryform" ).toggleClass( "open", 1000 );
            });

            $( ".EnquiryIcons" ).click(function() {
                //alert("test")
                $( "#equiryform" ).toggleClass( "open", 1000 );
                $(this).toggleClass( "hilightclass", 1000 )
            });

            $(".EnquiryReset").click(function() {
                $(this).closest('form').find("input[type=text], textarea").val("");
            });
        </script>

        <script>
        
        </script>

    </body>

</html>
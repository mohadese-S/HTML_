 <?PHP include 'header.php'; ?>
  <body data-offset="90" data-spy="scroll" data-target=".navbar">

    <!-- Loader -->
    <?PHP include 'loader.php'; ?>
    <!-- Loader ends -->

    <!-- Header start -->
    <?PHP include 'nav-bar.php'; ?>>
    <!-- Header end -->

    <!-- Page Header -->
    <section class="page_header pb-0 w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content position-relative">
                    <h2 class="text-white mt-5 mb-2"><?php echo $language ['CONTACT-SPLIT_SECTION_PAGE HEADER_H2_ONE'] ;?></h2>
                    <p class="text-white">We offer the most creative web designs.</p>
                    <?php include 'location path.php'?>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header -->

    <!-- Address & Map starts -->
    <section class="half-section p-0">
      <h2 class="d-none"><?php echo $language ['CONTACT-SPLIT_SECTION_ADDRESS & MAP STARTS_H2_ONE'] ;?></h2>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 pl-lg-0 p-0">
            <div class="bg-light-gray map fullscreen" id="google-map"></div>
          </div>

          <div class="col-lg-6 col-md-12 pr-lg-0">
            <div class="skill-box">

              <div class="text-center">
                <div class="main-title mb-4">
                  <h5><?php echo $language ['CONTACT-SPLIT_SECTION_ADDRESS & MAP STARTS_H5_ONE'] ;?></h5>
                  <h2 class="text-initial"><?php echo $language ['CONTACT-SPLIT_SECTION_ADDRESS & MAP STARTS_H2_TWO'] ;?></h2>
                  <p><?php echo $language ['CONTACT-SPLIT_SECTION_PAGE HEADER_P_TWO'] ;?></p>
                </div>

                <div class="text-center">

                  <!--Phone-->
                  <p class="mb-3"> Office Telephone: +(34) 609 33 17 54 <br>
                                   Mobile No: +(34) 512 23 92 38 </p>

                  <!--Email-->
                  <p class="mb-3"> Admin: <a class="color-black" href="mailto:email@website.com">admin@website.com</a>
                    <br>
                                   Mail: <a class="color-black" href="mailto:email@website.com">email@website.com</a>
                  </p>

                  <!--Address-->
                  <p class="mb-3">USA: 201 Oak Street Building 27 Manchester, USA <br> Australia: 201 Oak Street
                                  Building 27 Manchester, Australia</p>

                  <!--Timing-->
                  <p class="mb-3">Mon-Fri: 10:30am to 4pm</p>

                  <!--Social Icon-->
                  <div class="address-social black">
                    <ul class="list-unstyled">
                      <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                   class="ti ti-facebook"></i></a></li>
                      <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                  class="ti ti-twitter"></i></a></li>
                      <li><a class="google-bg-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                 class="ti ti-google"></i></a></li>
                      <li><a class="linkedin-bg-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                   class="ti ti-linkedin"></i></a></li>
                      <li><a class="instagram-bg-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="ti ti-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Address & Map ends -->

    <!-- Contact form starts -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 contact-form-center wow fadeInUp" data-wow-delay="400ms">
            <div class="main-title mb-5 wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['CONTACT-SPLIT_SECTION_CONTACT FROM STARTS_H5_ONE'] ;?></h5>
              <h2 class="text-initial"><?php echo $language ['CONTACT-SPLIT_SECTION_CONTACT FROM STARTS_H2_ONE'] ;?></h2>
              <p> Duis mollis, est non commodo luctus, nisi porttitor ligula, eget lacinia odio sem nec elit. Aenean eu
                  leo quam. Pellentesque ornare sem. Nullam id dolor id nibh ultricies vehicula ut id elit
                  ullamcorper. </p>
            </div>


            <div class="col-sm-12 p-0" id="result"></div>

            <div class="company-contact-form">
              <form class="contact-form-outer" onsubmit="return false;">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="contact-form-textfield pb-4">
                      <input class="form-control" id="name" name="name" placeholder="Name" required="" type="text">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="contact-form-textfield pb-4">
                      <input class="form-control" id="email" name="email" placeholder="Email" required="" type="email">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="contact-form-textfield pb-4">
                      <input class="form-control" id="phone" name="phone" placeholder="Contact No" type="tel">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="contact-form-textfield pb-4">
                      <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="contact-form-textfield pb-4">
                      <textarea class="form-control message" id="message" name="message"
                                placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 pt-xs-25px text-center">
                    <button class="btn-setting btn-hvr-setting-main btn-summer-sky btn-hvr text-uppercase"
                            id="submit_btn"
                            type="submit"><i aria-hidden="true" class="ti ti-reload ti-reload mr-2 d-none"></i><b
                      class="font-weight-normal">SUBMIT REQUEST</b>
                      <span class="btn-hvr-setting btn-hvr-black">
                                             <span class="btn-hvr-setting-inner">
                                             <span class="btn-hvr-effect"></span>
                                             <span class="btn-hvr-effect"></span>
                                             <span class="btn-hvr-effect"></span>
                                             <span class="btn-hvr-effect"></span>
                                             </span>
                                        </span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact form ends -->

    <!-- Footer starts -->
    <?PHP include 'footer.php'; ?>
    <!-- Footer ends -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?PHP include 'js.php'; ?>
  </body>




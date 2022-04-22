<?PHP include 'header.php'; ?>
<body data-offset="90" data-spy="scroll" data-target=".navbar">

<?PHP include 'loader.php'; ?>
<?PHP include 'nav-bar.php'; ?>


    <!-- Page Header -->
    <section class="page_header pb-0 w-100">
      <div class="container">
        <div class="row">
          <div class="col-md-12 page-content position-relative">
            <h2 class="text-white mt-5 mb-2">Contact</h2>
            <p class="text-white">We offer the most creative web designs.</p>
            <div class="page_nav bg-white d-inline-block">
              <span>You are here:</span> <a class="d-inline-block color-black" href="index.html">Home</a> <span
              class="color-summer-sky"><i class="ti ti-angle-double-right"></i>Contact</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Header -->

    <!-- Address & Map starts -->
    <section class="half-section p-0">
      <h2 class="d-none">heading</h2>
      <div class="container-fluid">
        <div class="row align-items-center bg-black">
          <div class="col-lg-6 col-md-12 pl-lg-0 p-0">
            <div class="bg-light-gray map fullscreen" id="google-map"></div>
          </div>

          <div class="col-lg-6 col-md-12 pr-lg-0">
            <div class="skill-box">

              <div class="text-center">
                <div class="main-title mb-4 text-white">
                  <h5 class="text-white"> Let's Get Connected </h5>
                  <h2 class="text-initial text-white">Connect with Wixer </h2>
                  <p class="text-white"> Duis mollis, est non commodo luctus, nisi porttitor ligula, eget lacinia odio
                                         sem nec elit. Aenean eu leo quam. Pellentesque ornare sem. Nullam id dolor id
                                         nibh ultricies vehicula ut id elit ullamcorper. </p>
                </div>

                <div class="text-center">

                  <!--Phone-->
                  <p class="mb-3 text-white"> Office Telephone: +(34) 609 33 17 54 <br>
                                              Mobile No: +(34) 512 23 92 38 </p>

                  <!--Email-->
                  <p class="mb-3 text-white"> Admin: <a class="text-white" href="mailto:email@website.com">admin@website.com</a>
                    <br>
                                              Mail: <a class="text-white" href="mailto:email@website.com">email@website.com</a>
                  </p>

                  <!--Address-->
                  <p class="mb-3 text-white">USA: 201 Oak Street Building 27 Manchester, USA <br> Australia: 201 Oak
                                             Street Building 27 Manchester, Australia</p>

                  <!--Timing-->
                  <p class="mb-3 text-white">Mon-Fri: 10:30am to 4pm</p>

                  <!--Social Icon-->
                  <div class="address-social">
                    <ul class="list-unstyled">
                      <li><a class="facebook-text-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                     class="ti ti-facebook"></i></a>
                      </li>
                      <li><a class="twitter-text-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="ti ti-twitter"></i></a></li>
                      <li><a class="google-text-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                   class="ti ti-google"></i></a></li>
                      <li><a class="linkedin-text-hvr" href="javascript:void(0);"><i aria-hidden="true"
                                                                                     class="ti ti-linkedin"></i></a>
                      </li>
                      <li><a class="instagram-text-hvr" href="javascript:void(0);"><i aria-hidden="true"
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
              <h5> Leave a message </h5>
              <h2 class="text-initial">Let us know how we can help you. </h2>
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

<?PHP include 'footer.php'; ?>

<?PHP include 'js.php'; ?>


  </body>




  <?PHP include 'header.php'; ?>
  <body data-offset="90" data-spy="scroll" data-target=".navbar">

    <!-- Loader -->
    <?PHP include 'loader.php'; ?>

    <!-- Loader ends -->

    <!-- Header start -->
    <?PHP include 'nav-bar.php'; ?>
    <!-- Header end -->

    <!-- Page Header -->
    <section class="page_header pb-0 w-100">
      <div class="container">
        <div class="row">
          <div class="col-md-12 page-content position-relative">
            <h2 class="text-white mt-5 mb-2"><?php echo $language ['FAQ_SECTION_PAGE HEADER_H2_ONE'] ;?></h2>
            <p class="text-white">We offer the most creative web designs.</p>
              <?PHP include 'location path.php'; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Header -->

    <!-- FAQs start -->
    <section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['FAQ_SECTION_FAQS START_H5_ONE'] ;?></h5>
              <h2><?php echo $language ['FAQ_SECTION_FAQS START_H2_ONE'] ;?></h2>
              <p><?php echo $language ['FAQ_SECTION_FAQS START_P_TWO'] ;?></p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="faq-content text-left">
              <ul class="faq-items">
                <li class="wow fadeIn" data-wow-delay="400ms"><a href="javascript:void(0)"><?php echo $language ['FAQ_SECTION_FAQS START_A_ONE'] ;?></a>
                  <ul class="sub-items">
                    <li>
                      <p class="m-0"><?php echo $language ['FAQ_SECTION_FAQS START_P_THREE'] ;?></p>
                    </li>
                  </ul>
                </li>
                <li class="wow fadeIn" data-wow-delay="450ms"><a href="javascript:void(0)"><?php echo $language ['FAQ_SECTION_FAQS START_A_TWO'] ;?></a>
                  <ul class="sub-items">
                    <li>
                      <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                     Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                     unknown printer took a galley of type and scrambled it to make a type specimen
                                     book.</p>
                    </li>
                  </ul>
                </li>
                <li class="wow fadeIn" data-wow-delay="500ms"><a href="javascript:void(0)"><?php echo $language ['FAQ_SECTION_FAQS START_A_THREE'] ;?></a>
                  <ul class="sub-items">
                    <li>
                      <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                     Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                     unknown printer took a galley of type and scrambled it to make a type specimen
                                     book.</p>
                    </li>
                  </ul>
                </li>
                <li class="wow fadeIn" data-wow-delay="550ms"><a href="javascript:void(0)"><?php echo $language ['FAQ_SECTION_FAQS START_A_FOUR'] ;?></a>
                  <ul class="sub-items mb-0">
                    <li>
                      <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                     Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                     unknown printer took a galley of type and scrambled it to make a type specimen
                                     book.</p>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQs ends -->

    <!-- Footer starts -->
    <?PHP include 'footer.php'; ?>
    <!-- Footer ends -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?PHP include 'js.php'; ?>
  </body>



    <?PHP include 'header.php'; ?>
    <!-- Loader -->
    <?PHP include 'loader.php'; ?>
    <!-- Loader ends -->

    <!-- Header start -->
     <?PHP include 'nav-bar.php'; ?>
     <body data-offset="90" data-spy="scroll" data-target=".navbar">
    <!-- Header end -->

    <!-- Page Header -->
    <section class="page_header pb-0 w-100">
      <div class="container">
        <div class="row">
          <div class="col-md-12 page-content position-relative">
            <h2 class="text-white mt-5 mb-2">404 Error</h2>
            <p class="text-white">We offer the most creative web designs.</p>
              <?PHP include 'location path.php'; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Header -->

    <!-- Error 404 Section starts -->
    <section class="text-left" id="error">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center no-transition">
            <div class="mb-2rem wow bounceIn" data-wow-delay="300ms">
              <h1 class="color-light-grey2 font-secondary">404 </h1>
              <h2 class="color-grey font-secondary"><?php echo $language ['ERROR PAGE_ERROR SECTION_H2_ONE'] ;?></h2>
            </div>
            <p class="font-16 mb-5"><?php echo $language ['ERROR PAGE_ERROR SECTION_TWO_P_ONE'] ;?></p>
            <a class="btn-setting btn-hvr-setting-main btn-yellow text-white btn-hvr" href="index.html"><?php echo $language ['ERROR PAGE_ERROR SECTION_TWO_A_ONE'] ;?>
              <span class="btn-hvr-setting btn-hvr-summer-sky">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                        </span>
            </a>
            <a class="btn-setting btn-hvr-setting-main btn-green text-white btn-hvr" href="index.html"><?php echo $language ['ERROR PAGE_ERROR SECTION_TWO_A_TWO'] ;?>
              <span class="btn-hvr-setting btn-hvr-summer-sky">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                        </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Error 404 Section ends -->

    <!-- Footer starts -->
    <?PHP include 'footer.php'; ?>
    <!-- Footer ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?PHP include 'js.php'; ?>

  </body>




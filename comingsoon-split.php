  <?PHP include 'header.php'; ?>
  <body data-offset="90" data-spy="scroll" data-target=".navbar">

    <!-- Loader -->
    <?PHP include 'loader.php'; ?>
    <!-- Loader ends -->

    <!-- Login -->
    <section class="p-0">
      <div class="fullscreen center-block">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6  order-lg-2">
              <div class="foget-password">
                <!--Heading-->
                <div class="main-title text-lg-left d-inline-block mb-4">
                  <h5 class="mb-3"><?php echo $language ['COMING SOON-SPLIT_SECTION_LOGIN_H5_ONE'] ;?></h5>
                  <h3 class="mb-3 color-black"><?php echo $language ['COMING SOON-SPLIT_SECTION_LOGIN_H3_ONE'] ;?></h3>
                  <p><?php echo $language ['COMING SOON-SPLIT_SECTION_LOGIN_P_ONE'] ;?></p>
                </div>
                <!-- Form -->
                <form>
                  <input class="form-control mb-4 text-lg-left" name="username" placeholder="E-mail Address" required=""
                         type="text">
                  <div class="form-button full-width">
                    <a class="btn-setting btn-hvr-setting-main btn-summer-sky text-white btn-hvr text-capitalize"
                       href="javascript:void(0)"><?php echo $language ['COMING SOON-SPLIT_SECTION_LOGIN_A_ONE'] ;?>
                      <span class="btn-hvr-setting btn-hvr-black">
                                         <span class="btn-hvr-setting-inner">
                                             <span class="btn-hvr-effect"></span>
                                             <span class="btn-hvr-effect"></span>
                                             <span class="btn-hvr-effect"></span>
                                             <span class="btn-hvr-effect"></span>
                                         </span>
                                    </span>
                    </a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block p-0">
              <!--Feature Image Half-->
              <img alt="image" class="about-img" src="assets/images/comingsoon-split.jpg">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Login ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?PHP include 'js.php'; ?>
  </body>




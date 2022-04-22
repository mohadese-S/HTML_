 <?PHP include 'header.php'; ?>
  <body data-offset="90" data-spy="scroll" data-target=".navbar">

    <!-- Loader -->
    <?PHP include 'loader.php'; ?>
    <!-- Loader ends -->

    <!-- Login -->
    <section class="p-0">
        <div class="fullscreen center-block text-center parallax-setting bg-img-6">
            <div class="bg-overlay bg-white2 opacity-6"></div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="login-content">
                            <div class="main-title d-inline-block mb-4">
                                <h5 class="mb-3 color-black"><?php echo $language ['REGISTER_SECTION_LOGIN_H5_ONE"'] ;?></h5>
                                <h3 class="mb-3 color-black"><?php echo $language ['REGISTER_SECTION_LOGIN_H3_ONE'] ;?></h3>
                                <p class="color-black">Access to the most powerful tool in the entire design and web industry.</p>
                            </div>

                            <!--form-->
                            <form>
                                <input class="form-control" name="username" placeholder="Full Name" required="" type="text">
                                <input class="form-control" name="email" placeholder="E-mail Address" required="" type="text">
                                <input class="form-control" name="password" placeholder="Password" required="" type="password">
                                <div class="mt-40px">
                                    <button class="btn-setting btn-hvr-setting-main btn-summer-sky btn-hvr text-uppercase"
                                            id="submit_btn"
                                            type="submit">SIGN UP
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
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?PHP include 'js.php'; ?>
  </body>




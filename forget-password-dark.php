
<?PHP include 'header.php'; ?>
  <body data-offset="90" data-spy="scroll" data-target=".navbar">

    <!-- Loader -->
    <?PHP include 'loader.php'; ?>

    <!-- Loader ends -->

    <!-- Login -->
    <section class="p-0">
      <div class="fullscreen center-block text-center">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
              <div class="foget-password">
                <!--Heading-->
                <div class="main-title d-inline-block mb-4">
                  <h5 class="mb-3">Lorem ipsum dolor sit amet</h5>
                  <h3 class="mb-3 color-black">Password Reset</h3>
                  <p>To reset your password, enter the email address you use to sign in to inform.</p>
                </div>
                <!-- Form -->
                <form>
                  <input class="form-control mb-4" name="username" placeholder="E-mail Address" required="" type="text">
                  <div class="form-button full-width">
                    <button
                      class="btn-setting btn-hvr-setting-main btn-summer-sky btn-transparent3 btn-hvr text-capitalize"
                      id="submit_btn"
                      type="submit">Send Reset Link
                      <span class="btn-hvr-setting btn-hvr-white2">
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
            <div class="col-lg-6 d-none d-lg-block p-0">
              <!--Feature Image Half-->
              <img alt="image" class="about-img" src="assets/images/password-dark.jpg">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Login ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?PHP include 'js.php'; ?>
  </body>




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
            <h2 class="text-white mt-5 mb-2"><?php echo $language ['SHOP-CART_SECTION_PAGE HEADER_H2_ONE'] ;?></h2>
            <p class="text-white">Best place to buy tech equipment</p>
              <?PHP include 'location path.php'; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Header -->

    <!--Shopping Cart Starts-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="cart-table text-center heading-space">
              <div class="table-responsive">
                <table class="table table-bordered mb-0">
                  <thead>
                    <tr>
                      <th><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_ONE_TH_ONE'] ;?></th>
                      <th><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_ONE_TH_TWO'] ;?></th>
                      <th><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_ONE_TH_THREE'] ;?></th>
                      <th><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_ONE_TH_FOUR'] ;?></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="image shopping-product">
                            <a href="shop-detail.html"><img alt="product" src="assets/images/shop1.jpg"></a>
                          </div>
                          <div>
                            <h5 class="product-name  text-capitalize"><a class="text-color-grey-646464"
                                                                         href="shop-detail.html"><?php echo $language ['SSHOP-CART_SECTION_SHOPPING CART STATS_H5_ONE'] ;?></a>
                            </h5>
                            <p class="text-capitalize"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_P_ONE'] ;?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h5 class="mt-10px mb-10-px color-black">$375.00</h5>
                      </td>
                      <td>
                        <div class="quantity text-center">
                          <input class="quantity" placeholder="1" type="text">
                        </div>
                      </td>
                      <td>
                        <h5 class="mt-10px mb-10-px color-black">$375.00</h5>
                      </td>
                      <td class="text-center"><a class="btn-close" href="javascript:void(0)"><i class="ti ti-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="image shopping-product">
                            <a href="shop-detail.html"><img alt="product" src="assets/images/shop1.jpg"></a>
                          </div>
                          <div>
                            <h5 class="product-name  text-capitalize"><a class="text-color-grey-646464"
                                                                         href="shop-detail.html">just landed</a>
                            </h5>
                            <p class="text-capitalize">best sellers</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h5 class="mt-10px mb-10-px color-black">$225.00</h5>
                      </td>
                      <td>
                        <div class="quantity text-center">
                          <input class="quantity" placeholder="1" type="text">
                        </div>
                      </td>
                      <td>
                        <h5 class="mt-10px mb-10-px color-black">$225.00</h5>
                      </td>
                      <td class="text-center"><a class="btn-close" href="javascript:void(0)"><i class="ti ti-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="image shopping-product">
                            <a href="shop-detail.html"><img alt="product" src="assets/images/shop1.jpg"></a>
                          </div>
                          <div>
                            <h5 class="product-name  text-capitalize"><a class="text-color-grey-646464"
                                                                         href="shop-detail.html">just landed</a>
                            </h5>
                            <p class="text-capitalize">best sellers</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h5 class="mt-10px mb-10-px color-black">$101.00</h5>
                      </td>
                      <td>
                        <div class="quantity text-center">
                          <input class="quantity" placeholder="1" type="text">
                        </div>
                      </td>
                      <td>
                        <h5 class="mt-10px mb-10-px color-black">$101.00</h5>
                      </td>
                      <td class="text-center"><a class="btn-close" href="javascript:void(0)"><i class="ti ti-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="apply-coupon clearfix">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 coupon pr-md-0 pl-md-0 text-md-left">
                    <form class="findus d-md-flex">
                      <div class="col-lg-6 col-md-6 col-sm-12 pr-md-2">
                        <div class="form-group">
                          <input class="form-control" placeholder="Coupon Code" required="" type="text">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 px-md-0 mb-xs-3">
                        <button class="btn-setting btn-hvr-setting-main btn-summer-sky btn-hvr text-capitalize"
                                type="submit">Apply
                                              Coupon
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
                  <div class="col-lg-6 col-md-6 col-sm-12 text-lg-right">
                    <a class="btn-setting btn-hvr-setting-main btn-black btn-hvr text-white" href="javascript:void(0)"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_A_ONE'] ;?>
                      <span class="btn-hvr-setting btn-hvr-summer-sky">
                                        <span class="btn-hvr-setting-inner">
                                            <span class="btn-hvr-effect"></span>
                                            <span class="btn-hvr-effect"></span>
                                            <span class="btn-hvr-effect"></span>
                                            <span class="btn-hvr-effect"></span>
                                        </span>
                                    </span>
                    </a>
                    <a class="btn-setting btn-hvr-setting-main btn-summer-sky btn-hvr text-white"
                       href="javascript:void(0)">Update Cart
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6  mb-xs-5 wow fadeInLeft" data-wow-delay="300ms">
            <div class="totals equalheight">
              <h4 class="color-black text-capitalize mb-35px"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_H4_ONE'] ;?></h4>
              <form class="findus">
                <div class="form-group">
                  <label class="select form-control">
                    <select id="country" name="country">
                      <option>USA</option>
                      <option>Canada</option>
                      <option>Chile</option>
                      <option>France</option>
                    </select>
                  </label>
                </div>

                <div class="form-group">
                  <label class="select form-control">
                    <select id="states" name="country">
                      <option>USA</option>
                      <option>Canada</option>
                      <option>Chile</option>
                      <option>France</option>
                    </select>
                  </label>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Postal Code / Zip" required type="text">
                </div>
                <a class="btn-setting btn-hvr-setting-main btn-black btn-hvr text-white" href="javascript:void(0)">calculate
                  <span class="btn-hvr-setting btn-hvr-summer-sky">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                </a>
              </form>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-delay="300ms">
            <div class="totals equalheight">
              <h4 class="color-black text-capitalize mb-35px"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_H4_TWO'] ;?></h4>
              <table class="table table-responsive font-primary text-left">
                <tbody>
                  <tr>
                    <th class="color-black"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_TWO_TH_ONE'] ;?></th>
                    <td class="color-grey">$251.00</td>
                  </tr>
                  <tr>
                    <th class="color-black"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_TWO_TH_TWO'] ;?></th>
                    <td>
                      <ul class="color-grey">
                        <li>
                          <div class="custom-control custom-radio">
                            <input checked="" class="custom-control-input" id="flat-rate" name="shipping" type="radio">
                            <label class="custom-control-label" for="flat-rate">Flat Rate : $49.00</label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="free-shipping" name="shipping" type="radio">
                            <label class="custom-control-label" for="free-shipping"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_TWO_LABEL_THREE'] ;?></label>
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="cod-shipping" name="shipping" type="radio">
                            <label class="custom-control-label" for="cod-shipping"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_TWO_LABEL_FOUR'] ;?></label>
                          </div>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <th class="color-black"><?php echo $language ['SHOP-CART_SECTION_SHOPPING CART STATS_TABLE_TWO_TH_THREE'] ;?></th>
                    <td class="color-grey">$300.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Shopping Cart End-->

    <!-- Footer starts -->
    <?PHP include 'footer.php'; ?>
    <!-- Footer ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?PHP include 'js.php'; ?>
  </body>




  <?PHP include 'header.php'; ?>
  <body data-offset="90" data-spy="scroll" data-target=".navbar-nav">

    <?PHP include 'loader.php'; ?>

    <?PHP include 'nav-bar.php'; ?>

    <!-- Main Section start -->
    <section class="p-0 no-transition h-100vh" id="home">
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_ONE_H2_ONE'] ;?></h2>
      <!--Main Slider-->
      <div class="rev_slider_wrapper fullwidthbanner-container" id="revo_main_wrapper">
        <div class="rev_slider fullwidthabanner" data-version="5.4.8.1" id="rev_slider_5_1">
          <ul>
            <!-- SLIDE -->
            <li class="banner-overlay" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                data-fsmasterspeed="1500"
                data-index="rs-01" data-masterspeed="2000" data-slotamount="default"
                data-transition="fade">
              <!-- MAIN IMAGE -->
              <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="7"
                   data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina
                   src="assets/video/thumb.jpg">
              <div class="rs-background-video-layer"
                   data-aspectratio="16:9"
                   data-autoplay="true"
                   data-autoplayonlyfirsttime="false"
                   data-forceCover="1"
                   data-forcerewind="on"
                   data-videoheight="100%"
                   data-videoloop="loopandnoslidestop"
                   data-videomp4="assets/video/video.mp4"
                   data-videopreload="auto"
                   data-videowebm="assets/video/video.webm"
                   data-videowidth="100%"
                   data-volume="mute"></div>

              <!--If you need youtube video-->
              <!--<div class="rs-background-video-layer"
              data-ytid="hEkiWaEp03k"
              data-volume="mute"
              data-forcerewind="on"
              data-nextslideatend="true"
              data-autoplay="true"
              data-autoplayonlyfirsttime="true"
              data-videoloop="loopandnoslidestop"
              data-videoattributes="version=3&enablejsapi=1&html5=1&hd=1&autoplay=1&wmode=opaque&showinfo=0&rel=0&
              origin=http://server.local"></div>-->

              <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                   data-beforeafter="before" data-fontsize="['60','60','60','45']"
                   data-hoffset="['0','0','0','0']" data-responsive_offset="on"
                   data-splitin="none"
                   data-splitout="none" data-start="1000"
                   data-textalign="['center','center','center','center']" data-transform_idle="o:1;"
                   data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                   data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-type="text"
                   data-voffset="['-160','-160','-140','-140']"
                   data-whitespace="nowrap"
                   data-width="['none','none','none','none']" data-x="['center','center','center','center']"
                   data-y="['middle','middle','middle','middle']"
                   style="z-index:1; font-weight: 200; color: #ffffff;font-family: 'Poppins', sans-serif;text-transform:capitalize">
                  <?php echo $language ['INDEX_SECTION_ONE_DIV_FOUR'] ;?>
              </div>
              <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                   data-beforeafter="before" data-fontsize="['60','60','60','45']"
                   data-hoffset="['0','0','0','0']" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                   data-responsive_offset="on"
                   data-splitin="none" data-splitout="none"
                   data-start="1200" data-textalign="['center','center','center','center']"
                   data-transform_idle="o:1;"
                   data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                   data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                   data-type="text"
                   data-voffset="['-80','-80','-70','-70']"
                   data-whitespace="nowrap"
                   data-width="['none','none','none','none']" data-x="['center','center','center','center']"
                   data-y="['middle','middle','middle','middle']"
                   style="z-index:2; font-weight: 700; letter-spacing: 1px; color: #ffffff;font-family: 'Poppins', sans-serif;text-transform:capitalize">
                  <?php echo $language ['INDEX_SECTION_ONE_DIV_FIVE'] ;?>
              </div>
              <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                   data-beforeafter="before" data-fontsize="['60','60','60','45']"
                   data-hoffset="['0','0','0','0']" data-responsive_offset="on"
                   data-splitin="none"
                   data-splitout="none" data-start="1000"
                   data-textalign="['center','center','center','center']" data-transform_idle="o:1;"
                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                   data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                   data-type="text"
                   data-voffset="['5','5','0','0']"
                   data-whitespace="nowrap"
                   data-width="['none','none','none','none']" data-x="['center','center','center','center']"
                   data-y="['middle','middle','middle','middle']"
                   style="z-index:3; font-weight: 100; color: #ffffff;font-family: 'Poppins', sans-serif;text-transform:capitalize">
                  <?php echo $language ['INDEX_SECTION_ONE_DIV_SIX'] ;?>
              </div>
              <div class="tp-caption tp-resizeme"
                   data-beforeafter="before" data-fontsize="['22','22','18','16']"
                   data-hoffset="['0','0','0','0']" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                   data-responsive_offset="on"
                   data-splitin="none" data-splitout="none"
                   data-start="1500" data-textalign="['center','center','center','center']"
                   data-transform_idle="o:1;"
                   data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                   data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-type="text"
                   data-voffset="['80','80','70','60']"
                   data-whitespace="nowrap"
                   data-width="['none','none','none','none']" data-x="['center','center','center','center']"
                   data-y="['middle','middle','middle','middle']"
                   style="z-index:4; font-weight: 100; color: #ffffff; line-height:30px; font-family: 'Poppins', sans-serif;text-transform:capitalize">
                  <?php echo $language ['INDEX_SECTION_ONE_DIV_SEVEN'] ;?>
              </div>
              <div class="tp-caption tp-resizeme"
                   data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-hoffset="['0','0','0','0']"
                   data-textAlign="['center','center','center','center']" data-voffset="['160','160','140','140']"
                   data-width="['160','160','160','160']"
                   data-x="['center','center','center','center']"
                   data-y="['middle','middle','middle','middle']"
                   id="slide-24-layer-128"
                   style="z-index:99; max-width: 960px">
                <a class="scroll btn-setting btn-hvr-setting-main btn-summer-sky color-white btn-hvr link"
                   href="#features"><?php echo $language ['INDEX_SECTION_ONE_DIV_EIGHT_A_ONE'] ;?>
                  <span class="btn-hvr-setting btn-hvr-white">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                </a>
              </div>

            </li>
          </ul>
        </div>
      </div>
      <!--Main Slider ends -->

    </section>
    <!-- Main Section end -->

    <!-- Features start -->
    <section id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="container">
            <div class="main-title wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['INDEX_SECTION_TWO_H5_ONE'] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_TWO_H2_ONE'] ;?></h2>
              <p><?php echo $language ['INDEX_SECTION_TWO_P_ONE'] ;?></p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-12 d-xs-none wow fadeInLeft">
            <div>
              <img alt="features" src="assets/images/features1.png">
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12 mx-auto wow fadeInRight">
            <div class="feature-item mt-0">
              <div class="laptop-features-icon">
                <span class="icon"><i class="ti ti-image color-summer-sky"></i></span>
              </div>
              <div class="features-content">
                <h4 class="color-black font-weight-normal mb-10px"><?php echo $language ['INDEX_SECTION_TWO_H4_ONE'] ;?></h4>
                <p><?php echo $language ['INDEX_SECTION_TWO_P_TWO'] ;?></p>
              </div>
            </div>
            <div class="feature-item">
              <div class="laptop-features-icon">
                <span class="icon"><i class="ti ti-timer color-yellow"></i></span>
              </div>
              <div class="features-content">
                <h4 class="color-black font-weight-normal mb-10px"><?php echo $language ['INDEX_SECTION_TWO_H4_TWO'] ;?></h4>
                <p><?php echo $language ['INDEX_SECTION_TWO_P_THREE'] ;?></p>
              </div>
            </div>
            <div class="feature-item mb-xs-0">
              <div class="laptop-features-icon">
                <span class="icon"><i class="ti ti-tablet color-green"></i></span>
              </div>
              <div class="features-content">
                <h4 class="color-black font-weight-normal mb-10px"><?php echo $language ['INDEX_SECTION_TWO_H4_THREE'] ;?></h4>
                <p><?php echo $language ['INDEX_SECTION_TWO_P_FOUR'] ;?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Features ends -->

    <!-- Stats start -->
    <section class="stats bg-light-gray">
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_THREE_H2_one'] ;?></h2>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeIn" data-wow-delay="300ms">
            <div class="main-title mb-md-5 wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['INDEX_SECTION_THREE_H5_ONE'] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_THREE_H2_TWO'] ;?></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-12 stats-box mb-xs-2rem">
            <div class="serial-box center-block wow zoomIn" data-wow-delay="400ms">
              <i aria-hidden="true" class="ti ti-face-smile"></i>
              <p class="pt-3 pb-3 numscroller">1391</p>
              <h6 class="mb-0"><?php echo $language ['INDEX_SECTION_THREE_H6_ONE'] ;?></h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 stats-box mb-xs-2rem">
            <div class="serial-box yellow center-block wow zoomIn" data-wow-delay="500ms">
              <i aria-hidden="true" class="ti ti-layers-alt"></i>
              <p class="pt-3 pb-3 numscroller">445</p>
              <h6 class="mb-0"><?php echo $language ['INDEX_SECTION_THREE_H6_TWO'] ;?></h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 stats-box green mb-xs-2rem">
            <div class="serial-box green center-block wow zoomIn" data-wow-delay="600ms">
              <i aria-hidden="true" class="ti ti-shield"></i>
              <p class="pt-3 pb-3 numscroller">133</p>
              <h6 class="mb-0"><?php echo $language ['INDEX_SECTION_THREE_H6_THREE'] ;?></h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 stats-box sm-mt-2rem mb-xs-2rem">
            <div class="serial-box center-block wow zoomIn" data-wow-delay="700ms">
              <i aria-hidden="true" class="ti ti-notepad"></i>
              <p class="pt-3 pb-3 numscroller">775</p>
              <h6 class="mb-0"><?php echo $language ['INDEX_SECTION_THREE_H6_FOUR'] ;?></h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 stats-box mt-md-2rem">
            <div class="serial-box yellow center-block wow zoomIn" data-wow-delay="800ms">
              <i aria-hidden="true" class="ti ti-cup"></i>
              <p class="pt-3 pb-3 numscroller">555</p>
              <h6 class="mb-0"><?php echo $language ['INDEX_section_THREE_H6_FIVE'] ;?></h6>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Stats ends -->

    <!-- About start -->
    <section class="half-section p-0">
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_FOUR_H2_ONE'] ;?></h2>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 p-0 order-lg-2">
            <div class="hover-effect">
              <img alt="about" class="about-img" src="assets/images/about-img.jpg">
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="skill-box">
              <div class="main-title mb-5 text-md-left wow fadeIn" data-wow-delay="300ms">
                <h5><?php echo $language ['INDEX_SECTION_FOUR_H5_ONE'] ;?></h5>
                <h2><?php echo $language ['INDEX_SECTION_FOUR_H2_TWO'] ;?></h2>
                <p><?php echo $language ['INDEX_SECTION_FOUR_P_ONE'] ;?></p>
              </div>
              <ul class="text-left">
                <li class="custom-progress">
                  <h6 class="font-18 mb-0 text-capitalize"><?php echo $language ['INDEX_SECTION_FOUR_H6_ONE'] ;?><span class="float-right"><b
                        class="font-weight-500 numscroller">95</b>%</span></h6>

                  <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95"
                         class="progress-bar progress-bar-striped bg-summer-sky" role="progressbar">
                    </div>
                  </div>
                </li>
                <li class="custom-progress">
                  <h6 class="font-18 mb-0 text-capitalize"><?php echo $language ['INDEX_SECTION_FOUR_H6_TWO'] ;?><span class="float-right"><b
                        class="font-weight-500 numscroller">88</b>%</span></h6>

                  <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="88"
                         class="progress-bar progress-bar-striped bg-yellow" role="progressbar">
                    </div>
                  </div>
                </li>
                <li class="custom-progress">
                  <h6 class="font-18 mb-0 text-capitalize"><?php echo $language ['INDEX_SECTION_FOUR_H6_THREE'] ;?><span class="float-right"><b
                        class="font-weight-500 numscroller">83</b>%</span></h6>

                  <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="83"
                         class="progress-bar progress-bar-striped bg-green" role="progressbar">
                    </div>
                  </div>
                </li>
                <li class="custom-progress mb-0">
                  <h6 class="font-18 mb-0"><?php echo $language ['INDEX_SECTION_FOUR_H6_FOUR'] ;?><span class="float-right"><b
                        class="font-weight-500 numscroller">91</b>%</span></h6>

                  <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="91"
                         class="progress-bar progress-bar-striped bg-summer-sky" role="progressbar">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About ends -->

    <!-- Team start -->
    <section class="bg-light-gray" id="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['INDEX_SECTION_FIVE_H5_ONE'] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_FIVE_H2_ONE'] ;?></h2>
              <p><?php echo $language ['INDEX_SECTION_FIVE_H6_ONE'] ;?></p>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <!-- Swiper -->
            <div class="swiper-container team-member-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team1.jpg">
                        <div class="team-box-content bg-summer-sky">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">Andrew Martin</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize"> CEO & Founder </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Project Management <span class="float-right"><b class="count">82</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="82" class="progress-bar progress-bar-striped bg-summer-sky w-82"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6><?php echo $language ['INDEX_SECTION_FIVE_H6_TWO'] ;?><span class="float-right"><b class="count">77</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="77" class="progress-bar progress-bar-striped bg-black w-77"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team2.jpg">
                        <div class="team-box-content bg-yellow">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">Lauren Swann</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize"> Senior Social Media
                                                                                             Executive </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6><?php echo $language ['INDEX_SECTION_FIVE_H6_THREE'] ;?><span class="float-right"><b class="count">93</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="93" class="progress-bar progress-bar-striped bg-yellow w-93"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6><?php echo $language ['INDEX_SECTION_FIVE_H6_FOUR'] ;?><span class="float-right"><b class="count">82</b>%</span></h6>
                          <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="82" class="progress-bar progress-bar-striped bg-black w-82"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team3.jpg">
                        <div class="team-box-content bg-green">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">David Moores</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize">Recruit/HR Manager </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6><?php echo $language ['INDEX_SECTION_FIVE_H6_FIVE'] ;?><span class="float-right"><b class="count">93</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="93" class="progress-bar progress-bar-striped bg-green w-93"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6><?php echo $language ['INDEX_SECTION_FIVE_H6_SIX'] ;?><span class="float-right"><b class="count">75</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="75" class="progress-bar progress-bar-striped bg-black w-75"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team1.jpg">
                        <div class="team-box-content bg-summer-sky">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">Andrew Martin</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize"> CEO & Founder </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Web Consulting <span class="float-right"><b class="count">82</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="82" class="progress-bar progress-bar-striped bg-summer-sky w-82"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>SEO Services<span class="float-right"><b class="count">77</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="77" class="progress-bar progress-bar-striped bg-black w-77"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team2.jpg">
                        <div class="team-box-content bg-yellow">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">Lauren Swann</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize"> Senior Social Media
                                                                                             Executive </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Marketing Online <span class="float-right"><b class="count">93</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="93" class="progress-bar progress-bar-striped bg-yellow w-93"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Web Consulting<span class="float-right"><b class="count">82</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="82" class="progress-bar progress-bar-striped bg-black w-82"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team3.jpg">
                        <div class="team-box-content bg-green">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">David Moores</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize">Recruit/HR Manager </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Audit<span class="float-right"><b class="count">93</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="93" class="progress-bar progress-bar-striped bg-green w-93"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Management<span class="float-right"><b class="count">75</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="75" class="progress-bar progress-bar-striped bg-black w-75"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team1.jpg">
                        <div class="team-box-content bg-summer-sky">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">Andrew Martin</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize"> CEO & Founder </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Web Consulting <span class="float-right"><b class="count">82</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="82" class="progress-bar progress-bar-striped bg-summer-sky w-82"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>SEO Services<span class="float-right"><b class="count">77</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="77" class="progress-bar progress-bar-striped bg-black w-77"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team2.jpg">
                        <div class="team-box-content bg-yellow">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">Lauren Swann</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize"> Senior Social Media
                                                                                             Executive </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Marketing Online <span class="float-right"><b class="count">93</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="93" class="progress-bar progress-bar-striped bg-yellow w-93"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Web Consulting<span class="float-right"><b class="count">82</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="82" class="progress-bar progress-bar-striped bg-black w-82"
                                role="progressbar"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-coverflow">
                    <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                      <div class="team-img">
                        <img alt="team" class="img-responsive" data-no-retina src="assets/images/team3.jpg">
                        <div class="team-box-content bg-green">
                          <ul class="team-social white-bg">
                            <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                        class="ti ti-facebook"></i></a>
                            </li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                       class="ti ti-twitter-alt"></i></a>
                            </li>
                            <li><a class="google-bg-hvr" href="javascript:void(0)"><i aria-hidden="true"
                                                                                      class="ti ti-google"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--Team Text-->
                    <div class="team-text">
                      <h4 class="black color-black font-weight-normal m-0 text-capitalize">David Moores</h4>
                      <p class="color-light-grey font-weight-light font-16 text-capitalize">Recruit/HR Manager </p>
                    </div>
                    <!--Team Progress-->
                    <ul class="team-progress text-left">
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Audit<span class="float-right"><b class="count">93</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="93" class="progress-bar progress-bar-striped bg-green w-93"
                                role="progressbar"></span>
                        </div>
                      </li>
                      <!--Progress Item-->
                      <li class="progress-item">
                        <h6>Management<span class="float-right"><b class="count">75</b>%</span></h6>
                        <div class="progress">
                          <span aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="75" class="progress-bar progress-bar-striped bg-black w-75"
                                role="progressbar"></span>
                        </div>
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
    <!-- Team ends -->

    <!-- Phone starts -->
    <section class="absolute-img-wrap">
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_SIX_H2_ONE'] ;?></h2>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 text-lg-left text-md-center md-mb-5">
            <div class="main-title mb-2rem text-lg-left wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['INDEX_SECTION_SIX_H5_ONE'] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_SIX_H2_TWO'] ;?></h2>
              <p><?php echo $language ['INDEX_SECTION_SIX_P_ONE'] ;?></p>
            </div>
            <a class="btn-setting btn-hvr-setting-main btn-yellow color-white" href="javascript:void(0)"><?php echo $language ['INDEX_SECTION_SIX_A_ONE'] ;?>
              <span class="btn-hvr-setting btn-hvr-transparent">
                            <span class="btn-hvr-setting-inner">
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                            </span>
                        </span>
            </a>
          </div>
          <div class="col-lg-6 col-md-12 absolute-img right-img">
            <div class="d-lg-inline-block">
              <div class="image"><img alt="SEO" src="assets/images/phone.png"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Phone ends -->

    <!-- Video start -->
    <section class="half-section p-0">
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_SEVEN_H2_ONE'] ;?></h2>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-6 col-sm-12 p-0 equalheight col-video video-bg">
            <div class="image hover-effect">
              <img alt="stats" class="equalheight video-img-setting" src="assets/images/video-bg.jpg">
            </div>
            <a class="video-play-button position-absolute" data-fancybox=""
               href="https://www.youtube.com/watch?v=7e90gBu4pas">
              <i class="ti ti-control-play"></i>
            </a>

          </div>

          <div class="col-md-6 col-sm-12 p-0 equalheight col-video bg-summer-sky order-lg-2">
            <div class="video-content-setting center-block text-left text-xs-center equalheight">
              <h2 class="color-white font-weight-light text-capitalize mb-2rem mb-xxs-3"><?php echo $language ['INDEX_SECTION_SEVEN_H2_TWO'] ;?></h2>
              <p class="color-white"><?php echo $language ['INDEX_SECTION_SEVEN_P_ONE'] ;?></p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Video ends -->

    <!-- Work Starts -->
    <section id="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="main-title wow fadeInUp" data-wow-delay="250ms">
              <h5><?php echo $language [' Some of the best projects '] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_EIGHT_H2_ONE'] ;?></h2>
              <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae
                 diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi
                 finibus, vel tristique risus faucibus. </p>
            </div>
          </div>

          <div class="col-md-12">
            <div class="cbp cbp-l-grid-mosaic no-transition" id="assets/js-grid-mosaic">

              <div class="cbp-item graphic portfolio-img wow fadeInUp" data-wow-delay="250ms">
                <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu"
                   href="assets/images/portfolio2.jpg">
                  <div class="cbp-caption-defaultWrap">
                    <img alt="" src="assets/images/portfolio2.jpg">
                  </div>
                  <div class="cbp-caption-activeWrap summer-sky portfolio-hover-effect"><i class="ti-zoom-in"></i></div>
                </a>
                <h3 class="font-weight-normal mt-30px mb-15px sm-mt-15px sm-mb-10px color-black text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H3_TWO'] ;?></h3>
                <h5 class="font-weight-normal color-summer-sky mb-1 text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H5_TWO'] ;?></h5>
              </div>

              <div class="cbp-item motion portfolio-img even wow fadeInUp" data-wow-delay="300ms">
                <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu"
                   href="assets/images/portfolio1.jpg">
                  <div class="cbp-caption-defaultWrap">
                    <img alt="" src="assets/images/portfolio1.jpg">
                  </div>
                  <div class="cbp-caption-activeWrap yellow portfolio-hover-effect"><i class="ti-zoom-in"></i></div>
                </a>
                <h3 class="font-weight-normal mt-30px mb-15px sm-mt-15px sm-mb-10px color-black text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H3_THREE'] ;?></h3>
                <h5 class="font-weight-normal color-yellow mb-1 text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H5_THREE'] ;?></h5>
              </div>

              <div class="cbp-item print web-design even portfolio-img wow fadeInUp" data-wow-delay="350ms">
                <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu"
                   href="assets/images/portfolio4.jpg">
                  <div class="cbp-caption-defaultWrap">
                    <img alt="" src="assets/images/portfolio4.jpg">
                  </div>
                  <div class="cbp-caption-activeWrap green portfolio-hover-effect"><i class="ti-zoom-in"></i></div>
                </a>
                <h3 class="font-weight-normal mt-30px mb-15px sm-mt-15px sm-mb-10px color-black text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H3_FOUR'] ;?></h3>
                <h5 class="font-weight-normal color-green mb-1 text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H5_FOUR'] ;?></h5>
              </div>

              <div class="cbp-item web-design portfolio-img wow fadeInUp" data-wow-delay="400ms">
                <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu"
                   href="assets/images/portfolio3.jpg">
                  <div class="cbp-caption-defaultWrap">
                    <img alt="" src="assets/images/portfolio3.jpg">
                  </div>
                  <div class="cbp-caption-activeWrap summer-sky portfolio-hover-effect"><i class="ti-zoom-in"></i></div>
                </a>
                <h3 class="font-weight-normal mt-30px mb-15px sm-mt-15px sm-mb-10px color-black text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H3_SIX'] ;?></h3>
                <h5 class="font-weight-normal color-summer-sky mb-1 text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H5_FIVE'] ;?></h5>
              </div>

              <div class="cbp-item graphic portfolio-img  wow fadeInUp" data-wow-delay="450ms">
                <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu"
                   href="assets/images/portfolio6.jpg">
                  <div class="cbp-caption-defaultWrap">
                    <img alt="" src="assets/images/portfolio6.jpg">
                  </div>
                  <div class="cbp-caption-activeWrap green portfolio-hover-effect"><i class="ti-zoom-in"></i></div>
                </a>
                <h3 class="font-weight-normal mt-30px mb-15px sm-mt-15px sm-mb-10px color-black text-capitalize">
                  Branding Work</h3>
                <h5 class="font-weight-normal color-green mb-1 text-capitalize"> some branding ideas </h5>
              </div>

              <div class="cbp-item print portfolio-img even wow fadeInUp" data-wow-delay="500ms">
                <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu"
                   href="assets/images/portfolio7.jpg">
                  <div class="cbp-caption-defaultWrap">
                    <img alt="" src="assets/images/portfolio7.jpg">
                  </div>
                  <div class="cbp-caption-activeWrap yellow portfolio-hover-effect"><i class="ti-zoom-in"></i></div>
                </a>
                <h3 class="font-weight-normal mt-30px mb-15px sm-mt-15px sm-mb-10px color-black text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H3_FIVE'] ;?></h3>
                <h5 class="font-weight-normal color-yellow mb-1 text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H5_SEVEN'] ;?></h5>
              </div>

              <div class="cbp-item motion portfolio-img even wow fadeInUp" data-wow-delay="550ms">
                <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu"
                   href="assets/images/portfolio5.jpg">
                  <div class="cbp-caption-defaultWrap">
                    <img alt="" src="assets/images/portfolio5.jpg">
                  </div>
                  <div class="cbp-caption-activeWrap summer-sky portfolio-hover-effect"><i class="ti-zoom-in"></i></div>
                </a>
                <h3 class="font-weight-normal mt-30px mb-15px sm-mt-15px sm-mb-10px color-black text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H3_SEVEN'] ;?></h3>
                <h5 class="font-weight-normal color-summer-sky mb-md-1 m-0 text-capitalize"><?php echo $language ['INDEX_SECTION_EIGHT_H5_EIGHT'] ;?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Work ends -->

    <!-- Pricing start -->
    <section class="bg-light-gray" id="pricing">
      <div class="container">
        <div class="row m-0">
          <div class="col-md-12">
            <div class="main-title wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['INDEX_SECTION_NINE_H5_ONE'] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_NINE_H2_ONE'] ;?></h2>
              <p> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae
                  diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi
                  finibus, vel tristique risus faucibus.</p>
            </div>
          </div>
        </div>

        <div class="row two-col-pricing">
          <div class="col-lg-4 col-md-6 col-sm-12 text-center md-mb-5 wow fadeInLeft">
            <div class="pricing-item advanced-plan summer-sky">
              <div class="price-box clearfix">
                <div class="price_title">
                  <h4 class="text-capitalize color-summer-sky"><?php echo $language ['INDEX_SECTION_NINE_H4_ONE'] ;?></h4>
                  <p><?php echo $language ['INDEX_SECTION_NINE_P_TWO'] ;?></p>
                </div>
              </div>
              <div class="price">
                <h2 class="position-relative"><span class="dollar">$</span>14<span class="month"><?php echo $language ['INDEX_SECTION_NINE_H2_TWO'] ;?></span></h2>
              </div>
              <div class="price-description">
                <p><?php echo $language ['INDEX_SECTION_NINE_P_THREE'] ;?></p>
                <p><?php echo $language ['INDEX_SECTION_NINE_P_FOUR'] ;?></p>
                <p><?php echo $language ['INDEX_SECTION_NINE_P_FIVE'] ;?></p>
                <p class="not"><span class="not-support"><?php echo $language ['INDEX_SECTION_NINE_P_SIX'] ;?></span></p>
                <p class="not"><span class="not-support"><?php echo $language ['INDEX_SECTION_NINE_P_SEVEN'] ;?></span></p>
              </div>
              <a class="btn-setting btn-hvr-setting-main btn-summer-sky text-uppercase" href="javascript:void(0)"><?php echo $language ['INDEX_SECTION_NINE_A_ONE'] ;?>
                <span class="btn-hvr-setting">
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
          <div class="col-lg-4 col-md-6 col-sm-12 text-center md-mb-5 wow fadeInUp">
            <div class="pricing-item advanced-plan yellow">
              <div class="price-box clearfix">
                <div class="price_title">
                  <h4 class="text-capitalize color-yellow">Advanced Plan</h4>
                  <p>If you are a small business and you are interested in small rebranding then this is a perfect plan
                     for you</p>
                </div>
              </div>
              <div class="price">
                <h2 class="position-relative"><span class="dollar">$</span>20<span class="month">/ month</span></h2>
              </div>
              <div class="price-description">
                <p>Full Access</p>
                <p>Unlimited Bandwidth</p>
                <p>Email Accounts</p>
                <p>Professional project</p>
                <p class="not"><span class="not-support">Support and care</span></p>
              </div>
              <a class="btn-setting btn-hvr-setting-main btn-yellow text-uppercase" href="javascript:void(0)"><?php echo $language ['INDEX_SECTION_NINE_A_TWO'] ;?>
                <span class="btn-hvr-setting">
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
          <div class="col-lg-4 col-md-12 col-sm-12 text-center wow fadeInRight">
            <div class="pricing-item premium-plan advanced-plan green">
              <div class="price-box clearfix">
                <div class="price_title">
                  <h4 class="text-capitalize color-green"><?php echo $language ['INDEX_SECTION_NINE_H4_TWO'] ;?></h4>
                  <p>If you are a small business and you are interested in small rebranding then this is a perfect plan
                     for you</p>
                </div>
              </div>
              <div class="price">
                <h2 class="position-relative"><span class="dollar">$</span>38<span class="month">/ month</span></h2>
              </div>
              <div class="price-description">
                <p>Full Access</p>
                <p>Unlimited Bandwidth</p>
                <p>Email Accounts</p>
                <p>Professional project</p>
                <p>Support and care</p>
              </div>
              <a class="btn-setting btn-hvr-setting-main btn-green text-uppercase" href="javascript:void(0)">go premium
                <span class="btn-hvr-setting">
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

    </section>
    <!-- Pricing ends -->

    <!-- Clients start -->
    <section class="bg-white p-0 cursor-light no-transition" id="register">
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_TEN_H2_ONE'] ;?></h2>
      <div class="section-padding parallax-setting parallaxie parallax1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeIn" data-wow-delay="300ms">
              <h5 class="mb-10px font-weight-normal line-height-17px color-summer-sky text-capitalize"><?php echo $language ['INDEX_SECTION_TEN_H5_ONE'] ;?></h5>
              <h2 class="mb-25px font-weight-light line-height-normal black color-black"><?php echo $language ['INDEX_SECTION_TEN_H2_TWO'] ;?></h2>
            </div>
          </div>
          <div class="testimonial-images">
            <div class="owl-thumbs owl-dots d-lg-block d-none">
              <div class="owl-dot animated-wrap active"><img alt="" class="animated-element"
                                                             src="assets/images/testimonial1.png"></div>
              <div class="owl-dot animated-wrap"><img alt="" class="animated-element"
                                                      src="assets/images/testimonial2.png"></div>
              <div class="owl-dot animated-wrap"><img alt="" class="animated-element"
                                                      src="assets/images/testimonial3.png"></div>
              <div class="owl-dot animated-wrap"><img alt="" class="animated-element"
                                                      src="assets/images/testimonial4.png"></div>

              <div class="owl-dot animated-wrap"><img alt="" class="animated-element"
                                                      src="assets/images/testimonial5.png"></div>
              <div class="owl-dot animated-wrap"><img alt="" class="animated-element"
                                                      src="assets/images/testimonial6.png"></div>
              <div class="owl-dot animated-wrap"><img alt="" class="animated-element"
                                                      src="assets/images/testimonial7.jpg"></div>
              <div class="owl-dot animated-wrap"><img alt="" class="animated-element"
                                                      src="assets/images/testimonial8.jpg"></div>
            </div>
          </div>

          <div class="row align-items-center position-relative">
            <div class="col-md-12">
              <div class="owl-carousel owl-theme testimonial-two hide-cursor mx-auto wow zoomIn" data-wow-delay="400ms">
                <div class="testimonial-item">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>
                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial1.png"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">David Walker</h5>
                      <p class="color-grey"> Owner, Core Inc. </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item hide-cursor">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>

                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial2.png"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">Christina Williams</h5>
                      <p class="color-grey"> HR Manager </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>

                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial3.png"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">Sarah Jones</h5>
                      <p class="color-grey"> Sales Executive </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>

                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial4.png"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">Chris Gorgano</h5>
                      <p class="color-grey"> Photographer </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="testimonial-item">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>

                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial5.png"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">Kate Carter</h5>
                      <p class="color-grey"> Model </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>

                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial6.png"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">Alex Curtis </h5>
                      <p class="color-grey"> Manager </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>

                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial7.jpg"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">Ashley Wilson</h5>
                      <p class="color-grey"> Actor </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae
                                                                   dui sed suscipit. Vestibulum auctor nunc vitae diam
                                                                   eleifend, in maximus metus sollicitudin. Quisque
                                                                   vitae sodales lectus. Nam porttitor justo sed mi
                                                                   finibus, vel tristique risus faucibus. </p>

                  <div class="testimonial-post">
                    <a class="post" href="javascript:void(0)"><img alt="image" src="assets/images/testimonial8.jpg"></a>
                    <div class="text-content">
                      <h5 class="color-black text-capitalize">Johnny Perkins</h5>
                      <p class="color-grey"> Athlete </p>
                      <div class="rating">
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                        <i class="ti ti-star"></i>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Clients ends -->

    <!-- Blog start -->
    <section class="bg-light-gray" id="faq">
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_ELEVEN_H2_ONE'] ;?></h2>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['INDEX_SECTION_ELEVEN_H5_ONE'] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_ELEVEN_H2_TWO'] ;?></h2>
              <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae
                 diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi
                 finibus, vel tristique risus faucibus. </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 mb-xs-5">
            <div class="news_item shadow blog-one">
              <div class="image split-blog-scale">
                <img alt="Latest News" class="img-fluid" src="assets/images/blog1.jpg">
              </div>
              <div class="news_desc">
                <h3 class="text-capitalize line-height-normal"><a class="color-black" href="javascript:void(0)"><?php echo $language ['INDEX_SECTION_ELEVEN_H3_ONE'] ;?></a>
                </h3>
                <ul class="meta-tags mt-20px mb-20px">
                  <li><a href="javascript:void(0)"><i class="ti ti-calendar"></i>Apr 14</a></li>
                  <li><a href="javascript:void(0)"> <i class="ti ti-user"></i> Bill </a></li>
                  <li><a href="javascript:void(0)"><i class="ti ti-comment"></i>5 </a></li>
                </ul>
                <p class="mb-35px"><?php echo $language ['INDEX_SECTION_ELEVEN_P_TWO'] ;?></p>
                <a class="btn-setting btn-hvr-setting-main btn-yellow text-white btn-hvr" href="blog.html">Read more
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
          <div class="col-md-6 col-sm-12">
            <div class="news_item shadow blog-two">
              <div class="image split-blog-scale">
                <img alt="Latest News" class="img-fluid" src="assets/images/blog2.jpg">
              </div>
              <div class="news_desc">
                <h3 class="text-capitalize line-height-normal"><a class="color-black" href="javascript:void(0)"><?php echo $language ['INDEX_SECTION_ELEVEN_H3_TWO'] ;?></a>
                </h3>
                <ul class="meta-tags mt-20px mb-20px">
                  <li><a href="javascript:void(0)"><i class="ti ti-calendar"></i>Feb 28</a></li>
                  <li><a href="javascript:void(0)"> <i class="ti ti-user"></i> Barry </a></li>
                  <li><a href="javascript:void(0)"><i class="ti ti-comment"></i>5 </a></li>
                </ul>
                <p class="mb-35px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                   Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                   unknown printer took a galley.</p>
                <a class="btn-setting btn-hvr-setting-main btn-green text-white btn-hvr" href="blog.html">Read more
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
        </div>
      </div>
    </section>
    <!-- Blog ends -->

    <!-- Brands starts -->
    <section>
      <h2 class="d-none"><?php echo $language ['INDEX_SECTION_TWELVE_H2_ONE'] ;?></h2>
      <div class="container">
        <div class="brand-carousel owl-carousel owl-theme">
          <div class="item">
            <img alt="Logo" src="assets/images/client-one.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-two.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-three.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-four.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-five.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-one.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-two.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-three.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-four.png">
          </div>
          <div class="item">
            <img alt="Logo" src="assets/images/client-five.png">
          </div>
        </div>
      </div>
    </section>
    <!-- Brands ends -->

    <!-- Contact & Map starts -->
    <section class="bg-light-gray" id="contact">
      <div class="container">
        <div class="row pb-half pb-xs-0">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-5 wow fadeInUp" data-wow-delay="400ms">
            <div class="contact-box-shadow">
              <div class="text-left sm-text-center w-100">
                <h2 class="color-black font-weight-normal mb-2rem text-capitalize"><?php echo $language ['INDEX_SECTION_THIRTEEN_H2_ONE'] ;?></h2>
                <p class="contact-para-setting"><?php echo $language ['INDEX_SECTION_THIRTEEN_P_ONE'] ;?></p>
              </div>
              <div class="contact-info sm-text-center">
                <div class="icon-box">
                  <i class="ti ti-mobile color-summer-sky"></i>
                  <p class="color-grey"> +(34) 609 33 17 54</p>
                </div>
                <div class="icon-box">
                  <i class="ti ti-email color-yellow"></i>
                  <p><a class="color-grey" href="mailto:email@website.com">email@website.com</a></p>
                </div>
                <div class="icon-box">
                  <i class="ti ti-location-pin color-green"></i>
                  <p class="color-grey"> 201 Oak Street Building 27 Manchester, USA</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mb-5 col-map wow fadeInUp" data-wow-delay="400ms">
            <div class="bg-light-gray map" id="google-map"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="main-title wow fadeIn" data-wow-delay="300ms">
              <h5><?php echo $language ['INDEX_SECTION_THIRTEEN_H2_TWO'] ;?></h5>
              <h2><?php echo $language ['INDEX_SECTION_THIRTEEN_H2_THREE'] ;?></h2>
              <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae
                 diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi
                 finibus, vel tristique risus faucibus. </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 contact-form-center wow fadeInUp" data-wow-delay="400ms">

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
                    <button class="btn-setting btn-hvr-setting-main btn-black btn-hvr" id="submit_btn" type="submit"><i
                        aria-hidden="true" class="ti ti-reload ti-reload mr-2 d-none"></i><b class="font-weight-normal">Contact
                                                                                                                        Now</b>
                      <span class="btn-hvr-setting btn-hvr-summer-sky">
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
    <!-- Contact & Map ends -->

    <?PHP include 'footer.php'; ?>

    <?PHP include 'cursor-loader.php'; ?>

    <?PHP include 'js.php'; ?>

    <?PHP include 'analytics-tracking.php'; ?>

  </body>
</html>
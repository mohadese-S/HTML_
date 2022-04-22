<!-- Header start -->
    <header class="cursor-light">
        <?php if ((string)getPage() == 'index.php'):?>
      <nav class="navbar navbar-top-default navbar-expand-lg static-nav bg-white2 nav-box-shadow black center-logo nav-bottom-line bottom-nav no-animation">
          <?php else:?>
          <nav class="navbar navbar-top-default navbar-expand-lg static-nav bg-white2 nav-box-shadow black center-logo nav-bottom-line no-animation">
              <?php endif;?>
              <div class="container">
          <a class="logo link" href="javascript:void(0)">
            <img alt="logo" class="logo-default" src="assets/images/logo-blue.png" title="Logo">
            <img alt="logo" class="logo-scrolled" src="assets/images/logo-blue.png" title="Logo">
          </a>
          <div class="collapse navbar-collapse d-none d-lg-block">
            <ul class="nav navbar-nav">
              <li class="nav-item"><a class="scroll nav-link link" href="#home"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_TWO_LI_ONE'] ;?></a></li>
              <li class="nav-item"><a class="scroll nav-link link" href="#features"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_TWO_LI_TWO'] ;?></a></li>
              <li class="nav-item"><a class="scroll nav-link link" href="#team"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_TWO_LI_THREE'] ;?></a></li>
              <li class="nav-item"><a class="scroll nav-link link" href="#login"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_TWO_LI_FOUR'] ;?></a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item"><a class="scroll nav-link link" href="#pricing"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_THREE_LI_ONE'] ;?></a></li>
              <li class="nav-item"><a class="scroll nav-link link" href="#register"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_THREE_LI_TWO'] ;?></a></li>
              <li class="nav-item"><a class="scroll nav-link link" href="#faq"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_THREE_LI_THREE'] ;?></a></li>
              <li class="nav-item"><a class="scroll nav-link link" href="#contact"><?php echo $language ['NAV-BAR_SECTION_HEADER START_DIV_THREE_LI_FOUR'] ;?></a></li>
            </ul>
          </div>

          <!-- side menu open button -->
          <a class="menu_bars d-inline-block menu-bars-setting animated-wrap" id="sidemenu_toggle">
            <div class="menu-lines animated-element">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
        </div>
      </nav>

          <?PHP include 'side-menu.php'; ?>
    </header>
    <!-- Header end -->

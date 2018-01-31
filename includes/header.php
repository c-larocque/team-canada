<!--Mobile Header and Nav-->
    <header class="row mainHeader show-for-small-only" data-sticky-container>
      <h2 class="hide">Mobile Header</h2>
      <nav class="small-12 columns">
        <h2 class="hide">Mobile Navigation</h2>
        <div class="title-bar" data-responsive-toggle="mobileNav">
          <button class="menu-icon float-left" type="button" data-toggle></button>
          <a href="index.php"><img src="images/logo.svg" alt="logo" width="60" height="61" class="title-bar-title" id="logoMobile"></a>
        </div>

        <div id="mobileNav">
          <ul class="mainNav">
            <li><a href="#">HOME</a></li>
            <li><a href="theteam.php">THE TEAM</a></li>
            <li><a href="summitseries.php">SUMMIT SERIES</a></li>
            <li><a href="legacy.php">LEGACY</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="media.php">MEDIA CENTRE</a></li>
            <li><a href="partners.php">PARTNERS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="portal.php" id="mobilePortalBut">PORTAL</a></li>
          </ul>
        </div>
      </nav>
    </header>
<!--Mobile Header and Nav CLOSE-->

<!--Medium/Large Header and Nav-->
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <nav class="off-canvas position-left mainNav" id="offCanvasNav" data-off-canvas>
          <h2 class="hide">Medium/Large Navigation</h2>
          <ul class="vertical menu" data-menu>
            <li><a href="index.php">HOME</a></li>
            <li><a href="theteam.php">THE TEAM</a></li>
            <li><a href="summitseries.php">SUMMIT SERIES</a></li>
            <li><a href="legacy.php">LEGACY</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="media.php">MEDIA CENTRE</a></li>
            <li><a href="partners.php">PARTNERS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </nav>

        <div class="off-canvas-content" data-off-canvas-content>
          <header class="mainHeader hide-for-small-only expanded" data-sticky-container>
            <h2 class="hide">Header - Medium/Large Screens</h2>
            <div class="large-12 columns" data-sticky data-options="stickTo:top;stickyOn:small;marginTop:0" style="width:100%">
              <div class="title-bar">
                <a href="#" id="portalBut">PORTAL</a>
                <button class="menu-icon" type="button" data-toggle="offCanvasNav"></button>
                <div id="logos">
                  <a href="index.php"<img data-interchange="[images/logo_medium.svg, medium], [images/logo_large.svg, large]" alt="Alternate Logos" id="logoToggle"></a>
                </div>
              </div>
            </div>
          </header>
<!--Medium/Large Header and Nav CLOSE-->

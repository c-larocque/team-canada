<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php';?>
    <title>HOME - Team Canada 1972</title>
  </head>

  <body>
    <h1 class="hide">Team Canada 1972</h1>

    <?php include 'includes/header.php';?>

    <section id="videoCon">
      <h2 class="hide">Home Page Video</h2>
      <div id="overlay">
        <div id="textCon">
          <h3>INSPIRING YOUTH<br>THROUGH OUR LEGACY</h3>
          <h4>TEAM CANADA 1972</h4>
        </div>
      </div>
      <video autoplay loop id="myVid">
        <source src="video/homepage_back.mp4" type="video/mp4">
        <source src="video/homepage_back.ogg" type="video/ogg">
        <source src="video/homepage_back.webm" type="video/webm">
      </video>
    </section>

    <div class="greyPano">
      <section class="row" id="mainHome" data-equalizer data-equalize-mq="medium-up">
        <h2 class="hide">Main Homepage Information</h2>
        <section class="small-12 medium-4 large-4 columns homeSections" id="summitSeriesHomepage" data-equalizer-watch>
          <img src="images/summit_series.jpg" alt="Summit Series Img Icon" class="homeThumbnail">
          <h3>SUMMIT SERIES</h3>
          <p>In 1972, an eight-game hockey series took place between Canada and the Soviet Union. Intended to improve relations between the two rivals, it ended up as the closest thing to open conflict ever experienced between the two nations.</p>
          <a href="summitseries.php" class="learnMoreBut">LEARN MORE</a>
        </section>

        <section class="small-12 medium-4 large-4 columns homeSections" id="teamHomepage" data-equalizer-watch>
          <img src="images/team.jpg" alt="Team Img Icon" class="homeThumbnail">
          <h3>THE TEAM</h3>
          <p>Canada's "Team of the Century".</p>
          <p>The only team inducted into Canada's Sports Hall of Fame.</p>
          <p>The first squad ever named "Team Canada".</p>
          <a href="theteam.php" class="learnMoreBut">LEARN MORE</a>
        </section>

        <section class="small-12 medium-4 large-4 columns homeSections" id="partnersHomepage" data-equalizer-watch>
          <img src="images/partners.jpg" alt="Partners Img Icon" class="homeThumbnail">
          <h3>PARTNERS</h3>
          <p>Team Canada 1972 is proud to include a growing number of partners, from the educational, charitable and corporate communities.</p>
          <p>Each partner assists the team by offering an opportunity to further the goals of the 28,800 Project.</p>
          <a href="partners.php" class="learnMoreBut">LEARN MORE</a>
        </section>
      </section>
    </div>

    <div id="legacyPano" data-interchange="[images/homePano_bg_3.jpg, small], [images/homePano_bg_2.jpg, medium], [images/homePano_bg_1.jpg, large]">
      <section class="row">
        <div class="small-12 medium-8 large-8 columns" id="legacyInfo">
          <h3>28,800 SECONDS:</h3>
          <h4>The Power of Teamwork</h4>
          <p> Team Canada
1972 launched “28,800 Seconds: The Power of Teamwork” to inspire every Canadian with the lessons learned from the
Summit Series, particularly those highlighting what can be achieved through teamwork.</p>

              </div>
              <div class="small-12 medium-4 large-4 columns" id="legacyButCon">
                <ul>
                  <li><a href="legacy.php">LEARN MORE</a></li>
                  <li><a href="portal.php">PORTAL</a></li>
                </ul>
              </div>
            </section>
          </div>



    <section class="row" id="mediaCentre">
      <h2>MEDIA CENTRE</h2>
      <section class="small-12 columns" id="newsSection">
        <h3>NEWS</h3>
        <a href="#" id="moreNews">MORE NEWS ></a>
        <div id="newsContent">
          <img src="images/news_1.jpg" alt="news image" width="290" height="218" id="newsImg">
          <h4>Government of Canada honours Team Canada 1972</h4>
          <p>Team members Serge Savard and Pat Stapleton are joined by government officials and others, at the unveiling of a plaque celebrating the team’s significant contribution to Canadian history.</p>
          <a href="#" id="readMore">READ MORE</a>
        </div>
      </section>

      <section class="small-12 columns" id="socialSection">
        <h3>SOCIAL MEDIA</h3>
        <div class="socialImgs small-12">
          <div class="small-12 medium-5 medium-push-1 columns facebook socials">
            <a href="http://www.facebook.com/teamcanada1972">Join our Facebook Fans<img src="images/facebook-app-logo.svg" class="fb" alt="socialbuttons"></a></div>
          <div class="small-12 medium-5 medium-push-1 columns twitter socials">
            <a href="http://www.twitter.com/teamcanada1972">Join the Conversation on Twitter<img src="images/twitter-app-logo.svg" class="twit" alt="socialbuttons"></a></div>
        </div>
      </section>
    </section>

    <div class="greyPano">
      <section class="row" id="merchCon">
          <h2>MERCHANDISE</h2>
          <a href="#" id="storeBut">GO TO STORE ></a>
          <div class="small-12 medium-6 large-3 columns merch">
          <div id="jerseyCon">
            <img src="images/home_jersey.jpg" alt="Home Jersey" width="225" height="300" id="jerseyImg">
            <p>Team Canada ‘72 Jersey - Home</p>
            <p>$129.99</p>
            <a href="#" class="addToCart">ADD TO CART</a>
          </div>
        </div>
        <div class="show-for-medium medium-6 large-3 columns merch">
          <div id="puckCon">
            <img src="images/1972_puck.jpg" alt="Paul Henderson Puck" width="225" height="300" id="puckImg">
            <p>Paul Henderson Signed ‘72 Puck</p>
            <p>$79.99</p>
            <a href="#" class="addToCart">ADD TO CART</a>
          </div>
        </div>
        <div class="large-3 show-for-large columns merch">
          <div id="shirtCon">
            <img src="images/home_jersey.jpg" alt="Shirt" width="225" height="300" id="shirtImg">
            <p>Team Canada ‘72 T-Shirt</p>
            <p>$19.99</p>
            <a href="#" class="addToCart">ADD TO CART</a>
          </div>
        </div>
        <div class="large-3 columns show-for-large merch">
          <div id="dvdCon">
            <img src="images/1972_dvd.jpg" alt="DVD Image" width="225" height="300" id="dvdImg">
            <p>Team Canada ‘72 Story DVD</p>
            <p>$9.99</p>
            <a href="#" class="addToCart">ADD TO CART</a>
          </div>
        </div>
      </section>
    </div>

    <?php include 'includes/footer.php';?>

        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

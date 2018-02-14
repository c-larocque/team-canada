<?php
  ini_set('display_errors',1);
    error_reporting(E_ALL);
  require_once("admin/scripts/connect.php");
  require_once("admin/scripts/config.php");
?>

<?php
//Get Players
  //Create query
  $playersquery = 'SELECT * FROM tbl_players';

  //Get Result
  $playersresult = mysqli_query($link, $playersquery);
 ?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php';?>
    <title>HOME - Team Canada 1972</title>
  </head>

  <body>
    <h1 class="hide">Team Canada 1972</h1>

    <?php include 'includes/header.php';?>


          <div><!--content goes here-->


            <section id="playerCon">
              <section class="row">
                <div class="small-12 columns">
                  <h2 class="mainTitle">MEET THE TEAM</h2>
                  <h3 id="hoverTitle" class="show-for-large">Hover over each player card to see their stats!</h3>
                </div>

                <!--
                <div class="small-12 columns" id="sortForm">
                  <h2>Sort By:</h2>
                  <form method="post" action="includes/playercards.php">
                  <select id="positionDD">
                  <option value="%">All</option>
                  <option value="Centre">Centre</option>
                  <option value="Left Wing">Left Wing</option>
                  <option value="Right Wing">Right Wing</option>
                  <option value="Defence">Defence</option>
                  <option value="Goaltender">Goaltender</option>
                  </select>

                  </form>
                </div>-->
              </section>


              <section class="row" id="teamCards">
                <h2 class="hide">Team Cards</h2>

                <div class="row small-up-1 medium-up-2 large-up-4" id="playerBlockCon">

                  <?php
                  while($row=mysqli_fetch_array($playersresult)) {
                    $dcard = $row[1];
                    $dcardBack = $row[2];
                    $mcard = $row[3];
                    $name = $row[4];
                    $position = $row[5];
                    $hometown = $row[6];
                    $number = $row[7];
                    $desc = $row[8];
                    $career = $row[9];

                    echo "

                    <div class=\"column column-block\">

                          <ul class=\"accordion\" data-accordion data-allow-all-closed=\"true\">
                            <li class=\"accordion-item\" data-accordion-item>


                              <a href=\"#\" class=\"accordion-title playerMobile\"><img src=\"images/player_cards/$mcard\" alt=\"$name\"></a>


                              <div class=\"playerDesktop\">
                                  <div class=\"card\">

                                <div class=\"front\">
                                  <div class=\"frontCon\">
                                  <img src=\"images/player_cards/$dcard\" alt=\"$name\"></a>
                                  <h3>$position</h3>
                                  <h2>$name</h2>
                                  <h4>$hometown</h4>
                                  <h3 class=\"frontConNumber\">#$number</h3>
                                </div>
                                </div>

                                <div class=\"back\">
                                <div class=\"backCon\">
                                <h2 class=\"backConName\">$name</h2>
                                <h2 class=\"backConSummit\">Summit Series '72:</h2>
                                <p>$desc</p>
                                <h2 class=\"backConTotal\">NHL Career Totals:</h2>
                                <ul>$career</ul>
                                <h3 class=\"backConNumber\">#$number</h3>
                                </div>
                                </div>

                                  </div>
                              </div>


                              <div class=\"accordion-content playerInfo\" data-tab-content>
                                <h2>$name - #$number</h2>
                                <h4>$position</h4>
                                <h4>$hometown</h4>
                                <h4 class=\"playerMobileCard\">SUMMIT SERIES '72:</h3>
                                <p>$desc</p>
                                <h4 class=\"playerMobileCard\">NHL CAREER TOTALS:</h4>
                                <ul>$career</ul>
                              </div>
                            </li>
                          </ul>
                    </div>

                         ";
                  }

                  ?>



  </div>

              </section>


              </section>










<!--
                Mobile Team Accordion
              <section class="row hide-for-large" id="playerMobileCon">
              <ul class="accordion" data-accordion data-allow-all-closed="true">
                <li class="accordion-item" data-accordion-item>
                  <h2 class="hide">Ed Johnston Stats</h2>
                  <a href="#" class="accordion-title playerMobile"><img src="images/player_cards/1-johnston-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Ed was the team’s third goalie dressing as the backup for most of the series and starting the second game in Stockholm.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>592 games played</p>
                    <p>0.897save%</p>
                    <p>3.25 goals against average</p>
                    <p>32 shoot outs</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <h2 class="hide">Gary Bergman Stats</h2>
                  <a href="#" class="accordion-title playerMobile"><img src="images/2-bergman-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Gary played all eight games of the series and is widely regarded as the most solid defenceman the team had.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>838 games played</p>
                    <p>68 goals scored</p>
                    <p>299 assists</p>
                    <p>367 points</p>
                    <p>1249 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <h2 class="hide">Pat Stapleton Stats</h2>
                  <a href="#" class="accordion-title playerMobile"><img src="images/3-stapleton-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Pat appeared in the last seven games against the Soviets and ended the series with a plus-six rating.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>635 games played</p>
                    <p>43 goals scored</p>
                    <p>294 assists</p>
                    <p>337 points</p>
                    <p>353 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/4-orr-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Bobby travelled with the team, though injured; the Soviets allowed Canada an extra roster spot if he recovered in time.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>657 games played</p>
                    <p>270 goals scored</p>
                    <p>645 assists</p>
                    <p>915 points</p>
                    <p>953 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/5-park-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Brad played every game against the Soviets (totalling five points) and collected co-MVP honours in Game Eight.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1113 games played</p>
                    <p>213 goals scored</p>
                    <p>683 assists</p>
                    <p>8965 points</p>
                    <p>1429 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/6-ellis-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Ron skated in all eight games of the series, while picking up points in Montreal, Winnipeg and Moscow (Game Six).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1024 games played</p>
                    <p>332 goals scored</p>
                    <p>308 assists</p>
                    <p>640 points</p>
                    <p>207 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/7-esposito-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Phil was an alternate captain, lead the series in scoring and lifted Team Canada to victory with four points in Game Eight.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1282 games played</p>
                    <p>717 goals scored</p>
                    <p>873 assists</p>
                    <p>1590 points</p>
                    <p>910 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/8-gilbert-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Rod had four points in six games against the Soviets, including an important goal in the third period of Game Seven.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1065 games played</p>
                    <p>406 goals scored</p>
                    <p>615 assists</p>
                    <p>1021 points</p>
                    <p>508 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/9-goldsworthy-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Bill had a two-point night in Vancouver and also played in Stockholm, Moscow (Game Seven) and Prague.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>771 games played</p>
                    <p>283 goals scored</p>
                    <p>258 assists</p>
                    <p>541 points</p>
                    <p>793 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/10-hull-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Dennis appeared in four games, notching a point in each (including in all three victories in Moscow).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>959 games played</p>
                    <p>303 goals scored</p>
                    <p>351 assists</p>
                    <p>654 points</p>
                    <p>261 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/11-hadfield-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Vic played for Team Canada in Montreal and Vancouver against the Soviets, as well as in both Stockholm games.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1002 games played</p>
                    <p>323 goals scored</p>
                    <p>389 assists</p>
                    <p>712 points</p>
                    <p>1154 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/12-cournoyer-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Yvan picked up five points in eight games, including the tying goal in the third period of Game Eight.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>968 games played</p>
                    <p>428 goals scored</p>
                    <p>435 assists</p>
                    <p>863 points</p>
                    <p>255 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/14-cashman-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Wayne had a point in Toronto and in Winnipeg, but had his series ended due to an injury received in Stockholm.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1027 games played</p>
                    <p>277 goals scored</p>
                    <p>516 assists</p>
                    <p>793 points</p>
                    <p>1041 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/15-berenson-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Red was one of three players not from Ontario or Quebec and suited up in Montreal, Stockholm and Moscow (Game Six).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>987 games played</p>
                    <p>261 goals scored</p>
                    <p>397 assists</p>
                    <p>658 points</p>
                    <p>305 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/16-seiling-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Rod dressed for the team in three games against the Soviets, as well as playing in Stockholm and Prague.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>979 games played</p>
                    <p>62 goals scored</p>
                    <p>269 assists</p>
                    <p>331 points</p>
                    <p>603 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/17-white-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Bill played in seven games (as well as in Stockholm), with a plus-seven rating and a goal in Game Eight.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>604 games played</p>
                    <p>50 goals scored</p>
                    <p>215 assists</p>
                    <p>265 points</p>
                    <p>495 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/18-ratelle-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Jean had four points in six games (three of which came in Moscow, two in Game Eight) and was an alternate captain.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1281 games played</p>
                    <p>491 goals scored</p>
                    <p>776 assists</p>
                    <p>1267 points</p>
                    <p>276 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/19-henderson-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Paul collected seven of his 10 points in Moscow, including winning goals in the last three games of the series.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>707 games played</p>
                    <p>236 goals scored</p>
                    <p>241 assists</p>
                    <p>477 points</p>
                    <p>304 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/20-mahovlich-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Peter appeared in seven games against the Soviets, notably scoring a dramatic short-handed goal in Toronto.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>884 games played</p>
                    <p>288 goals scored</p>
                    <p>485 assists</p>
                    <p>773 points</p>
                    <p>916 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/21-mikita-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Stan was an alternate captain, playing for the team in Toronto, Winnipeg, Stockholm and (most memorably) in Prague.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1394 games played</p>
                    <p>541 goals scored</p>
                    <p>926 assists</p>
                    <p>1467 points</p>
                    <p>1270 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/22-parise-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>JP had four points in six games against the Soviets and lead the Summit Series in penalty minutes (with 28).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>890 games played</p>
                    <p>238 goals scored</p>
                    <p>365 assists</p>
                    <p>594 points</p>
                    <p>706 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/23-savard-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Serge played in games Two, Three, Six, Seven and Eight; Team Canada didn't lose any of those games.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1040 games played</p>
                    <p>106 goals scored</p>
                    <p>333 assists</p>
                    <p>439 points</p>
                    <p>592 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/24-redmond-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Mickey appeared in the opening game in the series (Montreal), and also played in Stockholm and Prague.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>538 games played</p>
                    <p>233 goals scored</p>
                    <p>195 assists</p>
                    <p>428 points</p>
                    <p>219 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/25-lapointe-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Guy played for the team in seven games against the Soviets, picking up a point in Moscow (Game Five).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>894 games played</p>
                    <p>171 goals scored</p>
                    <p>451 assists</p>
                    <p>622 points</p>
                    <p>893 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/26-awrey-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Don skated against the Soviets in Montreal and Vancouver, and also played in Stockholm and Prague.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>969 games played</p>
                    <p>31 goals scored</p>
                    <p>158 assists</p>
                    <p>189 points</p>
                    <p>1065 penalty minutes</p>
                  </div>
                </li>
                  <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/27-mahovlich-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Frank was an alternate captain, collecting a point in both Game One (Montreal) and Game Eight (Moscow).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1181 games played</p>
                    <p>533 goals scored</p>
                    <p>570 assists</p>
                    <p>1103 points</p>
                    <p>1056 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/28-clarke-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Bobby collected six points over eight games (including three in Game Five) and was also strong defensively.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1144 games played</p>
                    <p>358 goals scored</p>
                    <p>852 assists</p>
                    <p>1210 points</p>
                    <p>1453 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/29-dryden-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Ken went 2-2 in the series, playing both the first game (23 saves and a loss) and the last (22 saves and a win).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>397 games played</p>
                    <p>0.919 save%</p>
                    <p>2.24 goals against average</p>
                    <p>46 shoot outs</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/32-tallon-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Dale travelled with the team throughout the series and played in the tie games in Stockholm and Prague.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>642 games played</p>
                    <p>98 goals scored</p>
                    <p>238 assists</p>
                    <p>336 points</p>
                    <p>568 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/33-perreault-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Gilbert played twice in the series, scoring in Game Four (Vancouver) and assisting in Game Five (Moscow).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1191 games played</p>
                    <p>512 goals scored</p>
                    <p>814 assists</p>
                    <p>1326 points</p>
                    <p>500 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/34-dionne-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Marcel was the youngest team member (by more than 15 years) and played in Stockholm and Prague.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>1348 games played</p>
                    <p>731 goals scored</p>
                    <p>1040 assists</p>
                    <p>1771 points</p>
                    <p>600 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/35-esposito-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Tony went 2-1-1 against the Soviets, beating them in Toronto and in Moscow (with a strong Game Seven performance).</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>886 games played</p>
                    <p>0.895 save%</p>
                    <p>2.92 goals against average</p>
                    <p>76 shoot outs</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/36-martin-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Richard suited up for Team Canada in the second game in Stockholm, where he scored a third-period goal.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>685 games played</p>
                    <p>384 goals scored</p>
                    <p>317 assists</p>
                    <p>791 points</p>
                    <p>477 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/37-guevremont-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Jocelyn, another of the younger players on Team Canada, suited up for the second game in Stockholm.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>571 games played</p>
                    <p>84 goals scored</p>
                    <p>223 assists</p>
                    <p>307 points</p>
                    <p>319 penalty minutes</p>
                  </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title playerMobile"><img src="images/38-glennie-mobile.png"></a>
                  <div class="accordion-content" data-tab-content>
                    <h3 class="playerMobileCard">SUMMIT SERIES '72:</h3>
                    <p>Brian (who played in Stockholm and Prague) had competed against the Soviets at the 1968 Olympics.</p>
                    <h4 class="playerMobileCard">NHL CAREER TOTALS:</h4>
                    <p>572 games played</p>
                    <p>14 goals scored</p>
                    <p>100 assists</p>
                    <p>114 points</p>
                    <p>621 penalty minutes</p>
                  </div>
                </li>
              </ul>
              </section>

              <div class="show-for-large">
                <section class="row playerRow">
                  <h2 class="hide">Section 1 of Players Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/player_cards/1-johnston.png" alt="Johnston"/>
                    </div>
                    <div class="back">
                      <img src="images/player_cards/1-johnston-back.png" alt="Johnston Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/2-bergman.png" alt="Bergman">
                    </div>
                    <div class="back">
                      <img src="images/2-bergman-back.png" alt="Bergman Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/3-stapleton.png" alt="Stapleton"/>
                    </div>
                    <div class="back">
                      <img src="images/3-stapleton-back.png" alt="Stapleton Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/4-orr.png" alt="Orr"/>
                    </div>
                    <div class="back">
                      <img src="images/4-orr-back.png" alt="Orr Stats"/>
                    </div>
                  </div>
                </section>
                end of section 1

                <section class="row playerRow">
                  <h2 class="hide">Section 2 of Player Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/5-park.png" alt="Park"/>
                    </div>
                    <div class="back">
                      <img src="images/5-park-back.png" alt="Park Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/6-ellis.png" alt="Ellis"/>
                    </div>
                    <div class="back">
                      <img src="images/6-ellis-back.png" alt="Ellis Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/7-esposito.png" alt="Esposito"/>
                    </div>
                    <div class="back">
                      <img src="images/7-esposito-back.png" alt="Esposito Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/8-gilbert.png" alt="Gilbert"/>
                    </div>
                    <div class="back">
                      <img src="images/8-gilbert-back.png" alt="Gilbert Stats"/>
                    </div>
                  </div>
                </section>end of section

                <section class="row playerRow">
                  <h2 class="hide">Section 3 for Player Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/9-goldsworthy.png" alt="Goldsworthy"/>
                    </div>
                    <div class="back">
                      <img src="images/9-goldsworthy-back.png" alt="Goldsworthy Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/10-hull.png" alt="Hull"/>
                    </div>
                    <div class="back">
                      <img src="images/10-hull-back.png" alt="Hull Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/11-hadfield.png" alt="Hadfield"/>
                    </div>
                    <div class="back">
                      <img src="images/11-hadfield-back.png" alt="Hadfield Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/12-cournoyer.png" alt="Cournoyer"/>
                    </div>
                    <div class="back">
                      <img src="images/12-cournoyer-back.png" alt="Cournoyer Stats"/>
                    </div>
                  </div>
                </section>

                <section class="row playerRow">
                  <h2 class="hide">Section 4 for Player Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/14-cashman.png" alt="Cashman"/>
                    </div>
                    <div class="back">
                      <img src="images/14-cashman-back.png" alt="Cashman Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/15-berenson.png" alt="Berenson"/>
                    </div>
                    <div class="back">
                      <img src="images/15-berenson-back.png" alt="Berenson Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/16-seiling.png" alt="Seiling"/>
                    </div>
                    <div class="back">
                      <img src="images/16-seiling-back.png" alt="Seiling Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/17-white.png" alt="White"/>
                    </div>
                    <div class="back">
                      <img src="images/17-white-back.png" alt="White Stats"/>
                    </div>
                  </div>
                </section>end of section 4

                <section class="row playerRow">
                  <h2 class="hide">Section 5 for Player Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/18-ratelle.png" alt="Ratelle"/>
                    </div>
                    <div class="back">
                      <img src="images/18-ratelle-back.png" alt="Ratelle Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/19-henderson.png" alt="Henderson"/>
                    </div>
                    <div class="back">
                      <img src="images/19-henderson-back.png" alt="Henderson Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/20-mahovlich.png" alt="Peter Mahovlich"/>
                    </div>
                    <div class="back">
                      <img src="images/20-mahovlich-back.png" alt="Peter Mahovlich Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/21-mikita.png" alt="Mikita"/>
                    </div>
                    <div class="back">
                      <img src="images/21-mikita-back.png" alt="Mikita Stats"/>
                    </div>
                  </div>
                </section>
                end of section 5

                <section class="row playerRow">
                  <h2 class="hide">Section 6 of Player Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/22-parise.png" alt="Parise"/>
                    </div>
                    <div class="back">
                      <img src="images/22-parise-back.png" alt="Parise Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/23-savard.png" alt="Savard"/>
                    </div>
                    <div class="back">
                      <img src="images/23-savard-back.png" alt="Savard Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/24-redmond.png" alt="Redmond"/>
                    </div>
                    <div class="back">
                      <img src="images/24-redmond-back.png" alt="Redmond Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/25-lapointe.png" alt="Lapointe"/>
                    </div>
                    <div class="back">
                      <img src="images/25-lapointe-back.png" alt="Lapointe Stats"/>
                    </div>
                  </div>
                </section> end of section 6 of player cards

                <section class="row playerRow">
                  <h2 class="hide">Section 7 of player cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/26-awrey.png" alt="Awrey"/>
                    </div>
                    <div class="back">
                      <img src="images/26-awrey-back.png" alt="Awrey Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/27-mahovlich.png" alt="Frank Mahovlich"/>
                    </div>
                    <div class="back">
                      <img src="images/27-mahovlich-back.png" alt="Frank Mahovlich Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/28-clarke.png" alt="Clarke"/>
                    </div>
                    <div class="back">
                      <img src="images/28-clarke-back.png" alt="Clark Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/29-dryden.png" alt="Dryden"/>
                    </div>
                    <div class="back">
                      <img src="images/29-dryden-back.png" alt="Dryden Stats"/>
                    </div>
                  </div>
                </section>end of section 7 of player cards

                <section class="row playerRow">
                  <h2 class="hide">Section 8 for Player Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/32-tallon.png" alt="Tallon"/>
                    </div>
                    <div class="back">
                      <img src="images/32-tallon-back.png" alt="Tallon Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/33-perreault.png" alt="Perreault"/>
                    </div>
                    <div class="back">
                      <img src="images/33-perreault-back.png" alt="Perreault Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three">
                    <div class="front">
                      <img src="images/34-dionne.png" alt="Dionne"/>
                    </div>
                    <div class="back">
                      <img src="images/34-dionne-back.png" alt="Dionne Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns four">
                    <div class="front">
                      <img src="images/35-esposito.png" alt="Tony Esposito"/>
                    </div>
                    <div class="back">
                      <img src="images/35-esposito-back.png" alt="Tony Esposito Stats"/>
                    </div>
                  </div>
                </section>end sectoin 8 of player cards

                <section class="row playerRow">
                  <h2 class="hide">Section 9 of Player Cards</h2>
                  <div class="card large-3 medium-4 columns one">
                    <div class="front">
                      <img src="images/36-martin.png" alt="Martin"/>
                    </div>
                    <div class="back">
                      <img src="images/36-martin-back.png" alt="Martin Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns two">
                    <div class="front">
                      <img src="images/37-guevremont.png" alt="Guevremont"/>
                    </div>
                    <div class="back">
                      <img src="images/37-guevremont-back.png" alt="Guevremont Stats"/>
                    </div>
                  </div>

                  <div class="card large-3 medium-4 columns three end">
                    <div class="front">
                      <img src="images/38-glennie.png" alt="Glennie"/>
                    </div>
                    <div class="back">
                      <img src="images/38-glennie-back.png" alt="Glennie Stats"/>
                    </div>
                  </div>
                </section>end of section 9 of player cards
              </div>

            </section>end of player con-->


            </section><!-- end of player con-->
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

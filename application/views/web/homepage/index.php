<!doctype html>
<html class="no-js" lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laiya Adventure Park</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--  Essential META Tags -->

    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta name="twitter:card" content="">


    <!--  Non-Essential, But Recommended -->

    <meta name="og:site_name" content="">
    <meta name="twitter:image:alt" content="">


    <!--  Non-Essential, But Required for Analytics -->

    <meta property="fb:app_id" content="" />
    <meta name="twitter:site" content="@brandhandle">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/favicon.ico?v2" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>assets/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>assets/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>assets/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>assets/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/apple-touch-icon-180x180.png" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr.js"></script>
  </head>

  <body>
      <!--[if lt IE 10]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <nav class="nav-mobile">
        <ul>
          <li><a href="#activities">ABOUT</a></li>
          <li><a href="#activities">ATTRACTIONS</a></li>
          <li><a href="#rates">RATES & PACKAGES</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">LOCATION</a></li>
        </ul>
      </nav>
      <div class="site-overlay"></div>
      <header>
        <div class="header-cont">
          <div class="custom-container">
            <div class="header-inner">
              <div class="logo">
                <a href="#"><img src="<?php echo base_url() ?>assets/img/logo.png" alt=""></a>
              </div>
              <nav class="nav-desktop">
                <ul>
                  <li><a href="#activities">ABOUT</a></li>
                  <li><a href="#activities">ATTRACTIONS</a></li>
                  <li><a href="#rates">RATES & PACKAGES</a></li>
                  <li><a href="#faq">FAQ</a></li>
                  <li><a href="#contact">LOCATION</a></li>
                </ul>
              </nav>
              <div class="mobile-nav">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </header>

<section id="main">
  <div class="home-slider owl-carousel owl-theme">
    <?php if($sliders): ?>
      <?php foreach($sliders as $slider): ?>
        <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/uploads/sliders/<?php echo $slider->filename ?>');">
          <div class="slide-content">
            <div class="slide-title">
              <h1><?php echo $slider->title ?></h1>
              <h1><?php echo $slider->subtitle ?></h1>
            </div>
            <div class="slide-buttons">
              <a href="#rates" class="ghost-btn fixed">RATES</a>
              <a href="#contact" class="ghost-btn fixed">LOCATION</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
    <!-- <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/img/Slider_1.jpg');">
      <div class="slide-content">
        <div class="slide-title">
          <h1>Life is one magnificent</h1>
          <h1>adventure.</h1>
        </div>
        <div class="slide-buttons">
          <a href="#rates" class="ghost-btn fixed">RATES</a>
          <a href="#contact" class="ghost-btn fixed">LOCATION</a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/img/Slider_2.jpg');">
      <div class="slide-content">
        <div class="slide-title">
          <h1>Conquer your fear of heights</h1>
          <h1>and live a life of might!</h1>
        </div>
        <div class="slide-buttons">
          <a href="#rates" class="ghost-btn fixed">RATES</a>
          <a href="#contact" class="ghost-btn fixed">LOCATION</a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/img/Slider_3.jpg');">
      <div class="slide-content">
        <div class="slide-title">
          <h1>Good Company,</h1>
          <h1>Great Adventures!</h1>
        </div>
        <div class="slide-buttons">
          <a href="#rates" class="ghost-btn fixed">RATES</a>
          <a href="#contact" class="ghost-btn fixed">LOCATION</a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/img/Slider_4.jpg');">
      <div class="slide-content">
        <div class="slide-title">
          <h1>Rest, unwind</h1>
          <h1>and swim your troubles away</h1>
        </div>
        <div class="slide-buttons">
          <a href="#rates" class="ghost-btn fixed">RATES</a>
          <a href="#contact" class="ghost-btn fixed">LOCATION</a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/img/Slider_5.jpg'); background-position:top;">
      <div class="slide-content">
        <div class="slide-title">
          <h1>We know you could do things better,</h1>
          <h1>together.</h1>
        </div>
        <div class="slide-buttons">
          <a href="#rates" class="ghost-btn fixed">RATES</a>
          <a href="#contact" class="ghost-btn fixed">LOCATION</a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/img/Slider_6.jpg'); background-position:top;">
      <div class="slide-content">
        <div class="slide-title">
          <h1>Your new adventure in Laiya</h1>
          <h1>Batangas is here!</h1>
        </div>
        <div class="slide-buttons">
          <a href="#rates" class="ghost-btn fixed">RATES</a>
          <a href="#contact" class="ghost-btn fixed">LOCATION</a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: url('<?php echo base_url() ?>assets/img/Slider_7.jpg'); background-position:top;">
      <div class="slide-content">
        <div class="slide-title">
          <h1>If obstacles are large,</h1>
          <h1>jump higher!</h1>
        </div>
        <div class="slide-buttons">
          <a href="#rates" class="ghost-btn fixed">RATES</a>
          <a href="#contact" class="ghost-btn fixed">LOCATION</a>
        </div>
      </div>
    </div> -->
  </div>
</section>

<section id="activities">
  <div class="custom-container">
    <div class="section-title">
      <h1>Laiya Adventure Park is a unique getaway for families</h1>
      <h1>that redefines outdoor adventure and fun.</h1>
      <p>Laiya Adventure Park is the first ever of its kind to be opened in Laiya Aplaya, San Juan Batangas.  It was built mainly to show that Laiya, San Juan Batangas is a complete destination because it can please people of diverse interests.  While the nearby beach resorts offer relaxation and tranquillity, Laiya Adventure Park seeks to offer thrilling, blood-pumping adventures.</p>
    </div>
    <div class="activity-list">
      <div class="activity" style="background-image: url('<?php echo base_url() ?>assets/img/climb.jpg');">
        <div class="bgcolor blue">
          <div class="title">
            <i class="icon icon-climbing"></i>
            <h1>Wall Climb</h1>
          </div>
          <div class="para active">
            <h1>Wall Climb</h1>
            <p>A forty-foot wall constructed with grips for hands and feet.  It gives one the chance to mimic the experience of outdoor rock climbing.</p>
          </div>
        </div>
      </div>
      <div class="activity" style="background-image: url('<?php echo base_url() ?>assets/img/rappel.jpg');">
        <div class="bgcolor orange">
          <div class="title">
            <i class="icon icon-rappel"></i>
            <h1>Rappel</h1>
          </div>
          <div class="para active">
            <h1>Rappel</h1>
            <p>A forty foot wall wherein one can do a controlled descent down a rope from a wall mimicking a cliff or a mountain.</p>
          </div>
        </div>
      </div>
      <div class="activity" style="background-image: url('<?php echo base_url() ?>assets/img/swing.jpg');">
        <div class="bgcolor red">
          <div class="title">
            <i class="icon icon-swing"></i>
            <h1>Giant Swing</h1>
          </div>
          <div class="para active">
            <h1>Giant Swing</h1>
            <p>One of our more popular attractions wherein the rider is pulled on a swing so that he is raised about 30 feet off the ground.  Anxiety builds up because cord will be released which will send rider plummeting towards the ground.</p>
          </div>
        </div>
      </div>
      <div class="activity" style="background-image: url('<?php echo base_url() ?>assets/img/walk.jpg');">
        <div class="bgcolor blue">
          <div class="title">
            <i class="icon icon-walk"></i>
            <h1>Aerial Walk</h1>
          </div>
          <div class="para active">
            <h1>Aerial Walk</h1>
            <p>One of our more challenging attractions, the aerial walk is a rope adventure course that consists of a series of activities with high and low elements.  Doing the aerial walk is a great cardio vascular work-out, and the element of risk makes your heart beat even faster.</p>
          </div>
        </div>
      </div>
      <div class="activity" style="background-image: url('<?php echo base_url() ?>assets/img/zipline.jpg');">
        <div class="bgcolor orange">
          <div class="title">
            <i class="icon icon-line"></i>
            <h1>Zipline</h1>
          </div>
          <div class="para active">
            <h1>Zipline</h1>
            <p>Get the feeling of complete freedom by sitting and holding onto a freely moving pulley while travelling from the top to the bottom of an inclined cable.</p>
          </div>
        </div>
      </div>
      <div class="activity" style="background-image: url('<?php echo base_url() ?>assets/img/freefall.jpg');">
        <div class="bgcolor red">
          <div class="title">
            <i class="icon icon-fall"></i>
            <h1>FreeFall</h1>
          </div>
          <div class="para active">
            <h1>FreeFall</h1>
            <p>Stand at the edge of a 40 foot tower, and get ready to completely throw caution to the wind while you prepare to step off the edge! Take the step and feel joy and exhilaration as you drop!  </p>
          </div>
        </div>
      </div>
      <div class="activity" style="background-image: url('<?php echo base_url() ?>assets/img/pool.jpg');">
        <div class="bgcolor blue">
          <div class="title">
            <i class="icon icon-pool"></i>
            <h1>Infinity Pool</h1>
          </div>
          <div class="para active">
            <h1>Infinity Pool</h1>
            <p>Take a relaxing dip amidst our lush greenery.  Our infinity pool is definitely the best and the biggest in the whole of Laiya.  Ease your body of the tension from the challenges of the attractions, recharge and be energized in our infinity pool. </p>
          </div>
        </div>
      </div>
      <div class="activity">
        <div class="bgcolor orange">
          <a href="#contact">
            <div class="titleNon">
              <i class="icon icon-book"></i>
              <h1>Book Now</h1>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="rates">
  <div class="custom-container">
    <div class="tbl">
      <div class="tbl-tab">
        <ul>
          <li class="tab active" data-class="promo">Promo</li><li class="tab" data-class="main">Regular Rates</li>
        </ul>
      </div>
      <table class="table promo active" width="100%">
        <tr>
          <th class="fst" valign="middle" align="center">ATTRACTIONS</th>
          <th class="scnd" valign="middle" align="center">INDIVIDUAL RATES (PHP)</th>
          <th class="trd" width="30%" colspan="3" valign="middle" align="center">PACKAGES</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <?php if($packages): ?>
            <?php foreach($packages as $package): ?>
                <td class="tcenter"><?php echo $package->name ?></td>
            <?php endforeach; ?>
          <?php endif; ?>
          <!-- <td class="tcenter">A</td>
          <td class="tcenter">B</td>
          <td class="tcenter">C</td> -->
        </tr>
        <tr class="mhide">
          <td></td>
          <td></td>
          <?php if($packages): ?>
            <?php foreach($packages as $package): ?>
                <td class="tcenter"><?php echo $package->rate ?></td>
            <?php endforeach; ?>
          <?php endif; ?>
          <!-- <td class="tcenter">670/Head</td>
          <td class="tcenter">520/Head</td>
          <td class="tcenter">300/Head</td> -->
        </tr>
        <?php if($promo_rates): ?>
            <?php foreach($promo_rates as $rate): ?>
                <?php if($rate->rate): ?>
                  <tr>
                    <td class="tbold"><?php echo $rate->attraction ?></td>
                    <td class="center"><?php echo $rate->rate ?></td>
                    <?php if($packages): ?>
                      <?php foreach($packages as $package): ?>
                        <?php $package_record = unserialize($rate->package_id); $package_record = is_array($package_record) ? $package_record : array(); ?>
                          <td class="tcenter"><i class="<?php echo in_array($package->id, $package_record) ? 'fa fa-check' : '' ?>" aria-hidden="true"></i></td>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- <td class="tcenter"><i class="" aria-hidden="true"></i></td>
                    <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td> -->
                  </tr>
                <?php else: ?>
                  <tr>
                    <td class="tbold" colspan="<?php echo (int) count($packages) + 2 ?>"><?php echo $rate->attraction ?></td>
                  </tr>
                <?php endif; ?>

                <?php if($rate->sub_attractions): ?>
                    <?php foreach($rate->sub_attractions as $sub_attraction): ?>
                        <tr>
                          <td class=""><?php echo $sub_attraction->attraction ?></td>
                          <td class="center"><?php echo $sub_attraction->rate ?></td>
                          <?php if($packages): ?>
                            <?php foreach($packages as $package): ?>
                              <?php $package_record = unserialize($sub_attraction->package_id); $package_record = is_array($package_record) ? $package_record : array(); ?>
                                <td class="tcenter"><i class="<?php echo in_array($package->id, $package_record) ? 'fa fa-check' : '' ?>" aria-hidden="true"></i></td>
                            <?php endforeach; ?>
                          <?php endif; ?>
                          <!-- <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
                          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
                          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td> -->
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

                <tr>
                  <td class="blankrow" colspan="<?php echo (int) count($packages) + 2 ?>"></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
      </table>
      <table class="table main" width="100%">
        <tr>
          <th class="fst" valign="middle" align="center">ATTRACTIONS</th>
          <th class="scnd" valign="middle" align="center">INDIVIDUAL RATES (PHP)</th>
          <th class="trd" width="30%" colspan="3" valign="middle" align="center">PACKAGES</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <?php if($packages): ?>
            <?php foreach($packages as $package): ?>
                <td class="tcenter"><?php echo $package->name ?></td>
            <?php endforeach; ?>
          <?php endif; ?>
          <!-- <td class="tcenter">A</td>
          <td class="tcenter">B</td>
          <td class="tcenter">C</td> -->
        </tr>
        <tr class="mhide">
          <td></td>
          <td></td>
          <?php if($packages): ?>
            <?php foreach($packages as $package): ?>
                <td class="tcenter"><?php echo $package->rate ?></td>
            <?php endforeach; ?>
          <?php endif; ?>
          <!-- <td class="tcenter">670/Head</td>
          <td class="tcenter">520/Head</td>
          <td class="tcenter">300/Head</td> -->
        </tr>
        <?php if($regular_rates): ?>
            <?php foreach($regular_rates as $rate): ?>
                <?php if($rate->rate): ?>
                  <tr>
                    <td class="tbold"><?php echo $rate->attraction ?></td>
                    <td class="center"><?php echo $rate->rate ?></td>
                    <?php if($packages): ?>
                      <?php foreach($packages as $package): ?>
                        <?php $package_record = unserialize($rate->package_id); $package_record = is_array($package_record) ? $package_record : array(); ?>
                          <td class="tcenter"><i class="<?php echo in_array($package->id, $package_record) ? 'fa fa-check' : '' ?>" aria-hidden="true"></i></td>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- <td class="tcenter"><i class="" aria-hidden="true"></i></td>
                    <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td> -->
                  </tr>
                <?php else: ?>
                  <tr>
                    <td class="tbold" colspan="<?php echo (int) count($packages) + 2 ?>"><?php echo $rate->attraction ?></td>
                  </tr>
                <?php endif; ?>

                <?php if($rate->sub_attractions): ?>
                    <?php foreach($rate->sub_attractions as $sub_attraction): ?>
                        <tr>
                          <td class=""><?php echo $sub_attraction->attraction ?></td>
                          <td class="center"><?php echo $sub_attraction->rate ?></td>
                          <?php if($packages): ?>
                            <?php foreach($packages as $package): ?>
                              <?php $package_record = unserialize($sub_attraction->package_id); $package_record = is_array($package_record) ? $package_record : array(); ?>
                                <td class="tcenter"><i class="<?php echo in_array($package->id, $package_record) ? 'fa fa-check' : '' ?>" aria-hidden="true"></i></td>
                            <?php endforeach; ?>
                          <?php endif; ?>
                          <!-- <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
                          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
                          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td> -->
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

                <tr>
                  <td class="blankrow" colspan="<?php echo (int) count($packages) + 2 ?>"></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php /*<tr>
          <th class="fst" valign="middle" align="center">ATTRACTIONS</th>
          <th class="scnd" valign="middle" align="center">INDIVIDUAL RATES (PHP)</th>
          <th class="trd" width="30%" colspan="3" valign="middle" align="center">PACKAGES</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="tcenter">A</td>
          <td class="tcenter">B</td>
          <td class="tcenter">C</td>
        </tr>
        <tr class="mhide">
          <td></td>
          <td></td>
          <td class="tcenter">670/Head</td>
          <td class="tcenter">520/Head</td>
          <td class="tcenter">300/Head</td>
        </tr>
        <tr>
          <td class="tbold">Giant Swing</td>
          <td class="center">150</td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
        </tr>
        <tr>
          <td class="blankrow" colspan="5"></td>
        </tr>
        <tr>
          <td class="tbold" colspan="5">Adventure Tower</td>
        </tr>
        <tr>
          <td>Free Fall</td>
          <td class="center">100</td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"></td>
        </tr>
        <tr>
          <td>Rappelling</td>
          <td class="center">100</td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"></td>
        </tr>
        <tr>
          <td>Wall Climbing</td>
          <td class="center">101</td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"></td>
        </tr>
        <tr>
          <td class="blankrow" colspan="5"></td>
        </tr>
        <tr>
          <td class="tbold">Aerial Walk</td>
          <td class="center">150</td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"></td>
        </tr>
        <tr>
          <td class="blankrow" colspan="5"></td>
        </tr>
        <tr>
          <td class="tbold">Two Ziplines</td>
          <td class="center">250</td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
        </tr>
        <tr>
          <td class="blankrow" colspan="5"></td>
        </tr>
        <tr>
          <td class="tbold">Infinity Pool</td>
          <td class="center">250</td>
          <td class="tcenter"><i class="fa fa-check" aria-hidden="true"></i></td>
          <td class="tcenter"></td>
          <td class="tcenter"></td>
        </tr>*/ ?>
      </table>
      <div class="packageRates">
        <div class="mobilePackage promo active">
        <p class="head">Package A</p>
        <p>670/Head</p>
        <p class="head">Package B</p>
        <p>520/Head</p>
        <p class="head">Package C</p>
        <p>300/Head</p>
      </div>
      <div class="mobilePackage main">
        <p class="head">Package A</p>
        <p>670/Head</p>
        <p class="head">Package B</p>
        <p>520/Head</p>
        <p class="head">Package C</p>
        <p>300/Head</p>
      </div>
      </div>
      <div class="promocont">
        <?php echo $promo_copy->content ?>
        <?php /*<p>Please note that Package A allows whole day use of the infinity pool. All packages allow a one-time use of the attractions included in each set.</p>
        <p>Please come the park in rubber shoes.</p>
        <p>Promo period is January 21 - March 26, 2017.</p>*/ ?>
      </div>
      <div class="dis">
        <?php echo $regular_copy->content ?>
        <?php /*<p>*rates above do not include the entrance fee of P80/head</p>*/ ?>
      </div>
    </div>
    <div class="rates-box">
      <p>Laiya Adventure Park caters to adrenaline-loving folks who are in constant search for exhilarating and spine-tingling experiences. The park boasts of several attractions, among which are a 630-meter zipline, an aerial walk, free fall, a giant swing, rappelling, wall climbing, and an infinity pool. We wish to invite all the bold, the brave, the courageous, or those who simply need a change of pace and scenery to come visit Laiya Adventure Park.  Where one can DARE, MOVE, and PLAY.</p>
    </div>
  </div>
</section>

<section id="faq">
  <div class="custom-container">
    <div class="section-title">
      <h1>Frequently Asked Questions</h1>
    </div>
    <div class="accordion-custom-container">
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>What are your operating hours?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p>Laiya Adventure Park is open Mondays thru Sundays, including Holidays, 8am until 5pm.</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>Do you have rooms for overnight stay?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          Laiya Adventure Park is a ‘daytrip’ only facility. We do not have rooms for overnight accommodations. What we have are nipa huts for rent at Php500 for whole day use, good for 10pax.
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>Is a reservation needed?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p>If you plan to go with a group of 25 or more, we suggest you let us know in advance.  This will help in facilitating faster issuance of tickets, so your group does not have to queue. Otherwise, walk-ins are welcome.</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>Is bringing of food allowed?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p>Since the Laiya Adventure Park restaurant is not fully operational yet, we still allow bringing in of cooked food without charging any corkage.  However, please be mindful of your own trash.  Help us keep the park clutter-free and beautiful by cleaning up after yourselves.</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>Do you sell food inside the Park?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p>Laiya Adventure Park has a food hut selling snacks—drinks, chips, sandwiches—on a daily basis.  A nearby resort also delivers lunch meal orders, but we advise placing your orders early.</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>Are there weight and height limits for your attractions?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p>To be allowed on any of the attractions, one must be at least 4 feet tall and weigh at least 35 kilos (77 pounds).  Maximum weight allowed is 110 kilos (242 pounds).  While it is possible for a young child to reach our minimum height and weight requirements, we recommend that a child be at an age mature enough to understand and follow safety instructions (at least 8 years old).</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>What should one wear for a day at the park?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p>There may be a lot of climbing so wear pants / shorts that will allow you to feel comfortable even in awkward positions.  Rubber shoes are required in some attractions.</p>
          <p>Be reminded that only those in proper swimming attire will be allowed to use the pool.</p>
          <p>Allowed: bathing suits/ swimming trunks/ rash guard/ board shorts</p>
          <p>Not Allowed: t-shirts/ shorts/ sandos/ basketball jerseys</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>How to get to Laiya Adventure Park from Manila by private vehicle?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p class="bold">VIA LIPA</p>
          <p>From Manila, take the South Luzon Expressway all the way to the second to the last exit (Exit 50A going to Batangas, Lucena and Legaspi). Drive 6.5 kms. along this National Highway and turn right to the Star Toll Way entrance. </p>
          <p>Drive all the way to Lipa (approximately 20 kms.) on the Star Toll Way and take the Tambo Exit at the end. After exiting turn right and drive towards Lipa City. La Salle Lipa will be on your left while a Petron gas station will be on the right.</p>
          <p>Take the road to the right before the Mc Donald’s restaurant. Traverse C.M. Recto Ave. then turn right at the corner of the Mercury Drug store. This is P. Torres St. Drive 8.5 kms. towards Padre Garcia town. Make a left turn at the road sign pointing to Padre Garcia.</p>
          <p>Turn right after passing the Padre Garcia town market. Drive 4.5 kms. and merge with the road coming from Rosario. This road leads all the way to San Juan which is approximately 19 kms. When you see the sign leading to the Batangas Racing Circuit veer left and head straight for San Juan town proper.</p>
          <p>After entering San Juan town proper, drive past the Jollibee and Chowking stores at your right and head for the Municipal Hall of San Juan. Turn right immediately after the Municipal Hall of San Juan. This is the main road of Laiya. Drive approximately 20 kms. (20 minutes), until you reach the road leading to Laiya Adventure Park on the right side of the road (watch out for signs).</p>
          <p>Turn right on this road (before the Laiya Chapel). This is the Laiya Adventure Park road. Follow the signs on where to turn until you reach Laiya Adventure Park.</p>
          <p class="bold">VIA IBAAN</p>
          <p>From Manila, take South Luzon Expressway until the very end where it connects to Star Tollway, enter Star Tollway.  Exit at Ibaan/San Jose.  Right after paying at the tollgate, follow the sign to Ibaan (turn left).</p>
          <p>When you see the sign "alternate route to Lipa", turn left into that narrow road.  At the end of that short narrow road, turn right.  You will see Petron gas station on your left and a yellow outpost. Turn left on that corner of Petron and the outpost.</p>
          <p>Keep going through Rosario until you reach San Juan town proper.  Once in San Juan town proper, drive past the Jollibee and Chowking stores at your right and head for the Municipal Hall of San Juan. Turn right immediately after the Municipal Hall of San Juan. </p>
          <p>This is the main road of Laiya. Drive approximately 20 kms. (20 minutes), until you reach the road leading to Laiya Adventure Park on the right side of the road (watch out for signs).</p>
          <p>Turn right on this road (before the Laiya Chapel).  This is the Laiya Adventure Park road. Follow the signs on where to turn until you reach Laiya Adventure Park.</p>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-title active">
          <div class="left">
            <h1>How to get to Laiya Adventure Park from Manila by public transport?</h1>
          </div>
          <div class="right">
            <h1 class="plus">+</h1>
            <h1 class="open">-</h1>
          </div>
        </div>
        <div class="accordion-body">
          <p class="bold">Candelaria Route:</p>
          <p>Catch a bus ride from Manila to Lucena at Kamuning under the flyover very near GMA 7 in Timog Avenue; there are three bus liners available in the area (JAM, Jackliner, and Tritran).</p>
          <p>Be sure to get off at Chowking in the town of Candelaria. From Chowking go to the nearest intersection and ride a jeep going to the town of San Juan, Batangas. Get off at the town of San Juan and ask where the jeepneys bound for Laiya are. </p>
          <p>Take another jeep ride headed for Laiya, tell the driver to drop you off at Laiya Pitstop.  Laiya PitStop is a convenience store where you can take the free shuttle to Laiya Adventure Park.  Once in Laiya PitStop, inform store staff that you need a ride and they will call for a shuttle service</p>
          <p class="bold">Lipa Route:</p>
          <p>Catch a bus ride from Manila to Lucena at Kamuning under the flyover very near GMA 7 in Timog Avenue; there are three bus liners available in the area (JAM, Jackliner, and Tritran).</p>
          <p>Get off at the bus terminal in the same are as Robinson’s Lipa, McDonald’s and Jollibee.</p>
          <p>Get a tricycle and tell driver to take you to the jeep terminal bound for San Juan, Batangas.</p>
          <p>From the jeep terminal take a ride headed for San Juan, Batangas. Once in San Juan, take another jeep to Laiya proper and tell the driver to drop you off at Laiya Pitstop.  Laiya PitStop is a convenience store where you can take the free shuttle to Laiya Adventure Park.  Once in Laiya PitStop, inform store staff that you need a ride and they will call for a shuttle service.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="testimonials">
  <div class="custom-container">
    <div class="testi-cont">
      <div class="right">
        <div id="instafeed" class="igfeed"></div>
      </div>
      <div class="left">
        <div class="testi owl-carousel owl-theme">
          <div class="test">
            <p>Great place for adventure and relaxation! All the staffs are helpful and accommodating. They are really fun to be with. Activities are a bit hard but it feels so fulfilling when you finished it. Prizes are affordable at the same time. And the infinity pool is really clean. The place is amazingly great. Looking forward to come back. KUDOS to Laiya Adventure Park team. </p>
            <h3>GLENDA CRUZ LATORRE</h3>
          </div>
          <div class="test">
            <p>For 1st timer who like to try outdoor adventures, this is a great starting place for you. Best for kids and ladies. Comfort room and shower room exceeded standards. Food is affordable and excellent, so as Staff are so accommodating. Try it and see for yourself... It is highly recommended! </p>
            <h3>Fe Laygo</h3>
          </div>
          <div class="test">
            <p>Thankyou for the awesome experience! I'll be back soon with my family and friends! Good job for people there!</p>
            <h3>Cherie Anne Roy</h3>
          </div>
          <div class="test">
            <p>We went here yesterday, October 15, 2016 and had a great experience. I was able to finish all the activities and conquered my fear of heights. #LaiyaAdventurePark #LaiyaPark #DareMovePlay</p>
            <h3>Ramil Maderazo</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="map-mobile">
    <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAKiR_DO-AKE7kSIFfaC_brABMLzcSMmCo&q=Laiya+Adventure+Park" allowfullscreen></iframe>
  </div>
  <div class="custom-container">
    <div class="contact-cont">
      <div class="left">
        <h1>Come enjoy the outdoors at Laiya Adventure Park!</h1>
        <div class="form-cont">
          <form action="mail.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Name" name="name" required>
              <input type="email" placeholder="Email" name="email" required>
              <input type="text" name="url" style="display:none;" required>
            </div>
            <div class="form-group">
              <textarea name="message" rows="8" cols="40" placeholder="Message" required></textarea>
            </div>
            <div class="submit-btn">
              <input type="submit" class="ghost-btn" value="SEND">
            </div>
          </form>
        </div>
        <div class="contactus">
          <div class="office">
            <h1>OFFICE HOURS</h1>
            <p>Monday - Saturday: 8.00am - 5.00pm</p>
          </div>
          <div class="details">
            <h1>CONTACT DETAILS</h1>
            <p>(02) 709 1470</p>
            <p>0977 832 0630 / 0947 998 9278</p>
            <p>laiyapark@gmail.com</p>
            <p>Brgy Laiya Aplaya, San Juan Batangas.</p>
          </div>
        </div>
        <div class="social">
          <a href="https://web.facebook.com/LaiyaAdventurePark/"><i class="fa fa-facebook-official"></i></a>
          <a href="https://www.instagram.com/laiyaadventurepark/"><i class="fa fa-instagram"></i></a>
          <h1 class="title">laiyaadventurepark</h1>
        </div>
      </div>
      <div class="right">
        <div class="right-bg mhide">
          <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAKiR_DO-AKE7kSIFfaC_brABMLzcSMmCo&q=Laiya+Adventure+Park" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>



  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>

  </script>

  <script src="<?php echo base_url() ?>assets/js/vendor.js"></script>

  <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>

  <script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>


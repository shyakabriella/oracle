<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Oracle</title>
    <link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css" media="all">
    <link rel="stylesheet" id="df-string-translations-for-polylang-css" href="css/df-string-translations-for-polylang-public.css" media="all">
    <link rel="stylesheet" id="app-css" href="css/app.css" media="all">

    <script src="js/jquery.min.js" id="jquery-core-js"></script>
    <script src="js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script src="js/df-string-translations-for-polylang-public.js" id="df-string-translations-for-polylang-js"></script>
  </head>

  <body class="home page-template page-template-tpl-homepage page-template-tpl-homepage-php page page-id-181">
    <div id="root">
      <div class="container">

@extends('layouts.main')
@section('content')

 <!-- Header  -->
 <header>
  <figure>
    <a href="/">
      <img src="images/oracle.png" alt="Oracle">
      <div></div>
    </a>
    <span class="header-country">RDC</span>
  </figure>
  <div id="header-eligibility" class="visible">
    <a href="#" class="button eligibility" target="_self" title="Check my coverage">Check my coverage</a>
  </div>
  <div id="header-menu">
    <input id="header-burger-menu-input" type="image" src="fonts/burger.svg" width="16" height="16">
  </div>
  <nav>
    <div class="nav-box">
      <div class="nav-container">
        <div class="nav-container-flex">
          <input id="nav-close-menu-input" type="image" src="fonts/close-button.svg" width="16" height="16">
        </div>
        <div>
          <div class="custom-select location">
            <select class="location select-box select-box-light select-box-bottom">
              <option value="#">Côte d'Ivoire</option>
              <option value="#">Togo</option>
              <option value="#">Gabon</option>
              <option value="#">Congo</option>
              <option value="#">Burkina Faso</option>
              <option value="#">RDC</option>
              <option value="#">Rwanda</option>
           
            </select>
          </div>
          <div class="custom-select lang">
            <select class="lang select-box select-box-light select-box-bottom">
              <option value="#">fr</option>
            </select>
          </div>
        </div>
        <ul>
          <li>
            <a class="nav-link nav-link-green" href="#" target="_self" title="Canalbox fiber">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32.33" height="35.629" viewBox="0 0 32.33 35.629">
                  <path id="picto_offres" data-name="picto offres" d="M-294.691,399.532l-11.875,7.714-9.283-14.29,4.09-2.656-.439-2.339-6.7,4.349,11.68,17.981,17.982-11.68-.061-.093Zm8.128-3.76-3.73-21.11-21.11,3.729,3.729,21.11Zm-5.514-18.561,2.964,16.777-16.777,2.964-2.964-16.777Z" transform="translate(318.893 -374.662)" fill="#1dbd80"></path>
                </svg>
              </span>
              <span>Oracle fiber</span>
            </a>
          </li>
          <li>
            <a class="nav-link nav-link-yellow" href="#" target="_self" title="Why choose CANALBOX ?">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="25.733" height="25.164" viewBox="0 0 25.733 25.164">
                  <path id="picto-avantages" d="M-198.519,346.319l-22,4,.394,2.164,22-4Zm3.34,19-22,4,.393,2.164,22-4Zm-1-6.181-22,4,.393,2.164,22-4Zm-.925-6.181-22,4,.393,2.164,22-4Z" transform="translate(220.519 -346.319)" fill="#ecca2d"></path>
                </svg>
              </span>
              <span>Why choose ORACLE ?</span>
            </a>
          </li>
          <li>
            <a class="nav-link nav-link-pink" href="#" target="_self" title="Check my coverage">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="28.482" height="32.312" viewBox="0 0 28.482 32.312">
                  <path id="picto_eligibilité" data-name="picto eligibilité" d="M-132.893,372.194l-1.768,1.768,6.341,6.34,16.492-16.492-1.767-1.768-14.725,14.725Zm16.427-.374-2.56,2.56c-1,4.906-7.684,13.36-9.314,15.362-.789-.97-3.075-3.835-5.2-7.047-2.832-4.277-4.268-7.448-4.268-9.425a9.48,9.48,0,0,1,9.47-9.47,9.38,9.38,0,0,1,6.88,2.982l.02.021,1.767-1.766,0,0a11.861,11.861,0,0,0-8.665-3.734,11.983,11.983,0,0,0-11.97,11.97c0,6.3,10.571,18.71,11.021,19.236l.949,1.106.949-1.106c.45-.525,11.022-12.927,11.022-19.236a11.814,11.814,0,0,0-.1-1.444Z" transform="translate(140.31 -361.3)" fill="#fd7fc7"></path>
                </svg>
              </span>
              <span>Check my coverage</span>
            </a>
          </li>
          <li>
            <a class="nav-link nav-link-corail" href="#" target="_blank" title="Renew My Subscription">
              <span>
                <svg version="1.1" id="picto_reabo" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 41" style="enable-background:new 0 0 44 41;" space="preserve">
                  <path id="picto-renouveller-abonnement" class="st0" d="M42.6,8.1L31.5,6.1l-1.8,10.5l3,0.5l1.1-6.1c5.2,7.2,3.7,17.2-3.5,22.5 C23,38.8,13,37.2,7.7,30c-5.2-7.2-3.7-17.2,3.5-22.5c2.8-2.1,6.3-3.2,9.8-3.1v-3C10.5,1.3,1.8,9.7,1.7,20.2 C1.6,30.7,10,39.4,20.5,39.5c10.5,0.1,19.2-8.3,19.3-18.8c0.1-3.8-1-7.5-3.1-10.7l5.4,0.9L42.6,8.1z"></path>
                </svg>
              </span>
              <span>Renew My Subscription</span>
            </a>
          </li>
        </ul>
        <ul class="nav-second">
          <li>
            <a class="nav-link" href="#" target="_self" title="Frequently asked questions">
              <span class="sc-jJMGnK jmwCDk">
                <svg xmlns="http://www.w3.org/2000/svg" width="10.948" height="20.328" viewBox="0 0 10.948 20.328">
                  <path id="picto_FAQ" data-name="picto FAQ" d="M-293.259,394.562h-2.016v-2.324a2.809,2.809,0,0,1,.35-1.386,6.121,6.121,0,0,1,.854-1.176,12.983,12.983,0,0,1,1.092-1.05,9.8,9.8,0,0,0,1.078-1.078,6.488,6.488,0,0,0,.826-1.218,3.161,3.161,0,0,0,.336-1.484,3.122,3.122,0,0,0-.91-2.324,3.227,3.227,0,0,0-2.366-.9,3.413,3.413,0,0,0-2.366.84,3.784,3.784,0,0,0-1.19,2.212l-2.1-.252a5.707,5.707,0,0,1,.658-1.96,5.1,5.1,0,0,1,1.232-1.47,5.212,5.212,0,0,1,1.694-.91,6.58,6.58,0,0,1,2.044-.308,6.684,6.684,0,0,1,2.1.322,4.905,4.905,0,0,1,1.694.938,4.262,4.262,0,0,1,1.12,1.54,5.166,5.166,0,0,1,.406,2.1,5.2,5.2,0,0,1-.336,1.988,5.384,5.384,0,0,1-.84,1.414,7.935,7.935,0,0,1-1.092,1.078,10.4,10.4,0,0,0-1.092,1.022,5.031,5.031,0,0,0-.84,1.246,3.926,3.926,0,0,0-.336,1.708Zm.672,4.032a1.523,1.523,0,0,1-.42,1.05,1.407,1.407,0,0,1-1.092.462,1.407,1.407,0,0,1-1.092-.462,1.518,1.518,0,0,1-.42-1.05,1.518,1.518,0,0,1,.42-1.05,1.407,1.407,0,0,1,1.092-.462,1.407,1.407,0,0,1,1.092.462A1.523,1.523,0,0,1-292.587,398.594Z" transform="translate(299.671 -379.778)" fill="#fff"></path>
                </svg>
              </span>
              <span>Frequently asked questions</span>
            </a>
          </li>
          <li>
            <a class="nav-link" href="#" target="_self" title="Contact">
              <span class="sc-jJMGnK jmwCDk">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.053" height="28.042" viewBox="0 0 28.053 28.042">
                  <path id="picto_contact" data-name="picto contact" d="M-339.313,383.543a14.038,14.038,0,0,0-1.877-7.007,14.039,14.039,0,0,0-19.155-5.137,13.931,13.931,0,0,0-6.535,8.514,13.924,13.924,0,0,0,1.209,10.3l-.995,6.8,6.582-1.174a14.045,14.045,0,0,0,6.745,1.73h0a13.939,13.939,0,0,0,9.915-4.106,13.935,13.935,0,0,0,4.109-9.917Zm-5.664,8.361a11.744,11.744,0,0,1-8.359,3.462h0a11.84,11.84,0,0,1-5.99-1.631l-.351-.206-4.366.779.661-4.522-.191-.331a11.744,11.744,0,0,1-1.179-8.972,11.743,11.743,0,0,1,5.51-7.178,11.837,11.837,0,0,1,16.149,4.331,11.845,11.845,0,0,1,1.584,5.907A11.748,11.748,0,0,1-344.977,391.9Zm-15.374-7.216h2.29V382.4h-2.29Zm5.871,0h2.29V382.4h-2.29Zm5.871,0h2.29V382.4h-2.29Z" transform="translate(367.365 -369.524)" fill="#fff"></path>
                </svg>
              </span>
              <span>Contact</span>
            </a>
          </li>
        </ul>
        <div id="nav-social">
          <div id="nav-social-container">
            <a href="#" target="_blank">
              <img src="fonts/Instagram-black.svg" alt="Instagram Black">
            </a>
            <a href="#" target="_blank">
              <img src="fonts/twitter-black.svg" alt="Twitter Black">
            </a>
            <a href="#" target="_blank">
              <img src="fonts/facebook-black.svg" alt="Facebook Black">
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>



<!-- Main content  -->
<div class="main">
  <!-- Home promotion view  -->
  <section id="promotion">
    <img src="#" alt="Canalbox Rwanda speed upgrade">
    <a class="circle-button" href="#" target="_self" title="Check my coverage">
      <svg xmlns="http://www.w3.org/2000/svg" width="28.482" height="32.312" viewBox="0 0 28.482 32.312">
        <path id="picto_eligibilité" data-name="picto eligibilité" d="M-132.893,372.194l-1.768,1.768,6.341,6.34,16.492-16.492-1.767-1.768-14.725,14.725Zm16.427-.374-2.56,2.56c-1,4.906-7.684,13.36-9.314,15.362-.789-.97-3.075-3.835-5.2-7.047-2.832-4.277-4.268-7.448-4.268-9.425a9.48,9.48,0,0,1,9.47-9.47,9.38,9.38,0,0,1,6.88,2.982l.02.021,1.767-1.766,0,0a11.861,11.861,0,0,0-8.665-3.734,11.983,11.983,0,0,0-11.97,11.97c0,6.3,10.571,18.71,11.021,19.236l.949,1.106.949-1.106c.45-.525,11.022-12.927,11.022-19.236a11.814,11.814,0,0,0-.1-1.444Z" transform="translate(140.31 -361.3)" fill="#ffffff"></path>
      </svg>
      <span>Check my coverage</span>
    </a>
    <button class="button scroll arrow-left link">Scroll</button>


  </section>
  <!-- Offers view  -->
  <section id="offers">
    <div class="offer green">
      <div class="offer-view">
        <div class="offer-view-card">
          <div class="offer-view-card-content">
            <h3>
              <span>Offer</span>
              <span>Start</span>
            </h3>
            <p class="offer-view-card-content-text">Enter the world of fiber <br> Unlimited 50 Mbps </p>
            <div class="offer-view-card-content-body">
              <div class="offer-view-card-content-body-text">
                <p>At </p>
              </div>
              <div class="offer-view-card-content-body-price">
                <span>25,000</span>
                <div>
                  <span>RWF</span>
                  <span>/month</span>
                </div>
              </div>
            </div>
            <div class="offer-view-card-content-body-button">
              <div>
                <button>
                  <span class="plus">+</span>
                  <span class="less">-</span>
                </button>
              </div>
            </div>
          </div>
          <div class="offer-view-card-background"></div>
        </div>
        <div class="offer-view-list">
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>UP TO 15 DEVICES CONNECTED SIMULTANEOUSLY</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>WEB BROWSING, CHAT, SOCIAL NETWORKING AND VIDEO CALLING</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>ULTRA-FAST FILE UPLOAD AND DOWNLOAD</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>COMPATIBLE WITH VIDEO SURVEILLANCE AND CONNECTED OBJECTS</p>
          </div>
        </div>
      </div>
    </div>
    <div class="offer purple">
      <div class="offer-view">
        <div class="offer-view-card">
          <div class="offer-view-card-content">
            <h3>
              <span>Offer</span>
              <span>Premium</span>
            </h3>
            <p class="offer-view-card-content-text">Feel the power of fiber <br> Unlimited 200 Mbps </p>
            <div class="offer-view-card-content-body">
              <div class="offer-view-card-content-body-text">
                <p>At</p>
              </div>
              <div class="offer-view-card-content-body-price">
                <span>40,000</span>
                <div>
                  <span>RWF</span>
                  <span>/month</span>
                </div>
              </div>
            </div>
            <div class="offer-view-card-content-body-button">
              <div>
                <button>
                  <span class="plus">+</span>
                  <span class="less">-</span>
                </button>
              </div>
            </div>
          </div>
          <div class="offer-view-card-background"></div>
        </div>
        <div class="offer-view-list">
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>SIMULTANEOUS CONNECTION OF ALL HOUSEHOLD DEVICES</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>4K COMPATIBLE ULTRA HIGH DEFINITION STREAMING ON MULTIPLE SCREENS SIMULTANEOUSLY</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>IMMEDIATE UPLOAD AND DOWNLOAD OF LARGE FILES</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>OPTIMAL EXPERIENCE FOR ONLINE GAMING AND VIDEO CONFERENCING</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>MORE SPEED THAN YOU NEED FOR ALL YOUR OTHER USES</p>
          </div>
          <div class="offer-view-list-content">
            <img src="fonts/dash.svg">
            <p>*WIFI WITH THE NEW GENERATION BOX 5 GHZ</p>
          </div>
        </div>
      </div>
    </div>
    <div id="internet-box" class="offer">
      <div class="internet-box_content">
        <div id="internet-box-container-content">
          <span class="internet-box_more">+</span>
          <div class="internet-box_overflow">
            <div id="internet-box-container-content-title">
              <h3>The fiber router</h3>
            </div>
            <div id="internet-box-container-content-image">
              <img src="images/MicrosoftTeams-image.png" alt="Microsoftteams Image">
            </div>
            <div class="internet-box_mentions">The router <br> and the installation <br> at 10 000 RWF </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- Blocks fade view  -->
  <section class="fade">
    <div class="fade-body">
      <h2>Fiber in a flash</h2>
      <div id="fade-body-fibre" class="fade-body-block visible">
        <div class="fade-body-block-content sticky-content">
          <div id="fade-block-fiable" class="fade-body-block-content-start">
            <span id="fade-block-fiable-bands-1" class="bands"></span>
            <span id="fade-block-fiable-circle"></span>
            <span id="fade-block-fiable-bands-2" class="bands"></span>
          </div>
          <div class="fade-body-block-content-end">
            <h3>Steady </h3>
            <p>My internet connection is stable with unlimited access, and no slowdowns or interuptions. </p>
          </div>
        </div>
      </div>
      <div id="fade-body-fluide" class="fade-body-block hidden">
        <div class="fade-body-block-content sticky-content">
          <div id="fade-block-fluide" class="fade-body-block-content-start">
            <div>
              <img id="fade-block-fluide-band" src="fonts/band-fluide.svg">
              <img id="fade-block-fluide-block" src="fonts/block-fluide.svg">
            </div>
          </div>
          <div class="fade-body-block-content-end">
            <h3>Ready </h3>
            <p>I make the most of a free home installation and high quality customer support.</p>
          </div>
        </div>
      </div>
      <div id="fade-body-fun" class="fade-body-block hidden">
        <div class="fade-body-block-content sticky-content">
          <div id="fade-block-fun" class="fade-body-block-content-start">
            <img id="fade-block-fun-circles" src="fonts/red-circles.svg">
            <img id="fade-block-fun-block" src="fonts/block-fun.svg">
          </div>
          <div class="fade-body-block-content-end">
            <h3>Good to go </h3>
            <p>With ultrafast fibre internet, I take advantage of the incredible potential of the internet for all my uses at the same time!</p>
          </div>
        </div>
        <div class="fade-body-block-cta">
          <a class="button" href="#" target="_self" title="Why choose CANALBOX?">Why choose CANALBOX?</a>
        </div>
      </div>
    </div>
    <div id="fade-blocks">
      <div id="block-1" class="fade-block"></div>
      <div id="block-2" class="fade-block"></div>
      <div id="block-3" class="fade-block"></div>
    </div>
  </section>
  <!-- CTA Gravity view -->
  <section id="scene-cta">
    <div id="scene-cta-sticky-block">
      <h2>Join the Fiber nation! </h2>
      <div id="scene-cta-bands-left-1" class="scene-cta-bands-left"></div>
      <div id="scene-cta-bands-right-1" class="scene-cta-bands-right"></div>
      <a id="scene-cta-circle-1" href="#" target="_self" title="Check my coverage" class="circle-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="28.482" height="32.312" viewBox="0 0 28.482 32.312">
          <path id="picto_eligibilité" data-name="picto eligibilité" d="M-132.893,372.194l-1.768,1.768,6.341,6.34,16.492-16.492-1.767-1.768-14.725,14.725Zm16.427-.374-2.56,2.56c-1,4.906-7.684,13.36-9.314,15.362-.789-.97-3.075-3.835-5.2-7.047-2.832-4.277-4.268-7.448-4.268-9.425a9.48,9.48,0,0,1,9.47-9.47,9.38,9.38,0,0,1,6.88,2.982l.02.021,1.767-1.766,0,0a11.861,11.861,0,0,0-8.665-3.734,11.983,11.983,0,0,0-11.97,11.97c0,6.3,10.571,18.71,11.021,19.236l.949,1.106.949-1.106c.45-.525,11.022-12.927,11.022-19.236a11.814,11.814,0,0,0-.1-1.444Z" transform="translate(140.31 -361.3)" fill="#ffffff"></path>
        </svg>
        <span>Check my coverage</span>
      </a>
      <div id="scene-cta-absolute-block">
        <h2>Join the Fiber nation! </h2>
        <div id="scene-cta-bands-left-2" class="scene-cta-bands-left"></div>
        <div id="scene-cta-bands-right-2" class="scene-cta-bands-right"></div>
        <a id="scene-cta-circle-2" class="circle-button" href="#" target="_self" title="Check my coverage">
          <svg xmlns="http://www.w3.org/2000/svg" width="28.482" height="32.312" viewBox="0 0 28.482 32.312">
            <path id="picto_eligibilité" data-name="picto eligibilité" d="M-132.893,372.194l-1.768,1.768,6.341,6.34,16.492-16.492-1.767-1.768-14.725,14.725Zm16.427-.374-2.56,2.56c-1,4.906-7.684,13.36-9.314,15.362-.789-.97-3.075-3.835-5.2-7.047-2.832-4.277-4.268-7.448-4.268-9.425a9.48,9.48,0,0,1,9.47-9.47,9.38,9.38,0,0,1,6.88,2.982l.02.021,1.767-1.766,0,0a11.861,11.861,0,0,0-8.665-3.734,11.983,11.983,0,0,0-11.97,11.97c0,6.3,10.571,18.71,11.021,19.236l.949,1.106.949-1.106c.45-.525,11.022-12.927,11.022-19.236a11.814,11.814,0,0,0-.1-1.444Z" transform="translate(140.31 -361.3)" fill="#ffffff"></path>
          </svg>
          <span>Check my coverage</span>
        </a>
      </div>
    </div>
    <div id="scene-cta-block-pink"></div>
    <div id="scene-cta-block-black"></div>
  </section>
</div>

@endsection

        
       


        <!-- Main content  -->
        <div class="main">
          <!-- Home promotion view  -->
          <section id="promotion">
            <img src="images/or.png" alt="#">
            <a class="circle-button" href="#" target="_self" title="Check my coverage">
              <svg xmlns="http://www.w3.org/2000/svg" width="28.482" height="32.312" viewBox="0 0 28.482 32.312">
                <path id="picto_eligibilité" data-name="picto eligibilité" d="M-132.893,372.194l-1.768,1.768,6.341,6.34,16.492-16.492-1.767-1.768-14.725,14.725Zm16.427-.374-2.56,2.56c-1,4.906-7.684,13.36-9.314,15.362-.789-.97-3.075-3.835-5.2-7.047-2.832-4.277-4.268-7.448-4.268-9.425a9.48,9.48,0,0,1,9.47-9.47,9.38,9.38,0,0,1,6.88,2.982l.02.021,1.767-1.766,0,0a11.861,11.861,0,0,0-8.665-3.734,11.983,11.983,0,0,0-11.97,11.97c0,6.3,10.571,18.71,11.021,19.236l.949,1.106.949-1.106c.45-.525,11.022-12.927,11.022-19.236a11.814,11.814,0,0,0-.1-1.444Z" transform="translate(140.31 -361.3)" fill="#ffffff"></path>
              </svg>
              <span>Check my coverage</span>
            </a>
            <button class="button scroll arrow-left link">Scroll</button>
          </section>
          <!-- Offers view  -->
          
          <section id="offers">
            <div class="offer green">
              <div class="offer-view">
                <div class="offer-view-card">
                  <div class="offer-view-card-content">
                    <h3>
                      <span>Agro</span>
                      <span>Alimentaire</span>
                    </h3>
                    <p class="offer-view-card-content-text">Enter the world of fiber <br> Unlimited 50 Mbps </p>
                    <div id="internet-box-container-content-image">
                      <img src="images/agro.png" alt="Microsoftteams Image">
                    </div>
                    <div class="offer-view-card-content-body">
                      {{-- <div class="offer-view-card-content-body-text">
                        <p>At </p>
                      </div> --}}
                      {{-- <div class="offer-view-card-content-body-price">
                        <span>25,000</span>
                        <div>
                          <span>RWF</span>
                          <span>/month</span>
                        </div>
                      </div> --}}
                    </div>
                    <div class="offer-view-card-content-body-button">
                      <div>
                        <button>
                          <span class="plus">+</span>
                          <span class="less">-</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="offer-view-card-background"></div>
                </div>
                <div class="offer-view-list">
                  <div class="offer-view-list-content">
                    <img src="fonts/dash.svg">
                    <p>UP TO 15 DEVICES CONNECTED SIMULTANEOUSLY</p>
                  </div>
                
                </div>
              </div>
            </div>


            <div class="offer purple">
              <div class="offer-view">
                <div class="offer-view-card">
                  <div class="offer-view-card-content">
                    <h3>
                      <span>Produit</span>
                      <span>Pharmacetique</span>
                    </h3>
                    <p class="offer-view-card-content-text">Feel the power of fiber <br> Unlimited 200 Mbps </p>
                    <div id="internet-box-container-content-image">
                      <img src="images/phar.jpg" alt="Microsoftteams Image">
                    </div>
                    <div class="offer-view-card-content-body">
                      {{-- <div class="offer-view-card-content-body-text">
                        <p>At</p>
                      </div> --}}
                      {{-- <div class="offer-view-card-content-body-price">
                        <span>40,000</span>
                        <div>
                          <span>RWF</span>
                          <span>/month</span>
                        </div>
                      </div> --}}
                    </div>
                    <div class="offer-view-card-content-body-button">
                      <div>
                        <button>
                          <span class="plus">+</span>
                          <span class="less">-</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="offer-view-card-background"></div>
                </div>
                <div class="offer-view-list">
                  <div class="offer-view-list-content">
                    <img src="fonts/dash.svg">
                    <p>SIMULTANEOUS CONNECTION OF ALL HOUSEHOLD DEVICES</p>
                  </div>
                 
                </div>
              </div>
            </div>

            <div id="internet-box" class="offer">
              <div class="internet-box_content">
                <div id="internet-box-container-content">
                  <span class="internet-box_more">+</span>
                  <div class="internet-box_overflow">
                    <div id="internet-box-container-content-title">
                      <h3>Quincaillie</h3>
                    </div>
                    <div id="internet-box-container-content-image">
                      <img src="images/quin.png" alt="Microsoftteams Image">
                    </div>
                    <div class="internet-box_mentions">The router <br> and the installation <br> at 10 000 RWF </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
<br>
          <section id="offers">
            <div class="offer green">
              <div class="offer-view">
                <div class="offer-view-card">
                  <div class="offer-view-card-content">
                    <h3>
                      <span>La</span>
                      <span>Telecomunication</span>
                    </h3>
                    <p class="offer-view-card-content-text">Enter the world of fiber <br> Unlimited 50 Mbps </p>
                    <div id="internet-box-container-content-image">
                      <img src="images/tel.png" alt="Microsoftteams Image">
                    </div>
                    <div class="offer-view-card-content-body">
                      {{-- <div class="offer-view-card-content-body-text">
                        <p>At </p>
                      </div> --}}
                      {{-- <div class="offer-view-card-content-body-price">
                        <span>25,000</span>
                        <div>
                          <span>RWF</span>
                          <span>/month</span>
                        </div>
                      </div> --}}
                    </div>
                    <div class="offer-view-card-content-body-button">
                      <div>
                        <button>
                          <span class="plus">+</span>
                          <span class="less">-</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="offer-view-card-background"></div>
                </div>
                <div class="offer-view-list">
                  <div class="offer-view-list-content">
                    <img src="fonts/dash.svg">
                    <p>UP TO 15 DEVICES CONNECTED SIMULTANEOUSLY</p>
                  </div>
                
                </div>
              </div>
            </div>


            <div class="offer purple">
              <div class="offer-view">
                <div class="offer-view-card">
                  <div class="offer-view-card-content">
                    <h3>
                      <span>vente</span>
                      <span>de Boissons</span>
                    </h3>
                    <p class="offer-view-card-content-text">Feel the power of fiber <br> Unlimited 200 Mbps </p>
                    <div id="internet-box-container-content-image">
                      <img src="images/bois.png" alt="Microsoftteams Image">
                    </div>
                    <div class="offer-view-card-content-body">
                      {{-- <div class="offer-view-card-content-body-text">
                        <p>At</p>
                      </div>
                      <div class="offer-view-card-content-body-price">
                        <span>40,000</span>
                        <div>
                          <span>RWF</span>
                          <span>/month</span>
                        </div>
                      </div> --}}
                    </div>
                    <div class="offer-view-card-content-body-button">
                      <div>
                        <button>
                          <span class="plus">+</span>
                          <span class="less">-</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="offer-view-card-background"></div>
                </div>
                <div class="offer-view-list">
                  <div class="offer-view-list-content">
                    <img src="fonts/dash.svg">
                    <p>SIMULTANEOUS CONNECTION OF ALL HOUSEHOLD DEVICES</p>
                  </div>              
                </div>
              </div>
            </div>

          </section>
          <br>
          <section id="offers">
            <div class="offer green">
              <div class="offer-view">
                <div class="offer-view-card">
                  <div class="offer-view-card-content">
                    <h3>
                      <span>L'</span>
                      <span>Habillement</span>
                    </h3>
                    <p class="offer-view-card-content-text">Enter the world of fiber <br> Unlimited 50 Mbps </p>
                    <div id="internet-box-container-content-image">
                      <img src="images/hab.png" alt="Microsoftteams Image">
                    </div>
                    <div class="offer-view-card-content-body">
                      {{-- <div class="offer-view-card-content-body-text">
                        <p>At </p>
                      </div>
                      <div class="offer-view-card-content-body-price">
                        <span>25,000</span>
                        <div>
                          <span>RWF</span>
                          <span>/month</span>
                        </div>
                      </div> --}}
                    </div>
                    <div class="offer-view-card-content-body-button">
                      <div>
                        <button>
                          <span class="plus">+</span>
                          <span class="less">-</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="offer-view-card-background"></div>
                </div>
                <div class="offer-view-list">
                  <div class="offer-view-list-content">
                    <img src="fonts/dash.svg">
                    <p>UP TO 15 DEVICES CONNECTED SIMULTANEOUSLY</p>
                  </div>
               
                </div>
              </div>
            </div>


            <div class="offer purple">
              <div class="offer-view">
                <div class="offer-view-card">
                  <div class="offer-view-card-content">
                    <h3>
                      <span>L'</span>
                      <span>Informatique</span>
                    </h3>
                    <p class="offer-view-card-content-text">Feel the power of fiber <br> Unlimited 200 Mbps </p>
                    <div id="internet-box-container-content-image">
                      <img src="images/info.png" alt="Microsoftteams Image">
                    </div>
                    <div class="offer-view-card-content-body">
                      {{-- <div class="offer-view-card-content-body-text">
                        <p>At</p>
                      </div>
                      <div class="offer-view-card-content-body-price">
                        <span>40,000</span>
                        <div>
                          <span>RWF</span>
                          <span>/month</span>
                        </div>
                      </div> --}}
                    </div>
                    <div class="offer-view-card-content-body-button">
                      <div>
                        <button>
                          <span class="plus">+</span>
                          <span class="less">-</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="offer-view-card-background"></div>
                </div>
                <div class="offer-view-list">
                  <div class="offer-view-list-content">
                    <img src="fonts/dash.svg">
                    <p>SIMULTANEOUS CONNECTION OF ALL HOUSEHOLD DEVICES</p>
                  </div>
              
                </div>
              </div>
            </div>

          </section>
<br>


          <!-- Blocks fade view  -->
          <section class="fade">
            <div class="fade-body">
              <h2>Oracle site</h2>
              <div id="fade-body-fibre" class="fade-body-block visible">
                <div class="fade-body-block-content sticky-content">
                  <div id="fade-block-fiable" class="fade-body-block-content-start">
                    <span id="fade-block-fiable-bands-1" class="bands"></span>
                    <span id="fade-block-fiable-circle"></span>
                    <span id="fade-block-fiable-bands-2" class="bands"></span>
                  </div>
                  <div class="fade-body-block-content-end">
                    <h3>Agro-Alimantaire</h3>
                    <p>La societe a pour objet,tant pour elle-meme que pour compte de tier de faire toutes operations et fourniture
                      agro-Alimentaires d'etudes de project de fourniture .
                     </p>
                  </div>
                </div>
              </div>
              <div id="fade-body-fluide" class="fade-body-block hidden">
                <div class="fade-body-block-content sticky-content">
                  <div id="fade-block-fluide" class="fade-body-block-content-start">
                    <div>
                      <img id="fade-block-fun-circles" src="images/sh.png">
                      <img id="fade-block-fluide-block" src="fonts/block-fluide.svg">
                    </div>
                  </div>
                  <div class="fade-body-block-content-end">

                    
                    <h3>Habiellement </h3>
                    <p> A cet effet, la societe pourra, tant en Republique Democratique  du congo qu'a l'etranger, passer tout acte, accord
                      et contrat.</p>
                  </div>
                </div>
              </div>
              <div id="fade-body-fun" class="fade-body-block hidden">
                <div class="fade-body-block-content sticky-content">
                  <div id="fade-block-fun" class="fade-body-block-content-start">
                    <img id="fade-block-fun-circles" src="images/bout.png">     
                    <img id="fade-block-fun-block" src="fonts/block-fun.svg">
                  </div>
                  <div class="fade-body-block-content-end">
                    <h3>Enformatique </h3>
                    <p>Lesiege Sociale et Administration est astabli a lubumbashi Av du marche coin du marche!</p>
                  </div>
                </div>
                <div class="fade-body-block-cta">
                  <a class="button" href="#" target="_self" title="Why choose CANALBOX?">pour Quoi vous choisissez ORACLE?</a>
                </div>
              </div>
            </div>
            <div id="fade-blocks">
              <div id="block-1" class="fade-block"></div>
              <div id="block-2" class="fade-block"></div>
              <div id="block-3" class="fade-block"></div>
            </div>
          </section>

          <!-- CTA Gravity view -->
          <section id="scene-cta">
            <div id="scene-cta-sticky-block">
              <h2>Join Oracle Site! </h2>
              <div id="scene-cta-bands-left-1" class="scene-cta-bands-left"></div>
              <div id="scene-cta-bands-right-1" class="scene-cta-bands-right"></div>
              <a id="scene-cta-circle-1" href="#" target="_self" title="Check my coverage" class="circle-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.482" height="32.312" viewBox="0 0 28.482 32.312">
                  <path id="picto_eligibilité" data-name="picto eligibilité" d="M-132.893,372.194l-1.768,1.768,6.341,6.34,16.492-16.492-1.767-1.768-14.725,14.725Zm16.427-.374-2.56,2.56c-1,4.906-7.684,13.36-9.314,15.362-.789-.97-3.075-3.835-5.2-7.047-2.832-4.277-4.268-7.448-4.268-9.425a9.48,9.48,0,0,1,9.47-9.47,9.38,9.38,0,0,1,6.88,2.982l.02.021,1.767-1.766,0,0a11.861,11.861,0,0,0-8.665-3.734,11.983,11.983,0,0,0-11.97,11.97c0,6.3,10.571,18.71,11.021,19.236l.949,1.106.949-1.106c.45-.525,11.022-12.927,11.022-19.236a11.814,11.814,0,0,0-.1-1.444Z" transform="translate(140.31 -361.3)" fill="#ffffff"></path>
                </svg>
                <span>Check my coverage</span>
              </a>
              <div id="scene-cta-absolute-block">
                <h2>Oracle website! </h2>
                <div id="scene-cta-bands-left-2" class="scene-cta-bands-left"></div>
                <div id="scene-cta-bands-right-2" class="scene-cta-bands-right"></div>
                <a id="scene-cta-circle-2" class="circle-button" href="#" target="_self" title="Check my coverage">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28.482" height="32.312" viewBox="0 0 28.482 32.312">
                    <path id="picto_eligibilité" data-name="picto eligibilité" d="M-132.893,372.194l-1.768,1.768,6.341,6.34,16.492-16.492-1.767-1.768-14.725,14.725Zm16.427-.374-2.56,2.56c-1,4.906-7.684,13.36-9.314,15.362-.789-.97-3.075-3.835-5.2-7.047-2.832-4.277-4.268-7.448-4.268-9.425a9.48,9.48,0,0,1,9.47-9.47,9.38,9.38,0,0,1,6.88,2.982l.02.021,1.767-1.766,0,0a11.861,11.861,0,0,0-8.665-3.734,11.983,11.983,0,0,0-11.97,11.97c0,6.3,10.571,18.71,11.021,19.236l.949,1.106.949-1.106c.45-.525,11.022-12.927,11.022-19.236a11.814,11.814,0,0,0-.1-1.444Z" transform="translate(140.31 -361.3)" fill="#ffffff"></path>
                  </svg>
                  <span>Check my coverage</span>
                </a>
              </div>
            </div>
            <div id="scene-cta-block-pink"></div>
            <div id="scene-cta-block-black"></div>
          </section>
        </div>



        <!-- Footer -->
        <footer>
          <div class="footer-figure">
            <figure>
              <a href="#">
                <img src="#" alt="ORACLE">
              </a>
            </figure>
            <div class="footer-social">
              <a href="#" target="_blank">
                <img src="fonts/icon-insta.svg" alt="Icon Insta">
              </a>
              <a href="#" target="_blank">
                <img src="fonts/icon-twitter.svg" alt="Icon Twitter">
              </a>
              <a href="#" target="_blank">
                <img src="fonts/icon-facebook.svg" alt="Icon Facebook">
              </a>
            </div>
          </div>
          <div class="footer-select">
            <div class="custom-select location">
              <select class="location select-box select-box-dark select-box-top">
                <option value="#">Côte d'Ivoire</option>
                <option value="#">Togo</option>
                <option value="#">Gabon</option>
                <option value="#">Congo</option>
                <option value="#">Burkina Faso</option>
                <option value="#">RDC</option>
                <option value="#">Rwanda</option>
              </select>
            </div>
            <div class="custom-select lang">
              <select class="lang select-box select-box-dark select-box-top">
                <option value="#">en</option>
              </select>
            </div>
          </div>
          <div class="footer-legal">
            <p>
              <a href="#" class="footer-link" target="_self" title="Legal notices">notice Legal</a> - © ORACLE 2023
            </p>
          </div>
          <div class="footer-social">
            <a href="#" target="_blank">
              <img src="fonts/icon-insta.svg" alt="Icon Insta">
            </a>
            <a href="#" target="_blank">
              <img src="fonts/icon-twitter.svg" alt="Icon Twitter">
            </a>
            <a href="#" target="_blank">
              <img src="fonts/icon-facebook.svg" alt="Icon Facebook">
            </a>
            
          </div>
        </footer>

      </div>
    </div>
    <script src="js/tarteaucitron.js"></script>

    <script>
      tarteaucitron.init({
        "privacyUrl": "https://www.canalbox.rw/mentions-legales/",
        /* Privacy policy url */
        "hashtag": "#tarteaucitron",
        /* Open the panel with this hashtag */
        "cookieName": "tartaucitron",
        /* Cookie name */
        "orientation": "bottom",
        /* Banner position (top - bottom) */
        "showAlertSmall": false,
        /* Show the small banner on bottom right */
        "cookieslist": true,
        /* Show the cookie list */
        "showIcon": false,
        "adblocker": false,
        /* Show a Warning if an adblocker is detected */
        "AcceptAllCta": true,
        /* Show the accept all button when highPrivacy on */
        "highPrivacy": true,
        /* Disable auto consent */
        "handleBrowserDNTRequest": false,
        /* If Do Not Track == 1, disallow all */
        "removeCredit": true,
        /* Remove credit link */
        "moreInfoLink": true,
        /* Show more info link */
        "useExternalCss": true,
        /* If false, the tarteaucitron.css file will be loaded */
        "mandatory": true
      });
      tarteaucitron.user.gajsUa = 'UA-211305715-12';
      tarteaucitron.user.gajsMore = function() {
        /* add here your optionnal _ga.push() */
      };
      (tarteaucitron.job = tarteaucitron.job || []).push('gajs');
      window.tarteaucitron = tarteaucitron;
    </script>

    <script type="text/javascript" id="rocket-browser-checker-js-after">
      "use strict";
      var _createClass = function() {
        function defineProperties(target, props) {
          for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
          }
        }
        return function(Constructor, protoProps, staticProps) {
          return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
        }
      }();

      function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
      }
      var RocketBrowserCompatibilityChecker = function() {
        function RocketBrowserCompatibilityChecker(options) {
          _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options
        }
        return _createClass(RocketBrowserCompatibilityChecker, [{
          key: "_checkPassiveOption",
          value: function(self) {
            try {
              var options = {
                get passive() {
                  return !(self.passiveSupported = !0)
                }
              };
              window.addEventListener("test", null, options), window.removeEventListener("test", null, options)
            } catch (err) {
              self.passiveSupported = !1
            }
          }
        }, {
          key: "initRequestIdleCallback",
          value: function() {
            !1 in window && (window.requestIdleCallback = function(cb) {
              var start = Date.now();
              return setTimeout(function() {
                cb({
                  didTimeout: !1,
                  timeRemaining: function() {
                    return Math.max(0, 50 - (Date.now() - start))
                  }
                })
              }, 1)
            }), !1 in window && (window.cancelIdleCallback = function(id) {
              return clearTimeout(id)
            })
          }
        }, {
          key: "isDataSaverModeOn",
          value: function() {
            return "connection" in navigator && !0 === navigator.connection.saveData
          }
        }, {
          key: "supportsLinkPrefetch",
          value: function() {
            var elem = document.createElement("link");
            return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
          }
        }, {
          key: "isSlowConnection",
          value: function() {
            return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
          }
        }]), RocketBrowserCompatibilityChecker
      }();
    </script>


    <script type="text/javascript" id="rocket-preload-links-js-extra">
      /* 
	<![CDATA[ */
      var RocketPreloadLinksConfig = {
        "excludeUris": "\/check-my-coverage\/|\/(.+\/)?feed\/?.+\/?|\/(?:.+\/)?embed\/|\/(([_0-9a-zA-Z-]+\/)?)hdf-manager\/?|\/(([_0-9a-zA-Z-]+\/)?)register\/?|\/(([_0-9a-zA-Z-]+\/)?)registration_disabled\/?|\/(([_0-9a-zA-Z-]+\/)?)postpass\/?|\/(([_0-9a-zA-Z-]+\/)?)passwordless_autologin\/?|\/(([_0-9a-zA-Z-]+\/)?)confirmaction\/?|\/(([_0-9a-zA-Z-]+\/)?)confirm_admin_email\/?|\/wp-admin\/|\/logout\/|\/hdf-manager",
        "usesTrailingSlash": "1",
        "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif",
        "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|php|pdf|html|htm",
        "siteUrl": "https:\/\/www.canalbox.rw",
        "onHoverDelay": "100",
        "rateThrottle": "3"
      };
      /* ]]> */
    </script>

    <script type="text/javascript" id="rocket-preload-links-js-after">
      (function() {
        "use strict";
        var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
          } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
          },
          e = function() {
            function i(e, t) {
              for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
              }
            }
            return function(e, t, n) {
              return t && i(e.prototype, t), n && i(e, n), e
            }
          }();

        function i(e, t) {
          if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        var t = function() {
          function n(e, t) {
            i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0
          }
          return e(n, [{
            key: "init",
            value: function() {
              !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = {
                excludeUris: RegExp(this.config.excludeUris, "i"),
                images: RegExp(".(" + this.config.imageExt + ")$", "i"),
                fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")
              }, this._initListeners(this))
            }
          }, {
            key: "_initListeners",
            value: function(e) {
              -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
            }
          }, {
            key: "listener",
            value: function(e) {
              var t = e.target.closest("a"),
                n = this._prepareUrl(t);
              if (null !== n) switch (e.type) {
                case "mousedown":
                case "touchstart":
                  this._addPrefetchLink(n);
                  break;
                case "mouseover":
                  this._earlyPrefetch(t, n, "mouseout")
              }
            }
          }, {
            key: "_earlyPrefetch",
            value: function(t, e, n) {
              var i = this,
                r = setTimeout(function() {
                  if (r = null, 0 === i.numOnHover) setTimeout(function() {
                    return i.numOnHover = 0
                  }, 1e3);
                  else if (i.numOnHover > i.config.rateThrottle) return;
                  i.numOnHover++, i._addPrefetchLink(e)
                }, this.config.onHoverDelay);
              t.addEventListener(n, function e() {
                t.removeEventListener(n, e, {
                  passive: !0
                }), null !== r && (clearTimeout(r), r = null)
              }, {
                passive: !0
              })
            }
          }, {
            key: "_addPrefetchLink",
            value: function(i) {
              return this.prefetched.add(i.href), new Promise(function(e, t) {
                var n = document.createElement("link");
                n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n)
              }).catch(function() {})
            }
          }, {
            key: "_prepareUrl",
            value: function(e) {
              if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null;
              var t = e.href.substring(0, this.config.siteUrl.length),
                n = this._getPathname(e.href, t),
                i = {
                  original: e.href,
                  protocol: e.protocol,
                  origin: t,
                  pathname: n,
                  href: t + n
                };
              return this._isLinkOk(i) ? i : null
            }
          }, {
            key: "_getPathname",
            value: function(e, t) {
              var n = t ? e.substring(this.config.siteUrl.length) : e;
              return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n
            }
          }, {
            key: "_shouldAddTrailingSlash",
            value: function(e) {
              return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e)
            }
          }, {
            key: "_isLinkOk",
            value: function(e) {
              return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
            }
          }], [{
            key: "run",
            value: function() {
              "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({
                capture: !0,
                passive: !0
              }), RocketPreloadLinksConfig).init()
            }
          }]), n
        }();
        t.run();
      }());
    </script>


    <script type="text/javascript" id="app-js-extra">
      /* 																																													<![CDATA[ */
      var api = {
        "url_eligibility": "https:\/\/www.canalbox.rw\/wp-json\/df-contact\/v1\/save\/"
      };
      /* ]]> */
    </script>
    <script src="js/app.js" id="app-js"></script>
    <script src="js/wp-embed.min.js" id="wp-embed-js"></script>
    <script type="text/javascript">
      (function() {
        var expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + 31536000 * 1000);
        document.cookie = "pll_language=en; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
      }());
    </script>

    <!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1671093870 -->
  </body>
</html>
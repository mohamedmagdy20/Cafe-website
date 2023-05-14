<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon Jun 07 2021 05:28:41 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="cafe-template.webflow.io" data-wf-page="59e98418f9cd070001c89d59"
  data-wf-site="59e98418f9cd070001c89d5a">
<!-- Mirrored from cafe-template.webflow.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 12:46:10 GMT -->

<head>
  <meta charset="utf-8" />
  <title>Café</title>
  <meta
    content="Carefully crafted Webflow theme for cafe and restaurants. This simple yet powerful CMS template comes a variety of menu pages, blog functionality, booking and contact forms and many other useful components."
    name="description" />
  <meta content="Café" property="og:title" />
  <meta
    content="Carefully crafted Webflow theme for cafe and restaurants. This simple yet powerful CMS template comes a variety of menu pages, blog functionality, booking and contact forms and many other useful components."
    property="og:description" />
  <meta content="Café" property="twitter:title" />
  <meta
    content="Carefully crafted Webflow theme for cafe and restaurants. This simple yet powerful CMS template comes a variety of menu pages, blog functionality, booking and contact forms and many other useful components."
    property="twitter:description" />
  <meta property="og:type" content="website" />
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
    <link rel="stylesheet" href="{{asset('website/59e98418f9cd070001c89d5a/css/cafe-template.webflow.810e3cf84.css')}}">
  <link href="https://fonts.googleapis.com/" rel="preconnect" />
  <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
  <script src="../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  {{-- <script src="{{asset('webfont')}}"></script> --}}
  <script
    type="text/javascript">WebFont.load({ google: { families: ["Oswald:200,300,400,500,600,700", "Great Vibes:400", "Karla:regular,700"] } });</script>
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="{{asset('favicon.ico')}}"
    rel="shortcut icon" type="image/x-icon" />
  
    <link rel="stylesheet" href="{{asset('website/59e98418f9cd070001c89d5a/59f9d1ea3b3286000183b8f1_webclip.png')}}">
</head>

<body class="body">
  <div class="preloader"><img
      src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59fa9b0478cc2d0001ff0cb3_preloader.svg" alt=""
      class="preloader-icon" /></div>

  <div class="page-wrapper">
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
      role="banner" class="nav-bar fixed-nav-bar w-nav">
      <div class="wrapper w-container"><a href="index.html" aria-current="page"
          class="logo fixed-nav-bar-logo w-nav-brand w--current">
          <div><span class="yellow-text">Delicious</span> CAFÉ</div>
        </a>
        <nav role="navigation" class="nav-menu fixed-nav-menu w-nav-menu">
          <a href="{{route('home')}}" aria-current="page" class="nav-link fixed-nav-link w-nav-link w--current">Home</a>
          <a href="blog" class="nav-link fixed-nav-link w-nav-link">Menu</a>
          {{-- <a href="about.html" class="nav-link fixed-nav-link w-nav-link">About</a>
          <a href="contact.html" class="nav-link fixed-nav-link w-nav-link">Contact</a>
          <a href="reservation.html" class="button small-button nav-bar-button w-button">Reservation</a> --}}
        </nav>
        <div class="menu-button fixed-menu-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    <header id="Hero" data-w-id="63599744-ef0f-295e-4edb-7b24d1973631" class="bg-section hero-section wf-section">
      <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="nav-bar w-nav">
        <div class="wrapper w-container"><a href="index.html" aria-current="page" class="logo w-nav-brand w--current">
            <div><span class="yellow-text">Delicious</span> CAFÉ</div>
          </a>
          <nav role="navigation" class="nav-menu w-nav-menu"><a href="{{route('home')}}" aria-current="page"
              class="nav-link w-nav-link w--current">Home</a>
            {{-- <div data-delay="0" data-hover="true" class="w-dropdown">
              <div class="nav-link w-dropdown-toggle">
                <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                <div>Menu</div>
              </div> --}}
              {{-- <nav class="dropdown w-dropdown-list"><a href="menu-grid.html" class="dropdown-link w-dropdown-link">Menu
                  Grid</a><a href="menu-small-grid.html" class="dropdown-link w-dropdown-link">Menu Small Grid</a><a
                  href="menu-list" class="dropdown-link w-dropdown-link">Menu List</a><a href="menu-classic"
                  class="dropdown-link w-dropdown-link">Menu Classic</a></nav> --}}
            {{-- </div> --}}
            <a href="{{route('menu')}}" class="nav-link w-nav-link">Menu</a>
            </nav>
          <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
      <div class="wrapper hero-bottom-wrapper w-container"><a href="#" class="hero-phone w-inline-block"><img
            src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f82c35aab684000124d7be_call-icon.svg"
            alt="" class="hero-phone-icon" />
          <div>8 (800) 316-06-42</div>
        </a><a href="#Scroll-Section" class="hero-scroll w-inline-block"><img
            src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f830332817100001d1ba91_arrow-down-icon.svg"
            alt="" /></a>
        <div class="social-icons hero-icons"><a href="https://twitter.com/" target="_blank"
            class="social-link hero-link w-inline-block"><img
              src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89db7_twitter-icon-white.svg"
              alt="" /></a><a href="https://facebook.com/" target="_blank"
            class="social-link hero-link w-inline-block"><img
              src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89dae_facebook-icon-white.svg"
              alt="" /></a><a href="https://instagram.com/" target="_blank"
            class="social-link hero-link w-inline-block"><img
              src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89daf_instagram-icon-white.svg"
              alt="" /></a></div>
      </div>
      <div data-delay="6000" data-animation="cross" class="hero-slider w-slider" data-autoplay="true" data-easing="ease"
        data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
        data-duration="2000" data-infinite="true">
        <div class="w-slider-mask">
          <div class="slide-1 w-slide">
            <div class="wrapper slide-wrapper w-container">
              <div class="slide-content">
                <div data-ix="fade-up-1" class="sub-header big">Welcome to</div>
                <h1>Delicious Café</h1>
                <div data-ix="fade-up-2" class="divider center"></div>
                <p data-ix="fade-up-3" class="paragraph-big hero-text">Fish is one of the most wholesome foods that man
                  can eat. In fact, people have been eating fish throughout human history.</p>
                  <a href="{{route('menu')}}"
                  data-ix="fade-up-4" class="button ghost-bg-button w-button">View Menus</a>
              </div>
            </div>
          </div>
          <div class="slide-2 w-slide">
            <div class="wrapper slide-wrapper w-container">
              <div class="slide-content">
                <div data-ix="fade-up-1" class="sub-header big">Explore</div>
                <h1 data-ix="fade-up-2">Tasty Menu Dishes</h1>
                <div data-ix="fade-up-2" class="divider center"></div>
                <p data-ix="fade-up-3" class="paragraph-big hero-text">Fish is one of the most wholesome foods that man
                  can eat. In fact, people have been eating fish throughout human history.</p><a
                  href="menu-small-grid.html" data-ix="fade-up-4" class="button w-button">View Menu Items</a>
              </div>
            </div>
          </div>
          <div class="slide-3 w-slide">
            <div class="wrapper slide-wrapper w-container">
              <div class="slide-content">
                <div data-ix="fade-up-1" class="sub-header big">Join to</div>
                <h1 data-ix="fade-up-2">Special Events</h1>
                <div data-ix="fade-up-2" class="divider center"></div>
                <p data-ix="fade-up-3" class="paragraph-big hero-text">Fish is one of the most wholesome foods that man
                  can eat. In fact, people have been eating fish throughout human history.</p><a href="{{route('menu')}}"
                  data-ix="fade-up-4" class="button w-button">View Menu</a>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-arrow arrow-left w-hidden-small w-hidden-tiny w-slider-arrow-left"><img
            src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89dad_arrow-scroll-left-icon.svg"
            alt="" /></div>
        <div class="slider-arrow arrow-right w-slider-arrow-right"><img
            src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89dac_arrow-scroll-right-icon.svg"
            alt="" /></div>
        <div class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-slider-nav w-round"></div>
      </div>
    </header>



    <div id="Scroll-Section" class="section wf-section">
      <div class="wrapper w-container">
        <div class="section-header-wrapper">
          <div data-w-id="a38902d4-32ae-e303-b281-40b558d474b5" style="opacity:1" class="sub-header">Discover</div>
          <h2 data-w-id="ce565286-eed9-2f81-ad34-efd62d10f73e" style="opacity:1">New Flavors</h2>
          <div data-w-id="074f91ac-a9dc-290c-0404-e09c9f11a70c" style="opacity:1" class="divider"></div>
        </div>
        <p data-w-id="0fc02ec2-4ac0-917f-5189-31a0e1b8cbf9" style="opacity:1" class="paragraph-big intro-text">Fish is
          one of the most wholesome foods that man can eat. In fact, people have been eating fish throughout human
          history. These days, many cooks yearn to add fish to their repertoire, but the whole process of cleaning and
          filleting fresh fish is a little scary to them. The process of cleaning and filleting fresh fish is <a
            href="blog" class="text-link">relatively simple</a> once the steps are understood.  To begin, you must clean
          your fresh fish properly in order to maintain it’s quality.</p>
      </div><a href="about.html" data-ix="fade-up-4" data-w-id="b1272952-955b-1e16-552f-44627bc6069d" style="opacity:1"
        class="button w-button">More About Us</a>
    </div>
    
    
    <div id="Features" class="section no-paddings wf-section"></div>
    <div class="section pattern-section wf-section">
      <div data-ix="fade-up-2" class="wrapper w-container">
        <div class="section-header-wrapper">
          <div data-w-id="fa10dbe6-7dc5-ea32-185f-bd632a3b9e64" style="opacity:1" class="sub-header">Menu</div>
          <h2 data-w-id="30fe2287-ece1-9e60-b65c-6b64491bfaf4" style="opacity:1">Special Dishes</h2>
          <div data-w-id="6b14b7b5-fea6-fa61-4412-ef4800fa74e3" style="opacity:1" class="divider"></div>
        </div>
        <div class="w-dyn-list">
          <div data-w-id="420f041f-d312-14fd-d00f-50956134476a" style="opacity:1" role="list"
            class="menu margin w-dyn-items">
            <div role="listitem" class="menu-grid-item w-dyn-item">
              <div class="menu-grid-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249.jpg')}}"
                  alt="" sizes="(max-width: 479px) 93vw, (max-width: 767px) 47vw, (max-width: 991px) 31vw, 27vw"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249.jpg 740w"
                  class="menu-grid-image" /><a href="menu-categories/drinks" class="badge menu-item-category">Drinks</a>
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Basil lemonade</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>5.85</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Basil Lemon Syrup, Cold Water, Ice Cubes</div>
                  <div class="menu-more w-clearfix">
                    <div class="menu-numbers">
                      <div>250</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>70</div>
                      <div>cal.</div>
                    </div><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>Vegan</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>V</div>
                    </a><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>Kosher</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>K</div>
                    </a><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>Spicy</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>S</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-grid-item w-dyn-item">
              <div class="menu-grid-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f917053b32860001831e83_mike-tinnion-365019.jpg')}}"
                  alt="" sizes="(max-width: 479px) 93vw, (max-width: 767px) 47vw, (max-width: 991px) 31vw, 27vw"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f917053b32860001831e83_mike-tinnion-365019-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f917053b32860001831e83_mike-tinnion-365019.jpg 740w"
                  class="menu-grid-image" /><a href="menu-categories/lunch" class="badge menu-item-category">Lunch</a>
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Roasted lamb</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>13.70</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Boneless Lamb Leg, Garlic, Onion, Spices, Rosemary</div>
                  <div class="menu-more w-clearfix">
                    <div class="menu-numbers">
                      <div>280</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>320</div>
                      <div>cal.</div>
                    </div><a href="#" class="badge menu-item-tooltip w-inline-block w-condition-invisible">
                      <div class="tooltip">
                        <div>Vegan</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>V</div>
                    </a><a href="#" class="badge menu-item-tooltip w-inline-block w-condition-invisible">
                      <div class="tooltip">
                        <div>Kosher</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>K</div>
                    </a><a href="#" class="badge menu-item-tooltip w-inline-block w-condition-invisible">
                      <div class="tooltip">
                        <div>Spicy</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>S</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-grid-item w-dyn-item">
              <div class="menu-grid-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f90ee9c9a5280001e49497_mariana-medvedeva-379625.jpg')}}"
                  alt="" class="menu-grid-image" /><a href="menu-categories/breakfast"
                  class="badge menu-item-category">Breakfast</a>
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Greek avocado toast</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>7.00</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Toasted Bread, Avocado, Feta Cheese, Tomato, Olives, Spices</div>
                  <div class="menu-more w-clearfix">
                    <div class="menu-numbers">
                      <div>180</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>228</div>
                      <div>cal.</div>
                    </div><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>Vegan</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>V</div>
                    </a><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>Kosher</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>K</div>
                    </a><a href="#" class="badge menu-item-tooltip w-inline-block w-condition-invisible">
                      <div class="tooltip">
                        <div>Spicy</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                      <div>S</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><a href="{{route('menu')}}" data-w-id="52acb8a8-53b0-f52f-df4d-3bf897a51de8" style="opacity:1"
        class="button w-button">View Full Menu</a>
    
    
    
      </div><a href="reservation.html" class="bg-section huge-button w-inline-block"><img
        src="{{asset('website/59e98418f9cd070001c89d5a/5a59998b6b273e0001a21e91_order-icon-white.pn')}}"
       width="64" style="opacity:1" data-w-id="e2025dc7-01b5-7c1a-59b8-5a9de0a8c330" alt="" />
      <h2 data-w-id="861b18a2-ab3a-43ab-aee3-e79082dca8c7" style="opacity:1">Reserve a Table</h2>
    </a>
    <div class="section pattern-section no-bottom-padding wf-section">
      <div class="wrapper w-container">
        <div class="side-card-feature">
          <div data-w-id="7c73ff80-8df2-7305-3d73-92b2f24be052" style="opacity:1" class="side-card-image _1"></div>
          <div data-ix="fade-left" data-w-id="ff252e3a-eb22-b78e-16eb-59bce7170bde" style="opacity:1" class="side-card">
            <div class="side-card-content"><img
                src="{{asset('website/59e98418f9cd070001c89d5a/59f5b840fccfea0001f7083e_interior-icon.png')}}            alt="" class="big-icon" />
              <h3 class="side-card-header">Beautiful Interior</h3>
              <div class="divider"></div>
              <p class="grey-text">Fish is one of the most wholesome foods that man can eat. In fact, people have been
                eating fish throughout human history. These days, many cooks yearn to add fish to their repertoire.</p>
            </div>
            <div class="frame"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="section pattern-section wf-section">
      <div class="wrapper w-container">
        <div class="side-card-feature reversed">
          <div data-ix="fade-right" data-w-id="0e0ee31f-de97-ce02-c2d0-31edad2e26a5" style="opacity:1"
            class="side-card reversed">
            <div class="side-card-content"><img
                src="{{asset('website/59e98418f9cd070001c89d5a/59f5b8409f4c3500019cc8e6_apple-icon.png')}}         alt="" class="big-icon" />
              <h3 class="side-card-header">Only Fresh Food</h3>
              <div class="divider"></div>
              <p class="grey-text">Fish is one of the most wholesome foods that man can eat. In fact, people have been
                eating fish throughout human history. These days, many cooks yearn to add fish to their repertoire.</p>
            </div>
            <div class="frame"></div>
          </div>
          <div data-w-id="751ccc8f-3f53-1ad5-f5cd-651091fa2856" style="opacity:1" class="side-card-image _2"></div>
        </div>
      </div>
    </div>
    <div class="section wf-section">
      <div data-ix="fade-up-2" class="wrapper w-container">
        <div class="section-header-wrapper">
          <div data-w-id="84884bdc-71d1-f2b0-c785-37dc493f2fa0" style="opacity:1" class="sub-header">More Dishes</div>
          <h2 data-w-id="851dcedc-a36a-3a51-f385-304120c475ad" style="opacity:1">From Our Menu</h2>
          <div data-w-id="f0a077b8-f5fc-bdf0-acb6-d643b3009d6a" style="opacity:1" class="divider"></div>
        </div>
        <div class="w-dyn-list">
          <div data-w-id="dfd90665-594f-e3db-31ee-2b754c05c457" style="opacity:1" role="list"
            class="menu-list margin w-dyn-items">
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f8fd1301b9500001e7cc10_eszter-biro-253762.jpg')}}"
                  alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f8fd1301b9500001e7cc10_eszter-biro-253762-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f8fd1301b9500001e7cc10_eszter-biro-253762.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Greek salad</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>8.00</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Iceberg Lettuce, Peppers, Tomato, Olives, Feta Cheese, Olive Oil</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>195</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>131</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div style="background-color:#f03e5a" class="badge menu-new-badge">New</div>
                  <div class="badge menu-item-badge">Vegan</div>
                  <div class="badge menu-item-badge w-condition-invisible">Kosher</div>
                  <div class="badge menu-item-badge w-condition-invisible">Spicy</div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f8fab2c9a5280001e482a0_alex-loup-397220.jpg')}}                 alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f8fab2c9a5280001e482a0_alex-loup-397220-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f8fab2c9a5280001e482a0_alex-loup-397220.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Bloody mary</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>8.99</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Smirnoff Vodka, Spicy Tomato Juice</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>100</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>110</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div class="badge menu-new-badge w-dyn-bind-empty"></div>
                  <div class="badge menu-item-badge">Vegan</div>
                  <div class="badge menu-item-badge">Kosher</div>
                  <div class="badge menu-item-badge w-condition-invisible">Spicy</div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f87b46930b860001a6f6bb_brooke-lark-200721.jpg')}}"
                  alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f87b46930b860001a6f6bb_brooke-lark-200721-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f87b46930b860001a6f6bb_brooke-lark-200721.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Fruit and cheese plate</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>8.79</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Fresh Fruits, Almond, Brie, Cheddar, Muenster Cheese, Crackers</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>185</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>197</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div style="background-color:#f03e5a" class="badge menu-new-badge">New</div>
                  <div class="badge menu-item-badge">Vegan</div>
                  <div class="badge menu-item-badge">Kosher</div>
                  <div class="badge menu-item-badge w-condition-invisible">Spicy</div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f917053b32860001831e83_mike-tinnion-365019.jpg')}}"
                  alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f917053b32860001831e83_mike-tinnion-365019-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f917053b32860001831e83_mike-tinnion-365019.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Roasted lamb</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>13.70</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Boneless Lamb Leg, Garlic, Onion, Spices, Rosemary</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>280</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>320</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div style="background-color:#dfa25f" class="badge menu-new-badge">Special</div>
                  <div class="badge menu-item-badge w-condition-invisible">Vegan</div>
                  <div class="badge menu-item-badge w-condition-invisible">Kosher</div>
                  <div class="badge menu-item-badge w-condition-invisible">Spicy</div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f87aa43b3286000182749a_brenda-godinez-228181.jpg')}}"
                  alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f87aa43b3286000182749a_brenda-godinez-228181-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f87aa43b3286000182749a_brenda-godinez-228181.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Banana split</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>9.50</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Banana, Ice Cream, Fresh Fruits, Syrup</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>225</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>330</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div class="badge menu-new-badge w-dyn-bind-empty"></div>
                  <div class="badge menu-item-badge">Vegan</div>
                  <div class="badge menu-item-badge">Kosher</div>
                  <div class="badge menu-item-badge w-condition-invisible">Spicy</div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f8f88801b9500001e7c810_yoori-koo-51884.jpg')}}"                alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f8f88801b9500001e7c810_yoori-koo-51884-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f8f88801b9500001e7c810_yoori-koo-51884.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">B And n waffle</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>10.70</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Banana, Nutella, Waffle, Peanut Butter, Marshmallow</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>300</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>393</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div class="badge menu-new-badge w-dyn-bind-empty"></div>
                  <div class="badge menu-item-badge">Vegan</div>
                  <div class="badge menu-item-badge w-condition-invisible">Kosher</div>
                  <div class="badge menu-item-badge w-condition-invisible">Spicy</div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f879a078cc2d0001fcf2b0_brenda-godinez-298223.jpg')}}"
                  alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f879a078cc2d0001fcf2b0_brenda-godinez-298223-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f879a078cc2d0001fcf2b0_brenda-godinez-298223.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Cappuccino</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>5.00</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Espresso, Hot Milk, Milk Foam</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>200</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>75</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div class="badge menu-new-badge w-dyn-bind-empty"></div>
                  <div class="badge menu-item-badge">Vegan</div>
                  <div class="badge menu-item-badge">Kosher</div>
                  <div class="badge menu-item-badge">Spicy</div>
                </div>
              </div>
            </div>
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('website/59e98418f9cd070001c89d70/59f8797478cc2d0001fcf202_jonathan-pielmayer-61902.jpg')}}"
                  alt="" sizes="80px"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f8797478cc2d0001fcf202_jonathan-pielmayer-61902-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f8797478cc2d0001fcf202_jonathan-pielmayer-61902.jpg 740w"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">Masala chai</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>$</div>
                      <div>4.80</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">Black Tea, Spices, Milk, Honey</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>250</div>
                      <div>g.</div>
                      <div class="menu-numbers-divider">/</div>
                      <div>80</div>
                      <div>cal.</div>
                    </div>
                  </div>
                  <div class="badge menu-new-badge w-dyn-bind-empty"></div>
                  <div class="badge menu-item-badge">Vegan</div>
                  <div class="badge menu-item-badge w-condition-invisible">Kosher</div>
                  <div class="badge menu-item-badge w-condition-invisible">Spicy</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><a href="{{route('menu')}}" data-w-id="92ac7f1d-a063-55da-233e-bd75444ad3a8" style="opacity:1"
        class="button w-button">View Full Menu</a>
    </div>
   

    <div data-w-id="975851d4-1cae-e7e9-55a2-caa9b6cbd63e" style="opacity:1"
      class="bg-section gallery-section wf-section">
      <div class="gallery"><a href="#" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c79ebcb7400011f94c5_gallery-image-01.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c79ebcb7400011f94c5_gallery-image-01-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c79ebcb7400011f94c5_gallery-image-01.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f82974baa318000167063e",
      "origFileName": "gallery-image-01-full.jpg",
      "fileName": "gallery-image-01-full.jpg",
      "fileSize": 125185,
      "height": 1201,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f82974baa318000167063e_gallery-image-01-full.jpg",
      "width": 1600,
      "caption": "Photo caption example",
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c8104139300016ad2b5_gallery-image-02.jpg')}}"           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8104139300016ad2b5_gallery-image-02-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8104139300016ad2b5_gallery-image-02.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f8297eaab684000124d720",
      "origFileName": "gallery-image-02-full.jpg",
      "fileName": "gallery-image-02-full.jpg",
      "fileSize": 239519,
      "height": 1067,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f8297eaab684000124d720_gallery-image-02-full.jpg",
      "width": 1600,
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c8504139300016ad2b7_gallery-image-03.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8504139300016ad2b7_gallery-image-03-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8504139300016ad2b7_gallery-image-03.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f829b7f11fb30001fe14e2",
      "origFileName": "gallery-image-03-full.jpg",
      "fileName": "gallery-image-03-full.jpg",
      "fileSize": 143860,
      "height": 1600,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f829b7f11fb30001fe14e2_gallery-image-03-full.jpg",
      "width": 1067,
      "caption": "Photo caption example",
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c87eac5ea0001c1bf57_gallery-image-04.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c87eac5ea0001c1bf57_gallery-image-04-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c87eac5ea0001c1bf57_gallery-image-04.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f829bbf11fb30001fe14e3",
      "origFileName": "gallery-image-04-full.jpg",
      "fileName": "gallery-image-04-full.jpg",
      "fileSize": 221957,
      "height": 1067,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f829bbf11fb30001fe14e3_gallery-image-04-full.jpg",
      "width": 1600,
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c88ebcb7400011f94cd_gallery-image-05.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c88ebcb7400011f94cd_gallery-image-05-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c88ebcb7400011f94cd_gallery-image-05.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f829bd2817100001d1b787",
      "origFileName": "gallery-image-05-full.jpg",
      "fileName": "gallery-image-05-full.jpg",
      "fileSize": 178011,
      "height": 1067,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f829bd2817100001d1b787_gallery-image-05-full.jpg",
      "width": 1600,
      "caption": "Photo caption example",
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c89696c200001fc9240_gallery-image-06.jpg')}}"           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c89696c200001fc9240_gallery-image-06-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c89696c200001fc9240_gallery-image-06.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f5b741defbd90001013711",
      "origFileName": "rawpixel-com-247358.jpg",
      "fileName": "rawpixel-com-247358.jpg",
      "fileSize": 303642,
      "height": 1200,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f5b741defbd90001013711_rawpixel-com-247358.jpg",
      "width": 1698,
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c8aeac5ea0001c1bf58_gallery-image-07.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8aeac5ea0001c1bf58_gallery-image-07-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8aeac5ea0001c1bf58_gallery-image-07.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f829c0baa318000167067c",
      "origFileName": "gallery-image-07-full.jpg",
      "fileName": "gallery-image-07-full.jpg",
      "fileSize": 272048,
      "height": 1067,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f829c0baa318000167067c_gallery-image-07-full.jpg",
      "width": 1600,
      "caption": "Photo caption example",
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71c8b696c200001fc9242_gallery-image-08.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8b696c200001fc9242_gallery-image-08-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71c8b696c200001fc9242_gallery-image-08.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f829c3d3f5090001bfcf3f",
      "origFileName": "gallery-image-08-full.jpg",
      "fileName": "gallery-image-08-full.jpg",
      "fileSize": 171823,
      "height": 1600,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f829c3d3f5090001bfcf3f_gallery-image-08-full.jpg",
      "width": 1067,
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71ca7eac5ea0001c1bf64_gallery-image-09.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71ca7eac5ea0001c1bf64_gallery-image-09-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71ca7eac5ea0001c1bf64_gallery-image-09.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f71ca7eac5ea0001c1bf64",
      "origFileName": "gallery-image-09.jpg",
      "fileName": "gallery-image-09.jpg",
      "fileSize": 72171,
      "height": 800,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71ca7eac5ea0001c1bf64_gallery-image-09.jpg",
      "width": 800,
      "caption": "Photo caption example",
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a><a href="#" data-ix="show-zoom-icon" class="gallery-image w-inline-block w-lightbox">
          <div class="zoom-icon"></div><img
            src="{{asset('website/59e98418f9cd070001c89d5a/59f71ca914023c0001d82798_gallery-image-10.jpg')}}           sizes="(max-width: 767px) 49vw, 19vw"
            srcset="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71ca914023c0001d82798_gallery-image-10-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d5a/59f71ca914023c0001d82798_gallery-image-10.jpg 800w"
            alt="" />
          <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "59f829ca2817100001d1b840",
      "origFileName": "gallery-image-10-full.jpg",
      "fileName": "gallery-image-10-full.jpg",
      "fileSize": 395968,
      "height": 1600,
      "url": "https://assets.website-files.com/59e98418f9cd070001c89d5a/59f829ca2817100001d1b840_gallery-image-10-full.jpg",
      "width": 1600,
      "type": "image"
    }
  ],
  "group": "Gallery"
}</script>
        </a></div>
    </div>
    <div class="section pattern-section wf-section">
      <div class="wrapper w-container">
        <div class="contact">
          <div data-ix="fade-right" data-w-id="a19ece4a-6bc6-a27a-a20c-1249a940a46f" style="opacity:1"
            class="contact-card">
            <div class="contact-card-info"><img
                src="{{asset('website/59e98418f9cd070001c89d5a/59f5b840defbd900010137b9_location-icon.png')}}            alt="" class="big-icon" />
              <h3>Easy to Find</h3>
              <div class="divider"></div>
              <p class="grey-text">Delicious Cafe, 1649 Norman Street, Los Angeles, 90011</p><a href="#"
                class="contact-card-email">info@cafedomain.com</a>
              <div class="red-text">8 (800) 316-06-42</div>
            </div>
            <div data-widget-latlng="34.0583477,-118.176879" data-widget-zoom="13" data-enable-scroll="true"
              data-enable-touch="true" data-widget-tooltip="" data-widget-style="roadmap" title=""
              class="contact-card-map w-widget w-widget-map"></div>
          </div>
          <div data-ix="fade-left" data-w-id="21e650e2-6a4c-3f79-94de-40cdaf16250c" style="opacity:1"
            class="working-hours">
            <div class="working-hours-content">
              <div class="sub-header small">Welcome</div>
              <h3>Opening Hours</h3>
              <div class="opening-hours-table">
                <div class="opening-hours-cell">
                  <div>Monday</div>
                  <div class="menu-dots-line hours"></div>
                  <div class="opening-hours-time">8am - 10pm</div>
                </div>
                <div class="opening-hours-cell">
                  <div>Tuesday</div>
                  <div class="menu-dots-line hours"></div>
                  <div class="opening-hours-time">8am - 10pm</div>
                </div>
                <div class="opening-hours-cell">
                  <div>Wednesday</div>
                  <div class="menu-dots-line hours"></div>
                  <div class="opening-hours-time">8am - 10pm</div>
                </div>
                <div class="opening-hours-cell">
                  <div>Thursday</div>
                  <div class="menu-dots-line hours"></div>
                  <div class="opening-hours-time">8am - 10pm</div>
                </div>
                <div class="opening-hours-cell">
                  <div>Friday</div>
                  <div class="menu-dots-line hours"></div>
                  <div class="opening-hours-time">8am - 10pm</div>
                </div>
                <div class="opening-hours-cell">
                  <div>Saturday</div>
                  <div class="menu-dots-line hours"></div>
                  <div class="opening-hours-time">8am - 10pm</div>
                </div>
                <div class="opening-hours-cell">
                  <div>Sunday</div>
                  <div class="menu-dots-line hours"></div>
                  <div class="opening-hours-time red-text">Closed</div>
                </div>
              </div><a href="reservation.html" class="button small-button white-hover-button w-button">Reservation</a>
            </div>
            <div class="frame white-frame"></div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-section footer-section wf-section">
      <div class="wrapper w-container">
        <div class="footer">
          <div class="footer-column">
            <h5 class="footer-header">Contact Info</h5>
            <p>Delicious Cafe, 1649 Norman Street, 
              Los Angeles, 90011</p><a href="mailto:test@test.com?subject=Hello!"
              class="footer-email">hello@deliciouscafe.com</a>
            <p>8 (800) 316-06-42</p>
            <div class="social-icons footer-icons"><a href="https://twitter.com/" target="_blank"
                class="social-link w-inline-block"><img
                  src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89db7_twitter-icon-white.svg"
                  alt="" /></a><a href="https://facebook.com/" target="_blank" class="social-link w-inline-block"><img
                  src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89dae_facebook-icon-white.svg"
                  alt="" /></a><a href="https://instagram.com/" target="_blank" class="social-link w-inline-block"><img
                  src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89daf_instagram-icon-white.svg"
                  alt="" /></a></div>
          </div>
          <div class="footer-column">
            <h5 class="footer-header">Navigation</h5><a href="index.html" aria-current="page"
              class="footer-link w--current">Home</a>
            <div class="footer-link-badge"><a href="menu-small-grid.html" class="footer-link">Menu</a>
              <div class="badge footer-badge">Updated</div>
            </div><a href="blog" class="footer-link">Blog</a><a href="about.html" class="footer-link">About</a><a
              href="contact.html" class="footer-link">Contact</a><a href="reservation.html"
              class="footer-link yellow-text">Book a Table</a>
          </div>
          <div class="footer-column">
            <h5 class="footer-header">Recent Posts</h5>
            <div class="footer-posts w-dyn-list">
              <div role="list" class="w-dyn-items">
                <div role="listitem" class="footer-post w-dyn-item">
                  <div>
                    <div class="footer-post-date">July 30, 2017</div><a
                      href="blog/barbecue-party-tips-for-a-truly-amazing-event" class="footer-post-header">Barbecue
                      party tips for a truly amazing event</a>
                  </div>
                </div>
                <div role="listitem" class="footer-post w-dyn-item">
                  <div>
                    <div class="footer-post-date">August 9, 2017</div><a
                      href="blog/the-principles-of-scientific-cooking" class="footer-post-header">The principles of
                      scientific cooking</a>
                  </div>
                </div>
                <div role="listitem" class="footer-post w-dyn-item">
                  <div>
                    <div class="footer-post-date">September 24, 2017</div><a href="blog/cooking-for-one"
                      class="footer-post-header">Cooking for one</a>
                  </div>
                </div>
              </div>
            </div><a href="blog" class="footer-link blog-link">View All Posts</a>
          </div>
          <div class="footer-column">
            <h5 class="footer-header">Instagram</h5>
            <div class="footer-instagram-photos"><a href="https://www.instagram.com/" target="_blank"
                class="instagram-photo w-inline-block">
                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                  src="{{asset('website/59e98418f9cd070001c89d5a/5a901e8051487600011555f1_instagram-01.jpg')}}"             alt="" class="full-width" />
              </a><a href="https://www.instagram.com/" target="_blank" class="instagram-photo w-inline-block">
                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                  src="{{asset('website/59e98418f9cd070001c89d5a/5a901e8019e7db0001fdbd2f_instagram-02.jpg')}}"             alt="" class="full-width" />
              </a><a href="https://www.instagram.com/" target="_blank" class="instagram-photo w-inline-block">
                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                  src="{{asset('website/59e98418f9cd070001c89d5a/5a901e8019e7db0001fdbd2e_instagram-03.jpg')}}"             alt="" class="full-width" />
              </a><a href="https://www.instagram.com/" target="_blank" class="instagram-photo w-inline-block">
                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                  src="{{asset('website/59e98418f9cd070001c89d5a/5a901e80b223b60001243d80_instagram-04.jpg')}}"             alt="" class="full-width" />
              </a><a href="https://www.instagram.com/" target="_blank" class="instagram-photo w-inline-block">
                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                  src="{{asset('website/59e98418f9cd070001c89d5a/5a901e8051487600011555f0_instagram-05.jpg')}}"             alt="" class="full-width" />
              </a><a href="https://www.instagram.com/" target="_blank" class="instagram-photo w-inline-block">
                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                  src="{{asset('website/59e98418f9cd070001c89d5a/5a901e80ec586e0001d6626b_instagram-06.jpg')}}"             alt="" class="full-width" />
              </a></div><a href="http://instagram.com/" target="_blank" class="footer-link blog-link">View More
              Photos</a>
          </div>
          <div class="footer-bottom">
            <div class="footer-bottom-content">
              <div class="footer-bottom-text">Created with</div><img
                src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f1b3b9ffa06300013b6b90_heart-icon.svg"
                alt="" class="heart-icon" />
              <div class="footer-bottom-text">by</div><a href="https://www.elasticthemes.com/" target="_blank"
                class="footer-bottom-text link">Elastic Themes</a>
              <div class="footer-bottom-divider"></div>
              <div class="footer-bottom-text">Powered by</div><a href="https://webflow.com/" target="_blank"
                class="footer-bottom-text link">Webflow</a>
              <div class="footer-bottom-divider"></div><a href="template/style-guide"
                class="footer-bottom-text link">Style Guide</a>
              <div class="footer-bottom-divider"></div><a href="template/licensing"
                class="footer-bottom-text link">Licenses</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-base"></div>
    </footer>
  </div>
  <script src="{{asset('website/d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c896f7.js')}}?site=59e98418f9cd070001c89d5a"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
  <script src="{{asset('website/59e98418f9cd070001c89d5a/js/webflow.c925500fe.js')}}"
    type="text/javascript"></script>
</body>

</html>
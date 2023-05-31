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

    @include('website.layouts.nav')

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
                  src="{{asset('uploads/menus/'.$data[0]->image)}}"
                  alt="" sizes="(max-width: 479px) 93vw, (max-width: 767px) 47vw, (max-width: 991px) 31vw, 27vw"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249.jpg 740w"
                  class="menu-grid-image" /><a href="menu-categories/drinks" class="badge menu-item-category">Drinks</a>
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">{{$data[0]->name}}</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>UE</div>
                      <div>{{$data[0]->price}}</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">{{$data[0]->note}}</div>
                  <div class="menu-more w-clearfix">
                    <div class="menu-numbers">
                    </div><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>{{$data[0]->category->name}}</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                   
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div role="listitem" class="menu-grid-item w-dyn-item">
              <div class="menu-grid-card"><img
                  src="{{asset('uploads/menus/'.$data[1]->image)}}"
                  alt="" sizes="(max-width: 479px) 93vw, (max-width: 767px) 47vw, (max-width: 991px) 31vw, 27vw"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249.jpg 740w"
                  class="menu-grid-image" /><a href="menu-categories/drinks" class="badge menu-item-category">Drinks</a>
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">{{$data[1]->name}}</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>UE</div>
                      <div>{{$data[1]->price}}</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">{{$data[1]->note}}</div>
                  <div class="menu-more w-clearfix">
                    <div class="menu-numbers">
                    </div><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>{{$data[1]->category->name}}</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                   
                    </a>
                  </div>
                </div>
              </div>
            </div>


            
            <div role="listitem" class="menu-grid-item w-dyn-item">
              <div class="menu-grid-card"><img
                  src="{{asset('uploads/menus/'.$data[2]->image)}}"
                  alt="" sizes="(max-width: 479px) 93vw, (max-width: 767px) 47vw, (max-width: 991px) 31vw, 27vw"
                  srcset="https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249-p-500.jpeg 500w, https://assets.website-files.com/59e98418f9cd070001c89d70/59f91a0b78cc2d0001fd9067_alexandra-gorn-336249.jpg 740w"
                  class="menu-grid-image" /><a href="menu-categories/drinks" class="badge menu-item-category">Drinks</a>
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">{{$data[2]->name}}</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>UE</div>
                      <div>{{$data[2]->price}}</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">{{$data[2]->note}}</div>
                  <div class="menu-more w-clearfix">
                    <div class="menu-numbers">
                    </div><a href="#" class="badge menu-item-tooltip w-inline-block">
                      <div class="tooltip">
                        <div>{{$data[2]->category->name}}</div>
                        <div class="tooltip-arrow"></div>
                      </div>
                   
                    </a>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div><a href="{{route('menu')}}" data-w-id="52acb8a8-53b0-f52f-df4d-3bf897a51de8" style="opacity:1"
        class="button w-button">View Full Menu</a>
  
    </div>
 
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
            
            @foreach ($data as $d )
              
            <div role="listitem" class="menu-list-item w-dyn-item">
              <div class="menu-list-card"><img
                  src="{{asset('uploads/menus/'.$d->image)}}"
                  alt="" sizes="80px"
                  class="menu-list-image" />
                <div class="menu-info w-clearfix">
                  <div class="menu-info-main">
                    <div class="menu-name">{{$d->name}}</div>
                    <div class="menu-dots-line"></div>
                    <div class="menu-price">
                      <div>UE</div>
                      <div>{{$d->price}}</div>
                    </div>
                  </div>
                  <div class="menu-ingredients">{{$d->note}}</div>
                  <div class="menu-more">
                    <div class="menu-numbers">
                      <div>{{$d->category->name}}</div>
                    </div>
                  </div>
                  <div style="background-color:#f03e5a" class="badge menu-new-badge">New</div>
                </div>
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </div><a href="{{route('menu')}}" data-w-id="92ac7f1d-a063-55da-233e-bd75444ad3a8" style="opacity:1"
        class="button w-button">View Full Menu</a>
    </div>
   

    </div>
    @include('website.layouts.footer')
  </div>
  <script src="{{asset('website/d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c896f7.js')}}?site=59e98418f9cd070001c89d5a"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
  <script src="{{asset('website/59e98418f9cd070001c89d5a/js/webflow.c925500fe.js')}}"
    type="text/javascript"></script>
</body>

</html>
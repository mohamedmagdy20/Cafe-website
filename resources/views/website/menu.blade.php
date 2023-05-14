<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon Jun 07 2021 05:28:41 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="cafe-template.webflow.io" data-wf-page="59f1d06d79d276000136b0b2"
    data-wf-site="59e98418f9cd070001c89d5a">
<!-- Mirrored from cafe-template.webflow.io/menu-grid by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 12:46:35 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Café - Webflow HTML website template</title>
    <meta content="Café - Webflow HTML website template" property="og:title" />
    <meta content="Café - Webflow HTML website template" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{asset('website/59e98418f9cd070001c89d5a/css/cafe-template.webflow.810e3cf84.css')}}"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
    {{-- <script src="{{asset('ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js')}}" type="text/javascript"></script> --}}
    <script
        type="text/javascript">WebFont.load({ google: { families: ["Oswald:200,300,400,500,600,700", "Great Vibes:400", "Karla:regular,700"] } });</script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="{{asset('webiste/59e98418f9cd070001c89d5a/59f9d1e301b9500001e859a6_favicon.png')}}"
        rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('website/59e98418f9cd070001c89d5a/59f9d1ea3b3286000183b8f1_webclip.png')}}"
        rel="apple-touch-icon" />
</head>

<body class="body">
    <div class="preloader"><img
            src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59fa9b0478cc2d0001ff0cb3_preloader.svg"
            alt="" class="preloader-icon" /></div>
  
    <div data-ix="new-interaction" class="page-wrapper">
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
            role="banner" class="nav-bar fixed-nav-bar w-nav">
            <div class="wrapper w-container"><a href="index.html" class="logo fixed-nav-bar-logo w-nav-brand">
                    <div><span class="yellow-text">Delicious</span> CAFÉ</div>
                </a>
                <nav role="navigation" class="nav-menu w-nav-menu"><a href="{{route('home')}}" aria-current="page"
                    class="nav-link w-nav-link w--current">Home</a>
                   <a href="{{route('menu')}}" class="nav-link w-nav-link">Menu</a>
                  </nav>
                <div class="menu-button fixed-menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
        <div id="Hero" data-ix="show-nav-bar-on-scroll" data-w-id="49655935-f7bc-5142-2f7c-355d958c9edb"
            class="bg-section page-hero-section menu-hero wf-section">
            <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease"
                data-easing2="ease" role="banner" class="nav-bar w-nav">
                <div class="wrapper w-container"><a href="index.html" class="logo w-nav-brand">
                        <div><span class="yellow-text">Delicious</span> CAFÉ</div>
                    </a>
                    <nav role="navigation" class="nav-menu w-nav-menu"><a href="{{route('home')}}" aria-current="page"
                        class="nav-link w-nav-link w--current">Home</a>
                      <a href="{{route('menu')}}" class="nav-link w-nav-link">Menu</a>
                      </nav>
                
                    <div class="menu-button w-nav-button">
                        <div class="w-icon-nav-menu"></div>
                    </div>
                </div>
            </div>
            <div class="wrapper w-container">
                <h1 data-ix="fade-up-2" class="page-hero-header">Menu</h1>
            </div>
        </div>












        @foreach ($data as $d)
        <div class="section wf-section">
            <div data-w-id="74cd8cbc-1042-04f7-29a4-1e1384ff39fe" style="opacity:1" class="wrapper w-container">
                <div class="section-header-wrapper">
                    <div class="sub-header">Menu</div>
                    <h2>{{$d->name}}</h2>
                    <div class="divider"></div>
                </div>
                <div class="w-dyn-list">
                    <div role="list" class="menu w-dyn-items">
                        @foreach ($d->menu as $menu )
                        <div role="listitem" class="menu-list-item w-dyn-item">
                            <div class="menu-list-card"><img
                                src="{{asset('uploads/menus/'.$menu->image)}}"
                                alt="" sizes="80px"
                                class="menu-list-image" />
                              <div class="menu-info w-clearfix">
                                <div class="menu-info-main">
                                  <div class="menu-name">{{$menu->name}}</div>
                                  <div class="menu-dots-line"></div>
                                  <div class="menu-price">
                                    <div>UE</div>
                                    <div>{{$menu->price}}</div>
                                  </div>
                                </div>
                                <div class="menu-ingredients">{{$menu->note}}</div>
                                <div class="menu-more">
                                  <div class="menu-numbers">
                                    <div>{{$menu->category->name}}</div>
                                  </div>
                                </div>
                                <div style="background-color:#f03e5a" class="badge menu-new-badge">New</div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                       
                        
                    </div>
                </div>
            </div>
        </div>
       
        @endforeach
    














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
                                    alt="" /></a><a href="https://facebook.com/" target="_blank"
                                class="social-link w-inline-block"><img
                                    src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89dae_facebook-icon-white.svg"
                                    alt="" /></a><a href="https://instagram.com/" target="_blank"
                                class="social-link w-inline-block"><img
                                    src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59e98418f9cd070001c89daf_instagram-icon-white.svg"
                                    alt="" /></a></div>
                    </div>
                    <div class="footer-column">
                        <h5 class="footer-header">Navigation</h5><a href="index.html" class="footer-link">Home</a>
                        <div class="footer-link-badge"><a href="menu-small-grid.html" class="footer-link">Menu</a>
                            <div class="badge footer-badge">Updated</div>
                        </div><a href="blog" class="footer-link">Blog</a><a href="about.html"
                            class="footer-link">About</a><a href="contact.html" class="footer-link">Contact</a><a
                            href="reservation.html" class="footer-link yellow-text">Book a Table</a>
                    </div>
                    <div class="footer-column">
                        <h5 class="footer-header">Recent Posts</h5>
                        <div class="footer-posts w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <div role="listitem" class="footer-post w-dyn-item">
                                    <div>
                                        <div class="footer-post-date">July 30, 2017</div><a
                                            href="blog/barbecue-party-tips-for-a-truly-amazing-event"
                                            class="footer-post-header">Barbecue party tips for a truly amazing event</a>
                                    </div>
                                </div>
                                <div role="listitem" class="footer-post w-dyn-item">
                                    <div>
                                        <div class="footer-post-date">August 9, 2017</div><a
                                            href="blog/the-principles-of-scientific-cooking"
                                            class="footer-post-header">The principles of scientific cooking</a>
                                    </div>
                                </div>
                                <div role="listitem" class="footer-post w-dyn-item">
                                    <div>
                                        <div class="footer-post-date">September 24, 2017</div><a
                                            href="blog/cooking-for-one" class="footer-post-header">Cooking for one</a>
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
                                    src="../assets.website-files.com/59e98418f9cd070001c89d5a/5a901e8051487600011555f1_instagram-01.jpg"
                                    alt="" class="full-width" />
                            </a><a href="https://www.instagram.com/" target="_blank"
                                class="instagram-photo w-inline-block">
                                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                                    src="../assets.website-files.com/59e98418f9cd070001c89d5a/5a901e8019e7db0001fdbd2f_instagram-02.jpg"
                                    alt="" class="full-width" />
                            </a><a href="https://www.instagram.com/" target="_blank"
                                class="instagram-photo w-inline-block">
                                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                                    src="../assets.website-files.com/59e98418f9cd070001c89d5a/5a901e8019e7db0001fdbd2e_instagram-03.jpg"
                                    alt="" class="full-width" />
                            </a><a href="https://www.instagram.com/" target="_blank"
                                class="instagram-photo w-inline-block">
                                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                                    src="../assets.website-files.com/59e98418f9cd070001c89d5a/5a901e80b223b60001243d80_instagram-04.jpg"
                                    alt="" class="full-width" />
                            </a><a href="https://www.instagram.com/" target="_blank"
                                class="instagram-photo w-inline-block">
                                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                                    src="../assets.website-files.com/59e98418f9cd070001c89d5a/5a901e8051487600011555f0_instagram-05.jpg"
                                    alt="" class="full-width" />
                            </a><a href="https://www.instagram.com/" target="_blank"
                                class="instagram-photo w-inline-block">
                                <div data-ix="hide-on-load" class="zoom-icon small"></div><img
                                    src="../assets.website-files.com/59e98418f9cd070001c89d5a/5a901e80ec586e0001d6626b_instagram-06.jpg"
                                    alt="" class="full-width" />
                            </a></div><a href="http://instagram.com/" target="_blank" class="footer-link blog-link">View
                            More Photos</a>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-bottom-content">
                            <div class="footer-bottom-text">Created with</div><img
                                src="https://assets.website-files.com/59e98418f9cd070001c89d5a/59f1b3b9ffa06300013b6b90_heart-icon.svg"
                                alt="" class="heart-icon" />
                            <div class="footer-bottom-text">by</div><a href="https://www.elasticthemes.com/"
                                target="_blank" class="footer-bottom-text link">Elastic Themes</a>
                            <div class="footer-bottom-divider"></div>
                            <div class="footer-bottom-text">Powered by</div><a href="https://webflow.com/"
                                target="_blank" class="footer-bottom-text link">Webflow</a>
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
    <script src="{{asset('d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c896f7.js')}}?site=59e98418f9cd070001c89d5a"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="{{asset('59e98418f9cd070001c89d5a/js/webflow.c925500fe.js')}}"
        type="text/javascript"></script>
</body>
<!-- Mirrored from cafe-template.webflow.io/menu-grid by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 12:46:41 GMT -->

</html>
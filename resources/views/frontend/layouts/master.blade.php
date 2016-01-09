<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@Designpond | Cindy Leschaud">
    <title>CocoBeauty</title>
    <meta name="description" content="CocoBeauty">
    <meta name="_token" content="<?php echo csrf_token(); ?>">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo asset('frontend/css/main.css');?> ">
</head>

<body>

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 info-text">
                            <strong>Ph one:</strong>  (208) 333 9296     <span class="separator"></span><strong>Email:</strong>  <a href="#">contact@example.com</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="social-icons">
                                <a class="social-icon sb-icon-facebook" href="#"></a>
                                <a class="social-icon sb-icon-twitter" href="#"></a>
                                <a class="social-icon sb-icon-rss" href="#"></a>
                                <a class="social-icon sb-icon-dribbble" href="#"></a>
                                <a class="social-icon sb-icon-linkedin" href="#"></a>
                                <a class="social-icon sb-icon-flickr" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="logo">
                    <div class="inner">
                        <a href="{{ url('/') }}"><img height="120px" width="160px" src="{{ asset('frontend/images/logo.svg') }}" alt="logo"></a>
                    </div>
                </div>

                <!-- mainmenu begin -->
                <ul id="mainmenu">

                    <?php $helper = new App\Helper\Helper(); ?>
                    <?php $pages  = $hierarchy->reject(function ($item) { return $item->hidden; }); ?>

                    @if(!$pages->isEmpty())
                        @foreach($pages as $page)
                        {!! $helper->renderMenu($page) !!}
                        @endforeach
                    @endif

                </ul>
                <!-- mainmenu close -->

            </div>
        </header>
        <!-- header close -->

        <!-- slider -->
        <div class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="frontend/images-slider//thumbs/thumb1.jpg">
                        <!-- BG IMAGE -->
                        <img src="frontend/images-slider/wide3.jpg" alt="" />

                        <!-- THE CAPTIONS IN THIS SLIDE -->
                        <div class="tp-caption med id-color lfl"
                             data-x="0"
                             data-y="145"
                             data-speed="300"
                             data-start="800"
                             data-easing="easeOutExpo">
                            Perfect Way To Display Your
                        </div>

                        <div class="caption sfb very-big-black"
                             data-x="0"
                             data-y="190"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo">
                            works
                        </div>

                        <div class="tp-caption small-white lfr"
                             data-x="0"
                             data-y="255"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo">
                            <a href="#" class="btn btn-large btn-primary">Purchase Now</a>
                        </div>

                        <div class="tp-caption lfb"
                             data-x="390"
                             data-y="40"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo">
                            <img src="frontend/images/lady.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- slider close -->

        <!-- call to action -->
        <!-- call to action close -->

        <!-- content begin -->
        <div id="content" class="no-bottom">

            <div class="container">
                <div class="row">

                    <!-- Contenu -->
                    @yield('content')
                    <!-- Fin contenu -->

                </div>
            </div>

            <!-- portfolio begin -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="filters">
                            <li><a href="#" data-filter="*" class="selected">show all</a></li>
                            <li><a href="#" data-filter=".illustration">Illustration</a></li>
                            <li><a href="#" data-filter=".mobile">Mobile</a></li>
                            <li><a href="#" data-filter=".photography">Photography</a></li>
                            <li><a href="#" data-filter=".website">Website</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="gallery" class="gallery">

                        <!-- gallery item -->
                        <div class="col-md-3 item mobile">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(1).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #1</span>
                                            <span>Mobile</span>
                                        </span>
                                    </span>
                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(1).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-3 item photography">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(2).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #2</span>
                                            <span>Photography</span>
                                        </span>
                                    </span>

                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(2).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-3 item website mobile">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(3).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #3</span>
                                            <span>Website, Mobile</span>
                                        </span>
                                    </span>

                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(3).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-3 item illustration">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(4).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #4</span>
                                            <span>Illustration</span>
                                        </span>
                                    </span>
                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(4).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-3 item website photography">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(5).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #5</span>
                                            <span>Website, Photography</span>
                                        </span>
                                    </span>
                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(5).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-3 item mobile">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(6).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #6</span>
                                            <span>Mobile</span>
                                        </span>
                                    </span>
                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(6).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-3 item illustration photography">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(7).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #7</span>
                                            <span>Illustration, Photography</span>
                                        </span>
                                    </span>
                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(7).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-3 item photography">
                            <div class="picframe">
                                    <span class="overlay">
                                        <span class="info-area">
                                            <a class="img-icon-url" href="project-single.html"></a>
                                            <a class="img-icon-zoom" href="frontend/images/portfolio/pf%20(8).jpg" data-type="prettyPhoto[gallery]" title=""></a>
                                        </span>
                                        <span class="pf_text">
                                            <span class="project-name">Project Name #8</span>
                                            <span>Photography</span>
                                        </span>
                                    </span>
                                <img src="frontend/images/pf_blank.gif" data-original="frontend/images/portfolio/pf%20(8).jpg" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                    </div>
                </div>
            </div>
            <!-- portolio close -->

            <hr>

            <div class="container">
                <div class="row">
                    <!-- logo carousel -->
                    <div class="row">
                        <div class="flexslider logo-carousel">
                            <ul class="slides">
                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/1.png" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/2.png" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/3.png" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/4.png" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/5.png" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/6.png" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/7.png" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-2">
                                        <img src="frontend/images/logo/8.png" alt="">
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!-- logo carousel close -->

                </div>
            </div>

        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="frontend/images/logo-small.png" alt=""><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget_recent_post">
                            <h3>Recent Post</h3>
                            <ul>
                                <li><a href="#">Sed ut perspiciatis unde omnis</a></li>
                                <li><a href="#">Duis aute irure dolor in</a></li>
                                <li><a href="#">Excepteur sint occaecat cupidatat </a></li>
                                <li><a href="#">Nemo enim ipsam voluptatem quia  </a></li>
                                <li><a href="#">Quis autem vel eum iure</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget_tags">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="#link">Art</a></li>
                                <li><a href="#link">Application</a></li>
                                <li><a href="#link">Design</a></li>
                                <li><a href="#link">Entertainment</a></li>
                                <li><a href="#link">Internet</a></li>
                                <li><a href="#link">Marketing</a></li>
                                <li><a href="#link">Music</a></li>
                                <li><a href="#link">Print</a></li>
                                <li><a href="#link">Programming</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h3>Contact Us</h3>
                        <div class="widget widget-address">
                            <address>
                                100 Mainstreet Center, Sydney
                                <span><strong>Phone:</strong>(208) 333 9296</span>
                                <span><strong>Fax:</strong>(208) 333 9298</span>
                                <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            &copy; Copyright 2013 - Inspira by Designesia
                        </div>
                        <div class="col-md-6">
                            <nav>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->
    </div>

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="<?php echo asset('frontend/js/jquery.isotope.min.js');?>"></script>
    <script src="<?php echo asset('frontend/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo asset('frontend/js/easing.js');?>"></script>
    <script src="<?php echo asset('frontend/js/jquery.ui.totop.js');?>"></script>
    <script src="<?php echo asset('frontend/js/selectnav.js');?>"></script>
    <script src="<?php echo asset('frontend/js/ender.js');?>"></script>
    <script src="<?php echo asset('frontend/js/jquery.lazyload.js');?>"></script>
    <script src="<?php echo asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo asset('frontend/js/jquery.flexslider-min.js');?>"></script>
    <script src="<?php echo asset('frontend/js/custom.js');?>"></script>

    <script src="<?php echo asset('frontend/js/rev-setting-1.js');?>"></script>
</body>
</html>
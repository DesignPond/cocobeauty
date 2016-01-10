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
                        <div class="col-md-12 info-text"></div>
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
                        <img src="frontend/images/header.jpg" alt="" />

                        <!-- THE CAPTIONS IN THIS SLIDE -->
                        <div class="tp-caption med id-color lfl"
                             data-x="0"
                             data-y="145"
                             data-speed="300"
                             data-start="800"
                             data-easing="easeOutExpo">
                           Service professionnel de
                        </div>

                        <div class="caption sfb very-big-black"
                             data-x="0"
                             data-y="210"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo">
                            Maquillage
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

        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img height="50px" width="100px" src="frontend/images/logo.svg" alt=""><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget_recent_post">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Sed ut perspiciatis unde omnis</a></li>
                                <li><a href="#">Duis aute irure dolor in</a></li>
                                <li style="border: none;"><a href="#">Duis aute irure dolor in</a></li>
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
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h3>Contactez-nous</h3>
                        <div class="widget widget-address">
                            <address>
                                <span><strong>Phone:</strong>(208) 333 9296</span>
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
                        <div class="col-md-12">
                            &copy; Copyright 2016 - CocoBeauty
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
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Ammly">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link rel="shortcut icon" href="/favicon.ico">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        @yield('template_linked_fonts')

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />

        @yield('template_linked_css')

        <style type="text/css">
            @yield('template_fastload_css')

        </style>

        {{-- Scripts --}}
        <script src="js/responsiveslides.min.js"></script>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};

            $(function () {
              $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
              });
            });
        </script>

        

        @yield('head')

    </head>
    <body>
        <div id="app">

            <div class="container">

                @include('partials.form-status')

            </div>

            @yield('content')

        </div>

        <div class="container"> 
             <footer id="footer">
                <div id="footer-3d">
                    <div class="gp-container">
                        <span class="first-widget-bend"></span>
                    </div>      
                </div>
                <div id="footer-widgets" class="gp-footer-larger-first-col">
                    <div class="gp-container">
                        <div class="footer-widget footer-1">
                            <div class="wpb_wrapper">
                                <img src="images/f_logo.png" alt=""/>
                            </div> 
                          <br>
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                          <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                         </div>
                         <div class="footer_box">
                          <div class="col_1_of_3 span_1_of_3">
                                <h3>Categories</h3>
                                <ul class="first">
                                    <li><a href="#">Dance</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                         </div>
                         <div class="col_1_of_3 span_1_of_3">
                                <h3>Information</h3>
                                <ul class="first">
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">top sellers</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                         </div>
                         <div class="col_1_of_3 span_1_of_3">
                                <h3>Follow Us</h3>
                                <ul class="first">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Youtube</a></li>
                                </ul>
                         </div>
                        <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
              </footer>
            </div>      
            {{-- Scripts --}}
            <script src="{{ mix('/js/app.js') }}"></script>
            {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.env("GOOGLEMAPS_API_KEY").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}

            @yield('footer_scripts')
            </body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--jQuery and fancybox files-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">


        {{--Fancy box--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        {{--Fancy box--}}


        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
        <!--Bootstrap JS-->

       {{--font awesome 5--}}
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <style>
            @font-face {
                font-family: 'shKhmerFont';
                src: url("{{asset('storage/fonts/khmer_font/NotoSerifKhmer-Regular.ttf')}}");
            }
            *{
                font-family: Palatino, shKhmerFont, Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
                font-style: italic;
                font-weight: bold;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            #d_container{
                background-image: url('https://res.cloudinary.com/vichhai/image/upload/v1574395007/Sienghong/background_wallpaper_ogfka8.png');
                background-size: 100%;
                background-repeat: repeat-y;
               /* max-width: 1920px;*/
                margin: 0 auto;
                overflow: hidden;
                position: relative;
            }
        </style>

        <link rel="stylesheet" href="{{asset('storage/styles/leaf_falling_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_header_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_menu_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_banner_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_mobile_banner_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_mobile_house_or_land_choice_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_brand_concept_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_sign_up_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_gallery_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_promotion_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_mobile_promotion_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_project_style.css')}}">
        {{--<link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_get_in_touch_style.css')}}">--}}
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_contact_us_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_map_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_location_address_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_footer_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_mobile_side_nav_style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_search_style.css')}}">
    </head>
    <body>

        <div id="d_container">


            @include('index_page_partials.index_search')

            @include('leaf_falling')
            @include('index_page_partials.mobile_side_nav')
            @include('index_page_partials.index_header')
            @include('index_page_partials.index_menu')
            @include('index_page_partials.index_banner')
            @include('index_page_partials.index_mobile_banner')
            @include('index_page_partials.index_mobile_house_or_land_choice')
            @include('index_page_partials.index_brand_concept')
            @include('index_page_partials.index_sign_up')
            @include('index_page_partials.index_gallery')
            @include('index_page_partials.index_promotion')
            @include('index_page_partials.index_mobile_promotion')
            @include('index_page_partials.index_project')
            {{--@include('index_page_partials.index_get_in_touch')--}}
            @include('index_page_partials.index_contact_us')
            @include('index_page_partials.index_map')
            @include('index_page_partials.index_location_address')
            @include('index_page_partials.index_footer')
            @include('index_page_partials.index_banner_pop_up')


        </div>

        <script defer src="{{asset('storage/scripts/index_scripts/index_banner_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/index_scripts/index_gallery_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/index_scripts/index_sign_up_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/index_scripts/index_smooth_scroll_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/index_scripts/index_mobile_side_nav_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/index_scripts/sign_up_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/index_scripts/index_promotion_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/index_scripts/index_search_script.js')}}"></script>
        <script defer src="{{asset('storage/scripts/leaf_falling_script.js')}}"></script>

        <script defer src="{{asset('storage/scripts/index_scripts/scrolling_to_section_script.js')}}"></script>


       {{-- <script>
            window.onload = function () {
                let greenBalloon = document.getElementById('green_balloon');
                console.log(greenBalloon.offsetTop);
            }
        </script>--}}
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SiengHong - House</title>

    <!--Add latest jQuery and fancybox files-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!--Add latest jQuery and fancybox files-->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    {{--font awesome 5--}}
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        @font-face {
            font-family: 'shKhmerFont';
            src: url("{{asset('storage/fonts/khmer_font/NotoSerifKhmer-Regular.ttf')}}");
        }
        *{
            font-family: Palatino,shKhmerFont, Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
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
            /*max-width: 1920px;*/
            margin: 0 auto;
        }

        @media only screen and (min-width: 768px) and (max-width: 1279px){/*tablet*/

        }
        @media only screen and (min-width: 481px) and (max-width: 767px) and (orientation: landscape){/*phone landscape*/

        }
        @media only screen and (max-width: 480px){/*phone portrait*/

        }
    </style>

    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/header_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_mobile_side_nav_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_banner_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/living_and_investing_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_interior_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_exterior_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_payment_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_map_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_location_address_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_footer_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/house_page_styles/house_page_search_style.css')}}">


    <!--for interior detaial-->
    <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_gallery_style.css')}}">
</head>
<body>
<div id="d_container">

    @include('house_page.house_page_search')

    @include('house_page.house_page_mobile_side_nav')
    @include('house_page.header')
    @include('house_page.banner')
    @include('house_page.living_and_investing')
    @include('house_page.house_page_interior')
    @include('house_page.house_page_exterior')
    @include('house_page.house_page_payment')
    @include('house_page.house_page_map')
    @include('house_page.house_page_location_address')
    @include('house_page.house_page_footer')

</div>

<script src="{{asset('storage/scripts/house_page_scripts/house_page_mobile_side_nav_script.js')}}"></script>
<script src="{{asset('storage/scripts/house_page_scripts/house_page_payment_script.js')}}"></script>
<script src="{{asset('storage/scripts/house_page_scripts/house_page_living_investment_script.js')}}"></script>
<script src="{{asset('storage/scripts/house_page_scripts/house_page_gallery_script.js')}}"></script>
<script src="{{asset('storage/scripts/house_page_scripts/house_page_search_script.js')}}"></script>


</body>
</html>

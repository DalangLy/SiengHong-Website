<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SiengHong - Land</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    {{--masterplan preview--}}
    <script src="https://scripts.sirv.com/sirv.js"></script>


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

    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_mobile_side_nav_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/header_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_banner_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_masterplan_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_payment_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_map_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_location_address_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_footer_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/land_page_styles/land_page_search_style.css')}}">
</head>
<body>
<div id="d_container">

    @include('land_page.land_page_search')


    @include('land_page.land_page_mobile_side_nav')
    @include('land_page.header')
    @include('land_page.banner')
    @include('land_page.land_page_masterplan')
    @include('land_page.land_page_payment')
    @include('land_page.land_page_map')
    @include('land_page.land_page_location_address')
    @include('land_page.land_page_footer')


</div>

<script src="{{asset('storage/scripts/land_page_scripts/land_page_search_script.js')}}"></script>
<script src="{{asset('storage/scripts/land_page_scripts/land_page_payment_script.js')}}"></script>
<script src="{{asset('storage/scripts/land_page_scripts/land_page_mobile_side_nav_script.js')}}"></script>

</body>
</html>

<!--Start Header Section-->
<div id="d_header">

    <div id="d_header_container">


        <!--header menu-->
        <div id="d_header_menu_container">

            <!--header social icons (custom icon)-->
            <div id="header_social_icon"><!--show only on pc-->
                <a href=" https://www.instagram.com/boreysienghong/" style="color: white"><img class="header_social_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574923075/Sienghong/iconmonstr-instagram-15_bycauh.svg"></a>
                <a href="https://www.youtube.com/channel/UChj8SjI7KgNTgeEToY0F1IA" style="color: white"><img class="header_social_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574915049/Sienghong/iconmonstr-video-15_q98cvp.svg"></a>
                <a href="https://www.facebook.com/BoreySiengHong/" style="color: white"><img class="header_social_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574915049/Sienghong/iconmonstr-facebook-5_nz6rlv.svg"></a>
                <a href="tel:+855 15 916 333" style="text-decoration: none; color: white" rel="nofollow"><img class="header_social_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574915049/Sienghong/iconmonstr-phone-9_vzhxmp.svg"></a>
                <a href="mailto:SaleSiengHong@gmail.com" target="_top" style="color: white"><img class="header_social_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574915049/Sienghong/iconmonstr-email-11_bsl4ak.svg"></a>
            </div>

            <!--header search icon and language-->
            <div id="header_search_and_language_container">
                <div id="desktop_header_language_switcher_container">

                    <p style="padding: 0; margin: 0; font-size: 20px; color: white">
                        <a href="{{route('land', 'en')}}" @if(request()->segment(1) == 'en') class="language_active" @endif class="text-white mx-1" style="text-decoration: none">EN</a>|<a href="{{route('land', 'kh')}}" @if(request()->segment(1) == 'kh') class="language_active" @endif class="text-white mx-1" style="text-decoration: none">KH</a>
                    </p>
                </div>
                <div id="btnSearch" style="display: none; color: white;cursor: pointer;"><img class="header_social_icon" style="width: 21.2px; height: 21.2px;" src="https://res.cloudinary.com/vichhai/image/upload/v1574395012/Sienghong/search_icon_new_om5qs8.svg"></div>
            </div>

            <!--mobile hamburger button (show only on mobile)-->
            <div id="mobile_hamburger_button" onclick="" style="color: white;cursor: pointer;"><img class="header_social_icon" style="width: 7vw" src="https://res.cloudinary.com/vichhai/image/upload/v1574395010/Sienghong/hamburger_button_xlgxim.svg"></div>
        </div>


        <!--header logo-->
        <div id="d_header_logo_container">
            <div class="logo_side_line"></div>
            <div id="d_header_logo">
                <a href="{{route('home', app()->getLocale())}}" style="margin: 0; padding: 0">
                    <img src="https://res.cloudinary.com/vichhai/image/upload/v1574395012/Sienghong/seanghong_logo_tl5qgo.svg" alt="">
                </a>
            </div>
            <div class="logo_side_line"></div>
        </div>
    </div>

</div>
<!--End Header Section-->

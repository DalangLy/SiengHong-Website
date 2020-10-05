<!--Start Banner Section-->
<div id="d_banner">
    <div id="d_banner_container">


        <!--left size banner link-->
        <a id="desktop_banner_house_link" href="{{route('house', app()->getLocale())}}" style="display: none"></a>
        <div id="HLink" onclick="gg('one')" class="d_banner_side_link home_link">
            <img class="d_banner_side_image" src="https://res.cloudinary.com/vichhai/image/upload/v1574395007/Sienghong/banner_home_link_background-compressor_qxgkk4.jpg" alt="">
            <div id="HLayer" class="d_banner_side_link_overlay d_banner_side_link_home_overlay"></div>
            <div class="d_banner_side_link_icon_container home_icon">
                <img class="d_banner_side_link_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574395007/Sienghong/banner_home_icon_a4g2cy.svg" alt="">
                <h2 class="d_banner_side_link__icon_title">{{__('sh_index_language.house')}}</h2>
            </div>
        </div>

        <!--center banner background-->
        <div id="d_banner_background">
            <img id="d_banner_background_image" src="https://res.cloudinary.com/vichhai/image/upload/v1574395008/Sienghong/banner_background-compressor_qjm2pp.jpg" alt="">
        </div>

        <!--right size banner link-->
        <a id="desktop_banner_land_link" href="{{route('land', app()->getLocale())}}" style="display: none"></a>
        <div id="lLink" onclick="gg('two')" class="d_banner_side_link land_link">
            <img class="d_banner_side_image" src="https://res.cloudinary.com/vichhai/image/upload/v1574395008/Sienghong/banner_land_link_background-compressor_orojp4.jpg" alt="">
            <div id="lLayer" class="d_banner_side_link_overlay d_banner_side_link_land_overlay"></div>
            <div class="d_banner_side_link_icon_container land_icon">
                <img class="d_banner_side_link_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574395007/Sienghong/banner_land_icon_abqdzm.svg" alt="">
                <h2 class="d_banner_side_link__icon_title">{{__('sh_index_language.land')}}</h2>
            </div>
        </div>

    </div>
</div>

<!--End Banner Section-->

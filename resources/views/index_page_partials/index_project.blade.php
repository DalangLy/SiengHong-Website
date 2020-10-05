<!--start project section section-->
<div id="d_project">
    <div id="d_project_container">

        <!--top layout-->
        <div>
            <!--title-->
            <div id="d_project_title_container">
                <h3 id="d_project_title">{{__('sh_index_language.project_title')}}</h3>
                <div id="d_project_title_border"></div>
            </div>
        </div>

        <!--bottom layout-->
        <div id="project_bottom_layout">

            <div id="project_choice">

                <!--home project-->
                <a href="{{route('house', app()->getLocale())}}" class="project_choice_item_container_transparent">
                    <div class="project_choice_item_icon_container"><!--icon-->
                        <img class="project_choice_item_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574395007/Sienghong/banner_home_icon_a4g2cy.svg" alt="">
                        <h4 class="project_choice_item_icon_title">{{__('sh_index_language.house')}}</h4>
                    </div>

                    <div class="project_choice_item_image_container"><!--project item background image-->
                        <div class="project_choice_item_overlay project_choice_item_home_overlay_color"></div>
                        <img class="project_choice_item_image" src="https://res.cloudinary.com/vichhai/image/upload/v1574395011/Sienghong/project_one_background-compressor_qrzhde.jpg" alt="">
                    </div>
                </a>

                <!--land project-->
                <a href="{{route('land', app()->getLocale())}}" class="project_choice_item_container_transparent">
                    <div class="project_choice_item_icon_container"><!--icon-->
                        <img class="project_choice_item_icon" src="https://res.cloudinary.com/vichhai/image/upload/v1574395007/Sienghong/banner_land_icon_abqdzm.svg" alt="">
                        <h4 class="project_choice_item_icon_title">{{__('sh_index_language.land')}}</h4>
                    </div>

                    <div class="project_choice_item_image_container"><!--project item background image-->
                        <div class="project_choice_item_overlay project_choice_item_land_overlay_color"></div>
                        <img class="project_choice_item_image" src="https://res.cloudinary.com/vichhai/image/upload/v1574395011/Sienghong/project_two_background-compressor_qh0mtx.jpg" alt="">
                    </div>
                </a>

            </div>

        </div>
    </div>
</div>
<!--end project section section-->

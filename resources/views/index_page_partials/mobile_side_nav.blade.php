<div id="mobile_side_nav_overlay">
</div>

<div id="mobile_side_nav">

    <div id="mobile_side_menu_container" style="height: 100%">
        <div class="w-100 h-100 d-flex flex-column position-relative">

            <div>{{--close mobile side nav icon--}}
                <h2 id="mobile_side_nav_close_btn" style="padding: 0.5rem 1rem; display: inline-block">&times;</h2>
            </div>

            <div style="width: 100%">{{--mobile menu--}}
                <div id="mobile_menu_item_container">
                    <div class="mobile_menu_item" data-link_id="brand_concept">{{__('sh_index_language.brand_concept')}}</div>
                    <div class="mobile_menu_item" data-link_id="gallery">{{__('sh_index_language.gallery')}}</div>
                    <div class="mobile_menu_item" data-link_id="promotion">{{__('sh_index_language.promotion')}}</div>
                    <div class="mobile_menu_item" data-link_id="get_in_touch">{{__('sh_index_language.get_in_touch')}}</div>
                </div>
            </div>


            <div style="height: auto; border-bottom: 1px solid gray; width: 100%; position: absolute; bottom: 0; padding: 10px 0;">{{--mobile language switch--}}
                <div class="h-100 w-100 px-3 d-flex flex-column">
                    <a id="mobile_home_language_kh" href="{{route('home', 'kh')}}" style="display: none"></a>
                    <div onclick="document.getElementById('mobile_home_language_kh').click()" class="custom-control custom-radio py-3">
                        <input type="radio" @if(Request::path() == 'kh') checked="{{'checked'}}" @endif class="custom-control-input" id="mobileLanguageSwitcherKh" name="radio-stacked1" required>
                        <label class="custom-control-label" for="mobileLanguageSwitcherKh">
                            <img style="width: 30px; vertical-align: middle" src="https://upload.wikimedia.org/wikipedia/commons/8/83/Flag_of_Cambodia.svg" alt="">
                            <span class="mx-1">KHMER</span>
                        </label>
                    </div>

                    <div style="height: 1px; background-color: #044B38; width: 100%"></div>

                    <a id="mobile_home_language_en" href="{{route('home', 'en')}}" style="display: none"></a>
                    <div onclick="document.getElementById('mobile_home_language_en').click()" class="custom-control custom-radio  py-3">
                        <input type="radio" @if(Request::path() == 'en') checked="{{'checked'}}" @endif class="custom-control-input" id="mobileLanguageSwitcherEn" name="radio-stacked1" required>
                        <label class="custom-control-label" for="mobileLanguageSwitcherEn">
                            <img style="width: 30px; vertical-align: middle" src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="">
                            <span class="mx-1">ENGLISH</span>
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


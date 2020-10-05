<div id="house_page_mobile_side_nav_overlay">
</div>

<div id="mobile_side_nav">

    <div id="mobile_side_menu_container">
        <div class="w-100 h-100 d-flex flex-column">

            <div>{{--close mobile side nav icon--}}
                <h3 id="mobile_side_nav_close_btn" style="padding: 0.5rem 1rem; display: inline-block">&times;</h3>
            </div>




            <div style="height: auto; width: 100%;">{{--mobile language switch--}}
                <div class="h-100 w-100 px-3 d-flex flex-column">
                    <a id="mobile_home_language_kh" href="{{route('house', 'kh')}}" style="display: none"></a>
                    <div onclick="document.getElementById('mobile_home_language_kh').click()" class="custom-control custom-radio py-3">
                        <input type="radio" @if(request()->segment(1) == 'kh') checked="{{'checked'}}" @endif class="custom-control-input" id="mobileLanguageSwitcherKh" name="radio-stacked1" required>
                        <label class="custom-control-label" for="mobileLanguageSwitcherKh">
                            <img style="width: 30px; vertical-align: middle" src="https://upload.wikimedia.org/wikipedia/commons/8/83/Flag_of_Cambodia.svg" alt="">
                            <span class="mx-1">KHMER</span>
                        </label>
                    </div>

                    <div style="height: 1px; background-color: #044B38; width: 100%"></div>

                    <a id="mobile_home_language_en" href="{{route('house', 'en')}}" style="display: none"></a>
                    <div onclick="document.getElementById('mobile_home_language_en').click()" class="custom-control custom-radio  py-3">
                        <input type="radio" @if(request()->segment(1) == 'en') checked="{{'checked'}}" @endif class="custom-control-input" id="mobileLanguageSwitcherEn" name="radio-stacked1" required>
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


<div id="house_page_payment">
    <div id="house_page_payment_container">
        <div id="house_page_payment_title_container">
            <h1 id="house_page_payment_title">{{__('sh_house_page_language.payment')}}</h1>
            <div id="house_page_payment_title_border"></div>
        </div>

        <div id="house_page_payment_method_container">
            <div><span id="hp_pay_full_btn" class="hp_payment_method_choice hp_payment_method_choice_active">{{__('sh_house_page_language.pay_full')}}</span>|<span id="hp_installation_btn" class="hp_payment_method_choice">{{__('sh_house_page_language.installment')}}</span></div>
        </div>

        <div id="house_page_payment_content">

            <div id="house_pay_full_section">
                <div id="mobile_house_pay_full" style="background-color: transparent">
                    {{--mobile land pay full image--}}
                    <div style="width: 100%; margin: 0 auto;">

                        @include('house_page.house_page_payment_partials.house_page_payment_mobile')

                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574766276/Sienghong/mobile_land_price_e8lewx.svg" alt="">--}}
                    </div>
                    {{--mobile land pay full image--}}
                </div>
                <div id="desktop_house_pay_full" style="background-color: transparent">
                    {{--desktop land pay full image--}}

                    <div style="width: 70%; margin: 0 auto;">

                        @include('house_page.house_page_payment_partials.house_page_payment')

                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574766276/Sienghong/desktop_land_price_rqxkwo.svg" alt="">--}}
                    </div>
                    {{--desktop land pay full image--}}
                </div>
            </div>

            <div id="house_installation_section" class="house_installation_hide">
                <div id="mobile_house_installation" style="background-color: transparent">
                    {{--mobile installation image--}}
                    <div style="width: 100%; margin: 0 auto;">

                        @include('house_page.house_page_payment_partials.house_page_installment_mobile')

                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574764307/Sienghong/mobile_land_installation_x9csbr.svg" alt="">--}}
                    </div>
                    {{--mobile installation image--}}
                </div>
                <div id="desktop_house_installation" style="background-color: transparent;">
                    {{--desktop installation image--}}
                    <div style="width: 100%; margin: 0 auto;">

                        @include('house_page.house_page_payment_partials.house_page_installment')


                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574766275/Sienghong/desktop_land_installation_rqg34o.svg" alt="">--}}
                    </div>
                    {{--desktop installation image--}}
                </div>
            </div>

        </div>
    </div>
</div>

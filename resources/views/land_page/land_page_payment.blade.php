<div id="land_page_payment">
    <div id="land_page_payment_container">
        <div id="land_page_payment_title_container">
            <h1 id="land_page_payment_title">{{__('sh_land_page_language.payment')}}</h1>
            <div id="land_page_payment_title_border"></div>
        </div>

        <div id="land_page_payment_method_container">
            <div><span id="lp_pay_full_btn" class="lp_payment_method_choice lp_payment_method_choice_active">{{__('sh_land_page_language.pay_full')}}</span>|<span id="lp_installation_btn" class="lp_payment_method_choice">{{__('sh_land_page_language.installment')}}</span></div>
        </div>

        <div id="land_page_payment_content">

            <div id="land_pay_full_section">
                <div id="mobile_land_pay_full" style="background-color: transparent">
                    {{--mobile land pay full image--}}
                    <div style="width: 100%; margin: 0 auto;">

                        @include('land_page.land_page_payment_partials.land_page_payfull_mobile')

                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574766276/Sienghong/mobile_land_price_e8lewx.svg" alt="">--}}
                    </div>
                    {{--mobile land pay full image--}}
                </div>
                <div id="desktop_land_pay_full" style="background-color: transparent">
                    {{--desktop land pay full image--}}
                    <div style="width: 70%; margin: 0 auto;">

                        @include('land_page.land_page_payment_partials.land_page_payfull')

                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574766276/Sienghong/desktop_land_price_rqxkwo.svg" alt="">--}}
                    </div>
                    {{--desktop land pay full image--}}
                </div>
            </div>

            <div id="land_installation_section" class="land_installation_hide">
                <div id="mobile_land_installation" style="background-color: transparent">
                    {{--mobile installation image--}}
                    <div style="width: 100%; margin: 0 auto;">

                        @include('land_page.land_page_payment_partials.land_page_installment_mobile')

                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574764307/Sienghong/mobile_land_installation_x9csbr.svg" alt="">--}}
                    </div>
                    {{--mobile installation image--}}
                </div>
                <div id="desktop_land_installation" style="background-color: transparent;">
                    {{--desktop installation image--}}
                    <div style="width: 100%; margin: 0 auto;">

                        @include('land_page.land_page_payment_partials.land_page_installment')

                        {{--<img style="width: 100%;" src="https://res.cloudinary.com/vichhai/image/upload/v1574766275/Sienghong/desktop_land_installation_rqg34o.svg" alt="">--}}
                    </div>
                    {{--desktop installation image--}}
                </div>
            </div>

        </div>
    </div>
</div>

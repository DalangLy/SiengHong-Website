<div id="promotion_section" class="position-relative">
    <div id="promotion_section_clip" class="w-100 d-flex bg-secondary position-relative">

        <div id="promotion_container" class="w-100 h-100 d-flex">{{--whole container--}}

            <div class="w-50" style="margin: 4% 0">{{--left layout--}}

                {{--promotion title--}}
                <div class="d-inline-block">
                    <h3 id="promotion_title">{{__('sh_index_language.promotion_title')}}</h3>
                    <div id="promotion_title_border"></div>
                </div>

            </div>

            <div class="w-50" style="margin: 1% 0">{{--Right Layout--}}
                <div class="w-100 d-flex flex-wrap flex-row-reverse">



                    <div class="promotion_item rounded d-flex align-items-center justify-content-center" style="height: 20vw; width: 35%; margin: 0 10% 5.5% 5.5%; cursor: pointer;">
                        <div class="d-inline-block w-100 h-100" style="overflow: hidden">
                            <a id="promo_discount_five_percent" class="fancybox w-100 h-100" href="{{asset('storage/promotion_images/five_percents.png')}}" style="overflow: hidden">
                                <img src="{{asset('storage/promotion_images/five_percents.png')}}"  alt="" style="width:100%;height:100%"/>
                            </a>
                        </div>
                    </div>

                    <div class="invisible promotion_item rounded d-flex align-items-center justify-content-center" style="height: 20vw; width: 35%; margin: 0 0 0 5.5%; cursor: pointer;">
                        <div class="d-inline-block w-100 h-100" style="overflow: hidden">
                            <a id="promo_reward" class="fancybox w-100 h-100" href="{{asset('storage/promotion_images/phone & TV.png')}}" style="overflow: hidden">
                                <img src="{{asset('storage/promotion_images/phone & TV.png')}}"  alt="" style="width:100%;height:100%"/>
                            </a>
                        </div>
                    </div>{{--not visible--}}


                    <div class="promotion_item rounded d-flex align-items-center justify-content-center" style="height: 20vw; width: 35%; margin: 0 10% 0 5.5%; cursor: pointer;">
                        <div class="d-inline-block w-100 h-100" style="overflow: hidden">
                            <a class="fancybox w-100 h-100" href="{{asset('storage/promotion_images/phone & TV.png')}}" style="overflow: hidden">
                                <img src="{{asset('storage/promotion_images/phone & TV.png')}}"  alt="" style="width:100%;height:100%"/>
                            </a>
                        </div>
                    </div>





                    {{--<div data-toggle="modal" data-target="#exampleModal" class="promotion_item rounded d-flex align-items-center justify-content-center" style="height: 14.7vw; width: 26%; margin: 0 0 5.5% 5.5%; cursor: pointer;">
                        --}}{{--Text--}}{{--
                        <div class="d-inline-block">
                            <h5 style="font-size: 1.5vw;">{{__('sh_index_language.promotion_detail')}}</h5>
                            <div style="border-bottom: 1px solid black;" class="w-50 mx-auto"></div>
                        </div>
                    </div>

                    <div data-toggle="modal" data-target="#exampleModal" class="promotion_item rounded d-flex align-items-center justify-content-center" style="height: 14.7vw; width: 26%; margin: 0 0 5.5% 5.5%; cursor: pointer;">
                        --}}{{--Text--}}{{--
                        <div class="d-inline-block">
                            <h5 style="font-size: 1.5vw;">{{__('sh_index_language.promotion_detail')}}</h5>
                            <div style="border-bottom: 1px solid black;" class="w-50 mx-auto"></div>
                        </div>
                    </div>--}}

                </div>
                <div class="w-100 d-flex justify-content-end" style="margin-top: 8%">
                    {{--<button class="btn" style="border: 1px solid #044B38; font-size: 1.5vw; padding: 0 2vw">See all</button>--}}
                </div>
            </div>

        </div>



        <img class="position-absolute" style="z-index: 2; width: 70%; bottom: 0" src="https://res.cloudinary.com/vichhai/image/upload/v1574395012/Sienghong/promotion_image-compressor_efvuhh.png" alt="">

        <img class="w-100 h-100 position-absolute" style="object-fit: cover" src="https://res.cloudinary.com/vichhai/image/upload/v1574395011/Sienghong/promotion_background_hmdfof.jpg" alt="">
        <div id="promotion_overlay"></div>
    </div>

    {{--Baloon--}}
    <img id="green_balloon" class="position-absolute" style="z-index: 3;" src="https://res.cloudinary.com/vichhai/image/upload/v1574395009/Sienghong/gold_balloon-compressor_byo3kw.png" alt="">
    <img id="yellow_balloon" class="position-absolute" style="z-index: 3;" src="https://res.cloudinary.com/vichhai/image/upload/v1574395009/Sienghong/green_balloon-compressor_guvsro.png" alt="">

</div>




{{--Modal--}}
{{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Promotion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">
                <h3>No Promotion Yet</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>--}}


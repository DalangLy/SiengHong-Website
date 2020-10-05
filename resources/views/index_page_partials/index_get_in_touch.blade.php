<div id="get_in_touch_section" class="w-100">

    <div id="get_in_touch_content">

        {{--1st layout--}}
        <div id="get_in_touch_title_container" class="w-100">

            {{--Title--}}
            <div id="get_in_touch_title" class="d-inline-block">
                <h3 id="get_in_touch_title">{{__('sh_index_language.get_in_touch_title')}}</h3>
                <div id="get_in_touch_title_border"></div>{{--Title Bottom Border--}}
            </div>

        </div>

        {{--2nd layout--}}
        <div id="get_in_touch_input_form_container" class="w-100 my-4">
            <h5 class="w-100 mx-auto text-center mb-5">{{__('sh_index_language.get_in_touch_slogan')}}</h5>

            <h4 class="get_in_touch_mobile_phone" style="text-align: center; width: 100%; margin-bottom: 0rem">TEL : <a href="tel:+855 15 916 333" style="text-decoration: none; color: black" rel="nofollow">015-916-333</a></h4>
            <h4 class="get_in_touch_mobile_phone" style="text-align: center; width: 100%; margin-bottom: 0rem">TEL : <a href="tel:+855 61 916 333" style="text-decoration: none; color: black" rel="nofollow">061-916-333</a></h4>
            <h4 class="get_in_touch_mobile_phone" style="text-align: center; width: 100%; margin-bottom: 3rem">TEL : <a href="tel:+855 90 916 333" style="text-decoration: none; color: black" rel="nofollow">090-916-333</a></h4>


            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">{{__('sh_index_language.name')}}</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="txtName" placeholder="{{__('sh_index_language.name')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">{{__('sh_index_language.surName')}}</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="txtSurName" placeholder="{{__('sh_index_language.surName')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">{{__('sh_index_language.email')}}</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="txtEmail" placeholder="{{__('sh_index_language.email')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">{{__('sh_index_language.phone')}}</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="txtPhone" placeholder="{{__('sh_index_language.phone')}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">{{__('sh_index_language.interest_in')}}</label>
                <div class="col-md-10 d-flex flex-row">
                    <div class="custom-control custom-radio mr-5">
                        <input type="radio" checked class="custom-control-input" id="customControl" value="House" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControl">{{__('sh_index_language.house')}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControl1" value="Land" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControl1">{{__('sh_index_language.land')}}</label>
                    </div>
                </div>
            </div>

            <div class="form-group row mt-5">
                <div class="col-md-7"></div>
                <div class="col-md-2">
                    <div class="form-group">
                        <button style="display: none" id="loadingSubmitButton" class="btn btn-primary form-control" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Sending...
                        </button>
                        <button id="GetInTouchSubmitButton" onclick="submitSignUp()" class="btn btn-success form-control">Submit</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <a href="{{route('facebook_login', app()->getLocale())}}" style="color: white; text-decoration: none; padding: 0; margin: 0">
                            <button class="btn btn-primary form-control">Login with facebook</button>
                        </a>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>




<!-- Message Modal -->
//<div class="modal fade" id="exampleModalCenterOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
//    <div class="modal-dialog" role="document">
//        <div class="modal-content">
//
//            <div class="modal-body d-flex justify-content-center">
//                <div class="d-inline-block mx-auto">
//
//                    <h2 id="alertTitle" class="text-success">Sent!</h2>
//                    <div class="text-center pb-3">
//                        <i class="fas fa-check-circle text-success fa-3x"></i>
//                    </div>
//                    <h5 class="mb-5 font-weight-bold text-center">Thank you for registered!</h5>
//
//                </div>
//            </div>
//
//        </div>
//    </div>
//</div>
//
//<!-- Message Modal -->
//<div class="modal fade" id="alertMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
//    <div class="modal-dialog" role="document">
//        <div class="modal-content">
//            <div class="modal-body d-flex justify-content-center">
//                <div class="d-inline-block mx-auto">
//
//                    <h2 id="alertTitle">Warning!</h2>
//                    <div class="text-center pb-3">
//                        <i class="fas fa-times-circle text-danger fa-3x"></i>
//                    </div>
//                    <h5 class="mb-5 font-weight-bold">Please fill all data!</h5>
//
//                </div>
//            </div>
//        </div>
//    </div>
//</div>

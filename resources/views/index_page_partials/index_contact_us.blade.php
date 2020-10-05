<div id="get_in_touch_section" style="background-color: white">
    <div id="d_contact_us_container" style="color: #044B38">


        <h3 id="contact_us_title">{{__('sh_index_language.get_in_touch_title')}}</h3>

        <div id="d_contact_us_content" style="margin-top: 20px;">
            <div class="d_contact_content_item">{{--item 1--}}
                <img class="w-100 h-100" style="object-fit: contain" src="https://res.cloudinary.com/vichhai/image/upload/v1576058791/Sienghong/Road-Number-copy-3-compressor_cjxvqh.jpg" alt="">
            </div>
            <div class="d_contact_content_item">{{--item 2--}}

                <h4 class="font-weight-bold">{{__('sh_index_language.send_us_a_message')}}</h4>
                <div class="form-group">
                    <label for="txtName">{{__('sh_index_language.name')}}</label>
                    <input type="text" class="form-control" id="txtName" placeholder="{{__('sh_index_language.name')}}">
                </div>
                <div class="form-group">
                    <label for="txtEmail">{{__('sh_index_language.email')}}</label>
                    <input type="email" class="form-control" id="txtEmail" placeholder="{{__('sh_index_language.email')}}">
                </div>
                <div class="form-group">
                    <label for="txtPhone">{{__('sh_index_language.phone')}}</label>
                    <input type="text" class="form-control" id="txtPhone" placeholder="{{__('sh_index_language.phone')}}">
                </div>
                <div class="form-group">
                    <label for="customControl">{{__('sh_index_language.interest_in')}}</label>
                    <div class="col-md-10 d-flex flex-row">
                        <div class="custom-control custom-radio ml-2 mr-5 p-0">
                            <input type="radio" checked class="custom-control-input" id="customControl" value="House" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControl">{{__('sh_index_language.house')}}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControl1" value="Land" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControl1">{{__('sh_index_language.land')}}</label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-5">
                    <div class="form-group">
                        <button style="display: none" id="loadingSubmitButton" class="btn btn-primary form-control" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Sending...
                        </button>
                        <button id="GetInTouchSubmitButton" onclick="submitSignUp()" class="btn btn-success form-control">Submit</button>
                    </div>
                    <div class="form-group">

                        <button class="btn btn-primary form-control" data-toggle="modal" data-target="#enterUserPhoneNumberModalOne">{{__('sh_index_language.sign_up_with_fb_btn')}}</button>
                        <!--<a id="home_facebook_login_btn" href="{{route('facebook_login', app()->getLocale())}}" style="color: white; text-decoration: none; padding: 0; margin: 0">
                            <button class="btn btn-primary form-control">Login with facebook</button>
                        </a>-->
                    </div>
                </div>



            </div>
            <div class="d_contact_content_item">{{--item 3--}}

                <div class="mb-4">
                    <h4 class="font-weight-bold">{{__('sh_index_language.contact_info')}}</h4>
                    <div class="d-flex mb-3 ml-2 mt-3">
                        <div class="d-flex justify-content-center align-items-center pr-2">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <a href="tel:+855 15 916 333" style="text-decoration: none; color: #044B38;" rel="nofollow"><p class="m-0 p-0" style="font-weight: normal">(+855) 15 916 333</p></a>
                            <a href="tel:+855 61 916 333" style="text-decoration: none; color: #044B38;" rel="nofollow"><p class="m-0 p-0" style="font-weight: normal">(+855) 61 916 333</p></a>
                            <a href="tel:+855 90 916 333" style="text-decoration: none; color: #044B38;" rel="nofollow"><p class="m-0 p-0" style="font-weight: normal">(+855) 90 916 333</p></a>
                        </div>
                    </div>

                    <div class="d-flex mb-3 ml-2">
                        <div class="d-flex justify-content-center align-items-center pr-2">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
<p class="m-0 p-0" style="font-weight: normal">{{__('sh_index_language.new_address')}}</p>
                        </div>
                    </div>

                    <div class="d-flex ml-2">
                        <div class="d-flex justify-content-center align-items-center pr-2">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div>
                            <a href="mailto:SaleSiengHong@gmail.com" target="_top" style="color: #044B38;"><p class="m-0 p-0" style="font-weight: normal">SaleSiengHong@gmail.com</p></a>
                        </div>
                    </div>
                </div>


                <div>
                    <h4 class="font-weight-bold">Social Media</h4>
                    <div class="d-flex flex-row justify-content-start align-items-center pr-2 ml-2">
                        <a href="https://www.facebook.com/BoreySiengHong/" style="color: #044B38; background-color: rgba(50,50,50,0.3); margin-right: 5px"><i class="fab fa-facebook-f" style="padding: 10px 14px"></i></a>
                        <a href=" https://www.instagram.com/boreysienghong/" style="color: #044B38; background-color: rgba(50,50,50,0.3); margin-right: 5px"><i class="fab fa-instagram" style="padding: 10px 14px"></i></a>
                        <a href="https://www.youtube.com/channel/UChj8SjI7KgNTgeEToY0F1IA" style="color: #044B38; background-color: rgba(50,50,50,0.3); margin-right: 5px"><i class="fab fa-youtube" style="padding: 10px 10px"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<!-- Message Modal -->
<div class="modal fade" id="exampleModalCenterOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body d-flex justify-content-center">
                <div class="d-inline-block mx-auto">

                    <h2 id="alertTitle" class="text-success">Sent!</h2>
                    <div class="text-center pb-3">
                        <i class="fas fa-check-circle text-success fa-3x"></i>
                    </div>
                    <h5 class="mb-5 font-weight-bold text-center">Thank you for registered!</h5>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Message Modal -->
<div class="modal fade" id="alertMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body d-flex justify-content-center">
                <div class="d-inline-block mx-auto">

                    <h2 id="alertTitle">Warning!</h2>
                    <div class="text-center pb-3">
                        <i class="fas fa-times-circle text-danger fa-3x"></i>
                    </div>
                    <h5 class="mb-5 font-weight-bold">Please fill all data!</h5>

                </div>
            </div>
        </div>
    </div>
</div>











<!-- Input User Phone Number Modal -->
<div class="modal fade" id="enterUserPhoneNumberModalOne" tabindex="-1" role="dialog" aria-labelledby="enterUserPhoneNumberModalOneLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enterUserPhoneNumberModalOneLabel">ENTER PHONE NUMBER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">


                <div class="form-group w-100">
                    <label for="txtEnterUserPhoneNumberOne">Enter Your Phone Number</label>
                    <input type="number" class="form-control" id="txtEnterUserPhoneNumberOne" aria-describedby="emailHelp" placeholder="Enter Your Phone Number">
                    <small id="phoneNumberValidTextOne" class="d-none" style="color: red">The user phone number field is required.</small>
                </div>


            </div>
            <div class="modal-footer d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>

                <button onclick="btnLoginWithFacebookClick()" class="btn btn-primary mx-3">OK</button>
                <a id="loginWithFacebookLinkOne" href="{{route('facebook_login', app()->getLocale())}}" style="display: none; color: white; text-decoration: none; padding: 0; margin: 0">
                    <button class="btn btn-primary mx-3">OK</button>
                </a>
            </div>
        </div>
    </div>
</div>


<script>
    function btnLoginWithFacebookClick(){
        let data = {
            userPhoneNumber: $('#txtEnterUserPhoneNumberOne').val(),
        };
        (async () => {
            await fetch('api/beforeLoginWithFacebook', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => {
                if(response.status === 200){
                    //console.log(response);
                    document.getElementById('loginWithFacebookLinkOne').click();
                    return response.json();
                }
                else{
                    //console.log(response);
                    if(response.status === 422){
                        let test = document.getElementById('phoneNumberValidTextOne');
                        test.classList.remove('d-none');
                    }
                    return response.json();
                }
            }).then(data => {
                if(data !== ""){
                    if(data.errors.userPhoneNumber.length > 0){
                        document.getElementById('phoneNumberValidTextOne').innerText = data.errors.userPhoneNumber[0];
                    }
                }
                //console.log(JSON.stringify(data));
            }).catch(err => {
                console.log(err);
            });
        })();
    }
</script>

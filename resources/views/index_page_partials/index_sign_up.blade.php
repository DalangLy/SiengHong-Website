<!--Start Sign up Section-->
<div id="d_sign_up">
    <div class="d-flex flex-column my-5" style="z-index: 1;">
        <h4 class="text-center" style="color: darkgreen">{{__('sh_index_language.sign_up_slogan')}}</h4>
        <div class="d-flex flex-row py-2">
            <button id="sign_up_btn" class="btn btn-success mx-3">{{__('sh_index_language.sign_up_btn')}}</button>
            <button class="btn btn-primary mx-3" data-toggle="modal" data-target="#enterUserPhoneNumberModal">{{__('sh_index_language.sign_up_with_fb_btn')}}</button>
            <!--<a href="{{route('facebook_login', app()->getLocale())}}" style="color: white; text-decoration: none; padding: 0; margin: 0">
                <button class="btn btn-primary mx-3">{{__('sh_index_language.sign_up_with_fb_btn')}}</button>
            </a>-->
        </div>
    </div>
    <img class="w-100 h-100 position-absolute" style="object-fit: cover;" src="https://res.cloudinary.com/vichhai/image/upload/v1574395012/Sienghong/sign_up_background_u1jbwv.jpg" alt="">
    <div class="w-100 h-100 position-absolute" style="background-color: rgba(200,200,200,0.8);"></div>
</div>
<!--End Sign up Section-->





<!-- Input User Phone Number Modal -->
<div class="modal fade" id="enterUserPhoneNumberModal" tabindex="-1" role="dialog" aria-labelledby="enterUserPhoneNumberModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enterUserPhoneNumberModalLabel">ENTER PHONE NUMBER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">


                <div class="form-group w-100">
                    <label for="txtEnterUserPhoneNumber">Enter Your Phone Number</label>
                    <input type="number" class="form-control" id="txtEnterUserPhoneNumber" aria-describedby="emailHelp" placeholder="Enter Your Phone Number">
                    <small id="phoneNumberValidText" class="d-none" style="color: red">The user phone number field is required.</small>
                </div>


            </div>
            <div class="modal-footer d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>

                <button onclick="btnLoginWithFacebookClick1()" class="btn btn-primary mx-3">OK</button>
                <a id="loginWithFacebookLink" href="{{route('facebook_login', app()->getLocale())}}" style="display: none; color: white; text-decoration: none; padding: 0; margin: 0">
                    <button class="btn btn-primary mx-3">OK</button>
                </a>
            </div>
        </div>
    </div>
</div>


<script>
    function btnLoginWithFacebookClick1(){
        let data = {
            userPhoneNumber: $('#txtEnterUserPhoneNumber').val(),
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
                    document.getElementById('loginWithFacebookLink').click();
                    return response.json();
                }
                else{
                    //console.log(response);
                    if(response.status === 422){
                        let test = document.getElementById('phoneNumberValidText');
                        test.classList.remove('d-none');
                    }
                    return response.json();
                }
            }).then(data => {
                if(data !== ""){
                    if(data.errors.userPhoneNumber.length > 0){
                        document.getElementById('phoneNumberValidText').innerText = data.errors.userPhoneNumber[0];
                    }
                }
                //console.log(JSON.stringify(data));
            }).catch(err => {
                console.log(err);
            });
        })();
    }
</script>

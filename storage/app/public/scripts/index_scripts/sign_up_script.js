/*Start Test Drive Script*/
/*function signUpWithFacebook(){
    $('#exampleModalCentergg').modal('show');
}*/
function submitSignUp(){
    let data = {
        name: $('#txtName').val(),
        //surName: $('#txtSurName').val(),
        phone: $('#txtPhone').val(),
        email: $('#txtEmail').val(),
        landOrHouseValue: $("input[name='radio-stacked']:checked").val(),
    };
    if(isValid()) {
        showLoading(true);
        (async () => {
            await fetch('api/submitForm', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => {
                if(response.status === 200){
                    console.log(response);
                    return response.json();
                }
                else{
                    console.log(response);
                    showLoading(false);
                    return response.json();
                }
            }).then(data => {
                //console.log(JSON.stringify(data));
                showLoading(false);
                console.log("hello");
                $('#exampleModalCenterOne').modal('show');
            }).catch(err => {
                console.log(err);
                showLoading(false);
            });
        })();
    }
    else{
        showLoading(false);
        $('#alertMessage').modal('show');
    }
}
function showLoading(showing) {
    $('#loadingSubmitButton').css('display', showing?'block':'none');
    $('#GetInTouchSubmitButton').css('display', showing?'none':'block');
}
function isValid(){
    let landOrHouseValue = $("input[name='radio-stacked']:checked").val();
    let name = $('#txtName');
    //let surName = $('#txtSurName');
    let phone = $('#txtPhone');
    let email = $('#txtEmail');

    let isOK = true;
    if(name.val() === ''){
        isOK = false;
    }
    /*if(surName.val() === ''){
        isOK = false;
    }*/
    if(phone.val() === ''){
        isOK = false;
    }
    if(email.val() === ''){
        isOK = false;
    }
    return isOK;
}
/*End Test Drive Script*/

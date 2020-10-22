function landPageRunOnLoad(){
    let lPPayFullButton = document.getElementById('lp_pay_full_btn');
    let lPInstallationButton = document.getElementById('lp_installation_btn');

    lPPayFullButton.addEventListener('click', function () {
        lPPayFullButton.classList.add('lp_payment_method_choice_active');
        lPInstallationButton.classList.remove('lp_payment_method_choice_active');

        /*show content*/
        document.getElementById('land_installation_section').classList.add('land_installation_hide');
        document.getElementById('land_pay_full_section').classList.remove('land_installation_hide');
    });
    lPInstallationButton.addEventListener('click', function () {
        lPInstallationButton.classList.add('lp_payment_method_choice_active');
        lPPayFullButton.classList.remove('lp_payment_method_choice_active');

        /*show content*/
        document.getElementById('land_installation_section').classList.remove('land_installation_hide');
        document.getElementById('land_pay_full_section').classList.add('land_installation_hide');
    });
}

landPageRunOnLoad();

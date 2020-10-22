function housePageRunOnLoad(){
    let payFullButton = document.getElementById('hp_pay_full_btn');
    let installationButton = document.getElementById('hp_installation_btn');

    payFullButton.addEventListener('click', function () {
        payFullButton.classList.add('hp_payment_method_choice_active');
        installationButton.classList.remove('hp_payment_method_choice_active');

        /*show content*/
        document.getElementById('house_installation_section').classList.add('house_installation_hide');
        document.getElementById('house_pay_full_section').classList.remove('house_installation_hide');
    });
    installationButton.addEventListener('click', function () {
        installationButton.classList.add('hp_payment_method_choice_active');
        payFullButton.classList.remove('hp_payment_method_choice_active');

        /*show content*/
        document.getElementById('house_installation_section').classList.remove('house_installation_hide');
        document.getElementById('house_pay_full_section').classList.add('house_installation_hide');
    });
}

housePageRunOnLoad();

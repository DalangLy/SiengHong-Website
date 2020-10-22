let hpLivingBtn = document.getElementById('hp_living_btn');
let hpInvestmentBtn = document.getElementById('hp_investment_btn');
hpLivingBtn.addEventListener('click', function (e){
    hpInvestmentBtn.classList.remove('house_page_living_and_invest_choice_active');
    this.classList.add("house_page_living_and_invest_choice_active");

    //display block house page interior and exterior gallery
    document.getElementById('house_page_interior').style.display = 'block';
    document.getElementById('house_page_exterior').style.display = 'block';
});

hpInvestmentBtn.addEventListener('click', function (e){
    hpLivingBtn.classList.remove('house_page_living_and_invest_choice_active');
    this.classList.add("house_page_living_and_invest_choice_active");

    //display none house page interior and exterior gallery
    document.getElementById('house_page_interior').style.display = 'none';
    document.getElementById('house_page_exterior').style.display = 'none';
});

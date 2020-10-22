/********Start Scrolling Event Script*************/
let lastScrollTop = 0;
$(window).scroll(function(event){
    event.preventDefault();
    let st = $(this).scrollTop();
    if (st > lastScrollTop){
        scrollDownFunction();
    } else {
        scrollUpFunction();
    }
    lastScrollTop = st;
});

function scrollDownFunction(){
    if(window.innerWidth <= 480){//mobile version
        //runVehicleFeatureOnScrollDown();
        if($('#mobile_promotion_container').offset().top < (($(window).scrollTop() + $(window).height())) - ($('#mobile_promotion_container').height()/2)){
            startAnimateMobileBalloon();
        }
    }
    if($('#promotion_section').offset().top < (($(window).scrollTop() + $(window).height())) - ($('#promotion_section').height()/3)){
        //contactVehicleMoveIn();
        startAnimateBalloon();
    }
}
function scrollUpFunction(){
    if(window.innerWidth > 768){
        //runVehicleFeatureOnScrollUp();
    }
    if($('#promotion_section').offset().top > (($(window).scrollTop() + $(window).height())) - ($('#promotion_section').height())){
        //contactVehicleMoveOut();
    }
}
/********End Scrolling Event Script*************/


function startAnimateBalloon(){
    let greenBalloon = document.getElementById('green_balloon');
    let goldBalloon = document.getElementById('yellow_balloon');
    greenBalloon.classList.add('green_balloon_floating_up');
    goldBalloon.classList.add('gold_balloon_floating_up');


}
function isAnimating(ele){
    ele.addEventListener('animationend', function (e) {
        if(e.animationName === 'greenBalloonMoveUpAnim'){

        }
    }, false);
}

function startAnimateMobileBalloon(){
    let greenBalloon = document.getElementById('mobile_green_balloon');
    let goldBalloon = document.getElementById('mobile_yellow_balloon');
    greenBalloon.classList.add('mobile_green_balloon_floating_up');
    goldBalloon.classList.add('mobile_gold_balloon_floating_up');


}
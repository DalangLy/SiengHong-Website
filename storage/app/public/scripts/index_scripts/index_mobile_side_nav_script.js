let mobileHamburgerBtn = document.getElementById('mobile_hamburger_button');
let mobileSideNavOverlay = document.getElementById('mobile_side_nav_overlay');
let mobileSideNav = document.getElementById('mobile_side_nav');

let mobileSideNavIsShow = false;
mobileHamburgerBtn.addEventListener('click', function () {
    openMobileSideNav();
}, false);

mobileSideNavOverlay.addEventListener('click', function (){
    openMobileSideNav();
}, false);

document.getElementById('mobile_side_nav_close_btn').addEventListener('click', function (e){
    if(e.target.id === 'mobile_side_nav_close_btn'){
        openMobileSideNav();
    }
}, false);

function openMobileSideNav(){
    if(!mobileSideNavIsShow){
        mobileSideNavIsShow = !mobileSideNavIsShow;

        mobileSideNavOverlay.style.display = "block";
        mobileSideNav.classList.add('slideIn');
        disablePageToScroll(mobileSideNavIsShow);
    }
    else{
        mobileSideNavIsShow = !mobileSideNavIsShow;
        mobileSideNavOverlay.style.display = "none";
        mobileSideNav.classList.remove('slideIn');
        disablePageToScroll(mobileSideNavIsShow);
    }
}

function disablePageToScroll(isScroll){
    if(isScroll){
        document.body.style.position = 'fixed';
        document.body.style.left = '0';
        document.body.style.right = '0';
    }
    else{
        document.body.style.position = 'static';
    }
}



/*mobile hamburger menu function*/
let mobileHeader = document.getElementById("mobile_menu_item_container");
let mobileBtns = mobileHeader.getElementsByClassName("mobile_menu_item");
for (let i = 0; i < mobileBtns.length; i++) {
    mobileBtns[i].addEventListener("click", function(e) {
        openMobileSideNav();
        setTimeout(function (){


            let d_id;
            if(e.target.dataset.link_id === 'brand_concept'){
                console.log("Hello");
                d_id = "brand_concept";
            }
            else if(e.target.dataset.link_id === 'gallery'){
                d_id = "d_gallery";
            }
            else if(e.target.dataset.link_id === 'promotion'){
                d_id = "mobile_promotion_section";
            }
            else if(e.target.dataset.link_id === 'project'){
                d_id = "d_project";
            }
            else if(e.target.dataset.link_id === 'get_in_touch'){
                d_id = "get_in_touch_section";
            }

            //document.getElementById(d_id).scrollIntoView();
            //smoothScroll('#d_project', 1000);

            $('html, body').animate({
                scrollTop: $('#'+d_id).offset().top
            }, 1000);


        }, 500);


    }, false);
}

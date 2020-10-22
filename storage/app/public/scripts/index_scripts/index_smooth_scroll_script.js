let header = document.getElementById("d_menu_item_container");
let btns = header.getElementsByClassName("d_menu_item");
for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(e) {
        let d_id;
        if(e.target.dataset.link_id === 'brand_concept'){
            d_id = "brand_concept";
        }
        else if(e.target.dataset.link_id === 'gallery'){
            d_id = "d_gallery";
        }
        else if(e.target.dataset.link_id === 'promotion'){
            d_id = "promotion_section";
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

    }, false);
}

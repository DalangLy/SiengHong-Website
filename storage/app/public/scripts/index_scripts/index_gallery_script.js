function housePageRunOnLoad(){
    let indexInteriorGalleryButton = document.getElementById('index_gallery_interior_btn');
    let indexExteriorGalleryButton = document.getElementById('index_gallery_exterior_btn');

    indexInteriorGalleryButton.addEventListener('click', function () {
        indexInteriorGalleryButton.classList.add('index_gallery_method_choice_active');
        indexExteriorGalleryButton.classList.remove('index_gallery_method_choice_active');

        /*show gallery content*/
        document.getElementById('exterior_galleries').classList.add('exterior_or_interior_galleries_hide');
        document.getElementById('interior_galleries').classList.remove('exterior_or_interior_galleries_hide');
    });
    indexExteriorGalleryButton.addEventListener('click', function () {
        indexExteriorGalleryButton.classList.add('index_gallery_method_choice_active');
        indexInteriorGalleryButton.classList.remove('index_gallery_method_choice_active');

        /*show gallery content*/
        document.getElementById('interior_galleries').classList.add('exterior_or_interior_galleries_hide');
        document.getElementById('exterior_galleries').classList.remove('exterior_or_interior_galleries_hide');
    });
}

housePageRunOnLoad();

/*Customize Arrow on fancy light box*/
$('[data-fancybox="index_interior_gallery"]').fancybox({
    btnTpl: {
        // Arrows
        arrowLeft:
            '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="PREV">' +
            '<div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg></div>' +
            "</button>",

        arrowRight:
            '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="NEXT">' +
            '<div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></div>' +
            "</button>",

    },
});

$('[data-fancybox="index_exterior_gallery"]').fancybox({
    btnTpl: {
        // Arrows
        arrowLeft:
            '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="PREV">' +
            '<div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg></div>' +
            "</button>",

        arrowRight:
            '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="NEXT">' +
            '<div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></div>' +
            "</button>",

    },
});

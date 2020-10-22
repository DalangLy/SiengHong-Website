function gg(link){
    if(link === 'one'){
        document.getElementById('HLink').classList.add('banner_link_active');
        document.getElementById('HLayer').classList.add('d_banner_side_link_overlay_active');
        document.getElementById('HLink').addEventListener('animationend', function (e) {
            //window.location.href = 'http://www.youtube.com';
            document.getElementById('desktop_banner_house_link').click();
        });
    }else{
        document.getElementById('lLink').classList.add('banner_link_active');
        document.getElementById('lLayer').classList.add('d_banner_side_link_overlay_active');
        document.getElementById('lLink').addEventListener('animationend', function (e) {
            //window.location.href = 'http://www.youtube.com';
            document.getElementById('desktop_banner_land_link').click();
        });
    }
}

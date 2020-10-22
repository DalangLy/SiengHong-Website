let searchData = [
    {searchKeyWord:"brand concept", resultType: 'page_section', dataValue:"Goto Brand Concept Section", pageId:'brand_concept'},
    {searchKeyWord:"gallery", resultType: 'page_section', dataValue:"Goto Gallery Section", pageId:'d_gallery'},
    {searchKeyWord:"promotion", resultType: 'page_section', dataValue:"Goto Promotion Section", pageId:'promotion_section'},
    {searchKeyWord:"get in touch", resultType: 'page_section', dataValue:"Goto Get in touch Section", pageId:'get_in_touch_section'},
    {searchKeyWord:"project", resultType: 'page_section', dataValue:"Goto Project Section", pageId:'d_project'},
    {searchKeyWord:"iphone", resultType: 'promotion', dataValue:"This is Promotion to win iphone", pageId:''},
];

document.getElementById('btnSearch').addEventListener('click', function(){
    showSearchBlock();
});

function showSearchBlock(){
    clearSearchResult();//clear old search result before show up search block
    document.body.style.position = 'fixed';//fixed page body to scrollable
    document.getElementById('search_block').classList.add('showBlock');
}

document.getElementById('search_block').addEventListener('click', function(e){
    if(e.target.id === 'search_block'){
        closeSearchBlock();
    }
});

function closeSearchBlock(){
    document.body.style.position = 'static';//make page body to scrollable
    document.getElementById('search_block').classList.remove('showBlock');
}


/*on key press*/
document.getElementById('txt_search').addEventListener('keyup', function(e){
    let textBoxValue = e.target.value;

    let searchResult = searchData.filter(sd => {//filter data by using search box value
        return sd.searchKeyWord.includes(textBoxValue.toLowerCase());
    });




    clearSearchResult();//clear old search result before add new search result
    showSearchResultItem(searchResult);//show new search result

});

function clearSearchResult(){
    let elements = document.getElementsByClassName('search_item');
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
}

function showSearchResultItem(searchResult){
    let numberOfSearchResultToShow = 0;

    for(let i = 0; i < searchResult.length; i++){
        if(numberOfSearchResultToShow <= 2){//avoid search result show up more than 3 item
            let searchResultItem = document.createElement('div');
            searchResultItem.classList.add('search_item');

            let searchResultTitle = document.createElement('h5');
            searchResultTitle.innerText = searchResult[i].dataValue;

            let searchResultTypeHidden = document.createElement('p');
            searchResultTypeHidden.classList.add('resultTypeHidden');
            searchResultTypeHidden.innerText = searchResult[i].resultType;

            searchResultItem.appendChild(searchResultTitle);
            searchResultItem.appendChild(searchResultTypeHidden);
            searchResultItem.addEventListener('click', function () {
                searchResultItemClick({resultType: searchResultTypeHidden.innerText, pageId: searchResult[i].pageId});
            });
            document.getElementById('search_box_container').appendChild(searchResultItem);
        }
        else{

            return;
        }
        numberOfSearchResultToShow++;
    }
}

function searchResultItemClick(e){//search result click event
    if(e.resultType === 'page_section'){
        //console.log("Start "+e);
        closeSearchBlock();
        //close search block and start scrolling to select section
        //code here
        setTimeout(function (){
            smoothScroll(e.pageId);
        }, 500);
    }
    else{
        console.log("Pop up promotion");
    }
}

function smoothScroll(pageId){
    $('html, body').animate({
        scrollTop: $('#'+pageId).offset().top
    }, 1000);
}
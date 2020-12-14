if(window.innerWidth<770){
    $('.category-search .header').click(function () {
        $('.category-search .body').slideToggle();
    });
}
document.querySelector('.advanced-search').addEventListener('click',e=>{
    $('.category-search .body').slideToggle();
})
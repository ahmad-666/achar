const galleryImg = document.querySelector('.zoom-box img') ;
const blackFilter = document.querySelector('#blackFilter') ;
const galleryLight = document.querySelector('.galleryLight') ;
const galleryLightImg = galleryLight.querySelector('img') ;
const galleryLightClose = galleryLight.querySelector('i') ;
galleryImg.addEventListener('click',e=>{
    blackFilter.classList.add('show') ;
    galleryLight.classList.add('show') ;
    document.body.classList.add('disableScroll') ;
    galleryLightImg.src = galleryImg.src ;
})
galleryLightClose.addEventListener('click',e=>{
    blackFilter.classList.remove('show') ;
    galleryLight.classList.remove('show') ;
    document.body.classList.remove('disableScroll') ;
})
blackFilter.addEventListener('click',e=>{
    blackFilter.classList.remove('show') ;
    galleryLight.classList.remove('show') ;
    document.body.classList.remove('disableScroll') ;
})
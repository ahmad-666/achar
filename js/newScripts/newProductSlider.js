const galleryImg = document.querySelector('.zoom-box img') ;
const blackFilter = document.querySelector('#blackFilter') ;
const galleryLight = document.querySelector('.galleryLight') ;
const galleryLightImg = galleryLight.querySelector('img') ;
const galleryLightClose = galleryLight.querySelector('i') ;
const prevIcon = galleryLight.querySelector('.prev') ;
const nextIcon = galleryLight.querySelector('.next') ;
const galleryImgs = document.querySelectorAll('.gallery li img') ;
const totalImgs = galleryImgs.length ;
let index = 0 ;
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
galleryImgs.forEach((img,i)=>{
    img.addEventListener('click',e=>{
        index = i ;
    })
}) 
nextIcon.addEventListener('click',e=>{
    index = index-1>=0?index-1:totalImgs-1 ;
    galleryLightImg.src = galleryImgs[index].src ;
})
prevIcon.addEventListener('click',e=>{
    index = index+1<totalImgs?index+1:0;
    galleryLightImg.src = galleryImgs[index].src ;
})
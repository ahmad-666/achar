const separate3Num = (number,separator)=> number.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, `$1${separator}`) ;
const productContainer = document.querySelector('.product-box') ;
const vanillaPrice = +productContainer.getAttribute('data-price') || 10000 ;
const maxQuantity = +productContainer.getAttribute('data-max') || 10 ;
const minQuantity = +productContainer.getAttribute('data-min') || 1 ;
const vanillaPriceElm = productContainer.querySelector('.new') ;
const increaseTrigger = productContainer.querySelector('.numProduct span:first-child') ;
const decreaseTrigger = productContainer.querySelector('.numProduct span:last-child') ;
const quantityElm = productContainer.querySelector('.numProduct p') ;
increaseTrigger.addEventListener('click',e=>{
    const newVal = +quantityElm.innerText + 1;
    if(newVal<=maxQuantity){
        quantityElm.innerText = newVal ;
        vanillaPriceElm.innerText = `${separate3Num(newVal*vanillaPrice,',')} تومان` ;
    }
})
decreaseTrigger.addEventListener('click',e=>{
    const newVal = +quantityElm.innerText - 1;
    if(newVal>=minQuantity){
        quantityElm.innerText = newVal ;
        vanillaPriceElm.innerText = `${separate3Num(newVal*vanillaPrice,',')} تومان` ;
    }
})

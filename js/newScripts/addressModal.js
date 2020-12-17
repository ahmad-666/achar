const addressModal = document.querySelector('#addressModal') ;
const addressModalInput = addressModal.querySelector('input') ;
addressModal.addEventListener('submit',e=>{
    e.preventDefault() ;
    const address = addressModalInput.value ;
    if(!address){
        addressModalInput.classList.add('error') ;
    }
    else{
        addressModalInput.classList.remove('error') ;
        addressModal.submit() ;
    }
})
addressModalInput.addEventListener('input',e=>{
    addressModalInput.classList.remove('error') ;
})
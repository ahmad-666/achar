const customModal = document.querySelector('#customModal') ;
const customModalBtn = customModal.querySelector('button') ;
const customBlackFilter = document.querySelector('#blackFilter') ;
// customModal.classList.add('show') ;
// customBlackFilter.classList.add('show')
// customModal.classList.remove('show') ;
// customBlackFilter.classList.remove('show')
customModalBtn.addEventListener('click',e=>{
    customModal.classList.remove('show') ;
    customBlackFilter.classList.remove('show') ;
})
customBlackFilter.addEventListener('click',e=>{
    customModal.classList.remove('show') ;
    customBlackFilter.classList.remove('show') ;
})
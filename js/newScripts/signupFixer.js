const signupBtns = document.querySelectorAll('.login .sign-up-tabs button') ;
signupBtns.forEach(btn=>{
    btn.addEventListener('click',e=>{
        signupBtns.forEach(btn=>btn.classList.remove('active')) ;
        btn.classList.add('active') ;
    })
})
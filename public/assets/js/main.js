const activeLang = document.querySelector(".active-lang")
document.addEventListener('click', (e)=>{
    if (activeLang.classList.contains('open')){
        if (document.querySelector('.active-lang') != e.target.parentElement){
            const langList = document.querySelector('.lang-list');
            activeLang.classList.remove('open')
            langList.classList.remove('open')
        }
    }
})

activeLang.addEventListener('click', (e) => {
    const langList = document.querySelector('.lang-list');
    activeLang.classList.toggle('open')
    langList.classList.toggle('open')
})


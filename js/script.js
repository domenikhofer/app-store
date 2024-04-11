document.querySelectorAll('.app').forEach((el, i) => {
    el.addEventListener('click', (e) => {
        let el = e.target.closest('.app')
        let infobox = el.dataset.infobox
        let elCopy = el.cloneNode(true);
        elCopy.style.cssText = `position:fixed; top: ${el.getBoundingClientRect().top - 25}px; left: ${el.getBoundingClientRect().left}px;  transition: opacity .5s, transform .5s, top 1s, left 1s;`
        el.classList.add('hide')
        document.querySelector('body').appendChild(elCopy);
        setTimeout(() => {
            elCopy.classList.add('show')
            document.querySelector('.cover').classList.add('show')

        }, 100)

        setTimeout(() => {

            document.querySelector('#ib' + infobox).classList.add('show')
        }, 900)

    })
})



document.querySelector('.cover').addEventListener('click', (e) => {
    let el = e.target.parentNode;
  
        document.querySelector('.cover').classList.remove('show')
        document.querySelectorAll('.infoBox').forEach(el => {
            el.classList.remove('show')
        })
        document.querySelectorAll('.app').forEach(el => {
            el.classList.remove('hide')
        })
        document.querySelectorAll('.app.show').forEach(el => {
            el.classList.add('hide')
        })
        setTimeout(() => {
            document.querySelector('.app.show.hide').remove()
        }, 900)
})


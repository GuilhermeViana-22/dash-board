const sideLeft = document.querySelector(".side_left")
const menuBar = document.querySelector(".menu_bar")
const titlePage = document.querySelector(".title_page")
const contentSideMobile = document.querySelector('.content_side_mobile')
const animaLeft = document.querySelectorAll('.anima_left')
const animaBottom = document.querySelectorAll('.anima_bottom')

var sideStatus = 0;

animaLeft.forEach(i => {
    i.classList.add('anima_table')
})

let nun = 0

if (animaBottom.length !== 0) {
    const anima = () => {
        setTimeout(() => {
            if (nun < 4) {
                animaBottom[nun].classList.add('bottom_anima')
                nun++
                anima()
            }
        }, 300)
    }
    anima()
}



const animacaoSideCompleta = () => {

    if (sideStatus === 0) {
        sideLeft.classList.add('anima_side')

        setTimeout(() => {
            titlePage.classList.add('opacity')
            setTimeout(() => {
                titlePage.style.display = 'none'
            }, 200)
        }, 0)

        setTimeout(() => {
            contentSideMobile.classList.add('opacity')
            setTimeout(() => {
                contentSideMobile.style.display = 'none'
            }, 600);
        }, 100)

        sideStatus = 1
    } else {
        sideLeft.classList.remove('anima_side')

        setTimeout(() => {
            titlePage.style.display = 'flex'
            setTimeout(() => {
                titlePage.classList.remove('opacity')
            }, 200)
        }, 0)

        setTimeout(() => {
            contentSideMobile.style.display = 'flex'
            setTimeout(() => {
                contentSideMobile.classList.remove('opacity')
            }, 300);
        }, 40)

        sideStatus = 0
    }
}

menuBar.addEventListener('click', () => {
    animacaoSideCompleta()
})

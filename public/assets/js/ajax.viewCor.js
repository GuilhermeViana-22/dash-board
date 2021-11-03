const spinnerBox = $(".container_load")[0]
const tokenHeader = $(".token_header")[0]
const boxTabela = $(".box_tabela")[0]
const tableTable = $(".table_table")[0]
const hoverTabe = document.querySelectorAll('.hover_tabe')
const modal = document.querySelector('.modal')

if (boxTabela !== undefined) {
    boxTabela.style.display = 'none'
}

setTimeout(() => {
    spinnerBox.style.display = 'none'
    boxTabela.style.display = 'block'
    setTimeout(() => {
        boxTabela.classList.add('anima_table')
    }, 122)
}, 700);

hoverTabe.forEach(i => {
    i.addEventListener('click', () => {
        modal.style.display = 'block'
    })
})

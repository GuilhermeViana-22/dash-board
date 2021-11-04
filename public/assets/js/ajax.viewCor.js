const spinnerBox = $(".container_load")[0]
const boxTabela = $(".box_tabela")[0]

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





/**
 *  Funcao modal
 */

const BtnVer = document.querySelectorAll('.ver')
const modalView = document.querySelector('.modal_view')
const exitePage = document.querySelector('.exite_page')
const iconExit = document.querySelector('.icon_exit')

const conteudoModal = document.querySelector('.conteudo_modal')

const pTitle = document.querySelector('.p_title')
const tokenHash = document.querySelector('.token_hash')
const valueId = document.querySelectorAll('.value_id')

const displayNone = (div) => { div.style.display = 'none' }
const displayBlock = (div) => { div.style.display = 'block' }

for (let i = 0; i < BtnVer.length; i++) {
    BtnVer[i].addEventListener('click', () => {
        displayBlock(exitePage)
        displayBlock(modalView)

        const valueToken = tokenHash.value
        const valorCor = pTitle.innerHTML
        let valorId_ = valueId[i].value

        $.ajax({
            url: 'http://localhost/dash-board/read/corWhere/' + valorCor + '/' + valueToken + '/' + valorId_,
            method: 'get',
            dataType: ''
        }).done(res => {
            const conteudoModal = document.createElement('div')
            conteudoModal.classList.add('conteudo_modal')
            conteudoModal.innerHTML = `
                <div class="left conteudo_">
                    <div class="line_modal">
                        <span class="title_conteudo_modal">id:</span>
                        <span class="_conteudo_modal">${res[0].id}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">ip:</span>
                        <span class="_conteudo_modal">${res[0].ip}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">data:</span>
                        <span class="_conteudo_modal">${res[0].data}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">gestor:</span>
                        <span class="_conteudo_modal">${res[0].gestor}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">Codigo:</span>
                        <span class="_conteudo_modal">${res[0].codigo}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">Quantidade:</span>
                        <span class="_conteudo_modal">${res[0].quantidade}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">apoiador:</span>
                        <span class="_conteudo_modal">${res[0].apoiador}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">inspirado:</span>
                        <span class="_conteudo_modal">${res[0].inspirado}</span>
                    </div>
                </div>

                <hr>

                <div class="right conteudo_">
                    <div class="line_modal">
                        <span class="title_conteudo_modal">valor:</span>
                        <span class="_conteudo_modal">R$ ${res[0].valor}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">ganho:</span>
                        <span class="_conteudo_modal">R$ ${res[0].ganho}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">posicaofila:</span>
                        <span class="_conteudo_modal">${res[0].posicaofila}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">link:</span>
                        <a href='${res[0].link}' target='_blank' class="_conteudo_modal _link_modal">${res[0].link}</a>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">status:</span>
                        <span class="_conteudo_modal">${res[0].status}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">excluida:</span>
                        <span class="_conteudo_modal">${res[0].excluida}</span>
                    </div>
                </div>

                <div class="conteudo_" style="margin-top: 15px;">
                    <div class="line_modal">
                        <span class="title_conteudo_modal">obs:</span>
                        <span class="_conteudo_modal">${res[0].obs}</span>
                    </div>
                    <div class="line_modal">
                        <span class="title_conteudo_modal">comentario:</span>
                        <span class="_conteudo_modal">${res[0].comentarios}</span>
                    </div>
                </div>
            `

            modalView.appendChild(conteudoModal)

            exitePage.addEventListener('click', () => {
                displayNone(exitePage)
                displayNone(modalView)
                modalView.removeChild(conteudoModal)
            })

            iconExit.addEventListener('click', () => {
                displayNone(exitePage)
                displayNone(modalView)
                modalView.removeChild(conteudoModal)
            })
        })
    })
}

{/*  */ }

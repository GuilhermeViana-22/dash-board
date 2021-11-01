const spinnerBox = $(".spinner-box")[0]
const tokenHeader = $(".token_header")[0]
const boxTabela = $(".box_tabela")[0]
const tableTable = $(".table_table")[0]

if (boxTabela !== undefined) {
    boxTabela.style.display = 'none'
}


if (boxTabela !== undefined) {
    const token_value = tokenHeader.attributes['data-token'].value
    const cor_value = tokenHeader.attributes['data-cor'].value

    window.onload = () => {
        setTimeout(() => {
            $.ajax({
                url: "http://localhost/dash-board/read/cor/" + token_value + "/" + cor_value,
                method: 'get',
                dataType: 'json'
            }).done((response) => {
                response.forEach((element, key) => {
                    const trTable = document.createElement('tr')
                    trTable.classList.add('tr_table')
                    trTable.innerHTML = `
                        <td class="td_table">1</td>
                        <td class="td_table">177.212.25.20</td>
                        <td class="td_table">10/09/2021</td>
                        <td class="td_table">Yago vilas</td>
                        <td class="td_table">4998</td>
                        <td class="td_table">8</td>
                        <td class="td_table">Miguel Silas</td>
                        <td class="td_table">Ferrari Black</td>
                        <td class="td_table">79,00</td>
                        <td class="td_table">7,90</td>
                        <td class="td_table">primeiro</td>
                        <td class="td_table">linhttp://www.pegae.link/Yago</td>
                        <td class="td_table">Conferir toda semana</td>
                        <td class="td_table">...</td>
                        <td class="td_table">NOVA</td>
                        <td class="td_table">N</td>
                    `

                    tableTable.appendChild(trTable)
                    spinnerBox.style.display = 'none'
                    boxTabela.style.display = 'block'
                    setTimeout(() => {
                        boxTabela.classList.add('anima_table')
                    }, 122)
                });
            })
        }, 500)
    }
}

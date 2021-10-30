const containerContentCor = document.querySelector('.container_content_cor')

$.ajax({
    url: 'http://localhost/dash-board/read',
    method: 'post',
    dataType: 'json'
}).done(res => {

    res.forEach((element, value) => {
        const boxCor = document.createElement('div');
        boxCor.classList.add('box_cor')
        boxCor.innerHTML = `
            <div class="box_cor_top" style="background: rgb(${element.cor});">
                <div class="nome_cor">
                    <span>
                        Linha de promocao <br> ${element.nome}
                    </span>
                </div>
    
                <div class="box_ver_link">
                    <a href="">Ver Link</a>
                </div>
            </div>
            <div class="box_bottom_info_cor">
                <div class="box_info_bottom_cor">
                    <span>Qnt Pessoas utilizando:</span>
                    <div class="box_valor_info_bottom">
                        0
                    </div>
                </div>
    
                <div class="box_info_bottom_cor">
                    <span>Qnt de Items:</span>
                    <div class="box_valor_info_bottom">
                        0
                    </div>
                </div>
    
                <div class="box_info_bottom_cor">
                    <span>Posicao na fila:</span>
                    <div class="box_valor_info_bottom">
                        0
                    </div>
                </div>
            </div>
        
            `
        containerContentCor.appendChild(boxCor)
    });

})
const inputEmailLogin = $("#input_email_login")[0]
const token_token = $(".token_token")[0]
const loginForm = document.querySelector('#login_form')
const formogin = document.querySelector('#form_recuperar')

const criaNovoInput = (type, placeholder, nomeCLass) => {
    const newInput = document.createElement('input')
    newInput.classList.add(nomeCLass)
    newInput.type = type
    newInput.placeholder = placeholder
    return newInput
}

const enviarEmail = () => {
    loginForm.removeChild(formogin)

    const newForm = document.createElement('form')
    newForm.classList.add('form_codigo')
    newForm.innerHTML = `
        <div class="text-info_box">
            <label>Reiniciar Senha</label>
        </div>
        <h4>Lhe enviaremos um e-mail com um código para você redefinir sua senha</h4>
        <div class="inputs">
            <input class="token_token" data-token="<?php echo $_SESSION['token_hash'] ?>" hidden>
            <div id="newinput"></div>

            <div class="acao_login_box">
                <button id="btnEnviar" form="form_recuperar" type="submit">Enviar</button>
                <button id="btnEnviar2" type="submit">Confirmar</button>
            </div>
        </div>
    `
    loginForm.appendChild(newForm)

    const formCodigo = document.querySelector('.form_codigo')

    const newinput = $("#newinput")[0]
    newinput.appendChild(criaNovoInput('namber', '0000', 'input_codigo'))

    const btnEnviar = document.querySelector('#btnEnviar')
    btnEnviar.style.display = 'none'

    const btnEnviar2 = document.querySelector('#btnEnviar2')

    const inputCodigo = document.querySelector('.input_codigo')

    inputCodigo.addEventListener('keypress', () => {
        let str = inputCodigo.value;
        if (str.length > 3) {
            inputCodigo.value = str.substring(0, str.length - 1);
        }
    })

    formCodigo.addEventListener('submit', (e) => {
        e.preventDefault()
        btnEnviar2.disabled = true

        const tokenValue = token_token.attributes['data-token'].value
        let inputCodigoValue = inputCodigo.value

        $.ajax({
            url: "http://localhost/dash-board/envio-email/para/" + inputCodigoValue + "/" + tokenValue,
            method: 'post',
            dataType: 'json'
        }).done((res) => {
            if (res == true) {
                console.log(res)
            } else {
                btnEnviar2.disabled = false
            }
        })
    })
}

if (btnEnviar2 !== null) {
    btnEnviar2.style.display = 'none'
}

formogin.addEventListener('submit', (e) => {
    e.preventDefault()
    btnEnviar.disabled = true

    const tokenValue = token_token.attributes['data-token'].value
    let emailValue = inputEmailLogin.value

    $.ajax({
        url: "http://localhost/dash-board/envio-email/para/" + emailValue + "/" + tokenValue,
        method: 'post',
        dataType: 'json'
    }).done((res) => {
        if (res == true) {
            enviarEmail()
        }
    })
})




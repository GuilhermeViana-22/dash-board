const formLogin = $('#form_login')[0]
const emailInput = $("#input_email_login")[0]
const senhaInput = $("#input_senha_login")[0]
const token = document.querySelector('.token')

if (formLogin !== null) {
    $(formLogin).submit((e) => {
        e.preventDefault()

        let emailValue = emailInput.value
        let senhaValue = senhaInput.value
        let token_chave = token.attributes['data-token'].value

        $.ajax({
            url: "http://localhost/dash-board/loginuser/verificarUser/" + token_chave,
            method: 'post',
            data: {
                email: emailValue,
                senha: senhaValue
            },
            dataType: 'json'
        }).done((res) => {
            emailInput.value = ''
            senhaInput.value = ''
            emailInput.focus()
            if (res === true) {
                window.location = 'http://localhost/dash-board/painel/home'
            } else {
                alert("Email ou senha invalido!")
            }
        })
    })
}
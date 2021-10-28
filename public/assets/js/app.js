
const formLogin = $('#form_login')[0]
const emailInput = $("#input_email_login")[0]
const senhaInput = $("#input_senha_login")[0]

if (formLogin !== null) {
    $(formLogin).submit((e) => {
        e.preventDefault()

        let emailValue = emailInput.value
        let senhaValue = senhaInput.value

        $.ajax({
            url: 'http://localhost/dash-board/loginuser',
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
                window.location = 'http://localhost/dash-board/painel'
            } else {
                alert("Email ou senha invalido!")
            }
        })
    })
}

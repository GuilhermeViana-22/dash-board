<div class="container_login">
    <section id="session_login">
        <div id="login_form">
            <p><i class="far fa-user"></i></p>
            <form action="<?php echo DIRPAGE . "loginuser" ?>" id="form_login" method="POST">
                <div class="text-info_box">
                    <label>Reiniciar Senha</label>
                </div>
                <h4>Lhe enviaremos um e-mail com um código para você redefinir sua senha</h4>
                <div class="inputs">
                    <input autocomplete="off" type="email" placeholder="Email" id="input_email_login" name="email"><br>
                    <div class="acao_login_box">
                    <button type="submit">Enviar email</button>
                </div>
                </div>
            </form>
        </div>
    </section>
</div>
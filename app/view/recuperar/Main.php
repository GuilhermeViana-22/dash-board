<div class="container_login">
    <section id="session_login">
        <div id="login_form">
            <div class="icon_user">
                <i class="far fa-user icon_user"></i>
            </div>
            <form id="form_recuperar">
                <div class="text-info_box">
                    <label>Reiniciar Senha</label>
                </div>
                <h4>Lhe enviaremos um e-mail com um código para você redefinir sua senha</h4>
                <div class="inputs">
                    <input class="token_token" data-token="<?php echo $_SESSION['token_hash'] ?>" hidden>
                    <input type="email" required placeholder="Email" id="input_email_login" name="email"><br>
                    <div id="newinput"></div>

                    <div class="acao_login_box">
                        <button id="btnEnviar" form="form_recuperar" type="submit">Enviar</button>
                        <button id="btnEnviar2" form="form_codigo" type="submit">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
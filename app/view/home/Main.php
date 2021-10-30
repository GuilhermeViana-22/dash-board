<div class="container_login">
    <section id="session_login">
        <div id="login_form">
            <i class="far fa-user"></i>
            <form action="<?php echo DIRPAGE . "loginuser" ?>" id="form_login" method="POST">
                <div class="text-info_box">
                    <label>Entre com seus dados!</label>
                </div>
                <div class="inputs">
                    <input autocomplete="off" type="email" placeholder="Email" id="input_email_login" name="email">
                    <div class="box_esque_senha">
                        <input type="password" name="senha" id="input_senha_login" placeholder="Senha">
                        <a href="<?php echo DIRPAGE . "/recuperar" ?>" class="message">Esqueceu a senha?</a>
                    </div>
                </div>

                <div class="acao_login_box">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </section>
</div>
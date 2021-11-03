<div class="container_login">
    <section id="session_login">
        <div id="login_form">
            <div class="icon_user">
                <i class="far fa-user"></i>
            </div>
            <form action="<?php echo DIRPAGE . "loginuser" ?>" id="form_login" method="POST">
                <div class="text-info_box">
                    <label>Entre com seus dados!</label>
                </div>
                <div class="inputs">
                    <input type="text" hidden class="token" data-token="<?php echo $_SESSION['token_hash'] ?>">
                    <input autocomplete="off" type="email" placeholder="Email" id="input_email_login" name="email">
                    <div class="box_esque_senha">
                        <input type="password" name="senha" id="input_senha_login" placeholder="Senha">
                    </div>
                </div>

                <div class="acao_login_box">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </section>
</div>
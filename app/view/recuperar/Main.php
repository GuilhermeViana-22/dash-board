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
                    <div id="newinput">

                    </div>

                    <div class="acao_login_box">
                        <button id="btnEnviar" onclick="collapse()" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    function collapse() {
        document.getElementById("input_email_login").style.display = "none";
        var node = document.createElement("input");
        node.type = "number";
        node.setAttribute("placeholder", "Digite que foi enviado");
        var textnode = document.createTextNode('input');
        node.appendChild(textnode);
        document.getElementById("newinput").appendChild(node);
        document.getElementById("btnEnviar").style.display = "none";
    }
</script>
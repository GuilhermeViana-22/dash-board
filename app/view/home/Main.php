<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
<section id="session_login">
    <h1>Faça seu login na plataforma</h1>
    <div id="login_form">
    <i class="far fa-user"></i>
        <form action="<?php echo DIRPAGE . "loginuser" ?>" id="form_login" method="POST">
            <label>Faça seu login</label>
            <input type="email" placeholder="email" id="input_email_login" name="email">
            <input type="password" name="senha" id="input_senha_login" placeholder="senha">
            <a href="<?php echo DIRPAGE . "/recuperar"?>"class="message">Esqueci minha senha</a>
            <button type="submit">Entrar</button>
        </form>
    </div>
</section>
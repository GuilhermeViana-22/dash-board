<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->getTitulo(); ?></title>
   <link rel="stylesheet" href="<?php echo DIRCSS . 'style.css' ?>">
</head>
<body>
    <!-- 
        /**
         * Funcao que imprime a view painel ( app/view/painel/Painel.php )
         */
     -->
    <?php echo $this->addLayoutCompleto(); ?>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="<?php echo DIRJS . 'app.js' ?>"></script>
</body>

</html>
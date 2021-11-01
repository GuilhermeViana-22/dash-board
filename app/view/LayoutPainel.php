<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->getTitulo(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS . 'stylePainel.css' ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'viewCor.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="content_page">
            <?php echo $this->addSide(); ?>

            <div class="direita">
                <?php echo $this->addHeader(); ?>
                <?php echo $this->addMain(); ?>
                <?php echo $this->addFooter(); ?>
            </div>
        </div>
    </div>
    <!-- 
        /**
         * Funcao que imprime a view painel ( app/view/painel/Painel.php )
         */
     -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="<?php echo DIRJS . 'app.js' ?>"></script>
    <script src="<?php echo DIRJS . 'animaSide.js' ?>"></script>
    <script src="<?php echo DIRJS . 'ajax.viewCor.js' ?>"></script>
</body>

</html>
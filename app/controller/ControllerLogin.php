<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;

class ControllerLogin extends ClassRender implements InterfaceView
{
    private $token1_hash;
    private $token2_hash;
    private $token3_hash;

    public function __construct()
    {
        if (!isset($_SESSION['token_hash'])) {
            $this->token1_hash = md5(random_int(0, 7985) . "hash");
            $this->token2_hash = md5(random_int(0, 79815) . "token");
            $this->token3_hash = md5(random_int(0, 71815) . "sistema");

            $_SESSION['token_hash'] =  $this->token1_hash . $this->token2_hash . $this->token3_hash;
        }

        if (isset($_SESSION['login'])) {
            if ($_SESSION['login']['STATUS'] == true) {
                header('Location: ' . DIRPAGE . '/painel/home');
            }
        }
        $this->setTitulo("Login");
        $this->setDiretorio("home/");
        $this->renderLayout();
    }
}

<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;

class ControllerLogin extends ClassRender implements InterfaceView
{

    public function __construct()
    {
        $this->setTitulo("Login");
        $this->setDiretorio("home/");
        $this->renderLayout();

        session_start();
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login']['STATUS'] == true) {
                header('Location: ' . DIRPAGE . 'arena-cup/painel');
            }
        }
        var_dump($_SESSION);
    }
}

<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;

class ControllerPainelHome extends ClassRender implements InterfaceView
{

    public function __construct()
    {
        $this->setTitulo("Painel");
        $this->setDiretorio("painel/");
        $this->renderLayoutPainel();
    }
}

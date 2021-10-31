<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;

class ControllerRecuperar extends ClassRender implements InterfaceView{

    public function __construct()
    {
        $this->setTitulo("Login");
        $this->setDiretorio("recuperar/");
        $this->renderLayout();

    }
}
?>
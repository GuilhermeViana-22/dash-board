<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");
require_once("../config/config.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;

class ControllerLogout extends ClassRender implements InterfaceView
{

    public function __construct()
    {
        $this->setTitulo("Saindo...");

        session_start();
        session_destroy();
        header("location: " . DIRPAGE . "/");
    }
}

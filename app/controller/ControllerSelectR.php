<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");
require_once("../app/model/ClassSelect.php");
require_once("../config/config.php");
require_once("../src/Trait/TraitClearSanitize.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;
use App\Model\ClassSelect;
use Src\Trait\TraitClearSanitize;

class ControllerSelectR extends ClassRender implements InterfaceView
{

    use TraitClearSanitize;

    protected $resultados;
    private $methodDeRequisao;

    public function __construct()
    {

        $this->methodDeRequisao = $_SERVER['REQUEST_METHOD'];

        $this->setTitulo("Carregando...");

        if ($this->methodDeRequisao === 'POST') {
            header('Content-Type: application/json');

            $new = new ClassSelect;
            $resul = $this->resultado = $new->selectDadosBancoCores('cores');
            echo json_encode($resul);
        } else {
            header("location: " . DIRPAGE . "/ops");
        }
    }
}

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

class ControllerSelectCor extends ClassRender implements InterfaceView
{

    use TraitClearSanitize;

    protected $resultados;
    private $methodDeRequisao;

    public function cor($token, $cor, $pagina)
    {
        $this->methodDeRequisao = $_SERVER['REQUEST_METHOD'];

        if ($token === $_SESSION['token_hash']) {
            if ($this->methodDeRequisao === 'GET') {
                header('Content-Type: application/json');

                $new = new ClassSelect;
                $resul = $this->resultado = $new->selectDadosBancoCores($cor);
                echo json_encode($resul);
            } else {
                header("location: " . DIRPAGE . "/ops");
            }
        }
    }

    public function corWhere($tabela, $token, $id)
    {
        $this->methodDeRequisao = $_SERVER['REQUEST_METHOD'];

        if ($token === $_SESSION['token_hash']) {
            if ($this->methodDeRequisao === 'GET') {
                header('Content-Type: application/json');

                $new = new ClassSelect;
                $resul = $this->resultado = $new->selectDadosCorWhere($tabela, $id);
                echo json_encode($resul);
            } else {
                header("location: " . DIRPAGE . "/ops");
            }
        }
    }
}

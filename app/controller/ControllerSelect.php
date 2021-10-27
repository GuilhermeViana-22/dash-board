<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");
require("../app/model/ClassSelect.php");
require_once("../config/config.php");
require_once("../src/Trait/TraitClearSanitize.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;
use App\Model\ClassSelect;
use Src\Trait\TraitClearSanitize;

class ControllerSelect extends ClassRender implements InterfaceView
{

    use TraitClearSanitize;

    protected $resultado;
    private $methodDeRequisao;
    private $email;
    private $senha;

    public function __construct()
    {

        $this->methodDeRequisao = $_SERVER['REQUEST_METHOD'];

        $this->setTitulo("Carregando...");


        if ($this->methodDeRequisao === 'POST') {
            header('Content-Type: application/json');
            $this->email = $this->clearString($_POST['email']);
            $this->senha = $this->clearString($_POST['senha']);

            $new = new ClassSelect;
            $this->resultado = $new->selectDadosBanco('login', true, $this->email, $this->senha);
            if ($this->resultado == true) {
                echo json_encode(true);
            } else {
                echo json_encode(false);
            }
        } else {
            echo json_encode(false);
        }
    }
}

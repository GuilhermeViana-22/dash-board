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

class ControllerSelectRP extends ClassRender implements InterfaceView
{

    use TraitClearSanitize;


    public function selecionarCor($v)
    {
        header('content-type: application: json');

        $new = new ClassSelect;
        $resul = $this->resultado = $new->selectDadosInner('cores', 'dadosCores', $v);

        echo '<h1 style="color: #fff;">Aqui sera renderizado a tabela [' . $v . '] (com paginacao)!';
        $this->setDiretorio('/read-where');
        $this->renderLayoutPainel();
    }
}

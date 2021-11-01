<?php

namespace App\Controller;

require_once("../src/class/ClassRender.php");
require_once("../src/interface/interfaceView.php");
require_once("../src/Trait/TraitClearSanitize.php");
require_once("../src/Trait/TraitUrlParse.php");
require_once("../config/config.php");

use Src\Class\ClassRender;
use Src\Interface\InterfaceView;
use Src\Trait\TraitClearSanitize;
use Src\Trait\TraitUrlParser;

class ControllerPainelHome extends ClassRender implements InterfaceView
{
    use TraitUrlParser;
    use TraitClearSanitize;

    public function __construct()
    {
        $quanitdade_array = count($this->parseUrl());
        if ($quanitdade_array == 1) {
            if (isset($this->parseUrl()[0])) {
                header('location: ' . DIRPAGE . '/painel/home');
            }
        }
    }

    public function home()
    {
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login']['STATUS'] == true) {
                $this->setTitulo("Painel");
                $this->setDiretorio("painel/");
                $this->renderLayoutPainel();
            } else {
                header('Location: ' . DIRPAGE . '/ops');
            }
        } else {
            header('Location: ' . DIRPAGE . '/ops');
        }
    }

    public function viewCor($token, $cor)
    {
        if ($token === $_SESSION['token_hash']) {
            if (isset($_SESSION['login'])) {
                if ($_SESSION['login']['STATUS'] === true) {
                    header('content-type: application: json');

                    $this->setDiretorio('/viewCor');
                    $this->renderLayoutPainel();
                }
            }
        } else {
            header('Location: ' . DIRPAGE . '/Err/404');
        }
    }
}

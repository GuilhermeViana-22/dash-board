<?php

namespace App;

require_once("../src/vendor/autoload.php");
require_once("../src/class/ClasseRota.php");
require_once("../app/controller/ControllerLogin.php");
require_once("../app/controller/Controller404.php");
require_once("../app/controller/ControllerPaginaBloqueada.php");
require_once("../app/controller/ControllerSelect.php");
require_once("../app/controller/ControllerPainelHome.php");
require_once("../app/controller/ControllerRecuperar.php");
require_once("../app/controller/ControllerSelectR.php");
require_once("../app/controller/ControllerLogout.php");
require_once("../app/controller/ControllerSelectRP.php");

use Src\Class\ClassRota;

class Dispatch  extends ClassRota
{
    private $method;
    private $param = [];
    private $obj;
    protected $rotaController;
    protected $nameSpaceController;
    protected $contaArray;

    private function setMetodo($v)
    {
        $this->method = $v;
    }
    protected function getMetodo()
    {
        return $this->method;
    }

    private function setParam($v)
    {
        $this->param = $v;
    }
    protected function getParam()
    {
        return $this->param;
    }


    public function __construct()
    {
        self::addController();
    }

    private function addController()
    {
        $this->rotaController = $this->pegueRota();
        $this->nameSpaceController = "App\\Controller\\{$this->rotaController}";
        $this->obj = new $this->nameSpaceController;

        if (isset($this->parseUrl()[1])) {
            self::addMetodoController();
        }
    }

    private function addMetodoController()
    {
        if (method_exists($this->obj, $this->parseUrl()[1])) {
            $this->setMetodo("{$this->parseUrl()[1]}");
            self::addParametrosController();
            call_user_func_array([$this->obj, $this->getMetodo()], $this->getParam());
        } else {
            header("Location: " . DIRPAGE);
        }
    }

    private function addParametrosController()
    {
        $this->contaArray = count($this->parseUrl());
        if ($this->contaArray > 2) {
            foreach ($this->parseUrl() as $key => $value) {
                if ($key > 1) {
                    $this->setParam($this->param += [$key => $value]);
                }
            }
        }
    }
}

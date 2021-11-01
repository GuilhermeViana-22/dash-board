<?php

namespace Src\Class;

require_once __DIR__ . '/../Trait/TraitUrlParse.php';

use Src\Trait\TraitUrlParser;


class ClassRota
{
    private $rota;
    private $url;
    private $index;

    use TraitUrlParser;

    public function pegueRota()
    {
        $this->url = $this->parseUrl();
        $this->index = $this->url[0];

        $this->rota = [
            "" => "ControllerLogin",
            "login" => "ControllerLogin",
            "loginuser" => "ControllerSelect",
            "painel" => "ControllerPainelHome",
            "recuperar" => "ControllerRecuperar",
            "envio-email" => "ControllerPhpMailer",
            "read" => "ControllerSelectCor",
            "logout" => "ControllerLogout",
            "ops" => "ControllerOps"
        ];

        if (array_key_exists($this->index, $this->rota)) {
            if (file_exists("../app/controller/{$this->rota[$this->index]}.php")) {
                return $this->rota[$this->index];
            } else {
                return "ControllerPaginaBloqueada";
            }
        } else {
            return "Controller404";
        }
    }
}

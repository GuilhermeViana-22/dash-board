<?php

namespace App\Controller;

class ControllerPaginaBloqueada
{
    public function __construct()
    {
        echo ("
            <div style='display: flex; align-items: center; height: calc(100vh - 50px); justify-content: center;'>
                <h1>ACESSO NEGADO</h1>
            </div>
        ");
    }
}

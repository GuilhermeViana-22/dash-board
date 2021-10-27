<?php

namespace Src\Trait;

trait TraitClearSanitize
{
    protected $return;

    /**
     * Limpa string
     *
     * @param STRING $dados
     * @return void
     */
    protected function clearString($dados)
    {
        return $this->return = filter_var($dados, FILTER_SANITIZE_STRING);
    }
}

<?php

namespace Src\Trait;

class TraitCripto
{
    protected $return;
    protected $return_resultado;

    public function criptografar($dados)
    {
        return $this->return = password_hash($dados, CRYPT_BLOWFISH, ['const' => 11]);
    }

    public function desCriptografar($senha, $senha_Cryptografada)
    {
        if (password_verify($senha, $senha_Cryptografada)) {
            return $this->return_resultado = true;
        } else {
            return $this->return_resultado = false;
        }
    }
}

<?php

namespace App\Model;

abstract class ClassConexao
{

    protected $conexao;


    /**
     * realiza a conexao com banco de dados
     *
     * @return void
     */
    public function conexaoDb()
    {
        try {
            $this->conexao = new \PDO("mysql:host=" . HOST . ";dbname=" . DB . "", "" . USER . "", "" . PASS);
            return $this->conexao;
        } catch (\PDOException $err) {
            return $err->getMessage();
        }
    }
}

<?php

namespace App\Model;

require_once("ClassConexao.php");

use App\Model\ClassConexao;

class ClassSelect extends ClassConexao
{
    private $db;
    protected $resultado;
    private $dadosRetorno;

    public function selectDadosBanco($tabela, $login = false, $email, $senha)
    {
        if ($login === true) {
            $this->db = $this->conexaoDb()->prepare("
                SELECT email, senha 
                FROM `dashboard`.`{$tabela}` 
                WHERE `email` = (?)
            ");
            $this->db->bindParam(1, $email, \PDO::PARAM_STR);
            $this->db->execute();
            $this->resultado = $this->db->fetch(\PDO::FETCH_ASSOC);

            if ($this->resultado == false) {
                return false;
            } else {
                if ($this->resultado['senha'] == $senha) {
                    session_start();
                    if (!isset($_SESSION['login_user'])) {
                        $_SESSION['login'] = [
                            'STATUS' => true,
                            'NIVEL' => 'admin'
                        ];
                        return true;
                    }
                } else {
                    return false;
                }
            }
        }
    }
}

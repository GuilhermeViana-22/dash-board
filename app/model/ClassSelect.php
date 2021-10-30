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
                $this->db = null;
            } else {
                if ($this->resultado['senha'] == $senha) {
                    session_start();
                    if (!isset($_SESSION['login_user'])) {
                        $_SESSION['login'] = [
                            'STATUS' => true,
                            'NIVEL' => 'admin'
                        ];
                        $this->db = null;
                        return true;
                    }
                } else {
                    $this->db = null;
                    return false;
                }
            }
            $this->db = null;
        }
    }

    public function selectDadosBancoCores($tabela)
    {
        $this->db = $this->conexaoDb()->prepare("SELECT * FROM `dashboard`.`{$tabela}`");
        $this->db->execute();
        $array_return = [];
        while ($dados = $this->db->fetch(\PDO::FETCH_ASSOC)) {
            array_push($array_return, $dados);
        }
        $this->db = null;
        return $array_return;
    }

    public function selectDadosInner($tabela, $tabela2, $cor)
    {
        $this->db = $this->conexaoDb()->prepare("SELECT * FROM `dashboard`.`{$tabela}` as table1 INNER JOIN `dashboard`.{$tabela2} as table2 ON table1.id = table2.cores_id WHERE nome = '{$cor}';");
        $this->db->execute();
        $array_return = [];
        while ($dados = $this->db->fetch(\PDO::FETCH_ASSOC)) {
            array_push($array_return, $dados);
        }
        $this->db = null;
        return $array_return;
    }
}

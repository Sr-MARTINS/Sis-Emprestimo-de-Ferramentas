<?php
include 'includ/confg.php';

class DB
{
    static public $tabela = null;
    static public $primaria = "id";

    static public function openConnect()
    {
        $conexao = new PDO("mysql:host=".SERVIDOR.";dbname=".DB, USER, PASSWORD);
    
        return $conexao;
    }

    static public function listar() {
        $sql = "SELECT * FROM " . static::$tabela ;

        $result = self::openConnect()->query($sql);
        $result = $result->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    static public function buscar($id) {
        $sql = "SELECT * FROM " . static::$tabela . " WHERE " . static::$primaria . "=$id";

        $result = self::openConnect()->query($sql);
        $result = $result->fetch(PDO::FETCH_OBJ);

        return $result;

    }

    public function salvar(array $dados) {
        $campos = implode(",", array_keys($dados));
        $valores = "'" .implode("' ,'", array_values($dados)) ."'";
        
        $sql = "INSERT INTO " . static::$tabela . "($campos) VALUES ($valores)";
        $sql = self::openConnect()->prepare($sql);
        $sql->execute();

        return $sql;
    }

    public function editar($id, array $dados ) {
        $campos = [];

        foreach($dados as $chaves => $valores) {
            $campos[] ="{$chaves} = '{$valores}' ";
        } 
        $campos = implode(",", $campos);
        // $sql = "UPDATE $tabela SET $campos WHERE $condicao";
        $sql = "UPDATE " . static::$tabela . " SET " . $campos ." WHERE " . static::$primaria ." = $id";
        $sql = self::openConnect()->prepare($sql);
        $sql->execute();

        return $sql;
    }

    public function excluir($id) {
        $sql = "DELETE FROM " . static::$tabela . " WHERE " . static::$primaria . "=$id";
        var_dump($sql);
        $result = self::openConnect()->exec($sql);
        // $result->execute();
        // var_dump($result);

        return $result;
    } 
}
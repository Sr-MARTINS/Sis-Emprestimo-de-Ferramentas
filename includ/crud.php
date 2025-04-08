<?php

    require_once("confg.php");

    function openConnect() {
        $conexao = mysqli_connect(SERVIDOR, USER, PASSWORD, DB) or die (mysqli_connect($conexao));
        mysqli_set_charset($conexao, CHARSET);

        return $conexao;
    }

    function closeConnect($conexao) {
        mysqli_close($conexao) or die (msqli_error($conexao));

        return $conexao;
    }

    function executar($sql) {
        $conexao = openConnect();

        $qyr = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        closeConnect($conexao);

        return $qyr;
    }

    function consultarTabela($tabela, $condicao = null, $campos = "*") {
        $condicao = ($condicao != null) ? " WHERE " . $condicao : "";
        $sql = "SELECT $campos FROM $tabela $condicao";

        $qyr = executar($sql);

        if(!mysqli_num_rows($qyr)) {
            return false;
        }else { 
            while($linha = mysqli_fetch_array($qyr)) {
                $dados[] = $linha;
            }
            return $dados;
        }
    }


    function addItem($tabela, array $dados) {
        $campos = implode(",", array_keys($dados));
        $valores = "'" .implode("' ,'", $dados) ."'";

        $sql = "INSERT INTO $tabela ($campos) VALUES ($valores)";

        return executar($sql);
    }

    function delete($tabela, $condicao) {
        $sql = "DELETE FROM $tabela WHERE $condicao";

        return executar($sql);
    }


?>
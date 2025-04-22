<?php

include 'DB.php';

class Ferramenta extends DB
{
    static public $tabela   = "ferramenta";
    static public $primaria = "id_ferramenta";
    public $ferramenta;
    public $descricao;
    public $status;
}
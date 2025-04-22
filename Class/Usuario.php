<?php

// include 'includ/crud.php';
include 'DB.php';

class Usuario extends DB
{
    static public $tabela   = "usuario";
    static public $primaria = "id_usuario";
    public $nome;
    public $email;
    public $senha;

}
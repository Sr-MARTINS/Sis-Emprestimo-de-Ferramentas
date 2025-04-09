<?php

    $senha = "12345";
    $senhaEncript = md5($senha);
    $senhaEncript2 = hash("sha256",$senha);

    echo "A senha $senha  Encriptada em MD5 é: $senhaEncript <br>";  
    echo "A senha $senha  Encriptada em sha256 é: $senhaEncript2";  

?>
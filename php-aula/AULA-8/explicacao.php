<?php
    // require 'head.php';

    $senha = '1234';

    /**
     * password_hash é uma função nativa que gera senhas criptografadas e é recomendada para as versões mais atuais do PHP.
     * A constante PASSWORD_DEFAULT gera o tipod de hash mais adequado e/ou mais atual do PHP.
     * Pode chegar até 255 caracteres.
     * A cada atualização do navegador, a função gera um novo hash para mesma senha.
     * Tem outras formas de criptografar: o PASSWORD_BCRYPT, uma constante, ou seja não mudará;
     * E temos a função md5.
     */

     $hash = password_hash($senha, PASSWORD_DEFAULT);

     echo "SENHA ORIGINAL: " . $senha. "<br/>";
     echo "HASH" . $hash . "<br/>";

     $hash_verify = '$2y$10$nWT4J00w3nh7KJpQQgDYjunl0gYNAykCdT5tlcchCNkhKv8v1y9He';

     if(password_verify($senha, $hash_verify)){
        echo 'senha correta';
     } else {
        echo 'senha incorreta';
     }

?>
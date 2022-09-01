<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome="Ana";
        //variavel tipo string
        echo "Nome do suario: <b>$nome</b><br>";
        //colocando uma string no echo
        echo "Nome do suario: <b>$nome</b> total letras é: ". strlen($nome);
        $sobrenome="Maria";
        $nomecompleto= $nome." ".$sobrenome;
        //. concatena a informação
        //" "espaço em branco
        //strlen($nome) mostra a quantidade de letras
        echo"<br>O nome completo é <b>$nomecompleto </b> a quantida de letras é: " . strlen($nomecompleto);
        $nome2="Pedro Maria Souza  ";
        echo"<br>A quantidade de caracteres de nome2 é ($nome2)".strlen($nome2);
        $nome3=trim($nome2);
        //trim tira o espaço antes ou depois da var
        echo"<br>Total de caracters de nome2 é $nome3 " .strlen($nome3);
        
        ?>
    </body>
</html>

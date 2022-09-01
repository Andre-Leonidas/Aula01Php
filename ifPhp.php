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
        <table border="1">
            <tr>
                <td>abaixo de 17</td>
                <td>Muito abaixo do peso</td>
            </tr>
            <tr>
                <td>Entre 17 e 18.49</td>
                <td>Abaixo do peso</td>
            </tr>
            <tr>
                <td>Entre 18.50 e 24,99</td>
                <td>Peso normal</td>
            </tr>
            <tr>
                <td>Entre 25 e 29,99</td>
                <td>Acima do peso</td>
            </tr>
            <tr>
                <td>Entre 30 e 34,99</td>
                <td>Obesidade I</td>
            </tr>
            <tr>
                <td>Entre 35 e 39,99</td>
                <td>Obesidade II</td>
            </tr>
            <tr>
                <td>Maior que 40</td>
                <td>Obesidade III</td>
            </tr>

        </table>
        <?php
        echo "<br>";
        $imc = 45;
        if($imc<17){echo"Muito abaixo do peso";}
        if(($imc>=17) && ($imc<=18.49)){echo"Abaixo do peso";}
        if(($imc>=18.50) && ($imc<=24.99)){echo"Peso normal";}
        if(($imc>=25) && ($imc<=29.99)){echo"Acima do peso";}
        if(($imc>=30) && ($imc<=34.99)){echo"Obesidade I";}
        if(($imc>=35) && ($imc<=39.99)){echo"Obesidade II";}
        if($imc>40){echo"Obesidade III";}
        ?>
    </body>
</html>

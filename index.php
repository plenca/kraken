<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OOP v PHP Začátky</title>
    </head>
    <body>
        <?php
        require_once 'tridy/Clovek.php';
        require_once 'tridy/Clovek2.php';
        
        echo 'Toto je změna kódu, pro test gitu. Následující kód je bez konstruktoru. <br />';
        $karel = new Clovek();
        $karel->jmeno = 'Karel';
        $karel->primeni = 'Novák';
        $karel->vek = 30;
        
        $jan = new Clovek();
        $jan->jmeno = 'Jan';
        $jan->primeni = 'Zmatkář';
        $jan->vek = 24;
        
        $karel->pozdrav(); // -> slouží po volání metody
        echo '<br />';
        $jan->pozdrav();
        echo '<br />';
        
        echo 'S konstruktorem <br />';
        $matej = new Clovek2('Matěj', 'Moudrý', 45);
        $lojza = new Clovek2('Lojza', 'Krátký', '21');
        
        $matej->pozdrav();
        echo '<br />';
        $lojza->pozdrav();
        echo '<br />';
        echo "Použila se magickou metodu ToString. Výsledkem je $matej";

        echo "Nový řádek";
        ECHO "dALŠÍ ŘÁDEK";
        echo "nový řádek větve";
        echo 'Ukazuji práci s krakenm!'
        ?>
    </body>
</html>

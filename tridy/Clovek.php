    <?php
    
    class Clovek { // takto se vytváří nová třída
        
        public $jmeno; //modifikátor public umožňuje atribut vidět zvenčí, tedy mimo tento skript
        public $primeni;
        public $vek;
        /*
         * Atributy fungují jako proměné, ale náleží objektu.
         */
        public function pozdrav() { // díky pzblic můžeme metodu volat z venčí
            echo 'Ahoj já jsem ' . $this->jmeno; // Pod proměnou this je instance, se kterou právě pracujem.
            
        }
    }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


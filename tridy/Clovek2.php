<?php
/* 
 * V této verzi využiji konstruktoru pto tvorbu instancí
 */
    
class Clovek2 { // takto se vytváří nová třída
        
    public function __construct($jmeno, $prijmeni, $vek) { //Konstruktor, neomezené množství parametrů. // __ magicá metoda
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->vek = $vek;
    }
    public function pozdrav() { // díky pzblic můžeme metodu volat z venčí
    echo 'Ahoj já jsem ' . $this->jmeno; // Pod proměnou this je instance, se kterou právě pracujem.   
        }
        
        public function __toString() { // magická metoda převede objekt na řetězec => jde vypsat pomocí echo
            return $this->jmeno;
        }    
    }
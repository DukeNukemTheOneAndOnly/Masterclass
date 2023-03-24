<?php
//Auteur: Bastien Réveillon
//Fichier: Voiture
//Description: un fichier php étans des classe permettant la création de voiture
class voiture extends véhicule
{
    public function __construct($cMarque, $cModel, $cAnnee)
    {
        parent::__construct($cMarque, $cModel, $cAnnee);
    }

    public function Acceleration()
    {
        $vitesseMax = 400;
        if ($this->getVitesse()+ 10 <= $vitesseMax) {
            $this->setVitesse(10+$this->getVitesse());
        }

    }
    public function Décéleration()
    {
        $this->setVitesse(10-$this->getVitesse());
    }


}
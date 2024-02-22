<?php
//Auteur: Bastien Réveillon
//Fichier: Bolide
//Description: est la sous class de voiture permetant la création de voiture de course dont la puissance est pris en compte
class bolide extends véhicule
{

    public int $puissance;

    public function getPuissance(){return $this->puissance;}

    //les set sah efficace
    public function setPuissance($puissance){return $this->puissance=$puissance;}
    
    public function __construct($cMarque, $cModel, $cAnnee, $cPuissance)
    {
        parent::__construct($cMarque, $cModel, $cAnnee);
        $this->setPuissance($cPuissance);
    }

    public function Acceleration()
    {
        $vitesseMax = 1000;
        $acceleration = 10 *$this->getPuissance();
        if ($this->getVitesse()+ $acceleration <= $vitesseMax) {
            $this->setVitesse($acceleration+$this->getVitesse());
        }

    }
    public function Décéleration()
    {
        $acceleration = 10 *$this->getPuissance();
        $this->setVitesse($acceleration-$this->getVitesse());
    }
}
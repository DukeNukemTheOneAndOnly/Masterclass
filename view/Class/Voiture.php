<?php
//Auteur: Bastien Réveillon
//Fichier: Voiture
//Description: un fichier php étans des classe permettant la création de voiture
class voiture
{
    //atribut
    private string $marque;
    private string $modele;
    private int $annee;
    private int $vitesse;

    //les get tah genieu
    public function getMarque(){return $this->marque;}
    public function getModel(){return $this->modele;}
    public function getAnnee(){return $this->annee;}
    public function getVitesse(){return $this->vitesse;}

    //les set sah efficace
    public function setMarque($marque){return $this->marque=$marque;}
    public function setModel($model){return $this->modele=$model;}
    public function setAnnee($annee){return $this->annee=$annee;}
    public function setVitesse($vitesse){return $this->vitesse=$vitesse;}

    public function __construct($cMarque, $cModel, $cAnnee)
    {
        $this->setMarque($cMarque);
        $this->setModel($cModel);
        $this->setAnnee($cAnnee);
        $this->setVitesse(0);
    }

    public function Acceleration($acceleration)
    {
        $vitesseMax = 400;
        if ($this->vitesse + $acceleration <= $vitesseMax) {
            $this->vitesse += $acceleration;
        }

    }


}
require("Bolide.php");
<?php
//Auteur: Bastien Réveillon
//Fichier: Bolide
//Description: est la sous class de voiture permetant la création de voiture de course dont la puissance est pris en compte
class Piece
{

    public int $valeur;

    public function getValeur(){return $this->valeur;}

    //les set sah efficace
    public function setValeur($valeur){return $this->valeur=$valeur;}
    
    public function __construct($cValeur)
    {
        $this->setValeur($cValeur);
    }

    public function Flip()
    {
        $message="ss";
        $bastien=rand(1,2);
        
        if($bastien==1){
            $message="Face";
        }else{
            $message="Pile";
        }
        return $message;
    }
}
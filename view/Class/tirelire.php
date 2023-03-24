<?php
//Auteur: Bastien Réveillon
//Fichier: Voiture
//Description: un fichier instanciant la class tirelire
//date:10.03.2023
require("piece.php");
class tirelire
{
    //atribut
    private array $Piece;

    //les get tah genieu
    //public function getMarque(){return $this->$Piece;}

    //les set sah efficace
    //public function setMarque($marque){return $this->marque=$marque;}

    public function __construct($cArgent)
    {
        $this->Piece= array("un bouton de chemise");
        while($cArgent>0){
            $valeur=rand(1,5);
            $cArgent=$cArgent-$valeur;
            array_push($this->Piece, new Piece($valeur));
        }
    }
}

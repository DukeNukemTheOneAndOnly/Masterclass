<?php

class cars
{
    //atribut
    private string $marque;
    private string $modele;
    private string $link;
    private int $price;

    //les get tah genieu
    public function getMarque(){return $this->marque;}
    public function getModel(){return $this->modele;}
    public function getLink(){return $this->link;}
    public function getPrice(){return $this->price;}

    //les set sah efficace
    public function setMarque($marque){return $this->marque=$marque;}
    public function setModel($model){return $this->modele=$model;}
    public function setLink($link){return $this->link=$link;}
    public function setPrice($price){return $this->price=$price;}

    public function __construct($cMarque, $cModel, $clink, $cPrice)
    {
        $messageror="";
        if(strlen($cMarque) > 39){ // si la longueur du texte dépasse 39 caractères
            $messageror ="<p class='text-danger'>too long model.</p>";
            messagerore($messageror);
            return;
        }
        if(strlen($cMarque) > 39){ // si la longueur du texte dépasse 39 caractères
            $messageror ="<p class='text-danger'>too long marque.</p>";
            messagerore($messageror);
            return;
        }
        if(5< strlen($clink) and strlen($clink) > 59){ // entre 5 et 59
            $messageror= "<p class='text-danger'>too long link.</p>";
            messagerore($messageror);
            return;
        }
        $this->setMarque($cMarque);
        $this->setModel($cModel);
        $this->setLink($clink);
        $this->setPrice($cPrice);
        $sql = "INSERT INTO Cars(`model`, `marque`,`link`,`price`) values('" . $this->modele. "', '" . $this->marque . "','".$this->link."','".$this->price."');";
        $res = sql_execute($sql, false);
        header("location: ./?" . G_PATH . "=" . PATH_AUTO); // redirection sur la page home
    }
    
}

function find_all_car(){
    $sql = "SELECT * FROM Cars ORDER BY idCar";
    $res = sql_execute($sql);
    return $res;
}

function find_car_by_id($id){
    // vérification de l'existence de la colonne donnée en paramètre
    $sql = "SELECT * FROM Cars WHERE idCar = '".$id."'";
    $res = sql_execute($sql);
    return $res;
}

/**
 * Fonction qui s'occupe de l'affichage des posts
 */ 
function display_car($Car,$Rank){
    $tab= "<tbody>";
    foreach($Car as $key => $value){
        $tab=$tab."<tr><th scope='row'>".$value["idCar"]."</th><td>".$value["model"]."</td><td>".$value["marque"]."</td><td>".$value["link"]."</td><td>".$value["price"]."</td>";
        if($Rank=="Admin"){$tab=$tab."'<td> <a href='./?".G_PATH."=".PATH_AUTO."&supercar=".$value["idCar"]."'><button type='button' class='btn btn-danger'>Sup</button></a></td>";}
        $tab=$tab."</tr>";
    }
    $tab=$tab."</tbody>";
    return $tab;
}

function delete_car($idCar){ 
    if ($idCar == null) { //si il existe
        return;
    }
    if (!empty(find_car_by_id($idCar))){
        $sql = "DELETE FROM Cars WHERE idCar = " . $idCar;
        $res = sql_execute($sql);
    }
    header("location:?".G_PATH."=home");
}
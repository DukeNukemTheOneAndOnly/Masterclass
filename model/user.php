<?php

class user
{
    //atribut
    private string $Pseudo;
    private string $mdp;
    private string $Rank;

    //les get tah genieu
    public function getPseudo(){return $this->Pseudo;}
    public function getmdp(){return $this->mdp;}
    public function getRank(){return $this->Rank;}
    //les set sah efficace
    public function setPseudo($pseudo){return $this->Pseudo=$pseudo;}
    public function setmdp($mdp){return $this->mdp=$mdp;}
    public function setRank($rank){return $this->Rank=$rank;}

    public function __construct($cPseudo, $cmdp, $type)
    {
        if($type=="Log")
        {
            $count=0;
            $data=find_User($cPseudo);
            if(is_int($data[0]["idUser"]))
            {
                if(password_verify($cmdp,$data[0]["mdp"]))
                {
                    $this->setPseudo($data[0]["Pseudo"]);
                    $this->setmdp($data[0]["mdp"]);
                    $this->setRank($data[0]["Rank"]);
                }
            }
        }
        elseif($type=="sig")
        {
            $this->setPseudo($cPseudo);
            $this->setmdp($cmdp);
            $this->setRank("User");
            $this->add_user($this->getPseudo(),$this->getmdp());
        }
        
        
    }

    public function add_user($cPseudo, $cmdp)
    {
        $messageror="";
        if(strlen($cPseudo) > 25){ // si la longueur du pseudo dépasse 25 caractères
            $messageror ="<p class='text-danger'>Votre pseudonyme est trop long.</p>";
            messagerore($messageror);
            return;
        }
        if(strlen($cmdp) < 1){ // si la longueur du mots de passe en de 0
            $cmdp=password_hash($cmdp,PASSWORD_DEFAULT,['cost' => 10]);
            $messageror ="<p class='text-danger'>There is no password...</p>";
            messagerore($messageror);
            return;
        }
        $this->setPseudo($cPseudo);
        $this->setmdp($cmdp);
        header("location: ./?" . G_PATH . "=" . PATH_HOME); // redirection sur la page home
        $sql = "INSERT INTO User(`Pseudo`,`mdp`,`idRank`) values('" . $this->Pseudo. "', '" . $this->mdp . "','1');";
        $res = sql_execute($sql, false);

    }

}

function find_User($id=null){
    if(is_int($id)){$sql = "SELECT User.idUser, User.Pseudo, User.Mdp, Rank.titre FROM User INNER JOIN Rank ON User.IdRank=Rank.IdRank WHERE idUser = '".$id."'";}
    if(is_string($id)){$sql = "SELECT User.idUser, User.Pseudo, User.Mdp, Rank.titre FROM User INNER JOIN Rank ON User.IdRank=Rank.IdRank WHERE Pseudo = '".$id."'";}
    if($id==null){$sql = "SELECT User.idUser, User.Pseudo, User.Mdp, Rank.titre FROM User INNER JOIN Rank ON User.IdRank=Rank.IdRank ORDER BY idUser";}
    $res = sql_execute($sql);
    return $res;
    // vérification de l'existence de la colonne donnée en paramètre
}
    

function display_User($User){
    $tab= "<tbody>";
    foreach($User as $key => $value){$tab=$tab."<tr><th scope='row'>".$value["idUser"]."</th><td>".$value["Pseudo"]."</td><td>".$value["marque"]."</td><td><a href='./?".G_PATH."=".PATH_AUTO."&DeleteUser=".$value["idUser"]."'><button type='button' class='btn btn-danger'>Sup</button></a></td></tr>";}
    $tab=$tab."</tbody>";
    return $tab;
}

function delete_User($idCar){ 
    if ($idCar == null) { //si il existe
        return;
    }
    if (!empty(find_car_by_id($idCar))){
        $sql = "DELETE FROM Cars WHERE idCar = " . $idCar;
        $res = sql_execute($sql);
    }
    header("location:?".G_PATH."=home");
}
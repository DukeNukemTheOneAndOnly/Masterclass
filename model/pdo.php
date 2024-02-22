<?php
function getPdoInstance()
{
    static $pdo = null;
    if ($pdo == null) {
        try {
            $pdo = new PDO("mysql:host=" . PDO_HOSTNAME .
                           ";dbname=" . PDO_DB_NAME .
                           ";charset=utf8mb4", PDO_DB_USERNAME, PDO_DB_PASSWORD);
        } catch (PDOException $e) {
            echo "<p>Erreur : " . $e->getMessage() . "<br>";
            echo 'N° : ' . $e->getCode() . "</p>";
            exit(1);
        }
    }
    return $pdo;
}


function sql_execute($sql, $fetch=true){
    $db = getPdoInstance();
    $req = $db->prepare($sql);
    $req->execute();
    if($fetch)
        return $req->fetchAll();
    return $req;
}
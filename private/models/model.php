<?php
// deze get functie toegevoegd!
function getUserByCode($code)
{
    $connection = dbConnect();
    $sql = "SELECT * FROM `gebruiker` WHERE `code` = :code";
    $statement = $connection->prepare($sql);
    $statement->execute(['code' => $code]);

    if ($statement->rowCount() === 1) {
        return $statement->fetch();
    }

    return false;
}

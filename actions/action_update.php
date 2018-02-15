<?php

require_once "../init_db.php";
// selectionne ine ligne de la table pour en modifier le nom le genre et l'année

//Vérifie que les champs ne sont pas vides et renvoie vers la page admin si c'est le cas
if (!isset($_POST['name']) || !isset($_POST['genre']) || !isset($_POST['year']) || !isset($_POST['episode']) || !isset($_POST['synopsis']) || $_POST['name']==="" || $_POST['genre']==="" || $_POST['year']==="" || $_POST['episode']==="" || $_POST['synopsis']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}

$sql = "UPDATE
      `anime`
SET
   `name` = :name,
   `genre` = :genre,
   `year` = :year,
   `episode` = :episode,
   `synopsis` = :synopsis
WHERE
   id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':year', $_POST['year']);
$stmt->bindValue(':episode', $_POST['episode']);
$stmt->bindValue(':synopsis', $_POST['synopsis']);
$stmt->execute();

header('Location: ../admin.php?id='.$conn->lastInsertId());

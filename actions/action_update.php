<?php

require_once "../init_db.php";
// selectionne ine ligne de la table pour en modifier le nom le genre et l'année


$sql = "UPDATE
      `anime`
SET
   `name` = :name,
   `genre` = :genre,
   `year` = :year
WHERE
   id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':year', $_POST['year']);
$stmt->execute();

header('Location: ../admin.php?id='.$conn->lastInsertId());

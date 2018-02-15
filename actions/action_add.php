<?php
require_once "../init_db.php";

//Vérifie que les champs ne sont pas vides et renvoie vers la page admin si c'est le cas
if (!isset($_POST['name']) || !isset($_POST['genre']) || !isset($_POST['year']) || $_POST['name']==="" || $_POST['genre']==="" || $_POST['year']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}

//vérifie que le fichier choisi est une image
$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check === false) {
    header('Location: ../admin.php?error_file_format');
    exit();
}
$extension=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

//Commande MySQL
$requete = "INSERT INTO
`anime`
(`name`, `genre`, `url`, `year`, `episode`, `synopsis`)
VALUES
(:name, :genre, :url ,:year, :episode, :synopsis)
;";

//On bind les valeurs de la commande MySQL et on execute
$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':genre', $_POST['genre']);
$stmt->bindValue(':url', $extension);
$stmt->bindValue(':year', $_POST['year']);
$stmt->bindValue(':episode', $_POST['episode']);
$stmt->bindValue(':synopsis', $_POST['synopsis']);
$stmt->execute();


$target_file = "../uploads/" . $conn->lastInsertId() . "." . $extension;
move_uploaded_file($_FILES["image"]["tmp_name"], "./".$target_file);

header('Location: ../admin.php?id='.$conn->lastInsertId());
exit();

<?php
/**
 * la page update selectionne une ligne dont on pourra modifier le nom, le genre, l'url, et l'année.
 */
session_start();
require_once "init_db.php";

if (!isset($_POST['id'])) {
    header('Location:index.php');
    exit();
}

$sql = "SELECT
name,
genre,
url,
year,
episode,
synopsis

FROM
anime
WHERE
id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if (!isset($row['name'])) {
    echo $row["name"];
    header('Location:index.php?error');
exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OTAKOON</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="image/favicon.png">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style_add.css">
    </head>
    <body class="body">
        <div class="container">
            <a class="index" href="index.php"><img src="image/retourindex.png" alt="logo"></a>

            <div class="update">
            <h1 class="h1">Modify</h1>

                <form class="add_form" action="actions/action_update.php" method="POST">
                    <input class="allInput" type="hidden" name='id' value="<?=$_POST["id"]?>">
                    <p class="inputName">Titre :</p>
                    <input class="allInput" type="text" name='name' value="<?=$row["name"]?>">
                    <p class="inputName">Genre :</p>
                    <input class="allInput" type="text" name='genre' value="<?=$row["genre"]?>">
                    <p class="inputName">Année :</p>
                    <input class="allInput" type="number" name='year' value="<?=$row["year"]?>">
                    <p class="inputName">Episodes :</p>
                    <input class="allInput" type="number" name='episode' value="<?=$row["episode"]?>">
                    <p class="inputName">Synopsis :</p>
                    <textarea class="allInput textarea" rows="20" cols="80"name='synopsis'><?=$row["synopsis"]?></textarea>
                    <input class="allInput" type="submit">
                </form>
            </div>
        </div>
    </body>
</html>

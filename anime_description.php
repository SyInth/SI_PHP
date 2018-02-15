<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 13/02/2018
 * Time: 18:11
 */

require_once "init_db.php";

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style_description.css">
    <title>Document</title>
</head>
    <body class="body">
        <div class="container">
            <?php
            if (!isset($_GET['id'])) {
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
            $stmt->bindValue(":id", $_GET["id"]);
            $stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_ASSOC);

            if (!isset($row['name'])) {
                header('Location:index.php?error');
                exit();
            }
            ?>

            <header class="header">
                <div class="headerContainer">
                   <a href="index.php"><img class="logo" src="image/logo.png" alt="logo"></a>
                   <div class="mainMenu">
                      <div class="sign">
                         <a href="admin.php">admin_panel</a>
                      </div>
                      <nav class="mainNav">
                         <a class="mainNav_link" href="anime_list.php">anime</a>
                         <a class="mainNav_link" href="#">manga</a>
                         <a class="mainNav_link" href="#">ma liste</a>
                      </nav>
                   </div>
                </div>
            </header>

            <section class="mainSection">

                <div class="afficheDescription">
                    <img class="afficheDescription_img" src="<?="uploads/".$_GET["id"].".".$row["url"]?>" alt="img.<?=$_GET["id"]?>">
                </div>

                <div class="mainDescription">
                    <h1 class="h1"><?=$row["name"]?></h1>
                    <p class="genreTag">Genre : <?=$row["genre"]?></p>
                    <p class="yearTag">Year : <?=$row["year"]?></p>
                    <p class="yearTag">Episode : <?=$row["episode"]?></p>
                    <h2 class="synopsisTag">Synopsis</h2>
                    <p class="synopsisP"><?=$row["synopsis"]?></p>
                </div>

            </section>




        </div>

</body>
</html>

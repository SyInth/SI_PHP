<?php
// CONNECT TO SERVER AND DATABASE AND GET DATA
require_once "init_db.php";
//require 'is_admin.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>OTAKOON</title>
    <link rel="shortcut icon" href="image/favicon.png">
</head>

<body class="body">
    <div class="container">
        <a class="index" href="index.php"><img src="image/retourindex.png" alt=""></a>

        <header class="header">
            <img src="image/adminlogo.png" alt="logo">
        </header>

        <div class="read">
            <table class="table">
                <tr>
                    <th class="th">ID</th>
                    <th class="th">Name</th>
                    <th class="th">Genre</th>
                    <th class="th">Extension</th>
                    <th class="th">Year</th>
                    <th class="th">Modify/</br>Delete</th>
                </tr>

                <?php
                /* on utilise SELECT pour selectionner les noms des données et FROM pour indiquer depuis quelle table.*/
                $sql = "SELECT
                    `id`,
                    `name`,
                    `genre`,
                    `url`,
                    `year`
                  FROM
                    `anime`
                ;";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                ?>
                <?php
                /* parcourt le tableau donné par fetch et affiche un tr tant qu'il trouve une ligne dans la table. */
                while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
                    <tr>
                        <td class="td" ><?=$row["id"]?></td>
                        <td class="td" ><a href="anime_description.php?id=<?=$row["id"]?>"><?=$row["name"]?></a></td>
                        <td class="td" ><?=$row["genre"]?></td>
                        <td class="td" ><?=$row["url"]?></td>
                        <td class="td" ><?=$row["year"]?></td>
                        <td class="modifyLink deleteButton td">
                            <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row["id"]?>">
                                <input class="modifybtn" type="submit" value="Modify">
                            </form>

                            <form action="actions/action_delete.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row["id"]?>">
                                <input class="deletebtn" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endwhile;?>

            </table>
        </div>
        <div class="flex">
            <a class="addLink" href="add.php">Add</a>
        </div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 14/02/2018
 * Time: 09:35
 */
session_start();
?>

<html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OTAKOON</title>
        <link rel="shortcut icon" href="image/favicon.png">
       <link rel="stylesheet" href="css/reset.css">
       <link rel="stylesheet" href="css/style_add.css">
    </head>
    <body class="body">
        <div class="container">
            <a class="index" href="admin.php"><img src="image/retourindex.png" alt="logo"></a>

            <div class="create">

                <h1 class="h1">Add</h1>

                <form class="add_form" action="actions/action_add.php" enctype="multipart/form-data" method="post">
                    <p class="inputName">Titre :</p>
                    <input class="allInput" type="text" name='name'>
                    <p class="inputName">Genre :</p>
                    <input class="allInput" type="text" name='genre'>
                    <p class="inputName">Image :</p>
                    <input class="allInput imgInput" type="file" name="image">
                    <p class="inputName">Année :</p>
                    <input class="allInput" type="number" name='year'>
                    <p class="inputName">Episodes :</p>
                    <input class="allInput" type="number" name='episode'>
                    <p class="inputName">Synopsis :</p>
                    <textarea class="textarea allInput" rows="20" cols="80" name="synopsis"></textarea>

                    <input class="allInput validInput" type="submit">
                </form>
            </div>
        </div>

    </body>
</html>

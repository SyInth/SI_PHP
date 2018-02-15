<?php
require_once "init_db.php";
?>

   <!DOCTYPE html>
   <html>

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>OTAKOON</title>
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style_animelist.css">
   </head>

   <body class="body">
      <div class="container">
         <header class="header">
            <div class="headerContainer">
               <a href="index.php"><img class="logo" src="image/logo.png" alt="logo"></a>
               <div class="mainMenu">
                  <div class="sign">
                     <a href="admin.php">admin_panel</a>
                  </div>
                  <nav class="mainNav">
                     <a class="mainNav_link" href="#">anime</a>
                     <a class="mainNav_link" href="#">manga</a>
                     <a class="mainNav_link" href="#">ma liste</a>
                  </nav>
               </div>
            </div>
         </header>

         <div class="animeList_read">
            <div>
               <div class="listHeader">
                  <p class="listHeader_title">Title</p>

               </div>

               <?php
               /* on utilise SELECT pour selectionner les noms des données et FROM pour indiquer depuis quelle table.*/
               $sql = "SELECT
                  id,
                  name,
                  url
                     FROM
                  anime
               ;";
               $stmt = $conn->prepare($sql);
               $stmt->execute();
               ?>

               <?php
               /* parcourt le tableau donné par fetch et affiche un les données voulues pour chaque ligne*/
               while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>

               <div class="animeList_item">
                  <div class="animeList_imgContainer">
                     <img src="uploads/<?=$row["id"].'.'.$row["url"]?>" alt="img<?=$row["id"]?>">
                  </div>
                  <h3 class="animeList_itemTitle"><?=$row["name"]?></h3>
                  <a class="animeList_itemLink" href="anime_description.php?id=<?=$row["id"]?>">
                     <button type="button" name="button">Fiche descriptive</button>
                  </a>
               </div>
               <?php endwhile;?>
            </div>
         </div>

         <div class="backToTop">
            <a href="#"><img class="logotop" src="image/logotop.gif" alt="back to top"></a>
         </div>

         <footer class="footer">
            <div class="footerContainer">
               <p class=copyright>Copyright 2018.</p>
               <div class="">
                  <p class="followus">Follow Us</p>
                  <div class="icons">
                     <img src="" alt="">
                     <img src="" alt="">
                     <img src="" alt="">
                  </div>
               </div>
            </div>
         </footer>
         </div>


      </div>


   </body>
   </html>

<?php
require_once 'init_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>OTAKOON</title>
   <link rel="shortcut icon" href="image/favicon.png">
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css">
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
                  <a class="mainNav_link" href="anime_list.php">anime</a>
                  <a class="mainNav_link" href="#">manga</a>
                  <a class="mainNav_link" href="#">ma liste</a>
               </nav>
            </div>
         </div>
      </header>
      <div class="carouselContainer">
         <button class="left_btn" type="button" name="button"><</button>
         <div class="mainCarousel">
            <div class="mainCarousel_wrapper">
               <img class="imgCarousel" src="image/fma.jpg" alt="fma">
               <img class="imgCarousel" src="image/eva.jpg" alt="eva">
               <img class="imgCarousel" src="image/mha.jpg" alt="mha">
            </div>
         </div>
         <button class="right_btn" type="button" name="button">></button>

      </div>

      <section class="mainContent">
         <div class="leftContent">
            <div class="latestAnimes">
               <h2>The latest animes</h2>
               <div class="latestAnimesPic">
                   <div class="imgContainer">
                       <img class="animeImg" src="image/violet.jpg" alt="affiche">
                       <h3>Violet Evergarden</h3>
                   </div>
                   <div class="imgContainer">
                      <img class="animeImg" src="image/MiA.jpg" alt="affiche">
                      <h3>Made In Abyss</h3>
                   </div>
                   <div class="imgContainer">
                       <img class="animeImg" src="image/mob.jpg" alt="affiche">
                       <h3>Mob Psycho100</h3>
                   </div>
               </div>

            </div>

            <div class="upcomingAnimes">
               <h2>Upcoming animes</h2>
               <div class="latestAnimesPic">
                   <div class="imgContainer">
                       <img class="animeImg" src="image/mhanew.jpg" alt="affiche">
                       <h3>My Hero Academia</h3>
                   </div>
                   <div class="imgContainer">
                      <img class="animeImg" src="image/P5.jpg" alt="affiche">
                      <h3>Persona 5</h3>
                   </div>
                   <div class="imgContainer">
                       <img class="animeImg" src="image/SG.jpg" alt="affiche">
                       <h3>Steins;Gate</h3>
                   </div>
               </div>

            </div>
         </div>

         <div class="topAnimes">
            <h2>Top animes</h2>
            <div class="topAnimesContainer">
                <div class="topAnimeContained">
                    <img class="animeImg" src="image/CB.jpg" alt="affiche">
                    <h3>Cowboy Bebop</h3>
                </div>

                <div class="topAnimeContained">
                    <img class="animeImg" src="image/CB.jpg" alt="affiche">
                    <h3>Cowboy Bebop</h3>
                </div>

                <div class="topAnimeContained">
                    <img class="animeImg" src="image/CB.jpg" alt="affiche">
                    <h3>Cowboy Bebop</h3>
                </div>
            </div>
         </div>

      </section>

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


<script>
    var right_btn = document.querySelector('.right_btn');
    var left_btn = document.querySelector('.left_btn');
    var wrapper = document.querySelector('.mainCarousel_wrapper');
    var counter=0;
    var imgCarousel= document.querySelector('.imgCarousel')

    right_btn.addEventListener('click', function(){
      if (counter<2) {
         counter++;
         var translate = - counter * imgCarousel.offsetWidth;
         wrapper.style.transform = "translateX("+ translate +"px)";
      }
    });

    left_btn.addEventListener('click', function(){
      if (counter>0) {
         counter--;
         var translate = - counter * imgCarousel.offsetWidth;
         wrapper.style.transform = "translateX("+ translate +"px)";
      }
    });


   window.addEventListener('resize', function(){
      var translate = - counter * imgCarousel.offsetWidth;
      wrapper.style.transform = "translateX("+ translate +"px)";
   });

</script>

</body>

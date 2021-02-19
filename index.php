<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Bubble Effect</title>
  </head>
  <body>
    <nav>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <ul class="nav-links">
        <li><a href="#">Accueil</a></li>
        <li><a href="#Apropos">A propos</a></li>
        <li><a href="#Montravail">Mon travail</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>


    <main>

      <div class="img">
        <img src="img/trait.png" alt="">
        <h1 class="title">Alban  .  Teissier</h1>
      </div>
   
      <br>
      <p class="title">web développeur - web designer</p>

    </main>

    <section id="Montravail">
      <video id="slider" autoplay muted loop>
        <source src="video/video3.mp4" type="video/mp4">
      </video>

      <ul class="navigation">
        <li onclick="videoUrl('video/video1.mp4')"><img src="img/image.jpg" alt=""></li>
        <li onclick="videoUrl('video/video2.mp4')"><img src="img/image.jpg" alt=""></li>
        <li onclick="videoUrl('video/video3.mp4')"><img src="img/image.jpg" alt=""></li>
        <li onclick="videoUrl('video/video4.mp4')"><img src="img/image.jpg" alt=""></li>
      </ul>
    </section>


    <div class="container">
      <article id="Apropos" class="intro-text">
        <h2>A propos</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam libero provident nihil consequuntur qui ad dolor, doloremque iusto voluptates culpa debitis fugit iure ex reiciendis officia dolorem consequatur sapiente architecto.</p>
      </article>

      <article class="intro-photo">
        <img src="img/albanito.png" alt="">
      </article>
    </div>

    <footer>
      Footer
    </footer>
  
    
    
    
    <script type="text/javascript">
      function videoUrl(hmmmmmm){
        document.getElementById("slider").src = hmmmmmm;
      }
    </script>

    <script src="js/title.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/text_show.js"></script>
  </body>


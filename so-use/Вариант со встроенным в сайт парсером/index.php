<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
    integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="./script/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./script/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="./style/style.css" />
    <title>SO-USE Каласкин Вадим</title>
  </head>
  <body>
  <?php          
    include('./parcer.php')
  ?>
    <div class="container">
      <div class="slider__wrapper">
        <div class="slider__item">
          <div class="item__photo">
            <?php
              echo "<img src='$url$itemimage' alt='Item photo' />"
            ?>
          </div>
          <div class="item__info">
            <div class="item__title">
              <?php 
              echo $h1->text; 
              ?>
            </div>
            <div class="item__about">
               <?php 
                  for($i = 0, $size = count($itemabouts); $i < $size; ++$i){
                   $aboutKey = $itemabouts[$i];
                    echo $aboutKey;
               }
                ?> 
            </div>
          </div>
          <a href="#" class="item__button"
            >Detail <i class="fas fa-arrow-right"></i
          ></a>
        </div>
        <div class="slider__item">
          <div class="item__photo">
            <?php
              echo "<img src='$url$itemimage' alt='Item photo' />"
            ?>
          </div>
          <div class="item__info">
            <div class="item__title">
              <?php 
              echo $h1->text; 
              ?>
            </div>
            <div class="item__about">
               <?php 
                  for($i = 0, $size = count($itemabouts); $i < $size; ++$i){
                   $aboutKey = $itemabouts[$i];
                    echo $aboutKey;
               }
                ?> 
            </div>
          </div>
          <a href="#" class="item__button"
            >Detail <i class="fas fa-arrow-right"></i
          ></a>
        </div>
        <div class="slider__item">
          <div class="item__photo">
            <?php
              echo "<img src='$url$itemimage' alt='Item photo' />"
            ?>
          </div>
          <div class="item__info">
            <div class="item__title">
              <?php 
              echo $h1->text; 
              ?>
            </div>
            <div class="item__about">
               <?php 
                  for($i = 0, $size = count($itemabouts); $i < $size; ++$i){
                   $aboutKey = $itemabouts[$i];
                    echo $aboutKey;
               }
                ?> 
            </div>
          </div>
          <a href="#" class="item__button"
            >Detail <i class="fas fa-arrow-right"></i
          ></a>
        </div>
        <div class="slider__item">
          <div class="item__photo">
            <?php
              echo "<img src='$url$itemimage' alt='Item photo' />"
            ?>
          </div>
          <div class="item__info">
            <div class="item__title">
              <?php 
              echo $h1->text; 
              ?>
            </div>
            <div class="item__about">
               <?php 
                  for($i = 0, $size = count($itemabouts); $i < $size; ++$i){
                   $aboutKey = $itemabouts[$i];
                    echo $aboutKey;
               }
                ?> 
            </div>
          </div>
          <a href="#" class="item__button"
            >Detail <i class="fas fa-arrow-right"></i
          ></a>
        </div>
        <div class="slider__item">
          <div class="item__photo">
            <?php
              echo "<img src='$url$itemimage' alt='Item photo' />"
            ?>
          </div>
          <div class="item__info">
            <div class="item__title">
              <?php 
              echo $h1->text; 
              ?>
            </div>
            <div class="item__about">
               <?php 
                  for($i = 0, $size = count($itemabouts); $i < $size; ++$i){
                   $aboutKey = $itemabouts[$i];
                    echo $aboutKey;
               }
                ?> 
            </div>
          </div>
          <a href="#" class="item__button"
            >Detail <i class="fas fa-arrow-right"></i
          ></a>
        </div>
        <div class="slider__item">
          <div class="item__photo">
            <?php
              echo "<img src='$url$itemimage' alt='Item photo' />"
            ?>
          </div>
          <div class="item__info">
            <div class="item__title">
              <?php 
              echo $h1->text; 
              ?>
            </div>
            <div class="item__about">
               <?php 
                  for($i = 0, $size = count($itemabouts); $i < $size; ++$i){
                   $aboutKey = $itemabouts[$i];
                    echo $aboutKey;
               }
                ?> 
            </div>
          </div>
          <a href="#" class="item__button"
            >Detail <i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./script/slick-1.8.1/slick/slick.min.js"></script>
    <script src="./script/script.js"></script>
  </body>
</html>

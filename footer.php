  <?
    require "conn.php";
    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>home</title>
      <!-- custom css file link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css" integrity="sha512-ZuRTqfQ3jNAKvJskDAU/hxbX1w25g41bANOVd1Co6GahIe2XjM6uVZ9dh0Nt3KFCOA061amfF2VeL60aJXdwwQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
  <div class="carus">


<div class="container">
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="image/01С1211854.gif" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="image/carusel1.gif" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="image/carusel6.gif" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="image/carusel2.gif" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="image/28548W.gif" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="image/28571W.gif" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <div class="row">
        <div class="column">
            <img class="demo cursor" src="image/01С1211854.gif" style="width:100%" onclick="currentSlide(1)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/carusel1.gif" style="width:100%" onclick="currentSlide(2)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/carusel6.gif" style="width:100%" onclick="currentSlide(3)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/carusel2.gif" style="width:100%" onclick="currentSlide(4)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/28548W.gif" style="width:100%" onclick="currentSlide(5)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/28571W.gif" style="width:100%" onclick="currentSlide(6)" alt="">
        </div>
    </div>
</div>
</div>


<div class="blockcode">


<footer class="page-footer shadow bg-body-tertiary bg-info-subtle">
    <div class="d-flex flex-column mx-auto py-5" style="width: 80%">
        <div class="d-flex flex-wrap justify-content-between">
            <div>
                <a href="/" class="d-flex align-items-center p-0 text-dark">
                    <img alt="logo" src="image/logo.jpg" width="50px" />
                    <span class="ms-3 h5 font-weight-bold">Ari-Ana</span>
                </a>
                <p class="my-3" style="width: 250px">
                Мы создаем серебряные и золотые ресурсы и инструменты для помощи разработчикам во время
                    развитие своих проектов
                </p>
                <span class="mt-4">
                    <button class="btn btn-dark btn-flat p-2">
                        <i class="fa fa-facebook"></i>
                    </button>
                    <button class="btn btn-dark btn-flat p-2">
                        <i class="fa fa-twitter"></i>
                    </button>
                    <button class="btn btn-dark btn-flat p-2">
                        <i class="fa fa-instagram"></i>
                    </button>
                </span>
            </div>
            <div>
                <p class="h5 mb-4" style="font-weight: 600">Ari-Ana</p>
                <ul class="p-0" style="list-style: none; cursor: pointer">
                    <li class="my-2">
                        <a class="text-dark" href="/">Ресурсы</a>
                    </li>
                    <li class="my-2">
                        <a class="text-dark" href="/">О нас</a>
                    </li>
                    <li class="my-2">
                        <a class="text-dark" href="/">Контакт</a>
                    </li>
                    <li class="my-2">
                        <a class="text-dark" href="/">Блог</a>
                    </li>
                </ul>
            </div>
            
            <div>
                <p class="h5 mb-4" style="font-weight: 600">Help</p>
                <ul class="p-0" style="list-style: none; cursor: pointer">
                    <li class="my-2">
                        <a class="text-dark" href="/">Support</a>
                    </li>
                    <li class="my-2">
                        <a class="text-dark" href="register.php">Sign Up</a>
                    </li>
                    <li class="my-2">
                        <a class="text-dark" href="login.php">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
        <small class="text-center mt-5">&copy; Ari-Ana, 2023. All rights reserved.</small>
    </div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<script src="js/main.js"></script>
</body>

</html>
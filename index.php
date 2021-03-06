<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/verstka.css">
    <title>Flowers</title>

</head>
<body>
    <header>
        <p class="header_title">FLowers</p>
        <div class="header_content">
            <a href="#start"><p onclick="GoPage(1)" id="1s" class="start_section">Главная</p></a>
            <a href="#about"><p onclick="GoPage(2)" id="2s" >О Нас</p></a>
            <a href="#product"><p onclick="GoPage(3)" id="3s">Товары</p>
            <a href="tel:+375291111111"><p onclick="GoPage(4)" id="4s">Позвонить</p></a>
        </div>
        <div class="header_mail">
            <div class="header_mail_border"></div>
            <p class="mail">voronovicha05@gmail.com</p>
        </div>
    </header>

    <main id="start">
        <!--Раздел: Главная-->
            <div class="start_title">
                <p>Для того чтобы люди радовались жизни, научились видеть красоту и ценили каждое мгновение природа подарила нам цветы. Нежные, ароматные, беззащитные и наполненные легкостью тонких лепестков, цветущие растения смотрят на нас с клумб и оранжерей, дарят положительные эмоции в любую погоду и время года.</p>
            </div>
            <img class="background_img_1"  src="./img/back/img1.jpg" alt="">
        <!--Раздел: О НАС-->
        <h2 id="about" class="section_title" align="center">О нас</h2>
        <!--Первый текст и первое фото-->
            <div class="about_info">
                <div class="txt_about">
                <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. Даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики. Великий Оксмокс предупреждал ее о злых запятых, диких знаках вопроса и коварных точках с запятой, но текст не дал сбить</p>
                </div>
                <img src="./img/back/img2.1.jpg" class="img_about" alt="">
            </div>
        <!--Говнокод для упрощения себе жизни-->
        <h2 class="section_title" style="color: white;" >О нас</h2>
        <!--второе текст и второе фото-->
            <div class="about_info">
                <img src="./img/back/img2.2.jpg" class="img_about" alt="">
                <div class="txt_about">
                    <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. Даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики. Великий Оксмокс предупреждал ее о злых запятых, диких знаках вопроса и коварных точках с запятой, но текст не дал сбить</p>
                </div>

            </div>
        <!--Раздел: Товары-->
        <h2 id="product" class="section_title" align="center">Товары</h2>
         <!--Slider-->
 
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/slider/sl1.jpg" >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/slider/sl2.jpg" >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/slider/sl3.jpg" >
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--Каталог-->
        <div class="product">
            <?php
$con = '';

$link = mysqli_connect('localhost', 'root', 'root', 'products'); // Соединяемся с базой
$sql = "SELECT * FROM products ";

$result = mysqli_query($link, $sql);

            while ($row = mysqli_fetch_array($result)) {
            echo '<div class="card">
            <img class="card_img" src="./img/card/'.$row['img'].'" alt=""><div class="card_txt"><p align="center" class="card_title">'.$row['title'].'</p><p class="card_description">'.$row['description'].'</p></div></div>';
        }

        ?>
        </div>
    </main>
<footer>
    <div class="footer_content">
    <div class="all_soc">
        <div class="soc">
            <img src="./img/footer/youtube.png" class="icon" alt="">
            <p class="link">https://www.youtube.com</p>
        </div>
        <div  class="soc">
            <img src="./img/footer/twiter.png" class="icon" alt="">
            <p class="link">https://twitter.com</p>
        </div>
        <div  class="soc">
            <img src="./img/footer/Telegram.png" class="icon" alt="">
            <p class="link">https://web.telegram.org</p>
        </div>
            <div  class="soc">
                <img src="./img/footer/Instagram.png" class="icon" alt="">
                <p class="link">https://www.instagram.com</p>
            </div>

    </div>
        <div align="right">
            <img src="./img/footer/pay.png" class="pay" alt="">
        </div>
    </div>

    <p class="author" align="center">By Alexandr</p>

</footer>
</body>
</html>
<!--Перемешение по разделам сайта-->
<script src="./js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




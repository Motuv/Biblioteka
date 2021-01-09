<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka AGH</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <div class="header">
            <a href="#"><div class="header__logo"><img src="img/logo.png"></div></a>
            <div class="header__account">
                <a href="strona_logowania.php"><div class="btn">Zaloguj się</div></a>
                <a href="#"><div class="btn">Załóż nowe konto</div></a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="container__slider">
            <button class="sliderBtn sliderBtn--prev" data-button-prev></button>
            <figure class="slide" data-slide></figure>
            <button class="sliderBtn sliderBtn--next" data-button-next></button>
        </div>
    </div>
    <script src="js/slider.js"></script>
    <script>
        const imageArr = [
            "img/sliderImg/slider1.jpg",
            "img/sliderImg/slider2.jpg",
            "img/sliderImg/slider3.jpg"
        ];

        const slider = new Slider(imageArr);
        slider.initializeSlider();
    </script>
</body>
</html>
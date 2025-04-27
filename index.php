<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - SinBarTIK</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body class="background-color-sinbarWhite">   
    <?php include './components/navbar.php' ?>
    
    <div class="home-hero">
        <div class="home-hero-texts">
            <p class="heading headline color-sinbarBlue">Selamat Datang di Website SinBarTIK</p>
            <p class="subheading regular-text color-sinbarBlack background-color-sinbarLightBlue">Website untuk Mempelajari Informatika</p>
        </div>
        <img class="home-hero-image-home" src="./assets/content/hero-home.png">
    </div>

    <div class="home-peringkat">
        <p class="home-peringkat-title title">PERINGKAT SINBAR</p>
        <div class="home-peringkat-container-top">
            <div class="home-peringkat-top-background background-color-sinbarLightBlue"></div>
            <div class="home-peringkat-top">
                <div class="home-peringkat-top-three">
                    <div class="home-peringkat-top-three-number"></div>
                    <div class="home-peringkat-top-three-number-1"></div>
                    <div class="home-peringkat-top-three-number"></div>
                </div>
                <div class="home-peringkat-top-three-container-subtitle">
                    <p class="home-peringkat-top-three-subtitle regular-text">PERINGKAT SINBAR UNTUK BULAN INI</p>
                    <a>
                        <p class="home-peringkat-top-three-subtitle-button regular-text">LIHAT PERINGKAT</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
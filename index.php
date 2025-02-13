<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="art gallery website - Home page">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700;800;900&family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Frontend Mentor | Art gallery website</title>
</head>

<body>
    <header class="header">
        <div class="black-rectangle"></div>
        <picture id="image-hero">
            <source media="(min-width: 1100px)" srcset="./assets/desktop/image-hero.jpg">
            <source media="(min-width: 35rem)" srcset="./assets/tablet/image-hero@2x.jpg">
            <img src="./assets/mobile/image-hero@2x.jpg" alt="people walking in gallery">
        </picture>
        <div class="top flex">
            <div class="top-left">
                <h1 class="ff-shoulders fs-900 uppercase">MUSE BAY<br> Art Gallery</h1>
            </div>
            <div class="top-right">

                <p class="ff-outfit fs-500 text-gray">The arts in the collection of the Modern Art Gallery all started
                from a spark of inspiration. Will these pieces inspire you? Visit
                us and find out.</p>
                <button class="button1 flex bg-black uppercase" onclick="window.location.href='account_home.php'">Visit Our website<img src="./assets/icon-arrow-right.svg" alt="icon-arrow-right" class="bg-gold"></button>
            </div>
        </div> 
    </header>

    <main class="main">
        <picture id="image-grid-1">
            <source media="(min-width: 1100px)" srcset="./assets/desktop/image-grid-1.jpg">
            <source media="(min-width: 35rem)" srcset="./assets/tablet/image-grid-1.jpg">
            <img src="./assets/mobile/image-grid-1@2x.jpg" alt="gallery picture">
        </picture>
        <div id="grid-item1" class="grid-item1">
            <h2 class="fs-700 uppercase ff-shoulders">Your day at the gallery</h2>
            <p class="fs-500 ff-outfit text-gray">Wander through our distinct collections and find new insights about
            our artists. Dive into the details of their creative process.</p>
         </div>
        
        <picture id="image-grid-2">
            <source media="(min-width: 1100px)" srcset="./assets/desktop/image-grid-2.jpg">
            <source media="(min-width: 35rem)" srcset="./assets/tablet/image-grid-2.jpg">
            <img src="./assets/mobile/image-grid-2@2x.jpg" alt="gallery picture">
        </picture>
        <picture id="image-grid-3">
            <source media="(min-width: 1100px)" srcset="./assets/desktop/image-grid-3.jpg">
            <source media="(min-width: 35rem)" srcset="./assets/tablet/image-grid-3.jpg">
            <img  src="./assets/mobile/image-grid-3@2x.jpg" alt="gallery picture">
        </picture>
        <div id="grid-item2" class="black-box bg-black">
            <h2 class="fs-700 ff-shoulders text-white uppercase">Come &amp; be inspired</h2>  
            <p class="fs-500 ff-outfit text-white">We’re excited to welcome you to our gallery and see how our collections
            influence you.</p>
        </div>
    </main>

    <footer class="footer text-white bg-black">
        <div class="container">
            <h3 class="fs-600 ff-shoulders uppercase">MUSE Bay<br>  Art Gallery</h3>
            <p class="fs-400 ff-outfit">The Modern Art Gallery is free to all visitors and open seven days a week
                from 8am to 9pm. Find us at 99 King Street, Newport, USA.
            </p>
            <div class="flex logosP1">
                <img class="hoverP1" src="./assets/icon-facebook.svg" alt="Facebook logo">
                <img class="hoverP1" src="./assets/icon-instagram.svg" alt="Instagram logo">
                <img class="hoverP1" src="./assets/icon-twitter.svg" alt="Twitter logo">
            </div>
        </div>
    </footer>
</body>

</html>
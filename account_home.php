<?php
include("includes/head.php"); ?>
<?php

$user_type = $_SESSION['user_type'];
if($user_type == 'Artist'){
  include("account.php");

}
else if($user_type == 'Customer'){
  include("customer-account.php");

}
else if($user_type == 'Admin'){
  include("head_admin.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MUSE Gallery</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin-bottom:50px;
        }

        nav {
            background-color: #2d70d5;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {

           margin-top:40px;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: black;
            background: url(https://media.istockphoto.com/id/1143994466/photo/empty-canvases-on-display.webp?a=1&b=1&s=612x612&w=0&k=20&c=MweRDs1TGlGHRoxZbOej05IUgTsiJMKjjFVL2y7gQbE=) no-repeat center center/cover;
        }

        .hero h1 {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .hero button ,.about-text button{
            padding: 15px 30px;
            background-color:rgb(17, 13, 12);
            font-size:20px;
            color: white;
            border: none;
            cursor: pointer;
            margin: 10px;
            border-radius: 5px;
        }

        .hero button:hover {
            background-color: #d5966c;
        }
        .about-text button:hover{
            background-color: #d5966c;
        }

        .section {
            padding: 50px 20px;
            background-color: white;
            margin: 20px auto;
            max-width: 1200px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        h2 {
            color: black;

font-size:30px;            text-align: center;
        }

        .about-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .about-image, .about-text {
            width: 50%;
            text-align:justify;
        }

        .about-image img {
            width: 100%;
            border-radius: 8px;
        }

        .services-container {
            display: flex;
            
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .service-card {
            color:white;
            background-color:black;
            color: white;
            width: 300px;
            margin: 15px;
            padding:30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            text-align: center;
        }

        .testimonials {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }

        .gallery-section {
            padding: 50px 20px;
            background-color: #fff;
            text-align: center;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .gallery-item img:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .subscribe-section {
            text-align: center;
            padding: 20px;
            background: url(pictures/guidelines_background.jpg) no-repeat center center/cover;
            color:white;
            border-radius: 8px;
            padding-bottom:100px;
            margin-bottom:100px;
           
        }
.subscribe-section h2{
  color:white;
  font-size:50px;
}
        .subscribe-section input[type="email"] {
            padding: 10px;
            width: 350px;
            font-size:20px;
            background-color:white;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
        }

        .subscribe-section button {
            padding: 10px 20px;
            background-color:rgb(17, 13, 12);
            color: white;
            font-size:20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .subscribe-section button:hover{
            background-color:#d5966c;
        }
    </style>
</head>
<body>


    <div class="hero">
        <div>
            <h1>Welcome to MUSE Gallery</h1>
            <button onclick="location.href='#contact'">Contact Us</button>
        </div>
    </div>

    <div class="section" id="about">
        <h2>About Us</h2>
        <div class="about-container">
            <div class="about-image">
                <img src="pictures/about_home.jpg" alt="About Us">
            </div>
            <div class="about-text">
                <p>MUSE Gallery is a premier space showcasing contemporary art from around the globe. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure nam eius voluptas quam enim quia placeat accusantium consequuntur quis aliquid! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque animi omnis reiciendis.
      </p>  <p>
                     Qui quod blanditiis maiores eius nisi! Vitae, ut. Founded in 2017, we inspire, provoke, and connect through the power of art.</p>
                     <button onclick="location.href='#about_us.php'">Read more</button>

                    </div>


        </div>
    </div>

    <div class="section" id="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service-card">
                <h3>Art Showcasing</h3>
                <p><b>
                We showcase unique artworks from emerging and established artists worldwide.
                </b></p>
            </div>
            <div class="service-card">
                <h3>Customer Dealing</h3>
                <p>
                    <b>
                    Personalized customer services to enhance your art-buying experience.
                    </b></p>
            </div>
            <div class="service-card">
                <h3>Art Selling</h3>
                <p>
                    <b>
                    Helping artists connect with buyers to promote and sell their art pieces.
                    </b></p>
            </div>
        </div>
    </div>

    

    <div class="section gallery-section" id="gallery">
        <h2>GLIMPLSE OF ART Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="pictures/galler1.avif" alt="Artwork 1">
                <p>POLIY</p>
            </div>
            <div class="gallery-item">
                <img src="pictures/gallery2.avif" alt="Artwork 2">
                <p>SHIVITEN</p>
            </div>
            <div class="gallery-item">
                <img src="pictures/gallery3.avif" alt="Artwork 3">
                <p>FENTEL</p>
            </div>
            <div class="gallery-item">
                <img src="pictures/gallery4.avif" alt="Artwork 3">
                <p>RODAIL</p>
            </div>
            <div class="gallery-item">
                <img src="pictures/gallery5.avif" alt="Artwork 3">
                <p>RIFLA</p>
            </div>
            <div class="gallery-item">
                <img src="pictures/gallery8.avif" alt="Artwork 3">
                <p>KHUIZMA</p>
            </div>
            <div class="gallery-item">
                <img src="pictures/gallery7.avif" alt="Artwork 3">
                <p>PAVITRA</p>
            </div>
            <div class="gallery-item">
                <img src="pictures/gallery6.avif" alt="Artwork 3">
                <p>OSHO</p>
            </div>
        </div>
    </div>

    <div class="section subscribe-section">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Stay updated with our latest exhibitions and events.</p>
        <input type="email" placeholder="Enter your email">
        <button>Subscribe</button>
    </div>

    <div class="section ">
       
    </div>

  

</body>
</html>

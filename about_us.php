<?php
include("includes/head.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Art Gallery</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding-top: 100px;
           
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            position: relative;
            height: 200px;
            width: 100%;
            overflow: hidden;
        }
       

        header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 5;
        }

        .container {
            margin-top: 100px;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        h1, h2 {
            text-align: center;
            color: black;
            font-size: 50px;
        }

        p {
            line-height: 1.6;
            text-align: center;
        }

        .team-section {
            text-align: center;
            padding: 20px 0;
            width: 1200px;
            height:600px;
        }

        .team-member {
            border:3px solid white;
            border-radius:10px;
            display: inline-block;
            margin: 15px;
            text-align: center;
            padding-bottom: 100px;
        }
.team-member:hover{
    border:3px solid grey;
    border-radius:10px;
}
        .team-member img {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            object-fit: cover;
        }

    </style>
</head>
<body>
   

    <div class="container">
    <h2>Welcome to MUSE Gallery</h2>

        <p>
            Founded in March 2017, MUSE Gallery is a premier contemporary and modern art gallery located at the heart of the art district. We are dedicated to showcasing original artworks from talented artists worldwide. Our gallery focuses on exhibitions, education, artist residency programs, and art consultations.
        </p>
        <p>
            We believe in the transformative power of art to inspire, provoke, and connect. Our curated exhibitions offer diverse perspectives and creative expressions, celebrating both emerging talents and established artists.
        </p>
    </div>
    <header>
        <img src="pictures/login_background.jpg" alt="Art Gallery Header">
       
    </header>
    <div class="container team-section">
        <h2>Meet Our Team</h2>
        <div class="team-member">
            <img src="pictures/austin.png" alt="Muhammad Ashir">
            <h3>Muhammad Ashir</h3>
            <p>Front-End Developer</p>
        </div>
        <div class="team-member">
            <img src="pictures/don.png" alt="Noor Kanwal">
            <h3>Noor Kanwal</h3>
            <p>PHP Developer</p>
        </div>
        <div class="team-member">
            <img src="pictures/angelo.png" alt="Khoula">
            <h3>Khoula</h3>
            <p>Front-End Designer</p>
        </div>
        <div class="team-member">
            <img src="pictures/dyron.png" alt="Ahmed Khokhar">
            <h3>Ahmed Khokhar</h3>
            <p>Three.js Designer</p>
        </div>
    </div>

</body>
</html>

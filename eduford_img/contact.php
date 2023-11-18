<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL-WEBSITE-Contact</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <div class="header-contact">
       <div class="logo-and-links">
            <img src="images/logo.png" alt="">
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="courses.php">COURSES</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>

        <h1>Contact Us</h1>
    </div>

    <div class="informations">

    <div class="contacts">
        <div class="row">
            <img src="images/house-solid.svg" alt="">
            <div class="col">
                <p>Street 225, Manathan road</p>
                <p>United-Stats</p>
            </div>
        </div>

        <div class="row">
            <img src="images/phone-solid.svg" alt="">
            <div class="col">
                <p>+1 0123456789</p>
                <p>Monday to Saturday, 10AM to 6PM</p>
            </div>
        </div>

        <div class="row">
            <img src="images/envelope-solid.svg" alt="">
            <div class="col">
                <p>info@eduford.com</p>
                <p>Email Us your query</p>
            </div>
        </div>
    </div>

    <form action="">
        <input type="text" placeholder="Enter Your Name" name="NAME">
        <input type="email" placeholder="Enter your email address" name="EMAIL">
        <input type="text" placeholder="Enter Your Subject" name="SUBJECT">
        <textarea name="Message" id="msg" cols="30" rows="10" placeholder="Message"></textarea>

        <button type="submit" id="send">SEND MESSAGE</button>
    </form>

    </div>

<?php include("footer.php") ?>
    
</body>
</html>
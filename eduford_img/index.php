<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL-WEBSITE-Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
</head>
<body>
    <?php include_once("header.php") ?>

    <div class="courses">
        <h1>Courses We Offer</h1>
        <p>Lorem ipsum dolar sit amet, consectetur adipiscing elit</p>
        <div class="courses-level">
            <div class="level">
                <h2>Intermediate</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vestibulum euismod dolor ac mi lacinia, in varius justo euismod. Proin euismod,
                justo ut dictum feugiat, ante quam aliquam libero, a tincidunt libero arcu nec leo.
                Sed eu rhoncus ligula.
                </p>
            </div>

            <div class="level">
                <h2>Degree</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vestibulum euismod dolor ac mi lacinia, in varius justo euismod. Proin euismod,
                justo ut dictum feugiat, ante quam aliquam libero, a tincidunt libero arcu nec leo.
                Sed eu rhoncus ligula.
                </p>
            </div>

            <div class="level">
                <h2>Post Graduation</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vestibulum euismod dolor ac mi lacinia, in varius justo euismod. Proin euismod,
                justo ut dictum feugiat, ante quam aliquam libero, a tincidunt libero arcu nec leo.
                Sed eu rhoncus ligula.
                </p>
            </div>

        </div>
    </div>

    <div class="campus">
        
        <h1>Our Global Campus</h1>
        <p>Lorem ipsum dolar sit amet, consectetur adipiscing elit</p>

        <div class="school-campus">
           <div class="london"><h1>LONDON</h1></div>
           <div class="Newyork"><h1>NEW-YORK</h1></div>
           <div class="Washington"><h1>WASHINGTON</h1></div>
        </div>
        
    </div>

    <div class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolar sit amet, consectetur adipiscing elit</p>
        <div class="facilities-img">

            <div class="img">
                <img src="images/library.png" alt="LIBRARY">
                <div class="facilty-text">
                    <h2>Class Library</h2>
                    <p>Sed interdum, quam a vehicula accumsan, odio ligula tincidunt lectus,
                     in gravida arcu dolor vel ex. Fusce eget aliquam dolor, in dictum nulla. 
                    </p>
                </div>
            </div>

            <div class="img">
                <img src="images/basketball.png" alt="PLAY">
                <div class="facilty-text">
                    <h2>Largest Play Ground</h2>
                    <p>Sed interdum, quam a vehicula accumsan, odio ligula tincidunt lectus,
                     in gravida arcu dolor vel ex. Fusce eget aliquam dolor, in dictum nulla. 
                    </p>
                </div>
            </div>

            <div class="img">
                <img src="images/cafeteria.png" alt="PAUSE">
                <div class="facilty-text">
                    <h2>Tasty and Healthy Food</h2>
                    <p>Sed interdum, quam a vehicula accumsan, odio ligula tincidunt lectus,
                     in gravida arcu dolor vel ex. Fusce eget aliquam dolor, in dictum nulla. 
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="testiomials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolar sit amet, consectetur adipiscing elit</p>

        <div class="students-testimonials">

            <div class="students">
                <img src="images/user1.jpg" alt="">
                <div class="stu-text">
                    <p>Sed interdum, quam a vehicula accumsan, odio ligula tincidunt lectus,
                     in gravida arcu dolor vel ex. Fusce eget aliquam dolor, in dictum nulla. 
                    </p>
                    <h2>Christine Berkley</h2>
                    <div class="stars-1">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="void"></div>
                    </div>
                </div>
            </div>

            <div class="students">
                <img src="images/user2.jpg" alt="">
                <div class="stu-text">
                    <p>Sed interdum, quam a vehicula accumsan, odio ligula tincidunt lectus,
                     in gravida arcu dolor vel ex. Fusce eget aliquam dolor, in dictum nulla. 
                    </p>
                    <h2>Davide Byer</h2>
                    <div class="stars-2">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="contact">
        <div class="contact-text">
            <h2>Enroll For Our Various Online Courses<br>Anywhere From the World</h2>
            <a href="contact.php"><button>Contact Us</button></a>
        </div>
    </div>

    <?php include_once("footer.php") ?>
</body>
</html>
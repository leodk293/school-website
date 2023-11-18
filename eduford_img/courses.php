<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL-WEBSITE-COURSES</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <div class="header-courses">
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

        <h1>Our Courses</h1>

    </div>
    <?php include("sectionCourses.php") ?>
    <?php include("facilitiesSection.php") ?>
    <?php include("footer.php") ?>
    
</body>
</html>
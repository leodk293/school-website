<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL-WEBSITE-Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <div class="blog-header">

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

        <h1>Our Certificate & Online Programs For 2024</h1>
    </div>

    <div class="main-content">

     <div class="certificate">
        <img src="images/certificate.jpg" alt="CERTIFE">

        <div class="blog-text">
        <h1>Our Certificate & Online Programs For 2024</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod dolor ac mi lacinia,
            in varius justo euismod. Proin euismod, justo ut dictum feugiat, ante quam aliquam libero, 
            a tincidunt libero arcu nec leo. Sed eu rhoncus ligula. Nullam nec nisl in arcu rhoncus vestibulum.
            Sed auctor metus sit amet mi euismod,sit amet vestibulum eros ullamcorper. Fusce vitae odio id urna vulputate tristique.
        </p>
        <p>
           Quisque in odio id quam bibendum egestas. Nulla facilisi. Phasellus ut volutpat risus. Vivamus in diam sed nulla auctor
           fermentum. In ac mi varius, scelerisque dui vel, ullamcorper urna. In sit amet malesuada eros. 
        </p>
        <p>
          Sed interdum, quam a vehicula accumsan, odio ligula tincidunt lectus,
          in gravida arcu dolor vel ex. Fusce eget aliquam dolor,
          in dictum nulla. Suspendisse eget tortor eget augue tincidunt egestas. 
        </p>
        <p>
          Quisque in odio id quam bibendum egestas. Nulla facilisi. Phasellus ut volutpat risus.
          Vivamus in diam sed nulla auctor fermentum.
        </p>
      </div>

      <div class="form">
        <h2>Leave a comment</h2>
        <input type="text" placeholder="Enter Name">
        <input type="email" placeholder="Enter email">
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Your Comment"></textarea>
        <button type="submit">POST COMMENT</button>
      </div>
        
     </div>

       <div class="post-categories">
            <div class="title">Post Categories</div>
            <div class="choice">
                <div>
                    <p>Buisness Analytics</p>
                    <span>21</span>
                </div>
                <div>
                    <p>Data Science</p>
                    <span>28</span>
                </div>
                <div>
                    <p>Machine Learning</p>
                    <span>15</span>
                </div>
                <div>
                    <p>Computer Science</p>
                    <span>34</span>
                </div>
                <div>
                    <p>AutoCAD</p>
                    <span>42</span>
                </div>
                <div>
                    <p>Journalism</p>
                    <span>22</span>
                </div>
                <div>
                    <p>Commerce</p>
                    <span>13</span>
                </div>
            </div>
        </div>


    </div>
<?php include("footer.php") ?>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<script src="https://kit.fontawesome.com/70baf220b8.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="header">
        <nav>
            
            <a href="index.html"><img src="images/logo.png" ></a>
            <div class="nav-links">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="mainpage.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="">COURSE</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                    <li><button type="button" class="login"><a href="login.php">LOGIN</a></button></li>
                </ul>
                
            </div>
            <i class="fa-solid fa-bars "></i>
            
            
        </nav>

        <div class="text-box">
            <h1>Aurelian Academy</h1>
            <p>A college is an educational institution or a constituent part of one.<br> A college may be a degree-awarding tertiary educational institution, a part of a collegiate or federal university, <br>an institution offering vocational education, or a secondary school.</p>
            <a href="" class="hero-btn">Visit Us to Know More</a>
        </div>

    </section>
    <section class="course">
        <h1>courses we offer</h1>
        <p>lorem ipsum dolor sit amet,consectetur adipiscing.</p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediat</h3>
                <p>It serves as a stepping stone between the foundational concepts learned in
                    the beginner course and the advanced topics explored in higher-level studies.
                    In the intermediate course.
                </p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>It serves as a stepping stone between the foundational concepts learned in
                    the beginner course and the advanced topics explored in higher-level studies.
                    In the intermediate course.
                </p>
            </div>
            <div class="course-col">
                <h3>post Graduation</h3>
                <p>It serves as a stepping stone between the foundational concepts learned in
                     the beginner course and the advanced topics explored in higher-level studies.
                     In the intermediate course.
                </p>
            </div>

        </div>
    </section>

    <section class="campus">
        <h1>Our Global campus</h1>
        <p>lorem ipsum dolor sit amet,consectetur adipiscing.</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/london.png" >
                <div class="layer">
                    <h3>LONDON</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/newyork.png" >
                <div class="layer">
                    <h3>NEW YORK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/washington.png" >
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <h4>About Us</h4>
        <p>It serves as a stepping stone between the foundational concepts learned in
                     <br>the beginner course and the advanced topics explored in higher-level studies.In the intermediate course.</p>

        <div class="icon">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-linkedin"></i>
         
        </div>
    </section>


    <script>
        var navlinks= document.getElementById("navlink");
        function showmenu(){
            navlinks.style.right = "0";
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
        }
    </script>
    
</body>
</html>
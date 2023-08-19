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
            
            <a href="#"><img  src="images/schoollogo.png" style="width: 99px; height: 99px; "></a>
            <div class="nav-links">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="mainpage.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="#">COURSE</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                    <li><button type="button" class="login"><a href="login.php">LOGIN</a></button></li>
                </ul>
                
            </div>
            <i class="fa-solid fa-bars "></i>
            
            
        </nav>

        <div class="text-box">
            <h1>PIONEER HIGHER SENCONDARY SCHOOL</h1>
            <p>Pioneer  Higher Secondary School is an institution dedicated to providing quality education and fostering a nurturing environment for students.<br> Our mission is to empower young minds with knowledge, skills, and values that prepare them for a bright future. Whether it's academics, extracurricular activities, or character development, we strive to offer a comprehensive educational experience. Join us on a journey of learning and growth!</p>
            <a href="" class="hero-btn">Visit Us to Know More</a>
        </div>

    </section>
    <section class="course">
        <h1>courses we offer</h1>
        <p>Higher Secondary Groups</p>

        <div class="row">
            <div class="course-col">
                <h3>BIO</h3>
                <p>It serves as a stepping stone between the foundational concepts learned in
                    the beginner course and the advanced topics explored in higher-level studies.
                    In the intermediate course.
                </p>
            </div>
            <div class="course-col">
                <h3>COMPUTER SCIENCE</h3>
                <p>It serves as a stepping stone between the foundational concepts learned in
                    the beginner course and the advanced topics explored in higher-level studies.
                    In the intermediate course.
                </p>
            </div>
            <div class="course-col">
                <h3>Commerce</h3>
                <p>It serves as a stepping stone between the foundational concepts learned in
                     the beginner course and the advanced topics explored in higher-level studies.
                     In the intermediate course.
                </p>
            </div>

        </div>
    </section>

    <section class="campus">
    <h1>State-of-the-Art Facilities</h1>
    <p>At our institution, we are dedicated to providing students with a conducive learning environment equipped with modern facilities to enhance their educational journey. <br>Our commitment to excellence extends beyond the classroom, as we believe that a well-rounded education encompasses both academic and practical experiences.</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/schoolbg.jpeg" >
                <div class="layer">
                    <h3>CAMPUS</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/sc4.jpg" >
                <div class="layer">
                    <h3>Auditorium</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/sc7.jpg" >
                <div class="layer">
                    <h3>Football Academy</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/sc12.jpg" >
                <div class="layer">
                    <h3>Library</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/sc11.jpg" >
                <div class="layer">
                    <h3>Hostel</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/sc10.jpg" >
                <div class="layer">
                    <h3>Transport</h3>
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
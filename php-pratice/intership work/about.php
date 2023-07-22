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
    <section class="sub-header">
        <nav>
            
            <a href="index.html"><img src="images/logo.png" ></a>
            <div class="nav-links">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="mainpage.php">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">COURSE</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                    <li><button type="button" class="login"><a href="login.php">LOGIN</a></button></li>
                </ul>
                
            </div>
            <i class="fa-solid fa-bars "></i>
            
            
        </nav>
        <h1>ABOUT US</h1>

    </section>


    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>We are the World's Largest University</h1>
                <p>
                Moreover, the intermediate course often introduces students to more specialized areas within their chosen field. They have the opportunity to explore various subtopics and narrow down their interests, paving the way for future specialization. This exposure to diverse areas helps students identify their passions and potential career paths, allowing them to make more informed decisions about their educational and professional trajectories.

                The intermediate course also places a strong emphasis on developing critical skills such as research, analysis, and communication. Students are encouraged to conduct independent research, evaluate different sources of information, and present their findings in a coherent and convincing manner. These skills are crucial for their academic growth and are highly valued in the professional world
                </p>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/about.jpg" >
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in and sign up form</title>
    <link rel="stylesheet" href="login.css">
    
  

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/70baf220b8.js" crossorigin="anonymous"></script>

</head>
<body>



<div class="container">
    <div class="box">    
        <div class="container1">
                <div class="form-box1">
                    <h1>Faculty Login</h1>
                    <p> Please enter your Login Details</p>
                    <form id="Myform1"  action="process-signup.php" method="post" novalidate>
                        <div class="input-group">
                            <div class="input-field">
                                <i class="fa-solid fa-user"></i>
                                
                                <input type="text" placeholder=" Faculty name " name="fusername" required  id="fusername">
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-envelope "></i>
                                <input type="email" placeholder="E-mail address" name="femail"required id="femail">
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" placeholder="Password" id="fpassword" name="fpassword" required>
                            </div>
                            <p>Lost Password <a href="#">Click Here!</a></p>
                        </div>
                        <div class="btn-field">
                            <button  value="submit" type ="submit">Login</button>
                            
                        </div>
                    </form>
                </div>
        </div>   
                
        <div class="container2">
                <div class="form-box2">
                    <h1>Student Login</h1>
                    <p> Please enter your Login Details</p>
                    <form  id="Myform2"   action="process-signupstudent1.php" method="post"  novalidate>
                        <div class="input-group">
                            <div class="input-field">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder=" student name " name="susername" required id="strollno">
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-envelope "></i>
                                <input type="email" placeholder="E-mail address" name="semail"required id="semail">
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" placeholder="Password" id="spassword" name="spassword" required>
                            </div>
                            <p>Lost Password <a href="#">Click Here!</a></p>
                        </div>
                        <div class="btn-field">
                            <button  value="submit" type ="submit">Login</button>
                            
                        </div>
                    </form>
                </div>  
        </div>
    </div>   
</div>

</body>
</html>
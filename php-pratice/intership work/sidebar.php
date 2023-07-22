<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="sidebarpersonal.css">
</head>
<body>
  

        <div class="header">
           <div class="nav">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" ></a>
                </div>
                
           </div>
           <hr>
            <div class="containerbox">
                <div class="sidebox">
                    <div class="side-nav">
                       

                        <ul>
                            <li><img src="imageslogin/dashboard.png" ><p>Dashboard</p></li>
                            <li><img src="imageslogin/members.png" ><p>Edit Profile</p></li>
                            <li><img src="imageslogin/reports.png" ><p>Reports</p></li>
                            <li><img src="imageslogin/rewards.png" ><p>Rewards</p></li>
                            <li><img src="imageslogin/messages.png" ><p>Messages</p></li>
                            <li><img src="imageslogin/projects.png" ><p>Projects</p></li>
                            <li><img src="imageslogin/setting.png" ><p>Setting</p></li>
                            <li>
                                <img src="imageslogin/logout.png" ><p><a href="mainpage.php" class="tab-link">Logout</a></p></li>
                        </ul>
                        
                    </div>
                    
                
                </div>
                <div class="personalinfo">
                        <table class="transparent-table">
                                <thead>
                                <tr>
                                    <th colspan="3">My Profile</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Full Name:</td>
                                    <td>Ram kumar</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>Rankumar@example.com</td>
                                </tr>
                                <tr>
                                    <td>Department:</td>
                                    <td>IT</td>
                                </tr>
                                <tr>
                                    <td>Hostel:</td>
                                    <td>No</td>
                                </tr>
                                
                                </tbody>
                                <thead>
                                <tr>
                                    <th colspan="3">Mentors Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mentor Name:</td>
                                    <td>Jane Smith</td>
                                </tr>
                                <tr>
                                    <td>Mentor Email:</td>
                                    <td>janesmith@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mentor Handeling Course: </td>
                                    <td>DSA</td>
                                </tr>
                                </tbody>
                                <thead>
                                <tr>
                                    <th colspan="3">Educational Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>SSLC:</td>
                                    <td>Sumbited</td>
                                </tr>
                                <tr>
                                    <td>HSC:</td>
                                    <td>Sumbited</td>
                                </tr>
                                
                                </tbody>
                        </table>
                         
                        
                </div>
                <div class="picupload">
                    <div class="hero">
                        <div class="card">
                        <img id="profileImage" src="imagesuser/profile.png" alt="Profile Picture">
                        <label for="profilePic" >Update Images</label>
                        <input type="file" id="profilePic" accept="image/*" onchange="updateProfilePicture(event)">
                        </div>
                        
                    </div>
                </div>
            </div>            
        </div>
        
<script>

function updateProfilePicture(event) {
  var input = event.target;
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      var profileImage = document.getElementById('profileImage');
      profileImage.src = e.target.result;
    };
    reader.readAsDataURL(input.files[0]);
  }
}

document.queryselector("profilePic").addevetlistener("change", function(){
    const reader =new fileReader();

    reader.addeventlistener ("load",() =>{
        localstorage.setitem("recent-image".reader.result);
    })
    reader.readAsDataURL(this.files[0]);
})
</script>  

</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register-Student</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/reg.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<nav class="navbar" id="head">
        <div class="title">
          Progress
          <div class="title2">Report
        </div>
        </div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../genral/about.php">About</a></li>
            <li class="drop"><a href="#"><div class="dbtn">Gallery
              <i class="fa fa-caret-down"></i></div></a>
              <ul class="sub-menu">
                <li><a href="student.php">Student</a></li>
                <li><a href="../faculty/faculty.php">Faculty</a></li>
              </ul>
            </li> 
            <li class="drop"><a href="#"><div class="dbtn">Register
              <i class="fa fa-caret-down"></i></div></a>
              <ul class="sub-menu">
                <li><a href="reg.php">Student</a></li>
                <li><a href="../faculty/reg2.php">Faculty</a></li>
              </ul>
            </li>
          </ul>
        </div>
</nav>
      
<script src="../js/script.js"></script>  

<div class="main-reg">
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="upload.php" method="POST" enctype="multipart/form-data"> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">PRN</span>
            <input type="text" name="prn" placeholder="Enter your Roll No." required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Branch</span>
            <input type="text" name="branch" placeholder="Enter your department" required>
          </div>
          <div class="input-box">
            <span class="details">Year</span>
            <input type="text" name="year" placeholder="Enter your College Year" required>
          </div>
          <div class="input-box1">
            <span class="details">Profile-Photo</span>
            <input id="image" type="file" name="photo" placeholder="Photo" required="" capture>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</div>

<footer>
  <p>Samiksha Sankar<br>
</footer>

</body>
</html>
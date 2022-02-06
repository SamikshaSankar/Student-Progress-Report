<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery-Faculty</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/stu.css">
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
                <li><a href="../student/student.php">Student</a></li>
                <li><a href="faculty.php">Faculty</a></li>
              </ul>
            </li> 
            <li class="drop"><a href="#"><div class="dbtn">Register
              <i class="fa fa-caret-down"></i></div></a>
              <ul class="sub-menu">
                <li><a href="../student/reg.php">Student</a></li>
                <li><a href="reg2.php">Faculty</a></li>
              </ul>
            </li>
          </ul>
        </div>
</nav>
      
<script src="../js/script.js"></script>


<div class="container">
        <div class="team_container">
            <div class="text">Meet Our Faculty</div>
        </div>
        <div class="row">
             <?php
                         include '../database/dbcon.php';
                         $selectquery = "select * from registration2";

                         $query = mysqli_query($con, $selectquery);
   $check_student = mysqli_num_rows($query)>0;

                        if($check_student){
                         while($result = mysqli_fetch_array($query)){
            ?>       
                       <div class="profile-card">
                            <div class="profile-content">
                              <div class="profile-image">
                                <img src="<?php echo $result['pic']; ?>">
                            </div>
                             <div class="desc">
                             <h2><?php echo $result['name']; ?></h2>
                             <p><b>EMAIL:</b><?php echo $result['email']; ?></p>
                             <p><b>BRANCH:</b><?php echo $result['branch']; ?></p>
                             </div>
                              </div>
                         </div>  
                            <?php
                        }                    
                    }else{
                        echo "";
                    }
               
               ?>
        </div>
    </div>

<footer>
  <p>Samiksha Sankar<br>
</footer>

</body>
</html>
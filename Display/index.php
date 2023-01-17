<!DOCTYPE html>
<?php
    $perState = "";
    $brBio = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["ps"])) {
        $perState = '';
      } else {
        $perState = $_POST["ps"];
        setcookie("perState", $perState, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
      
      if (empty($_POST["bb"])) {
        $brBio = "";
      } else {
        $brBio = $_POST["bb"];
        setcookie("brBio", $brBio, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
    }
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
      display: flex;
      justify-content: center;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>

<body>
    <div class="topnav">
        <div>
        <a class="active" href="http://localhost:8080/Assignment3/Zhang_40111095/index.php">Home</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/Zhang_40111095/resume.php">Resume</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/Zhang_40111095/project.php">Projects</a>
        </div>
        <div>
            <a href="contact.html">Contact</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/Zhang_40111095/social.php">Social</a>
        </div>
        <div>
            <a href="admin.html">Admin</a>
        </div>
    </div>

    <div style="text-align: center;padding-top: 20px;">
        <img src="myself.jpg" alt="Photo of Myself" width="150" height="210"/>
    </div>

    <div style="padding-top: 20px;text-align: center;padding-left: 100px;padding-right: 100px;">
    <h2>Professional Statement</h2>
    <?php 
    if($perState == ""){
        if(!isset($_COOKIE["perState"])){
            echo "<p>My name is Tongwei Zhang, and I come from China. This is my third year
                in Concordia University. During the last three years, I have achieved a really good academic result,
                and got A level grades for all courses I have ever taken, which greatly encourage me to continue further education. 
            </p>
            <p>
                About my internship experience, I got an intern oppotunity as a programmer in China after I finished my first year. 
                That is a company about robot design and the main responsibility of a programmer is to design different types of robot with Java and Python. 
            </p>
            <p>
                As for my project, I am working on a Machine Learning project recently. The main purpose of that project is to analyse the rental prices in Shanghai
                on Airbnb platform and estimate the trend in the future. The ability of using Python is required.
            </p>
            <p>
                Through my experience, I have become more determined to commit myself to the computer science industry. 
                In the future, I will aim to become a computer scientist, and to that end, I will study hard, pursue further education opportunities, 
                and dedicate my life to the scientific career.
            </p>";
        }else{
            echo $_COOKIE["perState"];
        }
    }else{
        echo $perState;
    }
    ?>
    </div>

    <div style="padding-top: 20px;text-align: justify;padding-left: 100px;padding-right: 100px;">
    <b>Brief Bio: </b>
    <?php 
    if($brBio == ""){
        if(!isset($_COOKIE["brBio"])){
            echo "<p>
            I am willing to learn, observant, and have excellent organizational and coordination skills. 
            I can be an excellent leader and an executive with great action.
            </p>";
        }else{
            echo $_COOKIE["brBio"];
        }
    }else{
        echo $brBio;
    }
    ?>
    </div>

</body>
</html>
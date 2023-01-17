<!DOCTYPE html>
<?php
    $myProjects = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["mp"])) {
        $myProjects = '';
      } else {
        $myProjects = $_POST["mp"];
        setcookie("mp", $myProjects, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projects</title>
    <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
      
        .mainbody{
            padding-left: 50px;
            padding-right: 50px;
        }

        .mainbody ul li{
            list-style-type: circle;
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
            <a href="http://localhost:8080/Assignment3/Zhang_40111095/index.php">Home</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/Zhang_40111095/resume.php">Resume</a>
        </div>
        <div>
            <a class="active" href="http://localhost:8080/Assignment3/Zhang_40111095/projects.php">Projects</a>
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

    <div class="mainbody" style="padding-top: 20px;padding-bottom: 20px;text-align: justify;">
        <h2>Projects</h2>
        <ol type="I" reversed="reversed">
        <?php 
        if($myProjects == ""){
            if(!isset($_COOKIE["mp"])){
                echo "<li>Machine Learning Project on Rental Price Trending in Shanghai (Dec 2021 – Present)</li>
                <li>Student Management Project with Java (Jul 2021 – Aug 2021)</li>
                <li>Data Analysis and planning project On-Time TV Episodes Schedule (Mar 2021 – Apr 2021)</li>
                <li>Project of Monopoly Type Game Design (Jan 2021 – Feb 2021)</li>";
            }else{
                $dataBase = preg_split('/\r\n|\r|\n/', $_COOKIE["mp"]);
                foreach ($dataBase as $value){
                    echo "<li>".$value."</li>";
                }
            }
        }else{
            $dataBase = preg_split('/\r\n|\r|\n/', $myProjects);
            foreach ($dataBase as $value){
                echo "<li>".$value."</li>";
            }
        }
        ?>
        </ol>
    </div>
</body>
</html>
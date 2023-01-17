<!DOCTYPE html>
<?php
    $sl1 = "";
    $sl2 = "";
    $sl3 = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["link1"])) {
        $sl1 = '';
      } else {
        $sl1 = $_POST["link1"];
        setcookie("sl1", $sl1, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
      
      if (empty($_POST["link2"])) {
        $sl2 = "";
      } else {
        $sl2 = $_POST["link2"];
        setcookie("sl2", $sl2, time() + (86400 * 30), "/"); // 86400 = 1 day
      }

      if (empty($_POST["link3"])) {
        $sl3 = "";
      } else {
        $sl3 = $_POST["link3"];
        setcookie("sl3", $sl3, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>social</title>
    <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
      
        .mainbody{
            padding-left: 50px;
            padding-right: 50px;
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
            <a href="http://localhost:8080/Assignment3/Zhang_40111095/projects.php">Projects</a>
        </div>
        <div>
            <a href="contact.html">Contact</a>
        </div>
        <div>
            <a class="active" href="http://localhost:8080/Assignment3/Zhang_40111095/social.php">Social</a>
        </div>
        <div>
            <a href="admin.html">Admin</a>
        </div>
    </div>

    <div class="mainbody" style="padding-top: 20px; padding-bottom: 100px;text-align: center;">
        <img src="social_media_icons.jpg" alt="Social Media Icons" usemap="#mapf"/>
        <map name="mapf" id="mapf">
            <?php
            if($sl1 == ""){
                if(!isset($_COOKIE["sl1"])){
                    echo '<area alt="facebook" shape="rect" coords="0,0,114,114" href="https://www.facebook.com/zhtongwei"/>';
                }else{
                    $content = '<area alt="facebook" shape="rect" coords="0,0,114,114"'.' href="'.$_COOKIE["sl1"].'"/>';
                    echo $content;
                }
            }else{
                $content = '<area alt="facebook" shape="rect" coords="0,0,114,114"'.' href="'.$sl1.'"/>';
                echo $content;
            }

            if($sl2 == ""){
                if(!isset($_COOKIE["sl2"])){
                    echo '<area alt="twitter" shape="rect" coords="174,0,284,114" href="https://twitter.com/OutTheWorld330"/>';
                }else{
                    $content = '<area alt="twitter" shape="rect" coords="174,0,284,114"'.' href="'.$_COOKIE["sl2"].'"/>';
                    echo $content;
                }
            }else{
                $content = '<area alt="twitter" shape="rect" coords="174,0,284,114"'.' href="'.$sl2.'"/>';
                echo $content;
            }

            if($sl3 == ""){
                if(!isset($_COOKIE["sl3"])){
                    echo '<area alt="instagram" shape="rect" coords="0,170,114,280" href="https://www.instagram.com/pinkle1107/"/>';
                }else{
                    $content = '<area alt="instagram" shape="rect" coords="0,170,114,280"'.' href="'.$_COOKIE["sl3"].'"/>';
                    echo $content;
                }
            }else{
                $content = '<area alt="instagram" shape="rect" coords="0,170,114,280"'.' href="'.$sl3.'"/>';
                echo $content;
            }
            ?>
            <area alt="dribbble" shape="rect" coords="174,170,284,280" href="https://dribbble.com/"/>
            <area alt="google plus" shape="rect" coords="348,0,462,114" href="https://plus.google.com/discover"/>
            <area alt="linkedin" shape="rect" coords="338,170,452,280" href="https://www.linkedin.com/login"/>
            <area alt="whatsapp" shape="rect" coords="0,340,114,450" href="https://www.whatsapp.com/"/>
            <area alt="youtube" shape="rect" coords="174,340,284,450" href="https://www.youtube.com/"/>
            <area alt="snapchat" shape="rect" coords="348,340,462,450" href="https://www.snapchat.com/"/>
        </map>
        
    </div>
</body>
</html>
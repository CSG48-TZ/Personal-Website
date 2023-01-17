<!DOCTYPE html>
<?php
    $edu = "";
    $skSet = "";
    $award = "";
    $experience = "";
    $referee = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["eq"])) {
        $edu = '';
      } else {
        $edu = $_POST["eq"];
        setcookie("edu", $edu, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
      
      if (empty($_POST["ss"])) {
        $skSet = "";
      } else {
        $skSet = $_POST["ss"];
        setcookie("skSet", $skSet, time() + (86400 * 30), "/"); // 86400 = 1 day
      }

      if (empty($_POST["ar"])) {
        $award = "";
      } else {
        $award = $_POST["ar"];
        setcookie("award", $award, time() + (86400 * 30), "/"); // 86400 = 1 day
      }

      if (empty($_POST["we"])) {
        $experience = "";
      } else {
        $experience = $_POST["we"];
        setcookie("experience", $experience, time() + (86400 * 30), "/"); // 86400 = 1 day
      }

      if (empty($_POST["re"])) {
        $referee = "";
      } else {
        $referee = $_POST["re"];
        setcookie("referee", $referee, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
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

        .download_button{
            background-color: beige;
            color: #333;
            border-radius: 50px;
            border: 1px solid #333;
            font-size: 10px;
            padding: 5px 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <div>
            <a href="http://localhost:8080/Assignment3/Zhang_40111095/index.php">Home</a>
        </div>
        <div>
            <a class="active" href="http://localhost:8080/Assignment3/Zhang_40111095/resume.php">Resume</a>
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

    <div class="mainbody" style="padding-top: 20px;text-align: left;">
        <dl>
            <dt>
                <b>Education and Respective Qualification</b>
            </dt>
            <?php 
            if($edu == ""){
                if(!isset($_COOKIE["edu"])){
                    echo "<dd>
                            <i>2019.09 - Present:</i> <br/>
                            Bachelor of Computer Science, Major in Computer Science General Program - Concordia University (Quebec, Canada)
                        </dd>
                        <dd>
                            <i>2013.09 - 2016.06:</i> <br/>
                            Senior High School Diploma - Anhui Huainan No.2 Middle School (Anhui, China)
                        </dd>
                        <dd>
                            <i>2010.09 - 2013.06:</i> <br/>
                            Junior High School Diploma - Huainan Dongshan Middle School (Anhui, China)
                        </dd>
                        <dd>
                            <i>2004.09 - 2010.07:</i> <br/>
                            Primary School Diploma - Primary School affiliated to Huainan Teachers College (Anhui, China)
                        </dd>";
                }else{
                    $dataBase = preg_split('/\r\n|\r|\n/', $_COOKIE["edu"]);
                    foreach ($dataBase as $value){
                        echo "<dd>".$value."</dd>";
                    }
                }
            }else{
                $dataBase = preg_split('/\r\n|\r|\n/', $edu);
                foreach ($dataBase as $value){
                    echo "<dd>".$value."</dd>";
                }
            }
            ?>
        </dl>

        <dl>
            <dt>
                <b>Professional and Technical Skills</b>
            </dt>
            <?php 
            if($skSet == ""){
                if(!isset($_COOKIE["skSet"])){
                    echo "<dd>
                            •	Aspiring candidate with excellent programming skills and critical thinking capabilities from rich experiences.
                        </dd>
                        <dd>
                            •	Strong time management skills with great execution of analysis and communication skills of analytical results.
                        </dd>
                        <dd>
                            •	High proficiency in programming languages and tools, including Java, C language, C++, Python, HTML and etc.
                        </dd>
                        <dd>
                            •	Language ability: Mandarin, English.
                        </dd>";
                }else{
                    $dataBase = preg_split('/\r\n|\r|\n/', $_COOKIE["skSet"]);
                    foreach ($dataBase as $value){
                        echo "<dd>".$value."</dd>";
                    }
                }
            }else{
                $dataBase = preg_split('/\r\n|\r|\n/', $skSet);
                foreach ($dataBase as $value){
                    echo "<dd>".$value."</dd>";
                }
            }
            ?>
        </dl>

        <b>Awards and Recognition</b>
        <ol>
        <?php 
        if($award == ""){
            if(!isset($_COOKIE["award"])){
                echo "<li>Dean’s List in 2019–2020 & 2020-2021</li>
                <li>The Jaan Saber, Phoivos Ziogas Memorial Scholarship </li>";
            }else{
                $dataBase = preg_split('/\r\n|\r|\n/', $_COOKIE["award"]);
                foreach ($dataBase as $value){
                    echo "<li>".$value."</li>";
                }
            }
        }else{
            $dataBase = preg_split('/\r\n|\r|\n/', $award);
            foreach ($dataBase as $value){
                echo "<li>".$value."</li>";
            }
        }
        ?>
        </ol>

        <b>Work Experience</b>
        <ol>
        <?php 
        if($experience == ""){
            if(!isset($_COOKIE["experience"])){
                echo "<li>Programmer Intern - Anhui Huimai Information Science and Technology Co., Ltd (Jun 2020 – Aug 2020)</li>";
            }else{
                $dataBase = preg_split('/\r\n|\r|\n/', $_COOKIE["experience"]);
                foreach ($dataBase as $value){
                    echo "<li>".$value."</li>";
                }
            }
        }else{
            $dataBase = preg_split('/\r\n|\r|\n/', $experience);
            foreach ($dataBase as $value){
                echo "<li>".$value."</li>";
            }
        }
        ?>
        </ol>

        <dl>
            <dt>
                <b>Referees</b>
            </dt>
            <?php 
            if($referee == ""){
                if(!isset($_COOKIE["referee"])){
                    echo "<dd>
                            Dr. Yiming Xiao, Assistant Professor, Computer Science and Software Engineering
                        </dd>
                        <dd>
                            Dr. Hassan Hajjdiab, Assistant Professor, Computer Science and Software Engineering
                        </dd>";
                }else{
                    $dataBase = preg_split('/\r\n|\r|\n/', $_COOKIE["referee"]);
                    foreach ($dataBase as $value){
                        echo "<dd>".$value."</dd>";
                    }
                }
            }else{
                $dataBase = preg_split('/\r\n|\r|\n/', $referee);
                foreach ($dataBase as $value){
                    echo "<dd>".$value."</dd>";
                }
            }
            ?>
        </dl>
    </div>

    <div style="padding-left: 50px;padding-bottom: 50px;padding-top: 20px;">
        <a class="download_button" href="CV.docx" download="CV.docx">Download Full CV</a>
    </div>
    
</body>
</html>
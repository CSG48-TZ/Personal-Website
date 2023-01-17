<!DOCTYPE html>
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
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminIndex.php">Home</a>
        </div>
        <div>
            <a class="active" href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminResume.php">Resume</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminProjects.php">Projects</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminContact.php">Contact</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminSocial.php">Social</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/logout.php">Admin</a>
        </div>
    </div>

    <div class="mainbody" style="padding-top: 20px;text-align: center;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="eq">Educational Qualifications<br/></label>
            <textarea name="e" id="eq" rows="10" cols="60"></textarea>
            <br/>
            <label for="ss">Skill Set<br/></label>
            <textarea name="s" id="ss" rows="10" cols="60"></textarea>
            <br/>
            <label for="ar">Awards/Recognition<br/></label>
            <textarea name="a" id="ar" rows="10" cols="60"></textarea>
            <br/>
            <label for="we">Work Experience<br/></label>
            <textarea name="w" id="we" rows="10" cols="60"></textarea>
            <br/>
            <label for="re">Referees<br/></label>
            <textarea name="r" id="re" rows="10" cols="60"></textarea>
            <br/>
            <input type="submit" value="Submit"/>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $eq = $_POST['e'];
    $ss = $_POST['s'];
    $ar = $_POST['a'];
    $we = $_POST['w'];
    $re = $_POST['r'];
    if (!empty($eq) || !empty($ss) || !empty($ar) || !empty($we) || !empty($re)) {
        $content = $eq."\n".$ss."\n".$ar."\n".$we."\n".$re;
        file_put_contents('C:\xampp\htdocs\Assignment3\admin_php_Zhang_40111095\resumeData.txt', $content);
    }
    }
    ?>
    
</body>
</html>
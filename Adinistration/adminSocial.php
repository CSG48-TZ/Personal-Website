<!DOCTYPE html>
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
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminIndex.php">Home</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminResume.php">Resume</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminProjects.php">Projects</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminContact.php">Contact</a>
        </div>
        <div>
            <a class="active" href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminSocial.php">Social</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/logout.php">Admin</a>
        </div>
    </div>

    <div class="mainbody" style="padding-top: 20px;text-align: center;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="sl1">Social Link 1:</label>
            <input name="s1" id="sl1" type="url"/>
            <br/>
            <label for="sl2">Social Link 2:</label>
            <input name="s2" id="sl2" type="url"/> 
            <br/>
            <label for="sl3">Social Link 3:</label>
            <input name="s3" id="sl3" type="url"/>
            <br/><br/>
            <input type="submit" value="Submit"/>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $sl1 = $_POST['s1'];
    $sl2 = $_POST['s2'];
    $sl3 = $_POST['s3'];
    if (!empty($ps) || !empty($bb)) {
        $content = $sl1."\n".$sl2."\n".$sl3;
        file_put_contents('C:\xampp\htdocs\Assignment3\admin_php_Zhang_40111095\socailLinks.txt', $content);
    }
    }
    ?>
</body>
</html>
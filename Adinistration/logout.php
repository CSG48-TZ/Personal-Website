<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminLogout</title>
    <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
      
        .mainbody{
            padding-left: 50px;
            padding-right: 50px;
            text-align: center;
        }

        .login{
            margin: 0;
            position: absolute;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
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
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminSocial.php">Social</a>
        </div>
        <div>
            <a class="active" href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/logout.php">Admin</a>
        </div>
    </div>

    <div class="mainbody" style="padding-top: 20px; padding-bottom: 30px;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="submit" value="Logout">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_unset();
        session_destroy();
    }
    ?>
</body>
</html>
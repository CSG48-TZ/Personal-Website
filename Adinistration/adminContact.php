<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
            <a class="active" href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminContact.php">Contact</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminSocial.php">Social</a>
        </div>
        <div>
            <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/logout.php">Admin</a>
        </div>
    </div>

    <?php
    $show = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_FILES['uploadedfile']['error'] == UPLOAD_ERR_OK               //checks for errors
        && is_uploaded_file($_FILES['uploadedfile']['tmp_name'])) { //checks that file is uploaded
            $show = file_get_contents($_FILES['uploadedfile']['tmp_name']); 
        }
    }
    ?>

    <br/>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <table class="mainbody">

            <tr><td colspan="4" style="font-weight: bold;">Display Window:</td></tr>

            <tr>
                <td colspan="4">
                <textarea id="dvCSV" cols="100" rows="25"><?php echo $show;?></textarea>
                </td>
            </tr>

            <tr>

                <td style="text-align:right;">Select a File to Upload:</td>

                <td><input type="file" name="uploadedfile"></td>

                <td>&nbsp;<td>

            </tr>

            <tr>

                <td>&nbsp;</td>

                <td><input type="submit" value="ReadMessage"/></td>

                <td>&nbsp;<td>

            </tr>

        </table>
    </form>

</body>
</html>
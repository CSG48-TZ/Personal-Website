<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
      <a class="active" href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/adminIndex.php">Home</a>
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
        <a href="http://localhost:8080/Assignment3/admin_php_Zhang_40111095/logout.php">Admin</a>
    </div>
</div>

<div style="padding-top: 20px;text-align: center;padding-left: 100px;padding-right: 100px;">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="ps">Professional Statement<br/></label>
    <textarea id="ps" name="p" rows="10" cols="60"></textarea>
    <br/>
    <label for="bb">Brief Biography<br/></label>
    <textarea id="bb" name="b" rows="10" cols="60"></textarea>
    <br/>
    <input type="submit" value="Submit"/>
  </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $ps = $_POST['p'];
  $bb = $_POST['b'];
  if (!empty($ps) || !empty($bb)) {
    $content = $ps."\n".$bb;
    file_put_contents('C:\xampp\htdocs\Assignment3\admin_php_Zhang_40111095\indexData.txt', $content);
  }
}
?>

</body>
</html>
<?php
require ('./classes/Autoload.php');
spl_autoload_register('Autoload::classesAutoloader');
?>
<html>
<head>
<title>PDO DATA</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h1>DATA PDO</h1>
<div id="login">
<h2>login</h2>
<hr/>
<form action="" method="post">
<label>Pseudo :</label>
<input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label> Email :</label>
<input type="email" name="stu_email" id="email" required="required" placeholder="john123@gmail.com"/><br/><br />
<label>password :</label>
<input type="text" name="stu_city" id="city" required="required" placeholder="Please Enter Your City"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>

</div>
<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=blog",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "INSERT INTO students (pseudo, mail, password)
VALUES ('".$_POST["pseudo"]."','".$_POST["mail"]."','".$_POST["password"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
</body>
</html>


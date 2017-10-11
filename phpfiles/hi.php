<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />
<html>
<title>FirstURST</title>
<head>
<form  method="post" action="FirstURST2.php">
<input type="hidden" name="submitted" value="true" />
<h3> <center>La Roche College
<br> Department of Chemistry
<br> Course Assessment Form<center></h3>
</head> 
<body>
<label>Course #Year/Sec:
    <select name= "coursecode">
    <option value="Select a Year/Sec">Select a Year/Sec</option>   
    <option value="Chem2017/1">Chem2017/1</option>
    <option value="Chem2017/2">Chem2017/2</option>
    <option value="Chem2017/3">Chem2017/3</option>  
    </select>
    </label>
<input type = "submit" />
</form>
<?php
 
if(isset($_POST["submitted"])){
   
include('phpconnect2.php');

$coursecode = $_POST["coursecode"];
$ID = 'ID';
$query = "SELECT * FROM ChemClasses WHERE '$coursecode' = $ID";   
$result = mysqli_query($dbcon, $query) or die("error: $query");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo"<label>Semester: {$row['Semester']}</label><br>";
    echo"<label>Course Title: {$row['Course Title']}</label><br>";
    echo"<label>Instructor: {$row['Instructor']}</label><br>";
}

}

?> 

<?php
  
if(isset($_POST["submitted"])){
    
include('connect.php');

$coursecode = $_POST["coursecode"];
$ID = 'CourseID';
$query = "SELECT * FROM Course Inner Join Instructor On Course.InstructorID = Instructor.InstructorID WHERE '$coursecode' = $ID";    
$result = mysqli_query($conn, $query) or die("error: $query");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo "<br>";
	echo "<br><a href='download.php'>Syllabus</a><br>";
	echo "<form action='code.php' method='post'>";
	echo "<fieldset>";
    	echo "<legend>Course Assessment Form Section 1 (Please be detailed):</legend>";
        echo "<div><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCAFS1ID: ";
	echo "<textarea name ='Course' cols='150' rows='1' >{$row['CourseID']}-SPR2017</textarea></label></div>";
	echo "<br>";
        echo "<br>";
        echo "<div><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNew SLOs: <textarea name = 'NewSLOs' cols='150' rows='5'></textarea></label></div><br>";
        echo "<div><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpgrades: <textarea name = 'Upgrades' cols='150' rows='5'></textarea></label></div><br>";
        echo "<div><label>Enhancements: <textarea name = 'Enhancements' cols='150' rows='5'></textarea></label></div><br>";
        echo "<div><label>&nbsp&nbspModifications: <textarea name = 'Modifications' cols='150' rows='5'></textarea></label></div><br>";
        echo "<div><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOther: <textarea name = 'Other' cols='150' rows='5'></textarea></label></div><br>";
	echo "</fieldset>"; 
	echo "<iframe name='votar' style='display:none;'></iframe>";
	echo "<form action='code.php' method='post' target='votar'>";
	echo "<input type='submit' value='Update' />";
    	echo "<input type='hidden' name='ad_id' value='2'>";            
	echo "</form>";	
}
}

?> 

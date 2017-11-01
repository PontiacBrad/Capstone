<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />

<html>
	<title>CourseDropDown</title>

	<head>
		<form  method="post" action="CourseDropDown.php">
		<input type="hidden" name="submitted" value="true" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type = "text/javascript" src = "jquery.js"></script>	
		<link rel="stylesheet" type="text/css" href="../ILR-Team-Files/styles1.css">
	    	<script src="js/libs/jquery.min.js" type="text/javascript"></script>
	    	<script src="javascript/setColor.js"></script>
	    	<script src="javascript/sloSubmit.js"></script>

		<style>

			.button 
			{
				border: 1px solid black;
				border-radius: 8px;
				color: black;
	    			padding: 15px 0;
	    			text-align: center;
	    			text-decoration: none;
	    			display: inline-block;
	    			font-size: 16px;
	    			margin: 4px 2px;
	    			cursor: pointer;
	    			width: 150px;
			}

		</style>

	</head>

	<body>

		<div class="topnav">
			<a href="../ILR-Team-Files/Ilr.php">Independent Learning Record</a>
    			<a href="../Assessment-Team-Files/CourseDropDown.php">Assessment Form</a>
    			<a class="logOut" href="../ILR-Team-Files/index-signIn.php?logout=1">Logout</a>
		</div> 

		<img src="https://laroche.edu/img/logo.png" alt="Logo" style="width:300px;height:80px;">

		<header>
        		<h1>Chemistry Department</h1> 
        		<h2>Student Assessment Form</h2>
    		</header>

		<h3 class="head3">Select a Course

		<label>
			<select name= "coursecode" onchange="this.form.submit()" onchange="makeButtons()">
    			<option value="Select a Year/Sec">Select a Course</option>  

			<?php 
				include ('dropdown.php');
			?>

			</select>
    		</label>

		<?php
			include ('courseselect.php');
		?>

		<div id="slos">
			<input type="button" id="buttonKnowledgeBase" value = "Knowledge Base" class='button' style= "color:black" onclick="setColor('buttonKnowledgeBase', '#101010')";/>
			<input type="button" id="buttonLabSkills" value = "Lab Skills" class='button' style= "color:black" onclick="setColor('buttonLabSkills', '#101010')";/>
			<input type="button" id="buttonPractice" value = "Practice" class='button' style= "color:black" onclick="setColor('buttonPractice', '#101010')";/>
			<input type="button" id="buttonSocietalConnects" value = "Societal Connects" class='button' style= "color:black" onclick="setColor('buttonSocietalConnects', '#101010')";/>
			<input type="button" id="buttonCapstone" value = "Capstone" class='button' style= "color:black" onclick="setColor('buttonCapstone', '#101010')";/>
		</div>

		<input type="button" id="slobutton" value = "SLO submit" class='button' style= "color:black" onclick="sloSubmit()";/>
	</body> 

</html>  

<?php
	include ('CAFSec1.php');
?>


 
        <?php 
		include ('CourseAssessmentID.php');
	?>
         


  


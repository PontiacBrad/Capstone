<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section5.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
<?php
include "Student-Assessment-Learning-Issues.php";
?>
    <legend>Course Assessment Form Section V</legend>
         <br>
<?php
	echo "<div style='text-align:center'>Summative Student Performace and Evaluation: </div><br>
        <table align = 'center'  border = '1'>
        <tr>
            <td><center>#<center></td>
			<td><center>ID#<center></td>
            <td><center>Grade<center></td>
			<td><center onmouseover='See key below'>Learning Issues*<center></td>
			<td><center>Extent of Instructor Interactions<center></td>
			<td><center>Instructor Evaluations and Recomendations<center></td>
		<tr>";  
        include "Controller/DBConnection.php";
        $query = "SELECT * FROM Course_Assessment_Form_Section_5 WHERE  '$coursecode-SPR2017' = CAFS1ID";
        $result = mysqli_query($connection, $query) or die("error: $query");
	$sec5 = false;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$sec5 = true;
	echo "<tr>
			<td><input type='text' size = '5' NAME='Section5Num[]' value='{$row['Sec5Num']}' /></td>
			<td><input type='text' size = '5' NAME='S5IDNum[]' value='{$row['IDNum']}' /></td>
            <td><input type='text' id='fname0' onchange='updateGrades('fname0')' size = '5' NAME='Grade[]' value='{$row['Grade']}' /></td>
			<td><input type='text' size = '13' NAME='S5LearningIssue[]' value='{$row['LearningIssue']}' /></td>
			<td><textarea NAME='ExtentInstructorInt[]' style='width: 350px; height: 75px'>{$row['ExtentInstructorInt']}</textarea></td>
			<td><textarea NAME='InstructorEvalRecommendations[]' style='width: 350px; height: 75px'>{$row['InstructorEvalRecommendations']}</textarea></td>
			</tr>";
	}
	if($sec5 == false)
	{
	echo "<tr>
			<td><input type='text' size = '5' NAME='Section5Num[]' value='{$row['Sec5Num']}' /></td>
			<td><input type='text' size = '5' NAME='S5IDNum[]' value='{$row['IDNum']}'/></td>
            <td><input type='text' id='fname0' onchange='updateGrades('fname0')' size = '5' NAME='Grade[]' value='{$row['Grade']}' /></td>
			<td><input type='text' size = '13' NAME='S5LearningIssue[]' value='{$row['LearningIssue']}' /></td>
			<td><textarea NAME='ExtentInstructorInt[]' style='width: 350px; height: 75px'>{$row['ExtentInstructorInt']}</textarea></td>
			<td><textarea NAME='InstructorEvalRecommendations[]' style='width: 350px; height: 75px'>{$row['InstructorEvalRecommendations']}</textarea></td>
			</tr>
            <tr>
			<td><input type='text' size = '5' NAME='Section5Num[]' value='{$row['Sec5Num']}' /></td>
			<td><input type='text' size = '5' NAME='S5IDNum[]' value='{$row['IDNum']}'/></td>
            <td><input type='text' id='fname0' onchange='updateGrades('fname0')' size = '5' NAME='Grade[]' value='{$row['Grade']}' /></td>
			<td><input type='text' size = '13' NAME='S5LearningIssue[]' value='{$row['LearningIssue']}' /></td>
			<td><textarea NAME='ExtentInstructorInt[]' style='width: 350px; height: 75px'>{$row['ExtentInstructorInt']}</textarea></td>
			<td><textarea NAME='InstructorEvalRecommendations[]' style='width: 350px; height: 75px'>{$row['InstructorEvalRecommendations']}</textarea></td>
			</tr>
            <tr>
			<td><input type='text' size = '5' NAME='Section5Num[]' value='{$row['Sec5Num']}' /></td>
			<td><input type='text' size = '5' NAME='S5IDNum[]' value='{$row['IDNum']}'/></td>
            <td><input type='text' id='fname0' onchange='updateGrades('fname0')' size = '5' NAME='Grade[]' value='{$row['Grade']}' /></td>
			<td><input type='text' size = '13' NAME='S5LearningIssue[]' value='{$row['LearningIssue']}' /></td>
			<td><textarea NAME='ExtentInstructorInt[]' style='width: 350px; height: 75px'>{$row['ExtentInstructorInt']}</textarea></td>
			<td><textarea NAME='InstructorEvalRecommendations[]' style='width: 350px; height: 75px'>{$row['InstructorEvalRecommendations']}</textarea></td>
			</tr>
            <tr>
			<td><input type='text' size = '5' NAME='Section5Num[]' value='{$row['Sec5Num']}' /></td>
			<td><input type='text' size = '5' NAME='S5IDNum[]' value='{$row['IDNum']}'/></td>
            <td><input type='text' id='fname0' onchange='updateGrades('fname0')' size = '5' NAME='Grade[]' value='{$row['Grade']}' /></td>
			<td><input type='text' size = '13' NAME='S5LearningIssue[]' value='{$row['LearningIssue']}' /></td>
			<td><textarea NAME='ExtentInstructorInt[]' style='width: 350px; height: 75px'>{$row['ExtentInstructorInt']}</textarea></td>
			<td><textarea NAME='InstructorEvalRecommendations[]' style='width: 350px; height: 75px'>{$row['InstructorEvalRecommendations']}</textarea></td>
			</tr>
            <tr>
			<td><input type='text' size = '5' NAME='Section5Num[]' value='{$row['Sec5Num']}' /></td>
			<td><input type='text' size = '5' NAME='S5IDNum[]' value='{$row['IDNum']}'/></td>
            <td><input type='text' id='fname0' onchange='updateGrades('fname0')' size = '5' NAME='Grade[]' value='{$row['Grade']}' /></td>
			<td><input type='text' size = '13' NAME='S5LearningIssue[]' value='{$row['LearningIssue']}' /></td>
			<td><textarea NAME='ExtentInstructorInt[]' style='width: 350px; height: 75px'>{$row['ExtentInstructorInt']}</textarea></td>
			<td><textarea NAME='InstructorEvalRecommendations[]' style='width: 350px; height: 75px'>{$row['InstructorEvalRecommendations']}</textarea></td>
			</tr>
                </table>
			<br>
	</fieldset>";
	}      
?>

    

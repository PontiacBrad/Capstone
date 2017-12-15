<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section3.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section III</legend>
<?php
        include "Controller/DBConnection.php";
        $query = "SELECT * FROM Course_Assessment_Form_Section_3 WHERE  '$coursecode-SPR2017' = CAFS1ID";
        $result = mysqli_query($connection, $query) or die("error: $query");
	$sec3 = false;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$sec3 = true;
	echo "<br><div style='text-align:center'><label for= 'textarea'>Course Prerequisites:<br> <textarea id = 'textarea' rows='4' cols='100' type = text name = 'CoursePrerequisites'  />{$row['CoursePreReq']}</textarea></label></div><br>
        <div style='text-align:center'><label>Textbooks/Other Required Material:<br> <textarea rows='4' cols='100'  type = text name = 'Textbooks/OtherRequiredMaterial' />{$row['Textbooks']}</textarea></label></div><br>
        <div style='text-align:center'><label>Student Assessment Measures:<br> <textarea rows='4' cols='100'  type = text name = 'StudentAssessmentMeasures' />{$row['StudentAsse']}</textarea></label></div><br>
        <div style='text-align:center'><label>Pedagogy:<br> <textarea rows='4' cols='100' type = text name = 'Pedagogy' />{$row['Pedagogy']}</textarea></div></label><br>
         <div style='text-align:center'><label>Faculty/Guest Instructors:<br> <textarea rows='4' cols='100' type = text name = 'Faculty/GuestInstructors' />{$row['Faculty']}</textarea></label></div><br>
        <div style='text-align:center'><label>Minor and Capital Equipment Needs: <br><textarea rows='4' cols='100'  type = text name ='MinorandCapitalEquipmentNeeds' />{$row['MinorCapitalEq']}</textarea></div></label><br>
        <div style='text-align:center'><label>Other Recommendations: <br><textarea rows='4' cols='100'  type = text name = 'OtherRecommendations' />{$row['Other']}</textarea></label></div>

    </fieldset>";
	}
	if($sec3 == false)
	{
	echo "<br><div style='text-align:center'><label for= 'textarea'>Course Prerequisites:<br> <textarea id = 'textarea' rows='4' cols='100' type = text name = 'CoursePrerequisites'  />{$row['CoursePreReq']}</textarea></label></div><br>
        <div style='text-align:center'><label>Textbooks/Other Required Material:<br> <textarea rows='4' cols='100'  type = text name = 'Textbooks/OtherRequiredMaterial' />{$row['Textbooks']}</textarea></label></div><br>
        <div style='text-align:center'><label>Student Assessment Measures:<br> <textarea rows='4' cols='100'  type = text name = 'StudentAssessmentMeasures' />{$row['StudentAsse']}</textarea></label></div><br>
        <div style='text-align:center'><label>Pedagogy:<br> <textarea rows='4' cols='100' type = text name = 'Pedagogy' />{$row['Pedagogy']}</textarea></div></label><br>
         <div style='text-align:center'><label>Faculty/Guest Instructors:<br> <textarea rows='4' cols='100' type = text name = 'Faculty/GuestInstructors' />{$row['Faculty']}</textarea></label></div><br>
        <div style='text-align:center'><label>Minor and Capital Equipment Needs: <br><textarea rows='4' cols='100'  type = text name ='MinorandCapitalEquipmentNeeds' />{$row['MinorCapitalEq']}</textarea></div></label><br>
        <div style='text-align:center'><label>Other Recommendations: <br><textarea rows='4' cols='100'  type = text name = 'OtherRecommendations' />{$row['Other']}</textarea></label></div>

    </fieldset>";
	}
	
        
?>
     

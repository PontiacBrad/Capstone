<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
        
	$CAFS1ID = $_POST['CAFS1ID'];
        $CoursePreReq = $_POST['CoursePrerequisites'];
        $Textbooks = $_POST['Textbooks/OtherRequiredMaterial'];
        $StudentAsse = $_POST['StudentAssessmentMeasures'];
        $Pedagogy = $_POST['Pedagogy'];
        $Faculty = $_POST['Faculty/GuestInstructors'];
        $MinorCapitalEq = $_POST['MinorandCapitalEquipmentNeeds'];
        $Other = $_POST['OtherRecommendations'];
        $sqlinsert = "REPLACE INTO Course_Assessment_Form_Section_3 (CAFS1ID, CoursePreReq, Textbooks, StudentAsse, Pedagogy, Faculty, MinorCapitalEq, Other) VALUES ('$CAFS1ID', '$CoursePreReq', '$Textbooks', 
        '$StudentAsse', '$Pedagogy', '$Faculty', '$MinorCapitalEq', '$Other')";
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
    }
?>

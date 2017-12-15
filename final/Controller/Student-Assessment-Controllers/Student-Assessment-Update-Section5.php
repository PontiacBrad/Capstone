<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
	$CAFS1ID = $_POST['CAFS1ID'];
        foreach($_POST['Section5Num'] as $idx => $Sec5Num) {
    $sqlinsert="REPLACE INTO Course_Assessment_Form_Section_5 (CAFS1ID, Sec5Num, IDNum, Grade, LearningIssue, ExtentInstructorInt, InstructorEvalRecommendations) VALUES ('" . $CAFS1ID . "', '" . $Sec5Num . "', '" . $_POST['S5IDNum'][$idx] . "', '" . $_POST['Grade'][$idx] . "', '" . $_POST['S5LearningIssue'][$idx] . "', '" . $_POST['ExtentInstructorInt'][$idx] . "','" . $_POST['InstructorEvalRecommendations'][$idx] . "' )";
    
        
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
        }
    }
?>

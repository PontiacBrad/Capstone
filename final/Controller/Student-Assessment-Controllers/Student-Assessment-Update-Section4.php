<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
        $CAFS1ID = $_POST['CAFS1ID'];
        foreach($_POST['Section4Num'] as $idx => $Sec4Num) {
    $sqlinsert="REPLACE INTO Course_Assessment_Form_Section_4 (CAFS1ID, Sec4Num, IDNum, LearningIssue, ExtentInstructor, InstructorRecommendations) VALUES ('" . $CAFS1ID . "', '" . $Sec4Num . "', '" . $_POST['IDNum'][$idx] . "', '" . $_POST['LearningIssue'][$idx] . "', '" . $_POST['ExtentInstructor'][$idx] . "','" . $_POST['InstructorRecommendations'][$idx] . "' )";
    
        
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
        }
    }
?>

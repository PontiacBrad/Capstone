<?php
    if (isset($_POST['submitted2'])){    
    include "Controller/DBConnection.php";
        
	$CAFS1ID = $_POST['CAFS1ID'];
        $ChemConcepts = $_POST['ChemConceptCarryOver'];
        $ObjectivesContent = $_POST['WereObjectvesContentCovered'];
        $GeneralComments = $_POST['GeneralComments'];
        $Apercent = $_POST['Apercent'];
        $Bpercent = $_POST['Bpercent'];
        $Cpercent = $_POST['Cpercent'];
        $Dpercent = $_POST['Dpercent'];
        $Fpercent = $_POST['Fpercent'];
        
        $sqlinsert = "REPLACE INTO Course_Assessment_Form_Section_2 (CAFS1ID, ChemConcept, ObjectivesContent, GeneralComments, percentA, percentB, percentC, percentD, percentF) VALUES ('$CAFS1ID', '$ChemConcepts', '$ObjectivesContent', '$GeneralComments', '$Apercent', '$Bpercent', '$Cpercent', '$Dpercent', '$Fpercent')";
       
        if(!mysqli_query($connection, $sqlinsert)){
            die('error inserting');
        }
    }
?>


<?php
    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-Section2.php";
?>


    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
    <legend>Course Assessment Form Section II</legend>
<?php
        include "Controller/DBConnection.php";
        $query = "SELECT * FROM Course_Assessment_Form_Section_2 WHERE  '$coursecode-SPR2017' = CAFS1ID";
        $result = mysqli_query($connection, $query) or die("error: $query");
	$sec2 = false;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$sec2 = true;
	echo "<br><div style='text-align:center'><label>Chemestry Concepts Carry-Over From Previous Semsters:<br>
        <textarea id = 'textarea' rows='4' cols='100' type = text name = 'ChemConceptCarryOver'  />{$row['ChemConcept']}</textarea></label></div><br>
        <div style='text-align:center'><label>Were Objectves and Content Covered:<br> <textarea rows='4' cols='100'  type = text name = 'WereObjectvesContentCovered' />{$row['ObjectivesContent']}</textarea></label></div><br>
        <div style='text-align:center'><label>General Comments:<br>
        <textarea rows='4' cols='100'  type = text name = 'GeneralComments' />{$row['GeneralComments']}</textarea></label></div><br>

        <div style='text-align:center'>Overall student performace: </div>
        <table align = 'center'  border = '1'>
        <tr>
            <td><center>%A<center></td>
			<td><center>%B<center></td>
			<td><center>%C<center></td>
			<td><center>%D<center></td>
			<td><center>%F<center></td>
		<tr>
	        <tr>
			<td><input type='text' id='gradeA' size = '5' NAME='Apercent' value='{$row['percentA']}'/></td>
			<td><input type='text' id='gradeB' size = '5' NAME='Bpercent' value='{$row['percentB']}'/></td>
			<td><input type='text' id='gradeC' size = '5' NAME='Cpercent' value='{$row['percentC']}'/></td>
			<td><input type='text' id='gradeD' size = '5' NAME='Dpercent' value='{$row['percentD']}'/></td>
			<td><input type='text' id='gradeF' size = '5' NAME='Fpercent' value='{$row['percentF']}'/></td>
			</tr>
                </table>
			<br>
    </fieldset>";
	}
	if($sec2 == false)
	{
        echo "<br><div style='text-align:center'><label>Chemestry Concepts Carry-Over From Previous Semsters:<br>
        <textarea id = 'textarea' rows='4' cols='100' type = text name = 'ChemConceptCarryOver'  />{$row['ChemConcept']}</textarea></label></div><br>
        <div style='text-align:center'><label>Were Objectves and Content Covered:<br> <textarea rows='4' cols='100'  type = text name = 'WereObjectvesContentCovered' />{$row['ObjectivesContent']}</textarea></label></div><br>
        <div style='text-align:center'><label>General Comments:<br>
        <textarea rows='4' cols='100'  type = text name = 'GeneralComments' />{$row['GeneralComments']}</textarea></label></div><br>

        <div style='text-align:center'>Overall student performace: </div>
        <table align = 'center'  border = '1'>
        <tr>
            <td><center>%A<center></td>
			<td><center>%B<center></td>
			<td><center>%C<center></td>
			<td><center>%D<center></td>
			<td><center>%F<center></td>
		<tr>
	        <tr>
			<td><input type='text' id='gradeA' size = '5' NAME='Apercent' value='{$row['percentA']}'/></td>
			<td><input type='text' id='gradeB' size = '5' NAME='Bpercent' value='{$row['percentB']}'/></td>
			<td><input type='text' id='gradeC' size = '5' NAME='Cpercent' value='{$row['percentC']}'/></td>
			<td><input type='text' id='gradeD' size = '5' NAME='Dpercent' value='{$row['percentD']}'/></td>
			<td><input type='text' id='gradeF' size = '5' NAME='Fpercent' value='{$row['percentF']}'/></td>
			</tr>
                </table>
			<br>
    </fieldset>";
	}
?>
        

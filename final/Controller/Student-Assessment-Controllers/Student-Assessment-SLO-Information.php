
    <form action="Student-Assessment-Main.php" method="post">
    <fieldset>
     <legend>Course Assessment Form Section I</legend>
      <br>
        <?php

    include "Controller/Student-Assessment-Controllers/Student-Assessment-Update-SLO-Information.php";
?>

<?php
        include "Controller/DBConnection.php";
        $query = "SELECT * FROM Course_Assessment_Form_Section_1 WHERE  '$coursecode-SPR2017' = CAFS1ID";
        $result = mysqli_query($connection, $query) or die("error: $query");
	$sec1 = false;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$sec1 = true;
	echo "<div style='text-align:center' ><label>New SLOs:<br> <textarea rows='4' cols='100' type = text name = 'NewSLOs'>{$row['NewSLOs']}</textarea></label></div><br>";
        echo "<div style='text-align:center' ><label>Upgrades:<br> <textarea rows='4' cols='100'  type = text name = 'Upgrades'>{$row['Upgrades']}</textarea></label></div><br>";
        echo "<div style='text-align:center'><label>Enhancements:<br> <textarea rows='4' cols='100' type = text name = 'Enhancements'>{$row['Enhancements']}</textarea></label></div><br>";
        echo "<div style='text-align:center'><label>Modifications:<br> <textarea rows='4' cols='100'  type = text name = 'Modifications'>{$row['Modifications']}</textarea></div></label><br>";
        echo "<div style='text-align:center'><label>Other:<br> <textarea rows='4' cols='100' type = text name = 'Other'>{$row['Other']}</textarea></label></div><br>";
	echo "</fieldset>";
	}
	if($sec1 == false)
	{
	echo "<div style='text-align:center' ><label>New SLOs:<br> <textarea rows='4' cols='100' type = text name = 'NewSLOs'>{$row['NewSLOs']}</textarea></label></div><br>";
        echo "<div style='text-align:center' ><label>Upgrades:<br> <textarea rows='4' cols='100'  type = text name = 'Upgrades'>{$row['Upgrades']}</textarea></label></div><br>";
        echo "<div style='text-align:center'><label>Enhancements:<br> <textarea rows='4' cols='100' type = text name = 'Enhancements'>{$row['Enhancements']}</textarea></label></div><br>";
        echo "<div style='text-align:center'><label>Modifications:<br> <textarea rows='4' cols='100'  type = text name = 'Modifications'>{$row['Modifications']}</textarea></div></label><br>";
        echo "<div style='text-align:center'><label>Other:<br> <textarea rows='4' cols='100' type = text name = 'Other'>{$row['Other']}</textarea></label></div><br>";
	echo "</fieldset>";
	}
        
?>




<?php
         $query = "INSERT INTO TestTable (Text, Number) VALUES ('$_POST[myText]', '$_POST[myNumber]')";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if ($result === false) {
	         echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
?>

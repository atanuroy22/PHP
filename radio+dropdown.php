<form action="radio+dropdown.php" method="post">
<p>Chose Your Time<br>
<select name="day">

<option value="Morning">9am-12pm</option>
<option value="Evening">12pm-6pm</option>
<option value="Night">6pm-12pm</option>
</select><br>
<input type="submit" name="button" value="Submit"/>
</form>

<?php
$option=$_POST['day'];
echo $option;
?>
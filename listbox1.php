<!--

	file name- listbox.php
	list box in php (drop down list)
	
-->

<html>
	<form>
		<select name="1stvalues">
			<?php	
				for($i=1;$i<=10;$i++)
				{
					echo "<option> $i </option>";
				}
			?>
		</select>
	</form>
</html>	
<?php
	echo "100 by 100 multiplication table:<br>";
	// give table a border
	echo "<table border='1'>";
	// start first row and column
	echo "<tr><td>";
	// print first row header
	for ($i = 1; $i <= 100; $i++)
		echo "<td>".$i;
	// end the first row
	echo "</tr>";
	// loop through each row
	for ($row = 1; $row <= 100; $row++) {
		// start new row and print the first column header
    		echo "<tr><td>$row</td>";
		// loop through each column and print the product
        	for($column = 1; $column <= 100; $column++)
        		echo "<td>".$row * $column."</td>";
	}
?>
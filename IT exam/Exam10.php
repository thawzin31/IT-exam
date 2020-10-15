<?php

	$hambuger=4.95;
	$chocolate=1.95;
	$cocacola=85;

	$total=($hambuger*2)+$chocolate+$cocacola;
	$tax=$total*0.075;
	$tip=$total*0.16;

	echo "Hambuger for two is  ".$hambuger."<br>";
	echo "ChocolateMilkshake is  ".$chocolate."<br>";
	echo "Cocacola is  ".$cocacola."<br>";
	echo "Total Tax is  ".$total."<br>";
	echo "Tax rate is  ".$tax."<br>";
	echo "Pre tax tip is  ".$tip."<br>";
	echo "Total with tax and tip is  ".($tax+$tip)."<br>";

	echo "<table border=1 cellpadding=5px width=400px>";
		echo "<tr>";
			echo "<th>Name</th>";
			echo "<th>Price</th>";
			echo "<th>Qty</th>";
				echo "<th>Total Price</th>";
		echo"</tr>";

		echo "<tr>";
			echo "<td>Hambuger</td>";
			echo "<td>".$hambuger."</td>";
			echo "<td>".(2)."</td>";
			echo "<th>".($hambuger*2)."</th>";
		echo"</tr>";

		echo "<tr>";
			echo "<td>ChocolateMilkshake</td>";
			echo "<td>".$chocolate."</td>";
			echo "<td>".(1)."</td>";
			echo "<th>".$chocolate."</th>";
		echo"</tr>";

		echo "<tr>";
			echo "<td>Cocacola</td>";
			echo "<td>".$cocacola."</td>";
			echo "<td>".(1)."</td>";
			echo "<th>".$cocacola."</th>";
		echo"</tr>";

		echo "<tr>";
			echo "<td colspan=3>Sale Tax Rate</td>";
			echo "<th>".$tax."</th>";
		echo"</tr>";

		echo "<tr>";
			echo "<td colspan=3>Pre-tax tip</td>";
			echo "<th>".$tip."</th>";
		echo"</tr>";

		echo "<tr>";
			echo "<td colspan=3>Total tax and tip</td>";
			echo "<th>".($tax+$tip)."</th>";
		echo"</tr>";

	echo "</table>";


?>
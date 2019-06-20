<?php
include 'NewFile.php';

class Building2550
{

    public $searchBarData;
}

?>
<html>
<body class="bodyBackground">


<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<h1 class="centering" style="font-size: 15pt; height: 25px;">Hine
	Inventory Application</h1>
<h2 style="font-size: 10pt">Warehouse 2550</h2>
<form method='post'>
	<input name='searchbar' style='margin-left: 60%;' type='text'
		placeholder="Search For Part"> <input type='submit' name='search' /> <br>

</form>

<div style='text-align: center;'><?php
$thisPage = new Building2550();
if (isset($_POST['searchbar'])) {
    if (isset($_POST['search'])) {
        $thisPage->searchBarData = $_POST['searchbar'];
     //   $thisPage->searchBarData = preg_replace('(\s)', '', $thisPage->searchBarData);
        $query = "SELECT * FROM parts WHERE partNumber LIKE '%$thisPage->searchBarData%'";
        $result = mysqli_query(NewFile::establishConnection(), $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<table class='tableForShelves'>";
            echo "<tbody>";
            echo "<tr>";
            echo "<th>Part Number</th>" . "<th>Location</th>" . "<th>Quantity</th>";
            echo "</tr>";
            echo "<tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<td>" . $row['partNumber'] . "</td>" . '&nbsp;' . "<td>" . $row['location'] . "</td>" . '&nbsp;' . "<td>" . $row['qty'] . "</td>";
                echo "</tr>";
            }
            
            echo "</tbody>";
            echo "</table>";
        }
    }
}
?></div>
<div>
	<table>
		<tr>
			<th class="classForABCD">A</th>
			<th rowspan="12" class="classForBlankSpots"></th>
			<th class="classForABCD">B</th>
			<th class="classForABCD">C</th>
			<th rowspan="12" class="classForBlankSpots"></th>
			<th class="classForABCD">D</th>
		</tr>
		<tr>
			<td style="border: 0"></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B8.php'">Section 8</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C8.php'">Section 8</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D11.php'">Section 11</button></td>
		</tr>
		<tr>
			<td style='border: 0;'></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B7.php'">Section 7</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C7.php'">Section 7</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D10.php'">Section 10</button></td>
		</tr>
		<tr>
			<td style='border: 0;'></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B6.php'">Section 6</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C6.php'">Section 6</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D9.php'">Section 9</button></td>
		</tr>
		<tr>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/A/A6.php'">Section 6</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B5.php'">Section 5</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C5.php'">Section 5</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D8.php'">Section 8</button></td>
		</tr>
		<tr>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/A/A5.php'">Section 5</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B4.php'">Section 4</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C4.php'">Section 4</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D7.php'">Section 7</button></td>
		</tr>
		<tr>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/A/A4.php'">Section 4</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B3.php'">Section 3</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C3.php'">Section 3</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D6.php'">Section 6</button></td>
		</tr>
		<tr>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/A/A3.php'">Section 3</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B2.php'">Section 2</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C2.php'">Section 2</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D5.php'">Section 5</button></td>
		</tr>
		<tr>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/A/A2.php'">Section 2</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/B/B1.php'">Section 1</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/C/C1.php'">Section 1</button></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D4.php'">Section 4</button></td>
		</tr>
		<tr>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/A/A1.php'">Section 1</button></td>
			<td style="border: 0;"></td>
			<td style="border: 0;"></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D3.php'">Section 3</button></td>
		</tr>
		<tr>
			<td style="border: 0;"></td>
			<td style="border: 0;"></td>
			<td style="border: 0;"></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D2.php'">Section 2</button></td>
		</tr>
		<tr>
			<td style="border: 0;"></td>
			<td style="border: 0;"></td>
			<td style="border: 0;"></td>
			<td><button class="buttonClass"
					onclick="window.location.href = 'Sections/D/D1.php'">Section 1</button></td>
		</tr>
	</table>
</div>
<div class="centering">
	<button style="height: 50px;"
		onclick="window.location.href = 'Home.php';">Home Screen</button>
</div>
</body>
</html>
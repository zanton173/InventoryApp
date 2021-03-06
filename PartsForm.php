<?php
include 'NewFile.php';

class PartsForm{
    
    public $hineRef;
    
}

$partsFormObj = new PartsForm();

if (isset($_POST['commitParts'])){
    
    $partNum = $_POST['partNum'];
    $partNum = strtoupper($partNum);
    $quantityReceived = $_POST['qtyReceived'];
    $partsFormObj->hineRef = $_POST['hineRefDropDown'];
    
    $query = "INSERT INTO partsinlog(partNumReceived, partQuantityReceived, partsId) VALUES('$partNum', '$quantityReceived', '$partsFormObj->hineRef')";
    mysqli_query(NewFile::establishConnection(), $query);
}

?>



<html>
<head>
<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>

</head>
<body class='bodyBackground'>


<h1>Log Parts in Shipment</h1>
<div style='margin: 0' class='centering'>
<?php 

    $query = "SELECT id, hineReference FROM inspectionlogs";
    $result = mysqli_query(NewFile::establishConnection(), $query);
    echo "<form class='form-inline nowrap justify-content-center' method='post'>";
    echo "<select class='form-control' name='hineRefDropDown'>";
    if (mysqli_num_rows($result)){
        
        while($row = mysqli_fetch_array($result)){
            
            echo "&nbsp;";
            echo "<option value=$row[id]>"  . $row['hineReference'] . "</option>";
            
        }
       echo "</form>"; 
    }
    echo "</select>"; 
    

?>
&nbsp;


<form class="form-inline nowrap justify-content-center" method='post'>

  <input class="form-control" type='text' name='partNum' placeholder='Part Number'>&nbsp;
  <input class="form-control" type='number' name='qtyReceived' placeholder='Quantity'>&nbsp;
  <input class="btn btn-success" type='submit' name='commitParts' value='Add'>


</form>
</div>
<div style='height: 50px;'></div>
<div class="centering">
	<button class="btn btn-danger" style="height: 50px;"
		onclick="window.location.href = 'Home.php';">Home Screen</button>
		<button class="btn btn-primary" style='height: 50px;' onclick='window.location.href = "ReceivingLog.php";'>Logs
			
		</button>

</div>

</body>
</html>
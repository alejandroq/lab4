<?php

//Checking if "Update Dashboard" button was pressed. 
// if(isset($_POST['function'])) { 
//     if($_POST['function'] == 'time') {
//     	echo printDashboard();
//     }
// }

function printCountries() 
{
	require 'connection.php';

    $sql = 'SELECT * FROM country ORDER BY CountryAbbreviation DESC';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            $CountryAbbreviation = $row['CountryAbbreviation'];
            $CountryName = $row['CountryName'];

            echo '
            	<option value="' . $CountryAbbreviation . '">' . $CountryName . '</option>';
        }
    }
}

function printStates()
{
	require 'connection.php';

    $sql = 'SELECT * FROM homestate ORDER BY StateAbbreviation DESC';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            $StateAbbreviation = $row['StateAbbreviation'];
            $StateName = $row['StateName'];

            echo '
            	<option value="' . $StateAbbreviation . '">' . $StateName . '</option>';
        }
    }
}

function printDashboard()
{
	require 'connection.php';

	echo '<table>';

	$sql = 'SELECT CONCAT(ifNull(lastName, "") , ", " , ifNull(firstName,"")) Name, AccidentID, DateOfAccident, AccidentLocation, AccidentDescription FROM employee 
		LEFT JOIN accident ON employee.EmployeeID = accident.EmployeeID';

    $result = $conn->query($sql);


    if ($result->num_rows > 0) 
	{
		while ($row = $result->fetch_assoc())
		{
			$name = $row['Name'];
			$accidentID = $row['AccidentID'];
			$accDate = $row['DateOfAccident'];
			$location = $row['AccidentLocation'];
			$description = $row['AccidentDescription'];

			echo 
			' <tr> 
				<td> ' . $name . '</td> 
				<td> ' . $accidentID . '</td>
				<td> ' . $accDate . '</td>
				<td> ' . $location . '</td> 
				<td> ' . $description . '</td>
			 </tr>';
		}
	}

	$sql = 'SELECT SUM(salary) Salary FROM Employee';
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$salary = $row['Salary'];
			echo 
			'
				<tr>
					<td> ' . $salary . ' </td>
				</tr>
			';
		}
	}

	$sql = 'SELECT * FROM Truck';
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$vinNumber = $row['VinNumber'];
			$make = $row['Make'];
			$model = $row['Model'];
			$priceAcquired = $row['PriceAcquired'];
			$licenseDate = $row['LicenseDate'];

			echo 
			'
				<tr> 
					<td> ' . $vinNumber . ' </td>
					<td> ' . $make . ' </td>
					<td> ' . $model . ' </td>
					<td> ' . $priceAcquired . ' </td>
					<td> ' . $licenseDate . ' </td>
				</tr>
			';
		}
	}

	echo '</table>';
}

function printEmployees()
{
	require 'connection.php';

	$sql = 'SELECT EmployeeID, CONCAT(lastName , ", " , firstName) Name FROM Employee';
	$result = $conn->query($sql);

	echo 
	'
		<select id="name" name="name">
        <option value="">--Select--</option>
	';
	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$employeeID = $row['EmployeeID'];
			$name = $row['Name'];

			echo 
			'
				<option value=' . $employeeID . '>' . $name . '<option>
			';
		}
	}
	echo 
	'
		</select>
	';

}

?>

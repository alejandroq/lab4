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
		echo 
			' <tr style="background-color:#6599FF; color:white;">  
				<td> Accident ID </td> 
				<td> Name </td>
				<td> Date </td>
				<td> Location</td> 
				<td> Description</td>
			 </tr>';

		while ($row = $result->fetch_assoc())
		{
			$name = $row['Name'];
			$accidentID = $row['AccidentID'];
			$accDate = $row['DateOfAccident'];
			$location = $row['AccidentLocation'];
			$description = $row['AccidentDescription'];
			echo 
			' <tr> 
				<td> ' . $accidentID . '</td> 
				<td> ' . $name . '</td>
				<td> ' . $accDate . '</td>
				<td> ' . $location . '</td> 
				<td> ' . $description . '</td>
			 </tr>';
		}
	}

	echo 
	'
		<tr><td style="border-color:yellow;">&nbsp;</td></tr>
	';


	if ($result->num_rows > 0)
	{
		echo 
			'
				<tr style="background-color:#6599FF; color:white;"> 
					<td> Vehicle Number </td>
					<td> Make </td>
					<td> Model </td>
					<td> Price Aquired </td>
					<td> License Date </td>
				</tr>
			';

	$sql = 'SELECT * FROM Truck';
	$result = $conn->query($sql);
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

	echo 
	'
		<tr><td style="border-color:yellow;">&nbsp;</td></tr>
	';

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
					<td style="background-color:#6599FF; color:white;">Sum Salary</td>
					<td> ' . $salary . ' </td>
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
				<option value=' . $employeeID . '>' . $name . '</option>
			';
		}
	}
	echo 
	'
		</select>
	';

}

?>

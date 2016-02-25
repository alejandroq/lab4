<?php

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

?>

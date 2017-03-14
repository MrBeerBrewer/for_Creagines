<?php 
/**
* Use this retrive data from Database.
* Author: Santosh J
* Date: 14-March-2017
**/

include 'one.php';

$sql = 'CALL SelectItems()';
$result = $pdo->query($sql);

foreach ($result as $row)
{
    echo "ID:" . $row['ID'] . "|Name:" . $row['Name'] . "|Type:" . $row['Type'] . "|Cost:" . $row['Cost'] . ";" ;
}
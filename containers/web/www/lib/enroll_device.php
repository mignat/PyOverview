<?php
require("sqlQuery.php");

$json = file_get_contents('php://input');
$data = json_decode($json,true);

//  Start enroll process

//$stationName = $data['STATION']['name'];
//$stationLocation = $data['STATION']['location'];
//$stationDescription = $data['STATION']['description'];

sqlexec("INSERT INTO `pyover_devices` (`UID`, `name`, `location`, `Description`, `status`, `last_contact`) VALUES (\'9aa41097-afc6-11e9-b06a-b827eb5d7d84\', \'Pytest\', \'Sala 1\', \'CEVA\', \'N/A\', NULL)", null,true);

echo "Done";





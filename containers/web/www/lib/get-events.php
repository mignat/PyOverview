<?php

//--------------------------------------------------------------------------------------------------
// This script reads event data from a JSON file and outputs those events which are within the range
// supplied by the "start" and "end" GET parameters.
//
// An optional "timeZone" GET parameter will force all ISO8601 date stings to a given timeZone.
//
// Requires PHP 5.2.0 or higher.
//--------------------------------------------------------------------------------------------------


// Require our Event class and datetime utilities
require dirname(__FILE__) . '/utils.php';
require "sqlQuery.php";

// Short-circuit if the client did not give us a date range.
if (!isset($_GET['uid'])) {
  die("Please provide a uuid");
}else{
    $uid = $_GET['uid'];
}

$event_ar = new ArrayObject();
// Parse the start/end parameters.
// These are assumed to be ISO8601 strings with no time nor timeZone, like "2013-12-29".
// Since no timeZone will be present, they will parsed as UTC.
//$range_start = parseDateTime($_GET['start']);
//$range_end = parseDateTime($_GET['end']);

// Parse the timeZone parameter if it is present.
$time_zone = null;
if (isset($_GET['timeZone'])) {
$time_zone = new DateTimeZone($_GET['timeZone']);
}
$query_results = sqlexec("SELECT DATE_FORMAT(FROM_UNIXTIME(start_time),'%Y-%m-%dT%H:%i:%s') AS 'start_time',DATE_FORMAT(FROM_UNIXTIME(end_time),'%Y-%m-%dT%H:%i:%s') AS 'end_time' FROM `pyover_usetime` WHERE `device_uid`= '${uid}'");
$eventlist = array();

foreach ($query_results as $result) {
        $x = array();
        $x['start'] = $result[0];
        $x['end'] = $result[1];
        $eventlist[] = $x;
}
echo  json_encode($eventlist);

// Read and parse our events JSON file into an array of event data arrays.
//$json = file_get_contents(dirname(__FILE__) . '/../json/events.json');
//$input_arrays = json_decode($json, true);

// Accumulate an output array of event data arrays.
//$output_arrays = array();
//foreach ($input_arrays as $array) {

  // Convert the input array into a useful Event object
  //$event = new Event($array, $time_zone);

  // If the event is in-bounds, add it to the output
  //if ($event->isWithinDayRange($range_start, $range_end)) {
    //$output_arrays[] = $event->toArray();
 // }
//}

// Send JSON to the client.
//echo json_encode($output_arrays);

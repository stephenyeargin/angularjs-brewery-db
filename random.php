<?php

require_once('config.php');

$ch = curl_init('http://api.brewerydb.com/v2/beer/random?key=' . BREWERY_DB_API_KEY);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($ch);

header('Content-type: application/json');
print $return;

<?php

//mosyle credentials
$username = $_ENV['MOSYLEU'];
$password = $_ENV['MOSYLEP'];



$endpoint = '/listdevices';
$parameters = array(
    'accessToken' => $_ENV['MOSYLEAPI'],
    'options' => array(
      'os' => 'mac',
      'specific_columns' => array('serial_number','date_checkin', 'installed_memory','cpu_model','osversion')
    )
  );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://managerapi.mosyle.com/v2' . $endpoint); // start the curl
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // return the transfer as a string
curl_setopt($ch, CURLOPT_POST, true); // set as post request
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($username.':'.$password)));
curl_setopt($ch, CURLOPT_POSTFIELDS, array('content' => json_encode($parameters)));

$output = curl_exec($ch); // $output contains the output string

// close curl resource to free up system resources
curl_close($ch);

echo $output;

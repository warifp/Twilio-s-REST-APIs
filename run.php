<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
require_once($config);
/**
 * Editable by Wahyu Arif Purnomo
 * 03 September 2019
 * TWILIO'S REST APIs
 */

echo "Number : ";
$tonumber = trim(fgets(STDIN));

echo "Messages : ";
$pesan = trim(fgets(STDIN));

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $tonumber, //TO NUMBER 
    array(
        'from' => $twilio_number,
        'body' => $pesan
    )
);
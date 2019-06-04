<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'Masukan Account ID';
$token = 'Masukan Input Token';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    'Nomor yang mau dikirimkan',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => 'Nomor pengirim dari Twilio',
        // the body of the text message you'd like to send
        'body' => "Tes Kirim SMS dari Twilio API"
    )
);
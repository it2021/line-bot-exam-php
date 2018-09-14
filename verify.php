<?php
$access_token = 'L8Gdufm9HUj4iKCXzbi2w8uBW0Fb7tYFJC76NDZPUmH2kqPjQ/Qa7S0+BP01wHSNsZ8j7volcFuFWxwv2mj8KzQnxSQpOGZhjmjknDWQl5A26kLmRw/6JWtLyjw3z6xBUY/EqqfNlqOjI7ONq6WitgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

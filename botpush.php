<?php



require "vendor/autoload.php";

$access_token = 'L8Gdufm9HUj4iKCXzbi2w8uBW0Fb7tYFJC76NDZPUmH2kqPjQ/Qa7S0+BP01wHSNsZ8j7volcFuFWxwv2mj8KzQnxSQpOGZhjmjknDWQl5A26kLmRw/6JWtLyjw3z6xBUY/EqqfNlqOjI7ONq6WitgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '91d4c04023e84074ecaba7ca99997865';

$pushID = 'U595bd48b3fdbbb81e3cf4b7f5277b409';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








<?php


use Lanser\CustomQueue\Queue\RedisPublisher;

require 'vendor/autoload.php';

$channel = 'myChannel'; // Name of the channel to publish to
$message = 'Hello, AkbarAli!'; // Message to publish
new RedisPublisher($channel, $message);
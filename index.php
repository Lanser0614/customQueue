<?php

use Lanser\CustomQueue\Queue\RedisSubscriber;

require 'vendor/autoload.php';

$channel = 'myChannel'; // Name of the channel to publish to

$handle = function ($message) {
    echo "Received message: $message\n";
};

new RedisSubscriber($channel, $handle);



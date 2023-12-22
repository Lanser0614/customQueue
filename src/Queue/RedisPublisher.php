<?php
declare(strict_types=1);

namespace Lanser\CustomQueue\Queue;

use Redis;
use RedisException;

class RedisPublisher
{
    /**
     * @throws RedisException
     */
    public function __construct($channel, $message)
    {
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $redis->publish($channel, $message);
    }


}
<?php
declare(strict_types=1);

namespace Lanser\CustomQueue\Queue;

use Redis;
use RedisException;

class RedisSubscriber
{


    /**
     * @throws RedisException
     */
    public function __construct($channel, $callBack)
    {
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);

        $redis->subscribe([$channel], function ($redis, $channel, $message) use ($callBack) {
            $callBack($message);
        });
    }


}
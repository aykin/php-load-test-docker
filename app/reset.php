<?php

$redis = new Redis();
$redis->connect('redis');
$list = $redis->set('list',serialize([]));

echo "Reset redis";

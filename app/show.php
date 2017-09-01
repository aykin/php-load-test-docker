<?php

$redis = new Redis();
$redis->connect('redis');
$list = $redis->get('list');


if ($list) var_dump(unserialize($list));

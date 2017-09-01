<?php

for ($times = 0;$times<=10;$times++) {
  $a = [];
  for ($i = 0;$i<=100000; $i++) {
    $a[] = rand(0,2147483647);
  }

  sort($a);
    echo ".";
}

$redis = new Redis();
$redis->connect('redis');
$list = $redis->get('list');
if (empty($list)) {
  $list = [];
} else {
  $list = unserialize($list);
}

$list[] = "test_".uniqid();

$redis->set('list',serialize($list));

var_dump($list);

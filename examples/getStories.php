<?php
require __DIR__ . '/../vendor/autoload.php';

$instagram = \InstagramPrivate\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

$stories = $instagram->getStories();
print_r($stories);
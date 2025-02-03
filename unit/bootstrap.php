<?php
require_once(__DIR__.'/splClassLoader.php');
$classLoader = new SplClassLoader('SoampliApps\Authentication', __DIR__ . '/../' );
$classLoader->register();
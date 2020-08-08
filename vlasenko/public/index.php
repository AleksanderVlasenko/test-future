<?php

function myAutoLoader(string $className)
{
require_once __DIR__ . '/../src/' . $className . '.php';
}

spl_autoload_register('myAutoLoader');

$mc = new \MyProject\Controllers\MainController();
$mc->main();

?>
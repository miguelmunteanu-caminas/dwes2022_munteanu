<?php

require_once "Log.php";

$log = new Log("log.txt");

$log->writeLine("E", "Ha habido un error inesperado");
$log->writeLine("I", "Todo correcto");
$log->writeLine("W", "Warning");

$log->close();

?>
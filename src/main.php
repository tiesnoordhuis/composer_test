<?php

require '../vendor/autoload.php';

echo("hello world" . PHP_EOL);
echo("<br>");
echo(implode("; ", scandir("../../log/nginx/")));
echo ("<br>");
echo(substr(sprintf('%o', fileperms('../../log/nginx/')), -4));
echo ("<br>");
echo(file_get_contents("../../log/nginx/main.log") . PHP_EOL);
echo ("<br>");

// echo(phpinfo());

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('../../log/nginx/main.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');


?>
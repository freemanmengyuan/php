<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('monolog.log', Logger::WARNING));

// add records to the log
$log->warn('警告日志');
$log->err('错误日志');
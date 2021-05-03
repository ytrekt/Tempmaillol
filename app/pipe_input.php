#!/usr/local/bin/php -q
<?php
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
require 'app/config.php'; // setup db & constants

$input = new DisposableEmail\Input(file_get_contents("php://stdin"));
$mail = $input->getBean();
$id = R::store( $mail );

<?php
require 'vendor/autoload.php';

use Kreait\Firebase\Factory;

$firebase = (new Factory)
    ->withServiceAccount('path/to/firebase-service-account.json')
    ->create();

$auth = $firebase->getAuth();
?>

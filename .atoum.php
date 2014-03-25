<?php

require_once 'vendor/autoload.php';

use mageekguy\atoum\instrumentation\stream\cache;

cache::setCacheDirectory('/tmp');

$runner
    ->disableXDebugCodeCoverage()
    ->enableInstrumentation()
        ->disableMoleInstrumentation()
    ->addExtension(new Atoum\PraspelExtension\Manifest())
;

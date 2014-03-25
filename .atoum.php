<?php

require_once 'vendor/autoload.php';

\mageekguy\atoum\instrumentation\stream\cache::setCacheDirectory('/tmp');

$runner->addExtension(new Atoum\PraspelExtension\Manifest());
$runner->disableXDebugCodeCoverage();
$runner->enableInstrumentation()
       ->disableMoleInstrumentation();

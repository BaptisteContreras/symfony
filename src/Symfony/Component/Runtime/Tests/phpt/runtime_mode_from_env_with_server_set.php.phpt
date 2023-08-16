--TEST--
Test set ENV variable APP_RUNTIME_MODE from $_ENV with variable also set in $_SERVER
--INI--
display_errors=1
--FILE--
<?php

require $_SERVER['SCRIPT_FILENAME'] = __DIR__.'/runtime_mode_from_env_with_server_set.php';

?>
--EXPECTF--
From context server, from $_ENV env

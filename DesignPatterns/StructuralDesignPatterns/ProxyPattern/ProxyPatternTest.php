<?php
/**
 * Purpose:  A Proxy Object to a real Object so as to provide controlled access to a functionality.
 * @author Nishithkumar
 * @version 1.0
 * @since 06-02-2019
 ******************************************************************************/
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
include_once 'CommandExecutor.php';
include_once 'CommandExecutorProxy.php';
$a = "nishith";
$b = "kumar";
$obj = new CommandExecutorProxy($a, $b);
$obj->runCommand("ls -l");
// $obj->runCommand("welcome");

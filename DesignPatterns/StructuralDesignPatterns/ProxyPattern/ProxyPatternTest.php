<?php
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
include_once ('CommandExecutor.php');
include_once ('CommandExecutorProxy.php');
$a="nishith";
$b="kumar";
    $obj=new CommandExecutorProxy($a,$b);
    $obj->runCommand("ls -l");
    // $obj->runCommand("welcome");
?>    

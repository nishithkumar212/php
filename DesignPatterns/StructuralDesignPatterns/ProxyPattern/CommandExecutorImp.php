<?php
include_once ('CommandExecutor.php');
/**
 * creating a class which is used to implement the commandExecutor Interface
 */
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class CommandExecutorImp implements CommandExecutor
{
    public function runCommand($cmd)
    {
       $value= shell_exec($cmd); 
        echo $value;
    }
}

?>
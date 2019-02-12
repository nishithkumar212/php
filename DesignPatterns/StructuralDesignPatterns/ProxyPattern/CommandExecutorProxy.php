<?php
include_once 'CommandExecutor.php';
include_once 'CommandExecutorImp.php';
/**
 * The class which is used to implement the CommandExecutor
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class CommandExecutorProxy implements CommandExecutor
{
    //Declaring the Variables
    private $isAdmin;
    private $executor;
    /**
     * function used to initialize the admin value
     * @param indicates the values passed by the user
     */
    public function CommandExecutorProxy($user, $pwd)
    {
        //using the global variable inside the function
        global $isAdmin;
        if ("nishith" == $user && "kumar" == $pwd)
        //initializing the variable
        {
            $isAdmin = true;
        }

    }
    /**
     * function used to evaluate and used to call the method the run command method
     * @param indicates the command passed by the user
     */
    public function runCommand($cmd)
    {
        global $isAdmin;
        $executor = new CommandExecutorImp();
        try
        {
            if ($isAdmin) {
                //if the condition is true calling the method
                $executor->runCommand($cmd);
            } else {
                echo "command not found";
            }
        } catch (Exception $e) {
            $e->getmessage();
        }
    }
}

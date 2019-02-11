<?php 
include('Socket.php');
include('SocketAdapter.php');
    /**
    * function used to extend the class socket and implements the SocketAdapter.
    */
    set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class SocketAdapterimp extends Socket implements SocketAdapter 
{
    /**
     * function used to call the the volt method and retuning it
     */
    public function get120Volt()
    {
        return Socket::getVolt();;
    }
    /**
     * function used to call the volt method 
     */
    public function get12Volt()
    {
             $voltA=Socket::getVolt();
             /**
              * calling the function convertVolt with the arguments
              *@param indicates the returned value and the user-defined argument
              */
              return convertVolt($voltA,10);
    }
    /**
     * function used to call the volt method
     */
    public function get3Volt()
    {

           $voltB =Socket:: getVolt();
           //function used to call the convertVolt method
           //@param indicates the returned value and user-passed value.
           return convertVolt($voltB,40);
    }
    
}
/**
 * function used to convert the volt
 * @param indicates to pass the values of returned value and user-passed values.
 */
 function convertVolt($v,$variable)
    {
                return ($v/$variable);
    }
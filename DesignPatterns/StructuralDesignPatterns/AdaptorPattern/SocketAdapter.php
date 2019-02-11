<?php
/**
 * Creating an interface named SocketAdapter with the abstract methods 
 */
interface SocketAdapter
{
    public function get120Volt();
    public function get12Volt();
    public function get3Volt();
}
<?php
/**
 * Creation of a abstract class named Observer
 */
abstract class Observer
{
    abstract public function Update(Subject $subject_in);
}

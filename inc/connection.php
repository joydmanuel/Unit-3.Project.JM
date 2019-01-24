<?php
/**
 * Created by PhpStorm.
 * User: Joy
 * Date: 1/21/2019
 * Time: 12:39 AM
 */
//set up code to connect to db
// create variable name for the class you want to create
// $db - create a new object. specify class name PDO(
// this calls a method/fxn.) pass in argument PDO pass in info needed to connect db
// PDO software is the driver that connects sqlite to php
// try catch command
try // tries to create an object from the PDO class that's connect to db
{
    $db = new PDO("sqlite:". __DIR__."/journal.db");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) // an exception is thrown if there's an error
{   // this code inside catch block is executed
    echo "Unable to connect";  // code is displayed and code exits
    echo $e->getMessage();
    exit;
}
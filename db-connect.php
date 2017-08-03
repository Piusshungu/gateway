<?php
/**
 * Created by PhpStorm.
 * User: Wickerman
 * Date: 3/25/2017
 * Time: 6:47 PM
 */

//Defining Constants
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'photo_share');

//Connecting to Database
$con = mysqli_connect(HOST, USER, PASS, DB) or die(json_encode(array(
    'Error' => 'Failed to connect to database'
))); //Defining Constants
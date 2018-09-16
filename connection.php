<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13/09/2018
 * Time: 12:30
 */
$connection = new mysqli('localhost', 'root', '', 'hostel99');

if ($connection->connect_error) {
  die("Connection failed: " .$connection->connect_error);
}

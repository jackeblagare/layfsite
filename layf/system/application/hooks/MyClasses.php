<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Myclasses
{
/**
* includes the directory application\my_classes\ in your includes directory
*
*/
function index()
{
//includes the directory application\my_classes\Swift\
ini_set('include_path', ini_get('include_path').':'.BASEPATH.'application/my_classes/'); //change to : if Linux server
}
}
?>
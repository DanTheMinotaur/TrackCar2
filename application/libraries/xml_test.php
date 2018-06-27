<?php
/**
 * Created by PhpStorm.
 * User: neonl
 * Date: 27/06/2018
 * Time: 22:40
 */
require ('XML_download.php');


$test = new XML_download();
echo var_dump($test->get_station_data('Bayside'));


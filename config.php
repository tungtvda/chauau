<?php

/**
 * @author vdbkpro
 * @copyright 2013
 */
define("SITE_NAME", "http://localhost/chauau");
define("DIR", dirname(__FILE__));
define('SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','chauau');
define('CACHE',false);
define('DATETIME_FORMAT',"y-m-d H:i:s");
define('PRIVATE_KEY','hoidinhnvbk');
session_start();
require_once DIR.'/common/minifi.output.php';
ob_start("minify_output");

//require_once 'language/en.php';
//define("SITE_NAME", "http://mixtourist.com");
//define("DIR", dirname(__FILE__));
//define('SERVER','localhost');
//define('DB_USERNAME','dulichado_mixcom');
//define('DB_PASSWORD','tAZDG1dcl');
//define('DB_NAME','dulichado_mixcom');
//define('CACHE',false);
//define('DATETIME_FORMAT',"y-m-d H:i:s");
//define('PRIVATE_KEY','hoidinhnvbk');
//define('link_chitiet_danhmuc_tour','/tour/');
//session_start();
//require_once DIR.'/common/minifi.output.php';
//ob_start("minify_output");

function returnSearchDurations(){
    $data['data']=tour_getByTop('','','durations asc');
    $data_arr=array();
    foreach($data['data'] as $row)
    {
        $name=$row->durations;
        if(!in_array($name,$data_arr)){
            array_push($data_arr,$name);
        }
    }
    $string='';
    if(count($data_arr)>0){
        foreach($data_arr as $val){
            if($val!='')
            {
                $string .="<option value=\"".$val."\">".$val."</option>";
            }
        }
    }
    return $string;
}
function returnDanhMucTour(){
    $data_arr=danhmuc_tour_getByTop('','','position asc');
    $string='';
    if(count($data_arr)>0){
        foreach($data_arr as $row){
           $string .="<option value='$row->id'>$row->name</option>";

        }
    }
    return $string;
}
function returnDanhMucRoomType(){
    $data_arr=danhmuc_room_type_getByTop('','','name asc');
    $string='';
    if(count($data_arr)>0){
        foreach($data_arr as $row){
            $string .="<option value='$row->id'>$row->name</option>";

        }
    }
    return $string;
}
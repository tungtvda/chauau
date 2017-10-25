<?php

/**
 * @author vdbkpro
 * @copyright 2013
 */
//define("SITE_NAME", "http://localhost/chauau");
//define("DIR", dirname(__FILE__));
//define('SERVER','localhost');
//define('DB_USERNAME','root');
//define('DB_PASSWORD','');
//define('DB_NAME','chauau');
//define('CACHE',false);
//define('DATETIME_FORMAT',"y-m-d H:i:s");
//define('PRIVATE_KEY','hoidinhnvbk');
//session_start();
//require_once DIR.'/common/minifi.output.php';
//ob_start("minify_output");

define("SITE_NAME", "http://maiatravelhy.com/");
define("DIR", dirname(__FILE__));
define('SERVER','localhost');
define('DB_USERNAME','maiatravel_data');
define('DB_PASSWORD','0rOXIIfd');
define('DB_NAME','maiatravel_data');
define('CACHE',false);
define('DATETIME_FORMAT',"y-m-d H:i:s");
define('PRIVATE_KEY','hoidinhnvbk');
session_start();
require_once DIR.'/common/minifi.output.php';
ob_start("minify_output");

require_once DIR.'/model/contactService.php';
require_once DIR.'/model/dangky_emailService.php';
require_once DIR.'/model/booking_tourService.php';

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
function contact()
{
    if (isset($_POST['name_contact'])) {

        $ten=addslashes(strip_tags($_POST['name_contact']));
        $email=addslashes(strip_tags($_POST['email_contact']));
        $dienthoai=addslashes(strip_tags($_POST['phone_contact']));
        $diachi=addslashes(strip_tags($_POST['address_contact']));
        $noidung=addslashes(strip_tags($_POST['message_contact']));
        if($ten==""||$email==""||$dienthoai=="")
        {
            echo "<script>alert('Bạn vui lòng điền đẩy đủ thông tin liên hệ')</script>";
        }
        else
        {
            $new = new contact();
            $new->name_kh=$ten;
            $new->email=$email;
            $new->phone=$dienthoai;
            $new->address=$diachi;
            $new->content=$noidung;
            $new->status=0;
            $new->created=date(DATETIME_FORMAT);
            contact_insert($new);
            $link_web=SITE_NAME;
            $subject = "Dulichchauau.org thông báo liên hệ từ khách hàng";
            $message='';
            $message .='<div style="float: left; width: 100%">

                            <p>Tên khách hàng: <span style="color: #132fff; font-weight: bold">'.$ten.'</span>,</p>
                            <p>Email: <span style="color: #132fff; font-weight: bold">'.$email.'</span>,</p>
                            <p>Số điện thoại: <span style="color: #132fff; font-weight: bold">'.$dienthoai.'</span>,</p>
                            <p>Địa chỉ: <span style="color: #132fff; font-weight: bold">'.$diachi.'</span>,</p>
                            <p>Ngày gửi: <span style="color: #132fff; font-weight: bold">'.date(DATETIME_FORMAT).'</span>,</p>
                            <p>'.$noidung.'</p>


                        </div>';
            SendMail('tungtv.soict@gmail.com', $message, $subject);
            echo "<script>alert('Dulichchauau.org cảm ơn quý khách đã gửi liên hệ đến chúng tôi, Dulichchauau.org sẽ liên hệ với bạn sớm nhất, xin cảm ơn!')</script>";

            echo "<script>window.location.href='$link_web';</script>";

        }

    }
}
function returnCountData(){
    $count_contact=contact_count('status=0');
    $_SESSION['contact']=$count_contact;
    $count_dangky=dangky_email_count('status=0');
    $_SESSION['dangky_email']=$count_dangky;
    $count_booking=booking_tour_count('status=0');
    $_SESSION['booking']=$count_booking;
}
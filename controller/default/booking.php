<?php

if (!defined('DIR')) require_once '../../config.php';
require_once DIR . '/model/tourService.php';
require_once DIR . '/model/booking_tourService.php';
require_once DIR . '/common/class.phpmailer.php';
require_once(DIR . "/common/Mail.php");
//require_once DIR.'/model/danhmuc_2Service.php';
$contact = "Liên hệ";
$id = checkPostParamSecurity('id');
$name_url = checkPostParamSecurity('name_url');
$date = checkPostParamSecurity('date');
$price = checkPostParamSecurity('price');
$number_adults = checkPostParamSecurity('number_adults');
$number_children = checkPostParamSecurity('number_children');
$number_children_5 = checkPostParamSecurity('number_children_5');
$total_input = checkPostParamSecurity('total_input');
$full_name = checkPostParamSecurity('full_name');
$email = checkPostParamSecurity('email');
$phone = checkPostParamSecurity('phone');
$address = checkPostParamSecurity('address');
$request = checkPostParamSecurity('request');


$dk = "id='$id' and name_url='$name_url'";
$data_tour = tour_getByTop(1, $dk, 'id desc');
if (count($data_tour) > 0) {
    $price = $data_tour[0]->price;
    $price_2 = $data_tour[0]->price_2;
    $price_3 = $data_tour[0]->price_3;
    $price_4 =$data_tour[0]->price_4;
    $price_5 = $data_tour[0]->price_5;
    $price_6 = $data_tour[0]->price_6;
    $code = $data_tour[0]->code;
    $total_price = 0;
    if ($price == '') {
        $price = 0;
    }
    if ($price_2 == '') {
        $price_2 = 0;
    }
    if ($price_3 == '') {
        $price_3 = 0;
    }
    if ($price_4 == '') {
        $price_4 = 0;
    }
    if ($price_5 == '') {
        $price_5 = 0;
    }
    if ($price_6 == '') {
        $price_6 = 0;
    }
    $price_number = 0;

    if ($number_adults == '' || $number_adults == 0) {
        $number_adults = 1;
    }
    if ($number_children == '') {
        $number_children = 0;
    }
    if ($number_children_5 == '') {
        $number_children_5 = 0;
    }
    if ($number_adults < ($number_children + $number_children_5)) {
        $total = $contact;
    } else {
        $total_member = $number_adults + $number_children + $number_children_5;
        $total = $total_member* $price;
        if ($total == 0) {
            $total = $contact;
        } else {
            $total = $total . 'vnđ';
        }
    }
    $new = new booking_tour();

    $new->tour_id = $id;
    $new->name_tour =  $data_tour[0]->name;
    $new->name_customer = $full_name;
    $new->language = '';
    $new->phone = $phone;
    $new->email = $email;
    $new->address = $address;
    $new->departure_day = $date;
    $new->adults = $number_adults;
    $new->children_5_10 = $number_children;
    $new->children_5 = $number_children_5;
    $new->price = $total_price;
    $new->total_price = $total;
    $new->request = $request;
    $new->status = 0;
    $new->created = date(DATETIME_FORMAT);
    booking_tour_insert($new);
    $link_web = SITE_NAME;
    $mes = 'Đặt tour thành công';

    $message = "";
    $subject = "Dulichchauau.org – Thông báo đặt tour từ khách hàng";
    $message .= '<div style="float: left; width: 100%">

                            <p>Tên khách hàng: <span style="color: #132fff; font-weight: bold">' . $full_name . '</span>,</p>
                            <p>Email: <span style="color: #132fff; font-weight: bold">' . $email . '</span>,</p>
                            <p>Điện thoại: <span style="color: #132fff; font-weight: bold">' . $phone . '</span>,</p>
                            <p>Địa chỉ: <span style="color: #132fff; font-weight: bold">' . $address . '</span>,</p>
                            <p>Khởi hành: <span style="color: #132fff; font-weight: bold">' . $date . '</span>,</p>
                            <p>Ngày khởi hành: <span style="color: #132fff; font-weight: bold">' . date(DATETIME_FORMAT) . '</span>,</p>
                            <p>Tour: <span style="color: #132fff; font-weight: bold">' . $data_tour[0]->name . '</span>,</p>
                            <p>Mã tour: <span style="color: #132fff; font-weight: bold">' . $code . '</span>,</p>
                             <p>Giá: <span style="color: #132fff; font-weight: bold">' . $price_number . '</span>,</p>
                             <p>Người lớn: <span style="color: #132fff; font-weight: bold">' . $number_adults . '</span>,</p>
                             <p>Trẻ em: <span style="color: #132fff; font-weight: bold">' . $number_children . '</span>,</p>
                             <p>Trẻ em dưới 5 tuổi: <span style="color: #132fff; font-weight: bold">' . $number_children_5 . '</span>,</p>
                             <p>Tổng tiền: <span style="color: #132fff; font-weight: bold">' . $total . '</span>,</p>

                           <p>' . $request . '</p>

                           <p><div dir="ltr"><p style="font-size:12.8px;margin-bottom:0.0001pt;line-height:14.25pt;background-image:initial;background-position:initial;background-repeat:initial"><font face="arial, helvetica, sans-serif" color="#000000">Should you have any further queries, please do not hesitate to contact us</font></p><p style="font-size:12.8px;margin-bottom:0.0001pt;line-height:14.25pt;background-image:initial;background-position:initial;background-repeat:initial"><font face="arial, helvetica, sans-serif" color="#000000">Many thanks with our kindest regards,</font></p><p style="font-size:12.8px;margin-bottom:0.0001pt;line-height:14.25pt;background-image:initial;background-position:initial;background-repeat:initial"><font face="arial, helvetica, sans-serif" color="#000000">Tran Quynh Trang (Mrs)</font></p><p style="margin-bottom:0.0001pt;line-height:14.25pt;background-image:initial;background-position:initial;background-repeat:initial"><font face="comic sans ms, sans-serif" size="2" color="#0000ff">******************************<wbr>*****************************<br></font></p><font face="comic sans ms, sans-serif" color="#0000ff"><b><font size="4">Mix Tourist and Services Trading Joint Stock Company</font></b><br><font size="2"><b>Address:</b> Room 2001, No 137 Nguyen Ngoc Vu str, Cau Giay Dist, Ha Noi City, Viet Nam</font><br><font size="2"><b>Tel:&nbsp;</b>(+84)46281 4340 </font><br><font size="2"><b>Fax</b>: ( +84) 46281 4341 </font><br><font size="2"><b>Mobile:&nbsp;</b>(+ 84)9.41.61.99.56</font><br><font size="2"><b>Skype:</b> &nbsp;quynhtrangtran.97</font><br><font size="2"><b>Email:</b> <a href="mailto:sales@mixtourist.com" target="_blank">sales@mixtourist.com</a> &nbsp; &nbsp; &nbsp;</font><br><font size="2"><b>Web:</b> <a href="http://www.mixtourist.com" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://www.mixtourist.com&amp;source=gmail&amp;ust=1478057012638000&amp;usg=AFQjCNEVjxLk2RfwBFXRAB-TzqualjVJ0g">www.mixtourist.com</a></font></font></div>
                           <div dir="ltr"><font face="comic sans ms, sans-serif" color="#0000ff"><br></font></div>
                           <div dir="ltr"><font face="comic sans ms, sans-serif" color="#0000ff"><br></font></div>
                           <div dir="ltr"><font face="comic sans ms, sans-serif" color="#0000ff"><img src="https://ci3.googleusercontent.com/proxy/O6Q2bfPmibv-5R-hUGgc1QZIhYCQfpp9b8WG5JiC17tL8QVG2mvJn2shVZoIEYgd4zAMAYgPX8eXrFP_xCt9UzCXazk-vSJGDlh28nOX3WkEoWEU1mIS8YyplItBHz5WSIdSo3jQELmLgjZl7fIOMp8=s0-d-e1-ft#https://docs.google.com/a/mixtourist.com/uc?id=0B-CmU0THdkJrcE9qbWdBOUR1dTA&amp;export=download" class="CToWUd"><br></font></div>
                           </p>
                        </div>';
//    SendMail('sales@mixtourist.com', $message, $subject);
    SendMail($email, $message, 'Dulichchauau.org – Xác nhận đặt tour');
//    echo "<script>alert('$mes')</script>";
//
//    echo "<script>window.location.href='$link_web';</script>";
    echo 1;
} else {
    echo 0;
    exit;
}

function checkPostParamSecurity($param)
{
    if (isset($_POST[$param])) {
        return addslashes(strip_tags($_POST[$param]));
    } else {
        return false;
    }

}
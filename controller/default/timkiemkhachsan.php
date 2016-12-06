<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:40 PM
 */
if(!defined('SITE_NAME'))
{
    require_once '../../config.php';
}

require_once DIR.'/controller/default/public.php';
require_once DIR . '/common/paging.php';
require_once DIR . '/common/redict.php';
$data['menu']=menu_getByTop('','','');
$data['config']=config_getByTop(1,'','');
$dk='';
$demkt=1;
if(isset($_GET['key_timkiem'])&&$_GET['key_timkiem']!=""){
    $key_timkiem=mb_strtolower(addslashes(strip_tags($_GET['key_timkiem'])));
    $dk.='name LIKE "%'.$key_timkiem.'%"';
    $demkt++;
}

if(isset($_GET['quocgia_timkiem'])&&$_GET['quocgia_timkiem']!=""){
    $quocgia_timkiem=mb_strtolower(addslashes(strip_tags($_GET['quocgia_timkiem'])));
    if($demkt==1)
    {
        $dk .='  danhmuc_id ='.$quocgia_timkiem;
    }
    else{
        $dk .=' or danhmuc_id ='.$quocgia_timkiem;
    }
    $demkt++;
}
if(isset($_GET['sao_timkiem'])&&$_GET['sao_timkiem']!=""){
    $sao_timkiem=mb_strtolower(addslashes(strip_tags($_GET['sao_timkiem'])));
    if($demkt==1)
    {
        $dk .='  start ='.$sao_timkiem;
    }
    else{
        $dk .=' or start ='.$sao_timkiem;
    }
    $demkt++;
}
if(isset($_GET['room_type_timkiem'])&&$_GET['room_type_timkiem']!=""){
    $room_type_timkiem=mb_strtolower(addslashes(strip_tags($_GET['room_type_timkiem'])));
    $timkiem_check=1;
    $demkt++;
}
//
if($dk==""){
    redict(SITE_NAME);
}
$data_all=khachsan_getByTop('',$dk,'id desc');
if(isset($timkiem_check)){
    $arr_push=array();
    foreach($data_all as $row){
        $arr_check=explode(',',$row->danhmuc_multi);
        if(in_array($room_type_timkiem,$arr_check)){
            array_push($arr_push,$row);
        }
    }
    $data['danhsach']=$arr_push;
}
else{
    $data['danhsach']=$data_all;
}


$name=$data['menu'][7]->name;
$data['banner']=array(
    'banner_img'=>$data['menu'][7]->img,
    'name'=>$name,
    'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li class="active">'.$name.'</li>'
);
$data['link_anh']=$data['menu'][7]->img;
$img_banner=$data['menu'][7]->img;
$title=$data['menu'][7]->title;
$description=$data['menu'][7]->description;
$keyword=$data['menu'][7]->keyword;
$data['active_tour']='active';

$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';

show_header($title,$description,$keywords,$data);
show_menu($data,'chauau');
show_banner($data);
show_timkiem_khachsan($data);
show_right($data);
show_footer($data);

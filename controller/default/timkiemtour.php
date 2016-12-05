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
if(isset($_GET['thoigian_timkiem'])&&$_GET['thoigian_timkiem']!=""){
    $thoigian_timkiem=mb_strtolower(addslashes(strip_tags($_GET['thoigian_timkiem'])));
    if($demkt==1)
    {
        $dk .='  durations LIKE "%'.$thoigian_timkiem.'%"';
    }
    else{
        $dk .=' or durations LIKE "%'.$thoigian_timkiem.'%"';
    }
    $demkt++;
}
if(isset($_GET['quocgia_timkiem'])&&$_GET['quocgia_timkiem']!=""){
    $quocgia_timkiem=mb_strtolower(addslashes(strip_tags($_GET['quocgia_timkiem'])));
    $timkiem_check=1;
    if($demkt==1)
    {
        $dk .='  danhmuc_id ='.$quocgia_timkiem;
    }
    else{
        $dk .=' or danhmuc_id ='.$quocgia_timkiem;
    }
    $dk .=' or danhmuc_multi !=""';
    $demkt++;
}
if(isset($_GET['gia_timkiem'])&&$_GET['gia_timkiem']!=""){
    $gia_timkiem=mb_strtolower(addslashes(strip_tags($_GET['gia_timkiem'])));
    $ar_exlode=explode('-',$gia_timkiem);
    if(isset($ar_exlode[0])&&isset($ar_exlode[1])){
        $field0=mb_strtolower(addslashes(strip_tags($ar_exlode[0])));
        $field1=mb_strtolower(addslashes(strip_tags($ar_exlode[1])));
        $field="price";
        $find=" $field0 <= $field and $field <= $field1";
    }
    else{
        $field0=mb_strtolower(addslashes(strip_tags($ar_exlode[0])));
        $find="  $field = $field0";
    }
    if($demkt==1)
    {
        $dk .=$find;
    }
    else
    {
        $dk .=' or '.$find;
    }
    $demkt++;
}
$data_all=tour_getByTop('',$dk,'id desc');
if(isset($timkiem_check)){
    $arr_push=array();
    foreach($data_all as $row){
        $arr_check=explode(',',$row->danhmuc_multi);
        if($row->danhmuc_id==$quocgia_timkiem||in_array($quocgia_timkiem,$arr_check)){
            array_push($arr_push,$row);
        }
    }
    $data['danhsach']=$arr_push;
}
else{
    $data['danhsach']=$data_all;
}


$name=$data['menu'][6]->name;
$data['banner']=array(
    'banner_img'=>$data['menu'][6]->img,
    'name'=>$name,
    'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li class="active">'.$name.'</li>'
);
$data['link_anh']=$data['menu'][6]->img;
$img_banner=$data['menu'][6]->img;
$title=$data['menu'][6]->title;
$description=$data['menu'][6]->description;
$keyword=$data['menu'][6]->keyword;
$data['active_tour']='active';
$link_pag='/tim-kiem/';
$check_show_new=1;
$active='chauau';

$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';

show_header($title,$description,$keywords,$data);
show_menu($data,'chauau');
show_banner($data);
show_timkiem_tour($data);
show_right($data);
show_footer($data);

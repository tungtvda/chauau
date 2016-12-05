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

if(!isset($_GET['Id'])){
    redict(SITE_NAME);
}
$id=addslashes(strip_tags($_GET['Id']));
$data['detail']=dichvu_getByTop('1','name_url="'.$id.'"','');
if(count($data['detail'])==0){
    redict(SITE_NAME);
}
$danhmuc=danhmuc_dichvu_getById($data['detail'][0]->danhmuc_id);
if(count($danhmuc)==0){
    redict(SITE_NAME);
}
$name_dm=$danhmuc[0]->name;
$data['name_url']=$danhmuc[0]->name_url;
$data['banner']=array(
    'banner_img'=>$danhmuc[0]->img,
    'name'=>$data['detail'][0]->name,
    'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li><a href="'.SITE_NAME.'/dich-vu/" class="breadcrumb_home">Dịch vụ</a></li><li><a href="'.SITE_NAME.'/'.$danhmuc[0]->name_url.'/" class="breadcrumb_home">'.$name_dm.'</a></li><li class="active">'.$data['detail'][0]->name.'</li>'
);


$data['tour_lienquan']=dichvu_getByTop(6,'id!='.$data['detail'][0]->id.' and danhmuc_id='.$data['detail'][0]->danhmuc_id,'id desc');

$img_banner=$danhmuc[0]->img;
$title=$data['detail'][0]->title;
$description=$data['detail'][0]->description;
$keyword=$data['detail'][0]->keyword;
$data['link_anh']=$data['detail'][0]->img;

$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';
show_header($title,$description,$keywords,$data);
show_menu($data,'dichvu');
show_banner($data);
show_chitietdichvu($data);
show_right($data);
show_footer($data);

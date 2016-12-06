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

$data['detail']=hanhtrinh_getByTop('1','','');
if(count($data['detail'])==0){
    redict(SITE_NAME);
}
$data['danhsach']=hanhtrinh_color_getByTop('','hanhtrinh_id='.$data['detail'][0]->id,'positon asc');

$name_dm=$data['menu'][9]->name;
$data['banner']=array(
    'banner_img'=>$data['menu'][9]->img,
    'name'=>$data['menu'][9]->name,
    'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li class="active">'.$name_dm.'</li>'
);


$img_banner=$data['menu'][9]->img;
$title=$data['menu'][9]->title;
$description=$data['menu'][9]->description;
$keyword=$data['menu'][9]->keyword;
$data['link_anh']=$data['menu'][9]->img;

$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';
show_header($title,$description,$keywords,$data);
show_menu($data,'hanhtrinh');
show_banner($data);
show_hanhtrinh($data);
show_right($data);
show_footer($data);

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
require_once DIR . '/common/class.phpmailer.php';
require_once(DIR . "/common/Mail.php");
$data['menu']=menu_getByTop('','','');
$data['config']=config_getByTop(1,'','');
////
$name_dm=$data['menu'][4]->name;
$data['banner']=array(
    'banner_img'=>$data['menu'][4]->img,
    'name'=>$data['menu'][4]->name,
    'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li class="active">'.$name_dm.'</li>'
);
$data['link_anh']=$data['menu'][4]->img;
$title=$data['menu'][4]->title;
$description=$data['menu'][4]->description;
$keyword=$data['menu'][4]->keyword;
$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';
show_header($title,$description,$keywords,$data);
show_menu($data,'lienhe');
show_banner($data);
show_lienhe($data);
show_footer($data);
contact();
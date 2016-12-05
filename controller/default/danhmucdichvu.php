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
$dk='';
$function='show_danhmuc';
if(isset($_GET['tab'])){
    $current=1;
}
$danhmuc=danhmuc_dichvu_getByTop(1,'name_url="'.$id.'"','');
if(count($danhmuc)==0){
    redict(SITE_NAME);
}
$dk='danhmuc_id='.$danhmuc[0]->id;
$function='show_dichvu';
$data['current']=isset($_GET['page'])?$_GET['page']:'1';
$data['pagesize']=9;
$data['count']=dichvu_count($dk);
$data['danhsach']=dichvu_getByPaging($data['current'],$data['pagesize'],'id desc',$dk);
$data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/dich-vu/'.$danhmuc[0]->name_url.'/');
$name=$danhmuc[0]->name;
$data['banner']=array(
    'banner_img'=>$danhmuc[0]->img,
    'name'=>$name,
    'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li><a href="'.SITE_NAME.'/dich-vu/" class="breadcrumb_home">Dịch vụ</a></li><li class="active">'.$name.'</li>'
);
$data['link_anh']=$danhmuc[0]->img;
$img_banner=$danhmuc[0]->img;
$title=$danhmuc[0]->title;
$description=$danhmuc[0]->description;
$keyword=$danhmuc[0]->keyword;
$active='dichvu';


$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';

show_header($title,$description,$keywords,$data);
show_menu($data,$active);
show_banner($data);
$function($data);
show_right($data);
show_footer($data);

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
$data['detail']=khachsan_getByTop('1','name_url="'.$id.'"','');
if(count($data['detail'])==0){
    redict(SITE_NAME);
}
$danhmuc=danhmuc_tour_getById($data['detail'][0]->danhmuc_id);
if(count($danhmuc)==0){
    redict(SITE_NAME);
}
$name_dm=$danhmuc[0]->name;
$data['name_url']=$danhmuc[0]->name_url;
$data['banner']=array(
    'banner_img'=>$danhmuc[0]->img,
    'name'=>$data['detail'][0]->name,
    'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li><a href="'.SITE_NAME.'/du-lich-chau-au/" class="breadcrumb_home">Du lịch Châu Âu</a></li><li><a href="'.SITE_NAME.'/'.$danhmuc[0]->name_url.'/" class="breadcrumb_home">'.$name_dm.'</a></li><li class="active">'.$data['detail'][0]->name.'</li>'
);
$link_pag='/'.$danhmuc[0]->name_url.'/';
$dk_sub='danhmuc_id='.$danhmuc[0]->id;
$data['current']=isset($_GET['page'])?$_GET['page']:'1';
$data['pagesize']=9;
$data['count']=tour_count($dk_sub);
$data['danhsach']=tour_getByPaging($data['current'],$data['pagesize'],'id desc',$dk_sub);
$data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/'.$danhmuc[0]->name_url.'/');

$data['current_tintuc']=isset($_GET['page'])?$_GET['page']:'1';
$data['pagesize_tintuc']=5;
$data['count_tintuc']=news_count($dk_sub);
$data['danhsach_tintuc']=news_getByPaging($data['current_tintuc'],$data['pagesize_tintuc'],'id desc',$dk_sub);
$data['PAGING_TINTUC'] = showPagingAtLinkSub($data['count_tintuc'], $data['pagesize_tintuc'], $data['current_tintuc'], '' . SITE_NAME . $link_pag,'tin-tuc');

$data['danhsach_video']=video_getByTop('',$dk_sub,'id desc');
$data['danhsach_hinhanh']=	tour_img_getByTop('',$dk_sub,'id desc');

$data['tour_lienquan']=khachsan_getByTop(6,'id!='.$data['detail'][0]->id.' and danhmuc_id='.$data['detail'][0]->danhmuc_id,'id desc');

$img_banner=$danhmuc[0]->img;
$title=$data['detail'][0]->title;
$description=$data['detail'][0]->description;
$keyword=$data['detail'][0]->keyword;
$data['link_anh']=$data['detail'][0]->img;

$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';
show_header($title,$description,$keywords,$data);
show_menu($data,'chauau');
show_banner($data);
show_chitietkhachsan($data);
show_right($data);
show_footer($data);

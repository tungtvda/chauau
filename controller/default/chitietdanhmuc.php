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
$function='';
$dk='';
$dk_sub='';
$data['active_tour']='';
$data['active_tintuc']='';
$data['active_khachsan']='';
$data['active_video']='';
$data['active_thuvien_anh']='';
$link_pag='';
$check_show_new=0;
$current=isset($_GET['page'])?$_GET['page']:'1';
$active='';
switch($id){
    case "du-lich-chau-au":
        $function='show_danhmuc';
        if(isset($_GET['tab'])){
            $current=1;
        }
        $data['current']=$current;
        $data['pagesize']=9;
        $data['count']=tour_count($dk);
        $data['danhsach']=tour_getByPaging($data['current'],$data['pagesize'],'id desc',$dk);
        $data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/du-lich-chau-au/');
        $name=$data['menu'][1]->name;
        $data['banner']=array(
            'banner_img'=>$data['menu'][1]->img,
            'name'=>$name,
            'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li class="active">'.$name.'</li>'
        );
        $data['link_anh']=$data['menu'][1]->img;
        $img_banner=$data['menu'][1]->img;
        $title=$data['menu'][1]->title;
        $description=$data['menu'][1]->description;
        $keyword=$data['menu'][1]->keyword;
        $data['active_tour']='active';
        $link_pag='/du-lich-chau-au/';
        $check_show_new=1;
        $active='chauau';
        break;
    case "dich-vu":
        $function='show_dichvu';
        $data['current']=isset($_GET['page'])?$_GET['page']:'1';
        $data['pagesize']=9;
        $data['count']=dichvu_count($dk);
        $data['danhsach']=dichvu_getByPaging($data['current'],$data['pagesize'],'id desc',$dk);
        $data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/dich-vu/');
        $name=$data['menu'][3]->name;
        $data['banner']=array(
            'banner_img'=>$data['menu'][3]->img,
            'name'=>$name,
            'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li class="active">'.$name.'</li>'
        );
        $data['link_anh']=$data['menu'][3]->img;
        $img_banner=$data['menu'][3]->img;
        $title=$data['menu'][3]->title;
        $description=$data['menu'][3]->description;
        $keyword=$data['menu'][3]->keyword;
        $active='dichvu';
        break;
    default:
        $function='show_danhmuc';
        if(isset($_GET['tab'])){
            $current=1;
        }
        $danhmuc=danhmuc_tour_getByTop(1,'name_url="'.$id.'"','');
        if(count($danhmuc)==0){
            redict(SITE_NAME);
        }
        $dk='danhmuc_id='.$danhmuc[0]->id;
        $dk_sub='danhmuc_id='.$danhmuc[0]->id;
        $pagesize=9;
        $arr_push=array();
        $data_all=tour_getByTop('','','id desc');
        foreach($data_all as $row){
            $arr_check=explode(',',$row->danhmuc_multi);
            if($row->danhmuc_id==$danhmuc[0]->id||in_array($danhmuc[0]->id,$arr_check)){
                array_push($arr_push,$row);
            }
        }
        $start=($current-1)*$pagesize;
        $data['count']=count($arr_push);
        $arr_push_rest=array();
        $dem=1;
        for($i=$start; $i<=$data['count'];$i++){
            if(isset($arr_push[$i])&&$dem<=$pagesize){
                array_push($arr_push_rest,$arr_push[$i]);
            }
            $dem++;
        }
        $data['current']=$current;
        $data['pagesize']=$pagesize;
        $data['danhsach']=$arr_push_rest;
        $data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/'.$danhmuc[0]->name_url.'/');
        $name=$danhmuc[0]->name;
        $data['banner']=array(
            'banner_img'=>$danhmuc[0]->img,
            'name'=>$name,
            'url'=>'<li><a href="'.SITE_NAME.'" class="breadcrumb_home">Trang chủ</a></li><li><a href="'.SITE_NAME.'/du-lich-chau-au/" class="breadcrumb_home">Du lịch Châu Âu</a></li><li class="active">'.$name.'</li>'
        );
        $data['link_anh']=$danhmuc[0]->img;
        $data['content_short']=$danhmuc[0]->content_short;
        $img_banner=$danhmuc[0]->img;
        $title=$danhmuc[0]->title;
        $description=$danhmuc[0]->description;
        $keyword=$danhmuc[0]->keyword;
        $data['active_tour']='active';
        $link_pag='/'.$danhmuc[0]->name_url.'/';
        $check_show_new=1;
        $active='chauau';
        break;
}
if($check_show_new==1)
{
    $current_tintuc=1;
    $current_khachsan=1;
    if(isset($_GET['tab'])){
        $data['active_tour']='';
        if($_GET['tab']=='tin-tuc'){
            $data['active_tintuc']='active';
            $current_tintuc=isset($_GET['page'])?$_GET['page']:'1';
        }
        if($_GET['tab']=='khach-san'){
            $data['active_khachsan']='active';
            $current_khachsan=isset($_GET['page'])?$_GET['page']:'1';
        }
    }

    $data['current_tintuc']=$current_tintuc;
    $data['pagesize_tintuc']=5;
    $data['count_tintuc']=news_count($dk_sub);
    $data['danhsach_tintuc']=news_getByPaging($data['current_tintuc'],$data['pagesize_tintuc'],'id desc',$dk_sub);
    $data['PAGING_TINTUC'] = showPagingAtLinkSub($data['count_tintuc'], $data['pagesize_tintuc'], $data['current_tintuc'], '' . SITE_NAME . $link_pag,'tin-tuc');

    $data['current_khachsan']=$current_khachsan;
    $data['pagesize_khachsan']=5;
    $data['count_khachsan']=khachsan_count($dk_sub);
    $data['danhsach_khachsan']=khachsan_getByPaging($data['current_khachsan'],$data['pagesize_khachsan'],'id desc',$dk_sub);
    $data['PAGING_KHACHSAN'] = showPagingAtLinkSub($data['count_khachsan'], $data['pagesize_khachsan'], $data['current_khachsan'], '' . SITE_NAME . $link_pag,'khach-san');

    $data['danhsach_video']=video_getByTop('',$dk_sub,'id desc');
    $data['danhsach_hinhanh']=	tour_img_getByTop('',$dk_sub,'id desc');
    $active='chauau';
}

$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';

show_header($title,$description,$keywords,$data);
show_menu($data,$active);
show_banner($data);
$function($data);
show_right($data);
show_footer($data);

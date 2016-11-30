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
$data['menu']=menu_getByTop('','','');
$data['config']=config_getByTop(1,'','');
////
$data['tour_PROMOTIONS']=tour_getByTop(6,'promotion=1 ','id desc');
//
//$data['tour_packages_list']=tour_getByTop(5,'packages=1 ','id desc');
//
$data['tour_danhmuc']=danhmuc_tour_getByTop('','','position desc');
$data['tintuc_index']=news_getByTop(8,'','id desc');
$data['hinhanh_index']=tour_img_getByTop(5,'highlight=1','id desc');
//
//$data['video']=video_getByTop(1,'highlights=1 ','id desc');
//$data['count_destinations']=tour_count('danhmuc1_destinations=6');
//$data['count_pack']=tour_count('DanhMuc1Id=3');
//$data['count_cru']=tour_count('DanhMuc1Id=4');
//$data['tour_quocte_ghepdoi']=tourtrongnuoc_getByTop('','TourGhepDoi=1 and LoaiTour=2','Id desc');
//$data['khachsan_index']=khachsan_getByTop('','NoiBat=1','Id desc');
//$data['thuexe_index']=thuexe_getByTop('','NoiBat=1','Id desc');
//$data['ykien_index']=ykien_getByTop('6','','View desc');

//$data['khachsan_noibat_1']=khachsan_getByTop('1','NoiBat=1','ViTri asc');
$title=$data['menu'][0]->title;
$description=$data['menu'][0]->description;
$keyword=$data['menu'][0]->keyword;
$title=($title)?$title:'Dulichchauau.org';
$description=($description)?$description:'Dulichchauau.org';
$keywords=($keyword)?$keyword:'Dulichchauau.org';

show_header($title,$description,$keywords,$data);
show_menu($data,'trangchu');
show_slide($data);
show_index($data);
show_footer($data);

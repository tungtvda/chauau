<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_index($data = array())
{
    $asign = array();
    $asign['tour_PROMOTIONS'] ='';
    if(count($data['tour_PROMOTIONS'])>0)
    {
        $asign['tour_PROMOTIONS'] = print_item('tour_PROMOTIONS', $data['tour_PROMOTIONS']);
    }
    $asign['tour_danhmuc'] ='';
    if(count($data['tour_danhmuc'])>0)
    {
        $asign['tour_danhmuc'] = print_item('tour_danhmuc_index', $data['tour_danhmuc']);
    }
    $asign['tintuc_index'] ='';
    if(count($data['tintuc_index'])>0)
    {
        $asign['tintuc_index'] = print_item('tintuc_index', $data['tintuc_index']);
    }
    $asign['hinhanh_index'] ='';
    if(count($data['hinhanh_index'])>0)
    {
        $asign['hinhanh_index'] = print_item('hinhanh_index', $data['hinhanh_index']);
    }
    print_template($asign, 'index');
}




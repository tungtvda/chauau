<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_chitietdichvu($data = array())
{
    $asign = array();
    $asign['name']= $data['detail'][0]->name;
    $asign['img']= $data['detail'][0]->img;
    $asign['content']= $data['detail'][0]->content;


    $asign['tour_lienquan'] ='';
    if(count($data['tour_lienquan'])>0) {
        $asign['tour_lienquan'] = print_item('lienquan_tintuc', $data['tour_lienquan']);
    }

    print_template($asign, 'chitietdichvu');
}




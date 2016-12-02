<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_chitiettintuc($data = array())
{
    $asign = array();
    $asign['name']= $data['detail'][0]->name;
    $asign['img']= $data['detail'][0]->img;
    $asign['view']= $data['detail'][0]->view;
    $asign['created']= $data['detail'][0]->created;
    $asign['img']= $data['detail'][0]->img;
    $asign['content']= $data['detail'][0]->content;



    $asign['danhsach'] ='';
    if(count($data['danhsach'])>0)
    {
        $asign['danhsach'] = print_item('danhmuc_tour', $data['danhsach']);
    }
    else{
        $asign['danhsach'] ='<div class="item_tour col-xs-12 col-sm-6 col-md-4">Hệ thống đang cập nhật dữ liệu</div>';
    }
    $asign['PAGING']=$data['PAGING'];

    $asign['danhsach_khachsan'] ='';
    if(count($data['danhsach_khachsan'])>0)
    {
        $asign['danhsach_khachsan'] = print_item('danhmuc_khachsan', $data['danhsach_khachsan']);
    }
    else{
        $asign['danhsach_khachsan'] ='<div class="item_tour col-xs-12 col-sm-6 col-md-4">Hệ thống đang cập nhật dữ liệu</div>';
    }
    $asign['PAGING_KHACHSAN']=$data['PAGING_KHACHSAN'];


    $asign['danhsach_video'] ='';
    if(count($data['danhsach_video'])>0)
    {
        $asign['danhsach_video'] = print_item('danhmuc_video', $data['danhsach_video']);
    }
    else{
        $asign['danhsach_video'] ='<div class="item_tour col-xs-12 col-sm-6 col-md-4">Hệ thống đang cập nhật dữ liệu</div>';
    }

    $asign['danhsach_hinhanh'] ='';
    if(count($data['danhsach_hinhanh'])>0)
    {
        $asign['danhsach_hinhanh'] = print_item('danhmuc_hinhanh', $data['danhsach_hinhanh']);
    }
    else{
        $asign['danhsach_hinhanh'] ='<div class="item_tour col-xs-12 col-sm-6 col-md-4">Hệ thống đang cập nhật dữ liệu</div>';
    }

    $asign['tour_lienquan'] ='';
    if(count($data['tour_lienquan'])>0) {
        $asign['tour_lienquan'] = print_item('lienquan_tintuc', $data['tour_lienquan']);
    }

    print_template($asign, 'chitiettintuc');
}




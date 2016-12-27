<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_danhmuc($data = array())
{
    $asign = array();
    $asign['danhsach'] ='';
    if(count($data['danhsach'])>0)
    {
        $asign['danhsach'] = print_item('danhmuc_tour', $data['danhsach']);
    }
    else{
        $asign['danhsach'] ='<div class="item_tour col-xs-12 col-sm-6 col-md-4">Hệ thống đang cập nhật dữ liệu</div>';
    }
    $asign['PAGING']=$data['PAGING'];

    $asign['danhsach_tintuc'] ='';
    if(count($data['danhsach_tintuc'])>0)
    {
        $asign['danhsach_tintuc'] = print_item('danhmuc_tintuc', $data['danhsach_tintuc']);
    }
    else{
        $asign['danhsach_tintuc'] ='<div class="item_tour col-xs-12 col-sm-6 col-md-4">Hệ thống đang cập nhật dữ liệu</div>';
    }
    $asign['PAGING_TINTUC']=$data['PAGING_TINTUC'];

    $asign['danhsach_khachsan'] ='';
    if(count($data['danhsach_khachsan'])>0)
    {
        $asign['danhsach_khachsan'] = print_item('danhmuc_khachsan', $data['danhsach_khachsan']);
    }
    else{
        $asign['danhsach_khachsan'] ='<div class="item_tour col-xs-12 col-sm-6 col-md-4">Hệ thống đang cập nhật dữ liệu</div>';
    }
    $asign['PAGING_KHACHSAN']=$data['PAGING_KHACHSAN'];

    $asign['active_tour']=$data['active_tour'];
    $asign['active_tintuc']=$data['active_tintuc'];
    $asign['active_khachsan']=$data['active_khachsan'];
    $asign['active_video']=$data['active_video'];
    $asign['active_thuvien_anh']=$data['active_thuvien_anh'];
    $asign['hidden_new']='display: none';
    $asign['show_new']='';
    if($data['active_tintuc']!=''){
        $asign['hidden_new']='';
        $asign['show_new']='display: none';
    }


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

    print_template($asign, 'show_danhmuc');
}




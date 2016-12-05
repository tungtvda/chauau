<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_timkiem_tour($data = array())
{
    $asign = array();
    $asign['danhsach'] ='';
    if(count($data['danhsach'])>0)
    {
        $asign['danhsach'] = print_item('danhmuc_tour', $data['danhsach']);
    }
    else{
        $asign['danhsach'] ='<div class="item_tour col-xs-12 col-sm-12 col-md-12">Không có kết quả tìm kiếm, vui lòng thử lại với từ khóa khác</div>';
    }

    print_template($asign, 'show_timkiem');
}




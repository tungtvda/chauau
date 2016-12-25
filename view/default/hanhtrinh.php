<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_hanhtrinh($data = array())
{
    $asign = array();
    $asign['name']= $data['detail'][0]->name;
    $asign['content']= $data['detail'][0]->content;

    $asign['hanhtrinh_tab'] ='';
    $asign['hanhtrinh_detail'] ='';
    if(count($data['danhsach'])>0)
    {
        $asign['hanhtrinh_tab'] = print_item('hanhtrinh_tab', $data['danhsach']);
        $asign['hanhtrinh_detail'] = print_item('hanhtrinh_detail', $data['danhsach']);
    }

    print_template($asign, 'hanhtrinh');
}




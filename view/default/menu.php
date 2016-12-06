<?php
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/locdautiengviet.php';

function view_menu($data = array())
{
    $asign = array();
    $asign['email']=$data['config'][0]->Email;
    $asign['Logo']=$data['config'][0]->Logo;
    $asign['Name']=$data['config'][0]->Name;
    $asign['trangchu']=$data['menu'][0]->name;
    $asign['chauau']=$data['menu'][1]->name;
    $asign['vemaybay']=$data['menu'][2]->name;
    $asign['dichvu']=$data['menu'][3]->name;
    $asign['lienhe']=$data['menu'][4]->name;
    $asign['thangcanh']=$data['menu'][5]->name;
    $asign['hanhtrinh']=$data['menu'][9]->name;

    // active menu
    $asign['trangchu_mn'] = ($data['active'] == 'trangchu') ? 'active' : '';
    $asign['chauau_mn'] = ($data['active'] == 'chauau') ? 'active' : '';
    $asign['dichvu_mn'] = ($data['active'] == 'dichvu') ? 'active' : '';
    $asign['lienhe_mn'] = ($data['active'] == 'lienhe') ? 'active' : '';
    $asign['thangcanh_mn'] = ($data['active'] == 'thangcanh') ? 'active' : '';
    $asign['hanhtrinh_mn'] = ($data['active'] == 'hanhtrinh') ? 'active' : '';

    $asign['danhmuc_tour_menu'] ="";
    if(count($data['danhmuc_tour_menu'])>0)
    {
        $asign['danhmuc_tour_menu'] = print_item('danhmuctour_menu', $data['danhmuc_tour_menu']);
    }
    $asign['danhmuc_dichvu_menu'] ="";
    if(count($data['danhmuc_dichvu_menu'])>0)
    {
        $asign['danhmuc_dichvu_menu'] = print_item('danhmuctour_menu', $data['danhmuc_dichvu_menu']);
    }
    print_template($asign, 'menu');
}

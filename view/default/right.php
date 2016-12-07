<?php
/**
 * Created by PhpStorm.
 * User: ductho
 * Date: 8/15/14
 * Time: 3:43 PM
 */
require_once DIR.'/view/default/public.php';
function view_right($data=array())
{
    $asign=array();
    if(count($data['tintuc_right'])>0)
    {
        $asign['tintuc_right'] = print_item('tintuc_right', $data['tintuc_right']);
    }
    $asign['video_right'] ='';
    if(count($data['video_right'])>0)
    {
        $asign['video_right'] = print_item('danhmuc_video', $data['video_right']);
    }
    $asign['hotro_right'] ='';
    if(count($data['hotro_right'])>0)
    {
        $asign['hotro_right'] = print_item('hotro_right', $data['hotro_right']);
    }
    $asign['list_Durations']=returnSearchDurations();
    $asign['list_Quocgia']=returnDanhMucTour();
    $asign['list_romtype']=returnDanhMucRoomType();
    print_template($asign,'right');
}

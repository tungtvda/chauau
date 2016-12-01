<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_chitiettour($data = array())
{
    $asign = array();
    $asign['name']= $data['detail'][0]->name;
    $asign['code']= $data['detail'][0]->code;
    $asign['img']= $data['detail'][0]->img;
    $asign['durations']= $data['detail'][0]->durations;
    $asign['destination']=$data['detail'][0]->destination;
    $asign['start']=sao($data['detail'][0]->hotel);
    $asign['name_url']=$data['detail'][0]->name_url;
    $asign['id']= $data['detail'][0]->id;

    $content=$data['detail'][0]->summary;
    if (strlen($content) > 200) {
        $ten1=strip_tags($content);

        $ten = substr($ten1, 0, 200);
        $asign['content_short'] = substr($ten, 0, strrpos($ten, ' ')) . "...";
    } else {
        $asign['content_short']=strip_tags($content);
    }
    $asign['summary']=$data['detail'][0]->summary;
    $asign['highlights']=$data['detail'][0]->highlights;

    $asign['price']= $data['detail'][0]->price;
    $asign['price_2']= $data['detail'][0]->price_2;
    $asign['price_3']= $data['detail'][0]->price_3;
    $asign['price_4']= $data['detail'][0]->price_4;
    $asign['price_5']= $data['detail'][0]->price_5;
    $asign['price_6']= $data['detail'][0]->price_6;
    $asign['link']=link_tourdetail($data['detail'][0],$data['name_url']);

    $asign['price_format']= number_format($data['detail'][0]->price,0,",",".");
    $asign['price_2_format']= number_format($data['detail'][0]->price_2,0,",",".");
    $asign['price_3_format']= number_format($data['detail'][0]->price_3,0,",",".");
    $asign['price_4_format']= number_format($data['detail'][0]->price_4,0,",",".");
    $asign['price_5_format']= number_format($data['detail'][0]->price_5,0,",",".");
    $asign['price_6_format']= number_format($data['detail'][0]->price_6,0,",",".");

    $asign['quocgia']='';
    $arr=explode(',',$data['detail'][0]->danhmuc_multi);
    if(count($arr)>0){
        $asign['quocgia'].='<div class="package-details-choose">
                            <h3 class="title">Quốc gia</h3>
                            <ul class="clearfix">';
        foreach($arr as $val){
            $data_danhmuc=danhmuc_tour_getById($val);
            if(count($data_danhmuc)>0){
                $asign['quocgia'].='<li><span><a href="'.SITE_NAME.'/'.$data_danhmuc[0]->name_url.'/"><i class="fa fa-check"></i>'.$data_danhmuc[0]->name.' </span></a></li>';
            }

        }
        $asign['quocgia'].=' </ul></div>';
    }
    $asign['date_now'] = date('Y-m-d', strtotime(date(DATETIME_FORMAT)));
    print_template($asign, 'chitiettour');
}




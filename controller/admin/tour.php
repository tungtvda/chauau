<?php
require_once '../../config.php';
require_once DIR.'/model/tourService.php';
require_once DIR.'/model/danhmuc_tourService.php';
require_once DIR.'/view/admin/tour.php';
require_once DIR.'/common/messenger.php';
require_once DIR.'/common/locdautiengviet.php';
$data=array();
$insert=true;
returnCountData();
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new tour();
            $new_obj->id=$_GET["id"];
            tour_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/tour.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=tour_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/tour.php');
        }
        else
        {
            $data['tab1_class']='default-tab current';
        }
    }
    else
    {
        $data['tab1_class']='default-tab current';
    }
    $data['listfkey']['danhmuc_id']=danhmuc_tour_getByAll();
    if(isset($_GET["action_all"]))
    {
        if($_GET["action_all"]=="ThemMoi")
        {
            $data['tab2_class']='default-tab current';
            $data['tab1_class']=' ';
        }
        else
        {
            $List_tour=tour_getByAll();
            foreach($List_tour as $tour)
            {
                if(isset($_GET["check_".$tour->id])) tour_delete($tour);
            }
            header('Location: '.SITE_NAME.'/controller/admin/tour.php');
        }
    }
    if(isset($_POST["danhmuc_id"])&&isset($_POST["danhmuc_multi"])&&isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["code"])&&isset($_POST["img"])&&isset($_POST["price"])&&isset($_POST["price_2"])&&isset($_POST["price_3"])&&isset($_POST["price_4"])&&isset($_POST["price_5"])&&isset($_POST["price_6"])&&isset($_POST["durations"])&&isset($_POST["departure"])&&isset($_POST["destination"])&&isset($_POST["departure_time"])&&isset($_POST["vehicle"])&&isset($_POST["hotel"])&&isset($_POST["summary"])&&isset($_POST["highlights"])&&isset($_POST["schedule"])&&isset($_POST["price_list"])&&isset($_POST["content"])&&isset($_POST["list_img"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"])&&isset($_POST["inclusion"])&&isset($_POST["exclusion"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['danhmuc_id']))
       $array['danhmuc_id']='0';
       if(!isset($array['danhmuc_multi']))
       $array['danhmuc_multi']='0';
        $mutil_dm='';
        if($_POST["danhmuc_multi"]!=''){
            $mutil_dm=implode(',',$_POST["danhmuc_multi"]);
        }
        $array['danhmuc_multi']=$mutil_dm;
       if(!isset($array['promotion']))
       $array['promotion']='0';
       if(!isset($array['packages']))
       $array['packages']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['name_url']))
       $array['name_url']='0';
        $array['name_url']=LocDau($array['name']);
       if(!isset($array['code']))
       $array['code']='0';
       if(!isset($array['img']))
       $array['img']='0';
       if(!isset($array['price']))
       $array['price']='0';
       if(!isset($array['price_2']))
       $array['price_2']='0';
       if(!isset($array['price_3']))
       $array['price_3']='0';
       if(!isset($array['price_4']))
       $array['price_4']='0';
       if(!isset($array['price_5']))
       $array['price_5']='0';
       if(!isset($array['price_6']))
       $array['price_6']='0';
       if(!isset($array['durations']))
       $array['durations']='0';
       if(!isset($array['departure']))
       $array['departure']='0';
       if(!isset($array['destination']))
       $array['destination']='0';
       if(!isset($array['departure_time']))
       $array['departure_time']='0';
       if(!isset($array['vehicle']))
       $array['vehicle']='0';
       if(!isset($array['hotel']))
       $array['hotel']='0';
       if(!isset($array['summary']))
       $array['summary']='0';
       if(!isset($array['highlights']))
       $array['highlights']='0';
       if(!isset($array['schedule']))
       $array['schedule']='0';
       if(!isset($array['price_list']))
       $array['price_list']='0';
       if(!isset($array['content']))
       $array['content']='0';
       if(!isset($array['list_img']))
       $array['list_img']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
       if(!isset($array['inclusion']))
       $array['inclusion']='0';
       if(!isset($array['exclusion']))
       $array['exclusion']='0';
      $new_obj=new tour($array);
        if($insert)
        {
            tour_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/tour.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            tour_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/tour.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=tour_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=tour_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_tour($data);
}
else
{
     header('location: '.SITE_NAME);
}

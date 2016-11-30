<?php
require_once '../../config.php';
require_once DIR.'/model/danhmuc_tourService.php';
require_once DIR.'/view/admin/danhmuc_tour.php';
require_once DIR.'/common/messenger.php';
require_once DIR.'/common/locdautiengviet.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new danhmuc_tour();
            $new_obj->id=$_GET["id"];
            danhmuc_tour_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_tour.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=danhmuc_tour_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/danhmuc_tour.php');
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
    if(isset($_GET["action_all"]))
    {
        if($_GET["action_all"]=="ThemMoi")
        {
            $data['tab2_class']='default-tab current';
            $data['tab1_class']=' ';
        }
        else
        {
            $List_danhmuc_tour=danhmuc_tour_getByAll();
            foreach($List_danhmuc_tour as $danhmuc_tour)
            {
                if(isset($_GET["check_".$danhmuc_tour->id])) danhmuc_tour_delete($danhmuc_tour);
            }
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_tour.php');
        }
    }
    if(isset($_POST["name_symbol"])&&isset($_POST["icon"])&&isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["img"])&&isset($_POST["position"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['name']))
       $array['name']='0';
        if(!isset($array['name_symbol']))
            $array['name_symbol']='0';
       if(!isset($array['name_url']))
       $array['name_url']='0';
        $array['name_url']=LocDau($array['name']);
       if(!isset($array['img']))
       $array['img']='0';
        if(!isset($array['icon']))
       $array['icon']='0';
       if(!isset($array['position']))
       $array['position']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
      $new_obj=new danhmuc_tour($array);
        if($insert)
        {
            danhmuc_tour_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_tour.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            danhmuc_tour_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_tour.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=danhmuc_tour_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=danhmuc_tour_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_danhmuc_tour($data);
}
else
{
     header('location: '.SITE_NAME);
}

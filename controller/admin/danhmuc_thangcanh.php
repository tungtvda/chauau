<?php
require_once '../../config.php';
require_once DIR.'/model/danhmuc_thangcanhService.php';
require_once DIR.'/view/admin/danhmuc_thangcanh.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new danhmuc_thangcanh();
            $new_obj->id=$_GET["id"];
            danhmuc_thangcanh_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_thangcanh.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=danhmuc_thangcanh_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/danhmuc_thangcanh.php');
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
            $List_danhmuc_thangcanh=danhmuc_thangcanh_getByAll();
            foreach($List_danhmuc_thangcanh as $danhmuc_thangcanh)
            {
                if(isset($_GET["check_".$danhmuc_thangcanh->id])) danhmuc_thangcanh_delete($danhmuc_thangcanh);
            }
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_thangcanh.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["img"])&&isset($_POST["position"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['name_url']))
       $array['name_url']='0';
       if(!isset($array['img']))
       $array['img']='0';
       if(!isset($array['position']))
       $array['position']='0';
      $new_obj=new danhmuc_thangcanh($array);
        if($insert)
        {
            danhmuc_thangcanh_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_thangcanh.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            danhmuc_thangcanh_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/danhmuc_thangcanh.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=danhmuc_thangcanh_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=danhmuc_thangcanh_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_danhmuc_thangcanh($data);
}
else
{
     header('location: '.SITE_NAME);
}

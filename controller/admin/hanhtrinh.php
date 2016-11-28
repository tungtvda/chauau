<?php
require_once '../../config.php';
require_once DIR.'/model/hanhtrinhService.php';
require_once DIR.'/view/admin/hanhtrinh.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new hanhtrinh();
            $new_obj->id=$_GET["id"];
            hanhtrinh_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=hanhtrinh_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh.php');
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
            $List_hanhtrinh=hanhtrinh_getByAll();
            foreach($List_hanhtrinh as $hanhtrinh)
            {
                if(isset($_GET["check_".$hanhtrinh->id])) hanhtrinh_delete($hanhtrinh);
            }
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["content"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['content']))
       $array['content']='0';
      $new_obj=new hanhtrinh($array);
        if($insert)
        {
            hanhtrinh_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            hanhtrinh_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=hanhtrinh_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=hanhtrinh_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_hanhtrinh($data);
}
else
{
     header('location: '.SITE_NAME);
}

<?php
require_once '../../config.php';
require_once DIR.'/model/hanhtrinh_colorService.php';
require_once DIR.'/model/hanhtrinhService.php';
require_once DIR.'/view/admin/hanhtrinh_color.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new hanhtrinh_color();
            $new_obj->id=$_GET["id"];
            hanhtrinh_color_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh_color.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=hanhtrinh_color_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh_color.php');
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
    $data['listfkey']['hanhtrinh_id']=hanhtrinh_getByAll();
    if(isset($_GET["action_all"]))
    {
        if($_GET["action_all"]=="ThemMoi")
        {
            $data['tab2_class']='default-tab current';
            $data['tab1_class']=' ';
        }
        else
        {
            $List_hanhtrinh_color=hanhtrinh_color_getByAll();
            foreach($List_hanhtrinh_color as $hanhtrinh_color)
            {
                if(isset($_GET["check_".$hanhtrinh_color->id])) hanhtrinh_color_delete($hanhtrinh_color);
            }
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh_color.php');
        }
    }
    if(isset($_POST["hanhtrinh_id"])&&isset($_POST["name"])&&isset($_POST["color"])&&isset($_POST["content"])&&isset($_POST["positon"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['hanhtrinh_id']))
       $array['hanhtrinh_id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['color']))
       $array['color']='0';
       if(!isset($array['content']))
       $array['content']='0';
       if(!isset($array['positon']))
       $array['positon']='0';
      $new_obj=new hanhtrinh_color($array);
        if($insert)
        {
            hanhtrinh_color_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh_color.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            hanhtrinh_color_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/hanhtrinh_color.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=hanhtrinh_color_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=hanhtrinh_color_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_hanhtrinh_color($data);
}
else
{
     header('location: '.SITE_NAME);
}

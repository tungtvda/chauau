<?php
require_once '../../config.php';
require_once DIR.'/model/thangcanhService.php';
require_once DIR.'/model/danhmuc_thangcanhService.php';
require_once DIR.'/view/admin/thangcanh.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new thangcanh();
            $new_obj->id=$_GET["id"];
            thangcanh_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/thangcanh.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=thangcanh_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/thangcanh.php');
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
    $data['listfkey']['danhmuc_id']=danhmuc_thangcanh_getByAll();
    if(isset($_GET["action_all"]))
    {
        if($_GET["action_all"]=="ThemMoi")
        {
            $data['tab2_class']='default-tab current';
            $data['tab1_class']=' ';
        }
        else
        {
            $List_thangcanh=thangcanh_getByAll();
            foreach($List_thangcanh as $thangcanh)
            {
                if(isset($_GET["check_".$thangcanh->id])) thangcanh_delete($thangcanh);
            }
            header('Location: '.SITE_NAME.'/controller/admin/thangcanh.php');
        }
    }
    if(isset($_POST["danhmuc_id"])&&isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["img"])&&isset($_POST["content"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['danhmuc_id']))
       $array['danhmuc_id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['name_url']))
       $array['name_url']='0';
       if(!isset($array['img']))
       $array['img']='0';
       if(!isset($array['content']))
       $array['content']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
      $new_obj=new thangcanh($array);
        if($insert)
        {
            thangcanh_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/thangcanh.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            thangcanh_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/thangcanh.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=thangcanh_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=thangcanh_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_thangcanh($data);
}
else
{
     header('location: '.SITE_NAME);
}

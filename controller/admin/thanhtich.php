<?php
require_once '../../config.php';
require_once DIR.'/model/thanhtichService.php';
require_once DIR.'/view/admin/thanhtich.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new thanhtich();
            $new_obj->id=$_GET["id"];
            thanhtich_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/thanhtich.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=thanhtich_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/thanhtich.php');
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
            $List_thanhtich=thanhtich_getByAll();
            foreach($List_thanhtich as $thanhtich)
            {
                if(isset($_GET["check_".$thanhtich->id])) thanhtich_delete($thanhtich);
            }
            header('Location: '.SITE_NAME.'/controller/admin/thanhtich.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["img"])&&isset($_POST["content"])&&isset($_POST["postion"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['img']))
       $array['img']='0';
       if(!isset($array['content']))
       $array['content']='0';
       if(!isset($array['postion']))
       $array['postion']='0';
      $new_obj=new thanhtich($array);
        if($insert)
        {
            thanhtich_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/thanhtich.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            thanhtich_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/thanhtich.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=thanhtich_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=thanhtich_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_thanhtich($data);
}
else
{
     header('location: '.SITE_NAME);
}

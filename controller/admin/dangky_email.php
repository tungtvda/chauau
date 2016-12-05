<?php
require_once '../../config.php';
require_once DIR.'/model/dangky_emailService.php';
require_once DIR.'/view/admin/dangky_email.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new dangky_email();
            $new_obj->id=$_GET["id"];
            dangky_email_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/dangky_email.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=dangky_email_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/dangky_email.php');
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
            $List_dangky_email=dangky_email_getByAll();
            foreach($List_dangky_email as $dangky_email)
            {
                if(isset($_GET["check_".$dangky_email->id])) dangky_email_delete($dangky_email);
            }
            header('Location: '.SITE_NAME.'/controller/admin/dangky_email.php');
        }
    }
    if(isset($_POST["email"])&&isset($_POST["created"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['email']))
       $array['email']='0';
       if(!isset($array['status']))
       $array['status']='0';
       if(!isset($array['created']))
       $array['created']='0';
      $new_obj=new dangky_email($array);
        if($insert)
        {
            dangky_email_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/dangky_email.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            dangky_email_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/dangky_email.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=dangky_email_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=dangky_email_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_dangky_email($data);
}
else
{
     header('location: '.SITE_NAME);
}

<?php
require_once DIR.'/model/dangky_email.php';
require_once DIR.'/model/sqlconnection.php';
//
function dangky_email_Get($command)
{
            $array_result=array();
    $key=md5($command);
    if(CACHE)
    {
        $mycache=ConnectCache();
        $cachecommand=$mycache->get($key);
        if($cachecommand)
        {
            $array_result=$cachecommand;
        }
        else
        {
          $result=mysqli_query(ConnectSql(),$command);
            if($result!=false)while($row=mysqli_fetch_array($result))
            {
                $new_obj=new dangky_email($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'dangky_email');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new dangky_email($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function dangky_email_getById($id)
{
    return dangky_email_Get('select * from dangky_email where id='.$id);
}
//
function dangky_email_getByAll()
{
    return dangky_email_Get('select * from dangky_email');
}
//
function dangky_email_getByTop($top,$where,$order)
{
    return dangky_email_Get("select * from dangky_email ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function dangky_email_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return dangky_email_Get("SELECT * FROM  dangky_email ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function dangky_email_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return dangky_email_Get("SELECT dangky_email.id, dangky_email.email, dangky_email.status, dangky_email.created FROM  dangky_email ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function dangky_email_insert($obj)
{
    return exe_query("insert into dangky_email (email,status,created) values ('$obj->email','$obj->status','$obj->created')",'dangky_email');
}
//
function dangky_email_update($obj)
{
    return exe_query("update dangky_email set email='$obj->email',status='$obj->status',created='$obj->created' where id=$obj->id",'dangky_email');
}
//
function dangky_email_delete($obj)
{
    return exe_query('delete from dangky_email where id='.$obj->id,'dangky_email');
}
//
function dangky_email_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from dangky_email '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

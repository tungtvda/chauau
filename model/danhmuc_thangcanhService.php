<?php
require_once DIR.'/model/danhmuc_thangcanh.php';
require_once DIR.'/model/sqlconnection.php';
//
function danhmuc_thangcanh_Get($command)
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
                $new_obj=new danhmuc_thangcanh($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'danhmuc_thangcanh');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new danhmuc_thangcanh($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function danhmuc_thangcanh_getById($id)
{
    return danhmuc_thangcanh_Get('select * from danhmuc_thangcanh where id='.$id);
}
//
function danhmuc_thangcanh_getByAll()
{
    return danhmuc_thangcanh_Get('select * from danhmuc_thangcanh');
}
//
function danhmuc_thangcanh_getByTop($top,$where,$order)
{
    return danhmuc_thangcanh_Get("select * from danhmuc_thangcanh ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function danhmuc_thangcanh_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return danhmuc_thangcanh_Get("SELECT * FROM  danhmuc_thangcanh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function danhmuc_thangcanh_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return danhmuc_thangcanh_Get("SELECT danhmuc_thangcanh.id, danhmuc_thangcanh.name, danhmuc_thangcanh.name_url, danhmuc_thangcanh.img, danhmuc_thangcanh.position FROM  danhmuc_thangcanh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function danhmuc_thangcanh_insert($obj)
{
    return exe_query("insert into danhmuc_thangcanh (name,name_url,img,position) values ('$obj->name','$obj->name_url','$obj->img','$obj->position')",'danhmuc_thangcanh');
}
//
function danhmuc_thangcanh_update($obj)
{
    return exe_query("update danhmuc_thangcanh set name='$obj->name',name_url='$obj->name_url',img='$obj->img',position='$obj->position' where id=$obj->id",'danhmuc_thangcanh');
}
//
function danhmuc_thangcanh_delete($obj)
{
    return exe_query('delete from danhmuc_thangcanh where id='.$obj->id,'danhmuc_thangcanh');
}
//
function danhmuc_thangcanh_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from danhmuc_thangcanh '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

<?php
require_once DIR.'/model/hanhtrinh.php';
require_once DIR.'/model/sqlconnection.php';
//
function hanhtrinh_Get($command)
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
                $new_obj=new hanhtrinh($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'hanhtrinh');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new hanhtrinh($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function hanhtrinh_getById($id)
{
    return hanhtrinh_Get('select * from hanhtrinh where id='.$id);
}
//
function hanhtrinh_getByAll()
{
    return hanhtrinh_Get('select * from hanhtrinh');
}
//
function hanhtrinh_getByTop($top,$where,$order)
{
    return hanhtrinh_Get("select * from hanhtrinh ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function hanhtrinh_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return hanhtrinh_Get("SELECT * FROM  hanhtrinh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function hanhtrinh_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return hanhtrinh_Get("SELECT hanhtrinh.id, hanhtrinh.name, hanhtrinh.content FROM  hanhtrinh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function hanhtrinh_insert($obj)
{
    return exe_query("insert into hanhtrinh (name,content) values ('$obj->name','$obj->content')",'hanhtrinh');
}
//
function hanhtrinh_update($obj)
{
    return exe_query("update hanhtrinh set name='$obj->name',content='$obj->content' where id=$obj->id",'hanhtrinh');
}
//
function hanhtrinh_delete($obj)
{
    return exe_query('delete from hanhtrinh where id='.$obj->id,'hanhtrinh');
}
//
function hanhtrinh_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from hanhtrinh '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

<?php
require_once DIR.'/model/danhmuc_tour.php';
require_once DIR.'/model/sqlconnection.php';
//
function danhmuc_tour_Get($command)
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
                $new_obj=new danhmuc_tour($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'danhmuc_tour');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new danhmuc_tour($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function danhmuc_tour_getById($id)
{
    return danhmuc_tour_Get('select * from danhmuc_tour where id='.$id);
}
//
function danhmuc_tour_getByAll()
{
    return danhmuc_tour_Get('select * from danhmuc_tour');
}
//
function danhmuc_tour_getByTop($top,$where,$order)
{
    return danhmuc_tour_Get("select * from danhmuc_tour ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function danhmuc_tour_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return danhmuc_tour_Get("SELECT * FROM  danhmuc_tour ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function danhmuc_tour_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return danhmuc_tour_Get("SELECT danhmuc_tour.id, danhmuc_tour.name, danhmuc_tour.name_symbol, danhmuc_tour.name_url, danhmuc_tour.img,danhmuc_tour.icon, danhmuc_tour.position, danhmuc_tour.title, danhmuc_tour.keyword, danhmuc_tour.description FROM  danhmuc_tour ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function danhmuc_tour_insert($obj)
{
    return exe_query("insert into danhmuc_tour (name,name_symbol,name_url,img, icon,position,title,keyword,description) values ('$obj->name','$obj->name_symbol','$obj->name_url','$obj->img','$obj->icon','$obj->position','$obj->title','$obj->keyword','$obj->description')",'danhmuc_tour');
}
//
function danhmuc_tour_update($obj)
{
    return exe_query("update danhmuc_tour set name='$obj->name',name_symbol='$obj->name_symbol',name_url='$obj->name_url',img='$obj->img',icon='$obj->icon',position='$obj->position',title='$obj->title',keyword='$obj->keyword',description='$obj->description' where id=$obj->id",'danhmuc_tour');
}
//
function danhmuc_tour_delete($obj)
{
    return exe_query('delete from danhmuc_tour where id='.$obj->id,'danhmuc_tour');
}
//
function danhmuc_tour_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from danhmuc_tour '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

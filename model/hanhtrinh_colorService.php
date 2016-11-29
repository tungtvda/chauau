<?php
require_once DIR.'/model/hanhtrinh_color.php';
require_once DIR.'/model/sqlconnection.php';
//
function hanhtrinh_color_Get($command)
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
                $new_obj=new hanhtrinh_color($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'hanhtrinh_color');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new hanhtrinh_color($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function hanhtrinh_color_getById($id)
{
    return hanhtrinh_color_Get('select * from hanhtrinh_color where id='.$id);
}
//
function hanhtrinh_color_getByAll()
{
    return hanhtrinh_color_Get('select * from hanhtrinh_color');
}
//
function hanhtrinh_color_getByTop($top,$where,$order)
{
    return hanhtrinh_color_Get("select * from hanhtrinh_color ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function hanhtrinh_color_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return hanhtrinh_color_Get("SELECT * FROM  hanhtrinh_color ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function hanhtrinh_color_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return hanhtrinh_color_Get("SELECT hanhtrinh_color.id, hanhtrinh.name as hanhtrinh_id, hanhtrinh_color.name, hanhtrinh_color.color, hanhtrinh_color.content, hanhtrinh_color.positon FROM  hanhtrinh_color, hanhtrinh where hanhtrinh.id=hanhtrinh_color.hanhtrinh_id  ".(($where!='')?(' and '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function hanhtrinh_color_insert($obj)
{
    return exe_query("insert into hanhtrinh_color (hanhtrinh_id,name,color,content,positon) values ('$obj->hanhtrinh_id','$obj->name','$obj->color','$obj->content','$obj->positon')",'hanhtrinh_color');
}
//
function hanhtrinh_color_update($obj)
{
    return exe_query("update hanhtrinh_color set hanhtrinh_id='$obj->hanhtrinh_id',name='$obj->name',color='$obj->color',content='$obj->content',positon='$obj->positon' where id=$obj->id",'hanhtrinh_color');
}
//
function hanhtrinh_color_delete($obj)
{
    return exe_query('delete from hanhtrinh_color where id='.$obj->id,'hanhtrinh_color');
}
//
function hanhtrinh_color_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from hanhtrinh_color '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

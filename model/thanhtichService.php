<?php
require_once DIR.'/model/thanhtich.php';
require_once DIR.'/model/sqlconnection.php';
//
function thanhtich_Get($command)
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
                $new_obj=new thanhtich($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'thanhtich');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new thanhtich($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function thanhtich_getById($id)
{
    return thanhtich_Get('select * from thanhtich where id='.$id);
}
//
function thanhtich_getByAll()
{
    return thanhtich_Get('select * from thanhtich');
}
//
function thanhtich_getByTop($top,$where,$order)
{
    return thanhtich_Get("select * from thanhtich ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function thanhtich_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return thanhtich_Get("SELECT * FROM  thanhtich ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function thanhtich_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return thanhtich_Get("SELECT thanhtich.id, thanhtich.name, thanhtich.img, thanhtich.content, thanhtich.postion FROM  thanhtich ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function thanhtich_insert($obj)
{
    return exe_query("insert into thanhtich (name,img,content,postion) values ('$obj->name','$obj->img','$obj->content','$obj->postion')",'thanhtich');
}
//
function thanhtich_update($obj)
{
    return exe_query("update thanhtich set name='$obj->name',img='$obj->img',content='$obj->content',postion='$obj->postion' where id=$obj->id",'thanhtich');
}
//
function thanhtich_delete($obj)
{
    return exe_query('delete from thanhtich where id='.$obj->id,'thanhtich');
}
//
function thanhtich_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from thanhtich '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

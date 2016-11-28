<?php
require_once DIR.'/model/tour_img.php';
require_once DIR.'/model/sqlconnection.php';
//
function tour_img_Get($command)
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
                $new_obj=new tour_img($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'tour_img');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new tour_img($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function tour_img_getById($id)
{
    return tour_img_Get('select * from tour_img where id='.$id);
}
//
function tour_img_getByAll()
{
    return tour_img_Get('select * from tour_img');
}
//
function tour_img_getByTop($top,$where,$order)
{
    return tour_img_Get("select * from tour_img ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function tour_img_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return tour_img_Get("SELECT * FROM  tour_img ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function tour_img_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return tour_img_Get("SELECT tour_img.id, danhmuc_tour.name as danhmuc_id, tour_img.highlight, tour_img.name, tour_img.img FROM  tour_img, danhmuc_tour where danhmuc_tour.id=tour_img.danhmuc_id  ".(($where!='')?(' and '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function tour_img_insert($obj)
{
    return exe_query("insert into tour_img (danhmuc_id,highlight,name,img) values ('$obj->danhmuc_id','$obj->highlight','$obj->name','$obj->img')",'tour_img');
}
//
function tour_img_update($obj)
{
    return exe_query("update tour_img set danhmuc_id='$obj->danhmuc_id',highlight='$obj->highlight',name='$obj->name',img='$obj->img' where id=$obj->id",'tour_img');
}
//
function tour_img_delete($obj)
{
    return exe_query('delete from tour_img where id='.$obj->id,'tour_img');
}
//
function tour_img_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from tour_img '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

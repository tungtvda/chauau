<?php
require_once DIR.'/model/thangcanh.php';
require_once DIR.'/model/sqlconnection.php';
//
function thangcanh_Get($command)
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
                $new_obj=new thangcanh($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'thangcanh');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new thangcanh($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function thangcanh_getById($id)
{
    return thangcanh_Get('select * from thangcanh where id='.$id);
}
//
function thangcanh_getByAll()
{
    return thangcanh_Get('select * from thangcanh');
}
//
function thangcanh_getByTop($top,$where,$order)
{
    return thangcanh_Get("select * from thangcanh ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function thangcanh_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return thangcanh_Get("SELECT * FROM  thangcanh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function thangcanh_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return thangcanh_Get("SELECT thangcanh.id, danhmuc_thangcanh.name as danhmuc_id, thangcanh.name, thangcanh.name_url, thangcanh.img, thangcanh.content, thangcanh.title, thangcanh.keyword, thangcanh.description FROM  thangcanh, danhmuc_thangcanh where danhmuc_thangcanh.id=thangcanh.danhmuc_id  ".(($where!='')?(' and '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function thangcanh_insert($obj)
{
    return exe_query("insert into thangcanh (danhmuc_id,name,name_url,img,content,title,keyword,description) values ('$obj->danhmuc_id','$obj->name','$obj->name_url','$obj->img','$obj->content','$obj->title','$obj->keyword','$obj->description')",'thangcanh');
}
//
function thangcanh_update($obj)
{
    return exe_query("update thangcanh set danhmuc_id='$obj->danhmuc_id',name='$obj->name',name_url='$obj->name_url',img='$obj->img',content='$obj->content',title='$obj->title',keyword='$obj->keyword',description='$obj->description' where id=$obj->id",'thangcanh');
}
//
function thangcanh_delete($obj)
{
    return exe_query('delete from thangcanh where id='.$obj->id,'thangcanh');
}
//
function thangcanh_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from thangcanh '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}

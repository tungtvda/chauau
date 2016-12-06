<?php
class hanhtrinh_color
{
    public $id,$hanhtrinh_id,$name,$name_tab,$color,$content,$positon;
    public function hanhtrinh_color($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->hanhtrinh_id=isset($data['hanhtrinh_id'])?$data['hanhtrinh_id']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->name_tab=isset($data['name_tab'])?$data['name_tab']:'';
    $this->color=isset($data['color'])?$data['color']:'';
    $this->content=isset($data['content'])?$data['content']:'';
    $this->positon=isset($data['positon'])?$data['positon']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->hanhtrinh_id=addslashes($this->hanhtrinh_id);
            $this->name=addslashes($this->name);
            $this->name_tab=addslashes($this->name_tab);
            $this->color=addslashes($this->color);
            $this->content=addslashes($this->content);
            $this->positon=addslashes($this->positon);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->hanhtrinh_id=stripslashes($this->hanhtrinh_id);
            $this->name=stripslashes($this->name);
            $this->name_tab=stripslashes($this->name_tab);
            $this->color=stripslashes($this->color);
            $this->content=stripslashes($this->content);
            $this->positon=stripslashes($this->positon);
        }
}

<?php
class danhmuc_tour
{
    public $id,$name,$name_url,$img,$position,$title,$keyword,$description;
    public function danhmuc_tour($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->name_symbol=isset($data['name_symbol'])?$data['name_symbol']:'';
    $this->name_url=isset($data['name_url'])?$data['name_url']:'';
    $this->img=isset($data['img'])?$data['img']:'';
    $this->icon=isset($data['icon'])?$data['icon']:'';
    $this->position=isset($data['position'])?$data['position']:'';
    $this->title=isset($data['title'])?$data['title']:'';
    $this->keyword=isset($data['keyword'])?$data['keyword']:'';
    $this->description=isset($data['description'])?$data['description']:'';
          $this->encode();
    }

    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->name=addslashes($this->name);
            $this->name_symbol=addslashes($this->name_symbol);
            $this->name_url=addslashes($this->name_url);
            $this->img=addslashes($this->img);
            $this->icon=addslashes($this->icon);
            $this->position=addslashes($this->position);
            $this->title=addslashes($this->title);
            $this->keyword=addslashes($this->keyword);
            $this->description=addslashes($this->description);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->name=stripslashes($this->name);
            $this->name_symbol=stripslashes($this->name_symbol);
            $this->name_url=stripslashes($this->name_url);
            $this->img=stripslashes($this->img);
            $this->icon=stripslashes($this->icon);
            $this->position=stripslashes($this->position);
            $this->title=stripslashes($this->title);
            $this->keyword=stripslashes($this->keyword);
            $this->description=stripslashes($this->description);
        }
}

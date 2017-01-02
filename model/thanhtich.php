<?php
class thanhtich
{
    public $id,$name,$img,$content,$postion;
    public function thanhtich($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->img=isset($data['img'])?$data['img']:'';
    $this->content=isset($data['content'])?$data['content']:'';
    $this->postion=isset($data['postion'])?$data['postion']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->name=addslashes($this->name);
            $this->img=addslashes($this->img);
            $this->content=addslashes($this->content);
            $this->postion=addslashes($this->postion);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->name=stripslashes($this->name);
            $this->img=stripslashes($this->img);
            $this->content=stripslashes($this->content);
            $this->postion=stripslashes($this->postion);
        }
}

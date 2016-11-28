<?php
class video
{
    public $id,$danhmuc_id,$name,$img,$link_video,$highlights;
    public function video($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->danhmuc_id=isset($data['danhmuc_id'])?$data['danhmuc_id']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->img=isset($data['img'])?$data['img']:'';
    $this->link_video=isset($data['link_video'])?$data['link_video']:'';
    $this->highlights=isset($data['highlights'])?$data['highlights']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->danhmuc_id=addslashes($this->danhmuc_id);
            $this->name=addslashes($this->name);
            $this->img=addslashes($this->img);
            $this->link_video=addslashes($this->link_video);
            $this->highlights=addslashes($this->highlights);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->danhmuc_id=stripslashes($this->danhmuc_id);
            $this->name=stripslashes($this->name);
            $this->img=stripslashes($this->img);
            $this->link_video=stripslashes($this->link_video);
            $this->highlights=stripslashes($this->highlights);
        }
}

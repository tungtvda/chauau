<?php
class tour_img
{
    public $id,$danhmuc_id,$highlight,$name,$img;
    public function tour_img($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->danhmuc_id=isset($data['danhmuc_id'])?$data['danhmuc_id']:'';
    $this->highlight=isset($data['highlight'])?$data['highlight']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->img=isset($data['img'])?$data['img']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->danhmuc_id=addslashes($this->danhmuc_id);
            $this->highlight=addslashes($this->highlight);
            $this->name=addslashes($this->name);
            $this->img=addslashes($this->img);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->danhmuc_id=stripslashes($this->danhmuc_id);
            $this->highlight=stripslashes($this->highlight);
            $this->name=stripslashes($this->name);
            $this->img=stripslashes($this->img);
        }
}

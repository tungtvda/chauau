<?php
class dangky_email
{
    public $id,$email,$status,$created;
    public function dangky_email($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->email=isset($data['email'])?$data['email']:'';
    $this->status=isset($data['status'])?$data['status']:'';
    $this->created=isset($data['created'])?$data['created']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->email=addslashes($this->email);
            $this->status=addslashes($this->status);
            $this->created=addslashes($this->created);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->email=stripslashes($this->email);
            $this->status=stripslashes($this->status);
            $this->created=stripslashes($this->created);
        }
}

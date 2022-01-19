<?php

class user
{
    // member / atribute
    public $nama;
    public $umur;

    // constructor php v7.4
    public function __construct($nama, $umur)
    {
      $this->nama = $nama;
      $this->umur = $umur;

    }
}

  //inisialisasi object
 $user1 = new user("Stevan", 18);
 echo $user1->nama = "Stevan";
 echo $user1->umur = 18;
 ?>
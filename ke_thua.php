<?php
  class Khach_hang{
  	var $name;
  	var $id;

  	function __construct($name='', $id=0){
  			$this->name=$name;
  			$this->id=$id;
  	}
  	function Infor(){
  		echo "Tôi tên là: $this->name - id của tôi là: $this->id";
  	}
  }
  class Duy extends Khach_hang{

  }
  class Phuong extends Khach_hang{

  }
  $kh1 = new Duy('Duy',5);
  $kh2 = new Phuong('Phượng',6);

  $kh1->Infor();
  echo"<br>";
  $kh2->Infor();
?>
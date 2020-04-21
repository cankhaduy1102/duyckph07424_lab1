<?php
	class Khach_hang{
		private $id=1;
		protected $gmail="duyckph07424";
		public function setid($newid){
			$this->id=$newid;
		}
		public function getid(){
			return $this->id;	
		}
		public function setgamil($newgmail){
			$this->gmail= $newgmail;
		}

	}

	class Duy extends Khach_hang{
		public function getgamil(){
			return $this->gmail;	
		}
	}

	$stmt= new Khach_hang();
	$stmt-> setid(4);
	echo $stmt->getid();
	echo "<br>";
	$stmt1 = new Duy();
	$stmt1->setgamil("cankhaduy@gmail.com");
	echo $stmt1->getgamil();

	echo"<br>";


	class ctv{
		private $name="Duy";
		protected $cmnd=11022000;
		public function setname($newname){
			$this->name=$newname;
		}
		public function getname(){
			return $this->name;	
		}
		public function setcmnd($newcmnd){
			$this->cmnd= $newcmnd;
		}

	}

	class Phuong extends ctv{
		public function getcmnd(){
			return $this->cmnd;	
		}
	}

	$stmt2= new ctv();
	$stmt2-> setname("Phí Phượng");
	echo $stmt2->getname();
	echo "<br>";
	$stmt3 = new Phuong();
	$stmt3->setcmnd("20032000");
	echo $stmt3->getcmnd();
?>
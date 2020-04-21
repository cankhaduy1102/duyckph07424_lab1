<?php
	class sinhvien{
		function dihoc(){
			echo "Tôi đi học muộn";
		}
	}
	class teacher{

	}
	class Duy extends sinhvien{
		function dihoc(){
			echo "Tôi đi học sớm";
		}
	}
	class Hung extends teacher{
		function point(){
			echo "Em được 10 điểm";
		}
	}

	$stmt = new Duy();
	$stmt->dihoc();
	echo "<br>";
	$stmt1 = new Hung();
	$stmt1->point();

	class ctv{
		function post(){
			echo "Tôi đã đăng được 10 sản phẩm";
		}
	}
	class ctv1{

	}
	class ctv2 extends ctv{
		function editpost(){
			echo "11022000";
		}
	}
	class ctv3 extends ctv1{
		function repcomment(){
			echo "Em được 10 điểm";
		}
	}
	echo "<br>";
	$stmt2 = new ctv2();
	$stmt2->editpost();
	echo "<br>";
	$stmt3 = new ctv3();
	$stmt3->repcomment();
?>
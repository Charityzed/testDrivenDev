<?php


require_once "cubic.php";
 $test=new TestCubic();
 echo $test->test();


//this test code should test for cubic of given numbers
class TestCubic{
	var $Cubic;
	
	function TestCubic(){
		$this->Cubic=new Cubic();
	}
	
	function test(){
		$result=$this->Cubic->getCubic(40);
		if($result!=null){
			echo "Test succeded Your Cubic is " .$result;
		}
		else {
			echo "Error";
		}
	}
	
}
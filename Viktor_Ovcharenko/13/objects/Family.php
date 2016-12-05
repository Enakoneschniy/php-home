<?php
	class Family{
		private $status;
		private $name;
		private $gender;
		private $age;
		
		public function Family($status, $name, $gender, $age){
			$this->status = $status;
			$this->name = $name;
			$this->gender = $gender;
			$this->age = $age;
		}
		public function getStatus(){
			return $this->status;
		}
		public function setStatus($status){
			$this->status = $status;
		}
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function getGender(){
			return $this->gender;
		}
		public function setGender($gender){
			$this->gender = $gender;
		}
		public function getAge(){
			return $this->age;
		}
		public function setAge($age){
			$this->age = $age;
		}
	}
?>	

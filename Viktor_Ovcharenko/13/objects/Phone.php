<?php
	class Phone{
		private $name;
		private $price;
		private $screen_diagonal;
		public function __construct($name, $price, $screen_diagonal){
			$this->name = $name;
			$this->price = $price;
			$this->screen_diagonal = $screen_diagonal;
		}
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function getPrice(){
			return $this->price;
		}
		public function setPrice($price){
			$this->price = $price;
		}
		public function getScreen_diagonal(){
			return $this->screen_diagonal;
		}
		public function setScreen_diagonal($screen_diagonal){
			$this->screen_diagonal = $screen_diagonal;
		}
	}
?>
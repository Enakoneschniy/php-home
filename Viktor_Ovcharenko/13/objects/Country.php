<?php
	class Country{
		private $name;
		private $population;
		private $mainland;
		private $capital;
		static private $planet = 'Earth';

		public function Country($name, $population, $mainland, $capital){
			$this->name = $name;
			$this->population = $population;
			$this->mainland = $mainland;
			$this->capital = $capital;
		}
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function getPopulation(){
			return $this->population;
		}
		public function setPopulation($population){
			$this->population = $population;
		}
		public function getMainland(){
			return $this->mainland;
		}
		public function setMainland($mainland){
			$this->mainland = $mainland;
		}
		public function getCapital(){
			return $this->capital;
		}
		public function setCapital($capital){
			$this->capital = $capital;
		}
		public function getPlanet(){
			return self::$planet;
		}
		public function setPlanet($planet){
			self::$planet = $planet;
		}

	}
?>	

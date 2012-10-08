<?php

namespace Game;

class Card{
	private $value;

	public function setValue($value){
		$this->value = $value;
	}

	public function getValue(){
		return $this->value;
	}
}
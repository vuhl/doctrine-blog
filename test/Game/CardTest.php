<?php

namespace Game;

class CardTest extends \PHPUnit_Framework_TestCase {
	private $card;

	public function setUp(){
		$this->card = new Card();
	}

	public function testCanGetValue(){
		$this->card->setValue(2);

		$this->assertEquals(2, $this->card->getValue());
	}

	public function testCanGetValueAgain(){
		$this->card->setValue(7);

		$this->assertEquals(7, $this->card->getValue());
	}

}
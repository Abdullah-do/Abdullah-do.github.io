<?php

class donation{
private $name;
private $amount;
private $comment;
private $id;

	public function getAmount() {
		return $this->amount;
	}
	

	public function setAmount($amount): self {
		$this->amount = $amount;
		return $this;
	}
	
	public function getComment() {
		return $this->comment;
	}
	
	public function setComment($comment): self {
		$this->comment = $comment;
		return $this;
	}
    
	public function getId() {
		return $this->id;
	}

	public function setId($id): self {
		$this->id = $id;
		return $this;
	}


	public function getName() {
		return $this->name;
	}
	
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
}
?>
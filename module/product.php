<?php 
require_once '../controller/ProductController.php';
class Product{

private $productName;
private $productPrice;
private $productDescription;
private $productCategory;
private $productQuantity;
private $productState;
public $image;


	
	public function getProductPrice() {
		return $this->productPrice;
	}
	public function setProductPrice($productPrice): self {
		$this->productPrice = $productPrice;
		return $this;
	}

	public function getProductState() {
		return $this->productState;
	}
	

	public function setProductState($productState): self {
		$this->productState = $productState;
		return $this;
	}


	public function getProductQuantity() {
		return $this->productQuantity;
	}
	
	
	public function setProductQuantity($productQuantity): self {
		$this->productQuantity = $productQuantity;
		return $this;
	}

	
	public function getProductCategory() {
		return $this->productCategory;
	}
	
	public function setProductCategory($productCategory): self {
		$this->productCategory = $productCategory;
		return $this;
	}


	public function getProductDescription() {
		return $this->productDescription;
	}
	
/**
	 * @param mixed $productDescription 
	 * @return self
	 */
	public function setProductDescription($productDescription): self {
		$this->productDescription = $productDescription;
		return $this;
	}

	public function getProductName() {
		return $this->productName;
	}
	
	
	public function setProductName($productName): self {
		$this->productName = $productName;
		return $this;
	}
}
?>
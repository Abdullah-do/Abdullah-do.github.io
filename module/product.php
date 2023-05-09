<?php 
class Product{
    private $name; 
    private $price;
private $quantity;
    private $details;
    private $image;
    private $type_id;
  private $catagory;
    
    public function SetProductName($name) {
        $this->name = $name;
      }
    
      public function GetProductName() {
        return $this->name;
      }
     
      public function SetProductprice($price) {
        $this->price = $price;
      }
    
      public function GetProductprice() {
        return $this->price;
      }
      public function SetProductQuantity($quantity) {
        $this->quantity = $quantity;
      }
    
      public function GetProductQuantity() {
        return $this->quantity;
      }
      public function SetProductDetails($details) {
        $this->details = $details;
      }
    
      public function GetProductDetails() {
        return $this->details;
      }
      public function SetProductImage($image) {
        $this->image = $image;
      }
    
      public function GetProductImage() {
        return $this->image;
      }
      public function SetProductType_id($type_id) {
        $this->type_id = $type_id;
      }
    
      public function GetProductType_id() {
        return $this->type_id;
      }
   

	/**
	 * @return mixed
	 */
	public function getCatagory() {
		return $this->catagory;
	}
	
	/**
	 * @param mixed $catagory 
	 * @return self
	 */
	public function setCatagory($catagory): self {
		$this->catagory = $catagory;
		return $this;
	}
}



?>
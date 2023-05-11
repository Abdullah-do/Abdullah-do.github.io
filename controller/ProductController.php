<?php
require_once 'C:/xampp/htdocs/Abdullah-do.github.io/controller/DBController.php';
include_once 'C:/xampp/htdocs/Abdullah-do.github.io/module/product.php';
class ProductController{
protected $db;
public function getCategories(){
$this->db=DataBase::getInstance();
$query="select * from gift_shop";
return $this->db->select($query);
}
public function addproduct(Product $product){
    $pc=$product->GetProductType_id();
    $pr=$product->getProductPrice();
    $pn=$product->getProductName();
$pcatagory=$product->getCatagory();
    $pq= $product->getProductQuantity();
    $pd=$product->getProductDetails();
    $image = $product->GetProductImage();
    $this->db=DataBase::getInstance();
    $query="INSERT INTO gift_shop VALUES (NULL,  $pr, ' $pn', '$pcatagory', $pq, '$pd','$image' )";
    return $this->db->insert($query);
}
public function GetAllProducts(){
        
    $this->db = DataBase::getInstance();
if ($this->db) {
    $query = "SELECT * FROM gift_shop ";
    return $this->db->select($query);
} else {
    echo "Error: Could not connect to the database";
    return false;
} 
}
public function GetreplicaProducts($id){
        
    $this->db = DataBase::getInstance();
if ($this->db) {
    $query="select * from gift_shop  where Product_categries ='$id'";
    return $this->db->select($query);
} else {
    echo "Error: Could not connect to the database";
    return false;
} 
}
       
}

?>
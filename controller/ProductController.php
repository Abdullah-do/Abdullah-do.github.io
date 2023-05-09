<?php
require_once 'DBController.php';
include_once '../module/product.php'
class ProductController{
protected $db;
public function getCategories(){
$this->db=DataBase::getInstance();
$query="select * from gift_shop";
return $this->db->select($query);
}
public function addproduct(Product $product){
    $this->db=DataBase::getInstance();
    $query="insert into gift_shop values('',$product->getProductPrice()','$product->getProductQuantity()')";
   
    return $this->db->select($query);
    }
}
?>
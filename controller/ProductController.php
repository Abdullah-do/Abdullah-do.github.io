<?php
require_once 'DBController.php';
include_once '../../module/product.php';
class ProductController{
protected $db;
public function getCategories(){
$this->db=DataBase::getInstance();
$query="select * from gift_shop";
return $this->db->select($query);
}
public function addproduct(Product $product){
    $pc=$product->getProductCategory();
    $pr=$product->getProductPrice();
    $pn=$product->getProductName();
    $pq= $product->getProductQuantity();
    $ps=$product->getProductState();
    $pd=$product->getProductDescription();
    $this->db=DataBase::getInstance();
    $query="INSERT INTO gift_shop VALUES (NULL,  $pr, ' $pn', '$pr', $pq, ' $ps', '$pd')";
    return $this->db->insert($query);
}}
?>
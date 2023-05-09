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
    $pc=$product->GetProductType_id();
    $pr=$product->getProductPrice();
    $pn=$product->getProductName();
$pcatagory=$product->getCatagory();
    $pq= $product->getProductQuantity();
    $pd=$product->getProductDetails();
    $image = $product->GetProductImage();
    $this->db=DataBase::getInstance();
    $query="INSERT INTO gift_shop VALUES (NULL,  $pr, ' $pn', '$pr', $pq, ' $pd', '$image')";
    return $this->db->insert($query);
}}
?>
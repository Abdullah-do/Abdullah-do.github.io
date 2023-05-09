<?php
require_once 'DBController.php';
include_once '../module/product.php';
class ProductController{
protected $db;
public function getCategories(){
$this->db=DataBase::getInstance();
$query="select * from gift_shop";
return $this->db->select($query);
}
public function addproduct(Product $product){
   $product=new Product;
    $this->db=DataBase::getInstance();
    $query="INSERT INTO `gift_shop` (`Product_id`, `Product_price`, `Product_name`, `Product_categries`, `Product_quantity`, `Product_state`, `Product_info`) VALUES (NULL, $product->getProductPrice(), 'HAA', 'SFASF', '100', 'instock', 'FSFSFSFS')";
   
    return $this->db->select($query);
    }
}
?>
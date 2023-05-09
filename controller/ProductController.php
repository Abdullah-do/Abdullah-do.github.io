<?php
require_once '../controller/DBController.php';
require_once '../module/product.php';

class ProductController{
protected $db;
public function getCategories(){
$this->db=DataBase::getInstance();
$query="select * from gift_shop";
return $this->db->select($query);

}
}
?>
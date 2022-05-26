<?php
session_start();
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
    $_SESSION["count"] = 0;
}

$store = array(

    array("id"=>101,"img"=>"images/football.png","product_name"=>"Product 101", "Price"=>150.00,"cart"=>"Add To Cart" ,"quantity"=>1),
    array("id"=>102,"img"=>"images/tennis.png","product_name"=>"Product 102", "Price"=>120.00,"cart"=>"Add To Cart" ,"quantity"=>1),
    array("id"=>103,"img"=>"images/basketball.png","product_name"=>"Product  103", "Price"=>90.00,"cart"=>"Add To Cart" ,"quantity"=>1),
    array("id"=>104,"img"=>"images/table-tennis.png","product_name"=>"Product 104", "Price"=>110.00,"cart"=>"Add To Cart" ,"quantity"=>1),
    array("id"=>105,"img"=>"images/soccer.png","product_name"=>"Product 105", "Price"=>80.00,"cart"=>"Add To Cart" ,"quantity"=>1),
)
?>





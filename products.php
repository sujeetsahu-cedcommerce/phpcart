<?php
session_start();
include "header.php";
include "conflict.php";
//   $_SESSION["mycart"]= array();
//   $_SESSION['count']= 0;




if(isset($_GET['prod_Id'])){
	//echo $_GET['prod_Id'];
    $click_ID = $_GET['prod_Id'];
	$_SESSION["count"]+=1;
	$i=$_SESSION['count'];	
	foreach($store as $key => $value){
		if($click_ID == $value['id']){
			$_SESSION['cart'][$i] = $value;	
		}
	}
}


?>
	 <div id="main">
		<div id="products">
			
			<?php
			foreach($store as $key => $value){?>
		    <div id=<?php echo $value["id"] ?> class="product">
				<img src=<?php echo $value["img"] ?>>
				<h3 class="title"><a href="#"><?php echo $value["product_name"] ?></a></h3>
				<span>Price: <?php echo $value["Price"] ?></span>
				<a class="add-to-cart" href="?prod_Id=<?php echo $value["id"]?>">
				Add To Cart</a>
			</div>
<?php }?>
      
			</div>
     </div>
<?php
	include "footer.php";

	echo "<table><tr><th>ID</th><th>Name</th><th>Price</th></tr>";
	foreach($_SESSION["cart"] as $key => $value){
		echo ("<tr><td>".$value['id']."</td>"."  "."<td>".$value['product_name']."</td>"."  "."<td>".$value['Price']."</td></tr>");
	}
	echo "</table>";
?>


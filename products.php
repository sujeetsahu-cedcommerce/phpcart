<?php
session_start();
include "header.php";
include "conflict.php";
if(!isset($_SESSION['mycart'])){
	$_SESSION["mycart"]= array();
}

?>
	 <div id="main">
		<div id="products">
			
		<?php
			foreach($store as $key => $value){?>
		    <div id=<?php echo $value['id'] ;?> class="product">
				<img src=<?php echo $value["img"] ?>>
				<h3 class="title"><a href="#"><?php echo $value["product_name"] ?></a></h3>
				<span>Price: <?php echo $value["Price"] ?></span>
				<a  class="add-to-cart" href="?prod_Id=<?php echo $key?>">
				Add To Cart</a>
			</div>
        <?php }?>
			</div>
     </div>


<?php
    
    if(isset($_GET['prod_Id'])){
		$index = $_GET['prod_Id'];
		if($_SESSION['mycart'][$index] == '')
		{
			$_SESSION['mycart'][$index]=$store[$index];
		}
		else
		{
			$_SESSION['mycart'][$index]['quantity']+=1;
			$_SESSION['mycart'][$index]['Price']*=2;
		}
		
		echo "<table id='table'><tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th></tr>";
		
		foreach($_SESSION["mycart"] as $key => $value){
		  echo "<tr><td>".$value['id']."</td>"."  "."<td>".$value          ['product_name']."</td>"."  "."<td>".$value['Price']."</td><td>".$value['quantity']."</td></tr>";
		}
		
		echo "</table>";
	}

	include "footer.php";
?>
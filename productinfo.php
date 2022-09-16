<?php

include('config/app.php');
include('controller/Product.php');
include('controller/Book.php');
include('controller/Furniture.php');
include('controller/DVD.php');


if (isset($_POST['save'])) {
	
		$inputData = [
			'sku' => $_POST['sku'],
			'name' => $_POST['name'],
			'price' => $_POST['price'],
			'productType' => $_POST['productType'],
			'size' => $_POST['size'],
			'height' => $_POST['height'],
			'width' => $_POST['width'],
			'length' => $_POST['length'],
			'weight' => $_POST['weight']

		];

		$product = new $_POST['productType']($inputData);
		$result = $product->setData();

		if($result){
		//	echo $result;
			redirect("index.php");
		}
		else{
			echo "product insert query unsuccess";
		}


}

if (isset($_POST['delete'])) {
    
    if(isset($_POST['deleteChecked'])){
        $deleteSkus = $_POST['deleteChecked'];
        $product = new Book([]);
	    $result = $product->delete($deleteSkus);

	
		if($result){
			redirect("index.php");
		}
		else{
			echo "product delete query unsuccess";
		}
    }
    else{
        redirect("index.php");
    }


	


}

echo(mysqli_error($db->con));
mysqli_close($db->con);

?>
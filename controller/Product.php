<?php

abstract class Product{
	
	protected $sku;
	protected $name;
	protected $price;	
	protected $productType;
	protected $mainData;

	public function __construct($inputData){
		if(!empty($inputData)){
			$this->sku = $inputData['sku'];
			$this->name = $inputData['name'];
			$this->price = $inputData['price'];
			$this->productType = $inputData['productType'];
			$this->mainData = array_slice($inputData, 0, 4, true);

		}

		$db = new DatabaseConnection;
		$this->con = $db->con;
	}

	public function setData(){

		$query_check_dup = " select * from `product` where sku = '$this->sku' ";
		$result = mysqli_query($this->con, $query_check_dup);
		$count = mysqli_num_rows($result);

		if($count > "0"){
			$_SESSION['sku_warning'] = "Hey! The entered sku is already used. Kindly enter unique SKU. ";
			redirect('add-product.php');
		}

		$data = "'".implode("','",$this->mainData)."'";
		$query = " INSERT INTO product(`sku`, `name`, `price`, `productType`) VALUES ($data)";
		$result = $this->con->query($query);


	}

	public function delete($skus){
		$deleteSkus = "'".implode("','",$skus)."'";
		$query = " DELETE FROM product where sku in ($deleteSkus)";
		$result = $this->con->query($query);

		return $result;
	}

	public function getAllData()
	{
		$query = "SELECT * FROM product";
		$result = $this->con->query($query);
		return $result;
	}


}
?>
<?php

class Book extends Product{

	private $weight;


	public function __construct($inputData){
		parent::__construct($inputData);
		if(!empty($inputData)){
			$this->weight =$inputData['weight'];
		}

	}

	public function setData(){

		parent::setData();

		$query = " UPDATE product set weight = '$this->weight' WHERE sku = '$this->sku'";

		$result = $this->con->query($query);

		if($result){
			return true;
		}
		else{
			return false;
		}

	}

	
	public function getDataProductWise($product){
		$product['attribute'] = "Weight: ".$product['weight']."KG";
		return $product;
	}

	
}
?>

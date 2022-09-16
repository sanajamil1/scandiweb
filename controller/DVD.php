<?php

class DVD extends Product{

	private $size;


	public function __construct($inputData){
		parent::__construct($inputData);
		if(!empty($inputData)){
			$this->size =$inputData['size'];
		}

	}

	public function setData(){

		parent::setData();

		$query = " UPDATE product set size = '$this->size' WHERE sku = '$this->sku'";

		$result = $this->con->query($query);

		if($result){
			return true;
		}
		else{
			return false;
		}

	}

	
	public function getDataProductWise($product){
		$product['attribute'] = "Size: ".$product['size']."MB";
		return $product;
	}


}
?>
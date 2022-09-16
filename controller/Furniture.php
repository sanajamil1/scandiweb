<?php

class Furniture extends Product{

	private $length;
	private $width;
	private $height;



	public function __construct($inputData){
		parent::__construct($inputData);
		if(!empty($inputData)){
			$this->length =$inputData['length'];
			$this->width =$inputData['width'];
			$this->height =$inputData['height'];
		}


	}

	public function setData(){

		parent::setData();

		$query = " UPDATE product set length = '$this->length', width = '$this->width', height = '$this->height' WHERE sku = '$this->sku'";

		$result = $this->con->query($query);

		if($result){
			return true;
		}
		else{
			return false;
		}

	}

	
	public function getDataProductWise($product){
		$product['attribute'] = "Dimensions: ".$product['height']."X".$product['width']."X".$product['length'];
		return $product;
	}


}
?>
<?php
include('config/app.php');
include_once('controller/Product.php');
include_once('controller/Furniture.php');
include_once('controller/Book.php');
include_once('controller/DVD.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title></title>
</head>


<body>
	<!-- Header Starting-->
	<nav class="navbar navbar-light mx-auto " style="width: 1400px;">
		<div class="container-fluid border-bottom border-dark border-4 pb-3 pt-4 mb-5">
			<b><a class="navbar-brand">Product List</a></b>
			
		</div>
	</nav>
	<!-- Header Ending-->

	<!-- Products Starting -->

	<section style="background-color: #eee;" class= "py-5">
		<div>
			<form action="productinfo.php" method = "post">

				<div class="text-center py-2 px-5 justify-content-center d-flex flex-wrap gap-4">
					<?php

					$DVDs = new DVD([]);
					$result = $DVDs->getAllData();
					if($result){
						foreach($result as $product){
							$productObj = new $product['productType']([]);
							$productResult = $productObj->getDataProductWise($product);
							?>

							<div class="col-lg-3 col-md-3 ">
								<div class="card">
									<div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
									data-mdb-ripple-color="light">						
									<div class="form-check">
										<input class="delete-checkbox form-check-input m-3 border border-dark rounded-0" type="checkbox" name = "deleteChecked[]" value="<?= $productResult['sku'] ?>" id="flexCheckDefault">
									</div>
								</div>
								<div class="card-body">
									<h5 class="card-title mb-3"><?= $productResult['sku'] ?></h5>
									<h6><?= $productResult['name'] ?></h6>
									<h6 class="mb-3"><?= $productResult['price'] ?> $</h6>
									<h6 class="mb-3"><?= $productResult['attribute']?></h6>
								</div>
							</div>
						</div>
						<?php
					}
				}

				?>

			</div>


	<!-- ADD DELETE Buttons Starting -->
	<div class="d-grid gap-2 d-md-flex justify-content-md-end fixed-top mt-4 " style="margin-right: 90px;">
		<a type="button" value = "ADD" class="btn btn btn-light border border-dark rounded-0 border-2" href = "add-product.php">ADD</a>
		<input type="submit" name = "delete" value = "MASS DELETE" id="delete-product-btn" class="btn btn btn-light border border-dark rounded-0 border-2"/>
	</div>
	<!-- ADD DELETE Buttons Ending -->

</form>
</div>
</section>
<!-- Products Ending-->



<!-- Footer Starting-->
<footer class="page-footer font-small teal pt-2 mt-5 border-top border-dark border-4 mx-auto" style="width: 1400px;">
	<b><div class="footer-copyright text-center py-3">ScandiWeb Test Assignment</div></b>
</footer>
<!-- Footer Ending-->


</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


</html>
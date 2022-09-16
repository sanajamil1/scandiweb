<?php
session_start();
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
			<b><a class="navbar-brand">Product Add</a></b>
			
		</div>
	</nav>
	<!-- Header Ending-->

	<?php

	if(isset($_SESSION['sku_warning'])){
		
		?>

		<div class="alert alert-warning alert-dismissible fade show d-inline-flex p-2 " role="alert" style="margin-left: 90px;">
			<strong><?php echo $_SESSION['sku_warning']; ?></strong>  
		</div>

		<?php


		unset($_SESSION['sku_warning']);
	}

	?>

	<!-- Product Form Starting -->
	<div class="d-flex" >
		<form action="productinfo.php" method = "post" id = "product_form">
			<div class="form-group d-grid gap-3" style="padding: 0px 0px 0px 90px;">
				
				<div class="row align-items-center">
					<div class="col">
						<h4>SKU</h4>
					</div>
					<div class="col">
						<input type="text" id="sku" name="sku" class="form-control border-dark" autocomplete="off" style="width: 400px;" >
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col">
						<h4>Name</h4>
					</div>
					<div class="col">
						<input type="text" id="name" name="name" class="form-control border-dark" autocomplete="off" style="width: 400px;">
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col">
						<h4>Price ($)</h4>
					</div>
					<div class="col">
						<input type="text" id="price" name="price" class="form-control border-dark" autocomplete="off" style="width: 400px;">
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col">
						<h4>Switcher</h4>
					</div>
					<div class="col"  >
						<select class="form-select form-select-lg border-dark" id = "productType" name = "productType" style="width: 400px;" >
							<option value="">Type Switcher</option>
							<option value="DVD">DVD</option>
							<option value="Furniture">Furniture</option>
							<option value="Book">Book</option>
						</select>
					</div>
				</div>
			</div>
			
			<!-- Switcher Field Options Starting -->

			<div class = "DVD box p-3 mt-4 bg-secondary rounded" style="margin-left: 100px;">
				<div class="form-group d-grid gap-3">
					<div class="row align-items-center">
						<div class="col">
							<h5>Size (MB)</h5>
						</div>
						<div class="col">
							<input type="text" id="size" name="size" class="form-control border-dark" autocomplete="off" style="width: 330px;">
						</div>
					</div>
					<p>Please provide size of DVD in MB.</p>
				</div>
			</div>

			<div class = "Furniture box p-3 mt-4 bg-secondary rounded" style="margin-left: 100px;">
				<div class="form-group d-grid gap-3">
					<div class="row align-items-center">
						<div class="col">
							<h5>Height (CM)</h5>
						</div>
						<div class="col">
							<input type="text" id="height" name="height" class="form-control border-dark" autocomplete="off" style="width: 330px;">
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col">
							<h5>Width (CM)</h5>
						</div>
						<div class="col">
							<input type="text" id="width" name="width" class="form-control border-dark" autocomplete="off" style="width: 330px;">
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col">
							<h5>Length (CM)</h5>
						</div>
						<div class="col">
							<input type="text" id="length" name="length" class="form-control border-dark" autocomplete="off" style="width: 330px;">
						</div>
					</div>
					<p>Please provide dimensions of the furniture in CM.</p>
				</div>

			</div>

			<div class = "Book box p-3 mt-4 bg-secondary rounded" style="margin-left: 100px;">
				<div class="form-group d-grid gap-3">
					<div class="row align-items-center">
						<div class="col">
							<h5>Weight (KG)</h5>
						</div>
						<div class="col">
							<input id="weight" name="weight" class="form-control border-dark" autocomplete="off" style="width: 330px;">
						</div>
					</div>
					<p>Please provide weight of book in KG.</p>
				</div>
			</div>
			<!-- Switcher Field Options Ending -->


			
			<div class="d-grid gap-2 d-md-flex justify-content-md-end fixed-top mt-4 " style="margin-right: 90px;">
				<input type="submit" name = "save" value = "Save" id = "save" class="btn btn btn-light border border-dark rounded-0 border-2"/>
				<a type="button" href = "index.php" class="btn btn btn-light border border-dark rounded-0 border-2">Cancel</a>
			</div>

		</form>
	</div>
	<!-- Product Form Ending-->

	


	<!-- Footer Starting-->
	<footer class="page-footer font-small teal pt-2 mt-5 border-top border-dark border-4 mx-auto" style="width: 1400px;">
		<b><div class="footer-copyright text-center py-3">ScandiWeb Test Assignment</div></b>
	</footer>
	<!-- Footer Ending-->



</body>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    // jQuery function to show and hide switcher options
    $(document).ready(function(){

    	$("select").change(function(){
    		$(this).find("option:selected").each(function(){
    			var optionValue = $(this).attr("value");
    			if(optionValue){
    				$(".box").not("." + optionValue).hide();
    				$("." + optionValue).show();
    			} else{
    				$(".box").hide();
    			}
    		});
    	}).change();


    	jQuery('#product_form').validate({
    		rules:{
    			sku: "required",
    			name: "required",
    			price: {
    				required: true,
    				number: true
    			},
    			productType: "required",
    			size: {
    				required: true,
    				number: true
    			},
    			height: {
    				required: true,
    				number: true
    			},
    			width: {
    				required: true,
    				number: true
    			},
    			length: {
    				required: true,
    				number: true
    			},
    			weight: {
    				required: true,
    				number: true
    			}
    		}, 
    		messages:{
    			sku: "Please, submit required data",
    			name: "Please, submit required data",
    			price:  {
    				required: "Please, submit required data",
    				number: "Please, provide the data of indicated type"
    			},
    			productType: "Please, submit required data",
    			size:  {
    				required: "Please, submit required data",
    				number: "Please, provide the data of indicated type"
    			},
    			height: {
    				required: "Please, submit required data",
    				number: "Please, provide the data of indicated type"
    			},
    			width: {
    				required: "Please, submit required data",
    				number: "Please, provide the data of indicated type"
    			},
    			length: {
    				required: "Please, submit required data",
    				number: "Please, provide the data of indicated type"
    			},
    			weight: {
    				required: "Please, submit required data",
    				number: "Please, provide the data of indicated type"
    			}
    		}
    	})

    });

</script>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?version=<?php echo time(); ?>" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="jquery.js"></script>
	<script src="js/main.js"></script>
	<script src="js/slider.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Nông sản</title>
</head>
<body>
	<div class="container-fluid px-0">
		<?php 
		require "page/header.php";

		if(@$_GET['page']){
			$p=$_GET['page'];
			require "page/".$p.".php";
		} else{
			require "page/trangchu.php";
		}

		require "page/footer.php";
		?>
	</div>

</body>
</html>
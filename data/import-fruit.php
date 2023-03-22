<?php
$dataProduct = array(
	array('public/demo/home/trai cay nk/Screenshot_4.png','Bom mỹ','200.000','180.000','-10%'),
	array('public/demo/home/trai cay nk/Screenshot_3.png','Vải nhập khẩu','80.000','60.000','-25%'),
	array('public/demo/home/trai cay nk/Screenshot_2.png','Bom mỹ','50.000','30.000','-40%'),
	array('public/demo/home/trai cay nk/Screenshot_1.png','Cà chua Đà Lạt','100.000','80.000','-30%'),
);

class importProduct{
	function __construct($thumbnail, $productName, $oldPrice, $newPrice, $discount){
		$this->thumbnail = $thumbnail;
		$this->productName = $productName;
		$this->oldPrice = $oldPrice;
		$this->newPrice = $newPrice;
		$this->discount = $discount;
	}
}

$importProductList = array();
foreach($dataProduct as $key => $value){
	array_push($importProductList, new importProduct($value[0], $value[1], $value[2], $value[3], $value[4]));
}
?>


<div class="col-12 d-flex gap-2 gap-lg-0 justify-content-between flex-wrap">
	
	<?php 
	foreach($importProductList as $key => $value) {
	?>

		<div class="col-6-cus col-md-3-cus" >
			<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="<?php echo $value->discount ?>">
				<a href="" class="position-relative">
					<img src="<?php echo $value->thumbnail; ?>" class="img-fluid" alt="...">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href=""><?php echo $value->productName; ?></a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1"><?php echo $value->oldPrice; ?>
							<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-20 text-red-1">
							<?php echo $value->newPrice; ?>
							<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2 ">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>
</div>
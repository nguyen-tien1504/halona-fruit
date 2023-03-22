<style>
	.product-bg{
		background-image: url("public/demo/home/trai cay nk/Screenshot_4.png");
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		z-index: 1;
		display: grid;
		place-items: center;
	}
	.product-bg:before{
		content: "";
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: rgba(0,0,0,0.36);
		z-index: -1;

	}
	.product-bg .breadcrumb-item.active{
		color: inherit;
	}
	.product-bg .breadcrumb-item:before{
		color: inherit;
		opacity: 0.35;
	}
	.card-fruit{
		border-radius: 20px;
		overflow: hidden;
	}
	.product-carousel .card-fruit:before{
		content: attr(data-discount);
		position: absolute;
		color: white;
		width: 53px;
		height: 53px;
		background-color: var(--color-pink-1);
		top: 25px;
		left: 25px;
		border-radius: 50%;
		display: grid;
		place-items: center;
		z-index: 1;
	}
	/*	------------product-carousel-----------*/
	.product-carousel > button{
		bottom: unset;
		color: inherit;
		width: 24px;
		height: 24px;
		visibility: hidden;
		opacity: 0;
		transition: 0.3s all ease-in;
	}
	.product-carousel:hover > button{
		visibility: visible;
		opacity: 1;
	}
	.product-carousel > button:hover,
	.product-carousel > button:focus{
		color: var(--color-green-primary);
	}
	.product-carousel > button i:before{
		font-size: 24px;
		font-weight: 900 !important;
	}

	/*	------product-nav------*/
	.product-nav .active, 
	.product-nav > div:hover{
		border: 1px solid rgba(0,0,0,0.2);
	}
	
	.product-nav > div img{
		opacity: 0.5;
		transition: transform 0.5s ease-in;
	}
	.product-nav .active > img{
		opacity: 1;
	}
	.product-nav > div:hover > img{
		opacity: 1;
		transform: translateY(-8px);
	}

	.product-add{
		border: 1px solid #ddd;
		text-shadow: 1px 1px 1px #fff;
		height: 100%;
	}
	.product-add button{
		background-color: #f9f9f9;
		color: #666;
	}
	.product-add button:first-child{
		border: none;
		border-right: 1px solid #ddd;
	}
	.product-add button:last-child{
		border: none;
		border-left: 1px solid #ddd;
	}

	.suggest span{
		color: #2d2d2d;
	}
	.suggest p{
		border-top: 1px solid #ddd;
	}

	.product-social a{
		width: 33px;
		height: 33px;
		display: grid;
		place-items: center;
	}

	/*	--------product-des-----------*/
	.product-des-container > a{
		color: rgba(17,17,17,0.85);
		border-top: 2px solid var(--color-green-primary);
		border-left: 1px solid #fcbc12;
		border-right: 1px solid #fbb610;
		border-bottom: 1px solid white;
	}
	.product-des{
		margin-top: 3px;
		border: 1px solid #fcb811;
	}
	.product-des > p:first-child{
		border-left: 2px solid var(--color-green-primary);
	}

	/*	------cardfruit-----*/
	.product-related .card-fruit:hover{
		box-shadow: 2px 5px 19px #dadada;
	}
	.product-related .card-fruit > a:after{
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		transition: all 0.5s;
	}
	.product-related .card-fruit:hover > a:after{
		background-color: rgba(255, 255, 255, 0.28);
	}
	.product-related .card-fruit > a:before{
		content: attr(data-discount);
		position: absolute;
		color: white;
		width: 45px;
		height: 45px;
		background-color: var(--color-pink-1);
		top: 15px;
		left: 15px;
		border-radius: 50%;
		display: grid;
		place-items: center;
		z-index: 1;
	}
	@media (min-width: 768px) {
		.product-carousel .card-fruit:before{
			width: 58px;
			height: 58px;
		}
		.product-carousel > button{
			width: 32;
			height: 32;
		}
		.product-carousel > button i:before{
			font-size: 32px;
		}
		.product-nav > div img{
			width: 122px;
			height: 122px;
		}
		.product-related .card-fruit img{
			height: 200px;
		}
	}
</style>

<div class="row g-0 m-0">
	<div class="col-12 position-relative product-bg text-white py-3">
		<p class="font-roboto-2 fs-30 mb-2">Bom mỹ</p>
		<nav aria-label="breadcrumb" >
			<ol class="breadcrumb mb-3 mb-lg-0 fs-14 store-heading-breadcumb" >
				<li class="breadcrumb-item">
					<a href="#">Trang chủ</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					<a href="#">Các loại hạt dinh dưỡng</a>
				</li>
			</ol>
		</nav>
	</div>
</div>

<div class="row g-0 m-0 px-3 px-lg-6 py-5">
	<div class="col-12 col-lg-6">
		<div id="carouselExampleIndicators" class="carousel slide product-carousel" data-bs-ride="carousel" data-bs-interval="false">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="position-relative border-yellow card-fruit" data-discount="-10%">
						<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="carousel-item">
					<div class="position-relative border-yellow card-fruit" data-discount="-10%">
						<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="carousel-item">
					<div class="position-relative border-yellow card-fruit" data-discount="-10%">
						<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<button class="carousel-control-prev top-50 start-0 translate-middle-y ms-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<i class="bi bi-chevron-left"></i>
			</button>
			<button class="carousel-control-next top-50 end-0 translate-middle-y me-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<i class="bi bi-chevron-right"></i>
			</button>
		</div>

		<div class="mt-3 d-flex justify-content-between product-nav">
			<div class="position-relative active overflow-hidden">
				<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" width="66" height="66">
			</div>
			<div class="position-relative overflow-hidden">
				<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" width="66" height="66">
			</div>
			<div class="position-relative overflow-hidden">
				<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" width="66" height="66">
			</div>
			<div class="position-relative overflow-hidden">
				<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" width="66" height="66">
			</div>
		</div>
	</div>

	<div class="col-12 col-lg-6 ps-md-4 py-3">
		<div class="d-flex align-items-end mb-3">
			<p class="fs-15 text-grey-1 mb-0 text-decoration-underline"  style="line-height: 1;">200.000</p>
			<span class="fs-15 text-grey-1 text-decoration-underline pb-1">đ</span>
			<p class="fs-24 text-red-1 mb-0 ms-2" style="line-height: 1;">180.000<span class="text-decoration-underline">đ</span></p>
		</div>
		<p>Giá trị dinh dưỡng: Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức…</p>
		<div class="d-flex gap-4 align-items-center">
			<div class="product-add">
				<button class="px-2 py-1">-</button>
				<span class="px-2">1</span>
				<button class="px-2 py-1">+</button>
			</div>
			<button class="bg-primary-green rounded-pill py-2 px-4 border-0 text-white">Thêm vào giỏ hàng</button>
		</div>

		<div class="mt-5">
			<a href="" class="d-inline-block text-center py-1 px-5 bg-primary-green text-white rounded">
				<p class="mb-0 fs-18 fw-600">Mua ngay</p>
				<p class="mb-0">Gọi điện xác nhận và giao hàng tận nơi</p>
			</a>
		</div>

		<div class="fs-12 mt-4 suggest">
			<p class="text-green-primary mb-0 py-2">
				<span>Danh mục:</span> 
				<a href="">Các loại hạt dinh dưỡng, </a>
				<a href="">Các loại rau củ quả Oragnic, </a>
				<a href="">Nước ép, </a>
				<a href="">Trái cây nội địa</a>
			</p>
			<p class="text-green-primary mb-0 py-2">
				<span>Từ khóa:</span> 
				<a href="">ca chua da lat</a>
			</p>
		</div>

		<div class="d-flex gap-1 mt-3 text-white product-social">
			<a href="" class="bg-primary-green rounded-circle">
				<i class="bi bi-facebook"></i>
			</a>

			<a href="" class="bg-primary-green rounded-circle">
				<i class="bi bi-twitter"></i>
			</a>
			<a href="" class="bg-primary-green rounded-circle">
				<i class="bi bi-envelope"></i>
			</a>
			<a href="" class="bg-primary-green rounded-circle">
				<i class="bi bi-pinterest"></i>
			</a>
			<a href="" class="bg-primary-green rounded-circle">
				<i class="bi bi-linkedin"></i>
			</a>
		</div>
	</div>

	<div class="col-12 mt-5 product-des-container">
		<a href="" class="fs-24 font-roboto-2 fw-600 py-2 px-3">Mô tả</a>
		<div class="px-3 product-des py-4">
			<p class="fst-italic fs-20 ms-3 px-4">Giá trị dinh dưỡng: Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức khỏe, tốt cho tim mạch, ngăn ngừa tiến trình bệnh tiểu đường.</p>
			<div class="text-center">
				<img src="public/demo/home/trai cay nk/Screenshot_1.png" alt="" class="img-fluid d-inline-block">
			</div>
			<p>Cũng như Táo, Nho của Mỹ, Úc… đều được bảo quản trong môi trường lạnh đặc biệt từ khi hái, không chất bảo quản và các chất gây hại cho sức khỏe.</p>
			<div class="text-center">
				<img src="public/demo/home/trai cay nk/Screenshot_3.png" alt="" class="img-fluid d-inline-block">
			</div>
		</div>
	</div>
</div>

<div class="row m-0 g-0 px-lg-6 px-3 pb-5">
	<p class=" font-roboto-2 fw-700 fs-24 text-green-primary">SẢN PHẨM TƯƠNG TỰ</p>
	<div class="col-12 d-flex flex-wrap gap-2 gap-lg-3">
		<div class="col-6-cus col-md-4-cus col-lg-2-cus product-related">
			<div class="card card-fruit overflow-hidden bg-white border-yellow" >
				<a href="" class="position-relative" data-discount="-40%">
					<img src="public/demo/home/trai cay nk/Screenshot_4.png" class="w-100" alt="..." height="141">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href="">Bom mỹ</a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1">200.000<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-16 text-red-1">
							180.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2  py-2 ">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6-cus col-md-4-cus col-lg-2-cus product-related">
			<div class="card card-fruit overflow-hidden bg-white border-yellow" >
				<a href="" class="position-relative" data-discount="-20%">
					<img src="public/demo/home/trai cay nk/Screenshot_1.png" class="w-100" alt="..." height="141">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href="">Cà chua Đà Lạt</a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1">100.000<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-16 text-red-1">
							80.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2  py-2 ">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6-cus col-md-4-cus col-lg-2-cus product-related">
			<div class="card card-fruit overflow-hidden bg-white border-yellow" >
				<a href="" class="position-relative" data-discount="-25%">
					<img src="public/demo/home/trai cay nk/Screenshot_1.png" class="w-100" alt="..." height="141">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href="">Vải nhập khẩu</a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1">80.000<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-16 text-red-1">
							60.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2  py-2 ">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
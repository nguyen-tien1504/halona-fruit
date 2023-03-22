<style>
	.store-heading{
		z-index: 10;
	}
	.store-heading:before{
		content: "";
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color:  rgba(0, 0, 0, 0.453);
		z-index: -1;
	}

	/*	----------breadcumb--------*/
	.store-heading-breadcumb > .breadcrumb-item{
		color: white;
	}
	.store-heading-breadcumb > li.active{
		font-weight: bold;
	}
	.store-filter-form > select{
		background-color: rgba(255,255,255,0.2) ;
		border-color: rgba(255,255,255,0.09);
/*    	appearance:none;*/
}
.store-filter-form > select:focus{
	outline: none;
}

.store-filter-box > li:not(:first-child){
	border-top: 1px solid #ececec;
}
.store-filter-box > li a{
	font-size: 15px;
}
.store-filter-box > li a:hover{
	color: var(--color-green-primary);
}
.store-filter-box > li span{
	font-size: 0.7em;
	opacity: 0.5;
	line-height: 3em;
}
.store-filter-box > li button i{
	font-size: 0.7em;
}
.store-filter-box > li button:hover{
	opacity: 1;
}
.store-filter-box > li button{
	background-color: transparent;
	opacity: 0.6;
}
.store-filter-box .menu-sub{
	border-left: 1px solid #ececec;
	transition: all 0.3s ease-in;
	opacity: 0;
	max-height: 0;
	transform: scaleY(0);
	transform-origin: top;
}
.store-filter-box button{
	transition: 0.3s ease-in;
}
.store-filter-box button.active{
	transform: rotate(180deg);
	color: black;
	opacity: 1;
}


/*	---------card fruit----------*/

.card-fruit {
	border: 1px solid var(--color-yellow);
	border-radius: 20px;
}
.card-fruit:hover{
	box-shadow: 2px 5px 19px #dadada;
}
.card-fruit > a:after{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	transition: all 0.5s;
}
.card-fruit:hover > a:after{
	background-color: rgba(255, 255, 255, 0.28);
}
.card-fruit:before{
	content: attr(data-discount);
	position: absolute;
	color: white;
	width: 40px;
	height: 40px;
	background-color: var(--color-pink-1);
	top: 15px;
	left: 15px;
	border-radius: 50%;
	display: grid;
	place-items: center;
	z-index: 1;
}

/*------offcanvas mobile-------*/
.offcanvas-filter{
	max-width: 75%;
}

@media (min-width: 768px) {
	
	.offcanvas-filter{
		max-width: 50%;
	}
}
@media (min-width: 992px) {
	
}
</style>

<!-- store heading -->
<div class="row g-0 px-lg-6 bg-primary-green position-relative text-white store-heading">
	<div class="col-12 py-4 py-lg-3 d-flex flex-column flex-lg-row justify-content-lg-between align-items-center">
		<div>
			<p class="mb-2 mb-lg-1 font-roboto-2 fw-700 fs-24 text-center text-lg-start">Cửa hàng</p>
			<nav aria-label="breadcrumb" >
				<ol class="breadcrumb mb-3 mb-lg-0 fs-14 store-heading-breadcumb" >
					<li class="breadcrumb-item">
						<a href="#">Trang chủ</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						Cửa hàng
					</li>
				</ol>
			</nav>
		</div>

		<!-- offcanvas filter mobile -->
		<div class="d-lg-none py-3">
			<button class="text-white border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter" style="background-color: transparent;">
				<i class="bi bi-filter-square-fill"></i>
				Lọc
			</button>
			<div class="offcanvas offcanvas-start offcanvas-filter" tabindex="-1" id="offcanvasFilter" aria-labelledby="offcanvasTopLabel">
				<div class="offcanvas-body">
					<div class="">
						<p class="mb-0 text-uppercase bg-primary-green text-center text-white py-2">Danh mục sản phẩm</p>
						<ul class="mb-0 py-2 px-3 border-green store-filter-box">
							<li>
								<div class="d-flex align-items-center">
									<a href="" class="flex-grow-1 text-black-3">Các loại hạt dinh dưỡng</a>
									<span class="me-2">(4)</span>
									<button class="border-0 py-0 px-0">
										<i class="bi bi-chevron-down"></i>
									</button>
								</div>
								<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
									<li>
										<a href="">Hạnh nhân</a>
									</li>
									<li>
										<a href="">Macca</a>
									</li>
									<li>
										<a href="">Óc chó</a>
									</li>
								</ul>
							</li>

							<li>
								<div class="d-flex align-items-center">
									<a href="" class="flex-grow-1 text-black-3">Các loại rau củ quả Oragnic</a>
									<span class="me-2">(4)</span>
									<button class="border-0 py-0 px-0">
										<i class="bi bi-chevron-down"></i>
									</button>
								</div>
								<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
									<li>
										<a href="">Cà chua</a>
									</li>
									<li>
										<a href="">Carot</a>
									</li>
									<li>
										<a href="">Khoai tây</a>
									</li>
								</ul>
							</li>

							<li>
								<div class="d-flex align-items-center">
									<a href="" class="flex-grow-1 text-black-3">Chưa phân loại</a>
									<span>(0)</span>
								</div>
							</li>

							<li>
								<div class="d-flex align-items-center">
									<a href="" class="flex-grow-1 text-black-3">Nước ép</a>
									<span>(4)</span>
								</div>
							</li>

							<li>
								<div class="d-flex align-items-center">
									<a href="" class="flex-grow-1 text-black-3">Sản phẩm khác</a>
									<span>(4)</span>
								</div>
							</li>

							<li>
								<div class="d-flex align-items-center">
									<a href="" class="flex-grow-1 text-black-3">Trái cây nhập khẩu</a>
									<span class="me-2">(0)</span>
									<button class="border-0 py-0 px-0">
										<i class="bi bi-chevron-down"></i>
									</button>
								</div>
								<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
									<li>
										<a href="">Chery</a>
									</li>
									<li>
										<a href="">Nho mỹ</a>
									</li>
									<li>
										<a href="">Táo Emvy</a>
									</li>
								</ul>
							</li>

							<li>
								<div class="d-flex align-items-center">
									<a href="" class="flex-grow-1 text-black-3">Trái cây nội địa</a>
									<span class="me-2">(4)</span>
									<button class="border-0 py-0 px-0 ">
										<i class="bi bi-chevron-down"></i>
									</button>
								</div>
								<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
									<li>
										<a href="">Cam Organic</a>
									</li>
									<li>
										<a href="">Dưa hấu</a>
									</li>
									<li>
										<a href="">Quyt Organic</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div>
			<form action="" class="store-filter-form ">
				<select name="" id="" class="rounded-pill py-2 px-3 text-white ">
					<option value="menu_order" selected="selected" class="text-dark">Thứ tự mặc định</option>
					<option value="popularity" class="text-dark">Thứ tự theo mức độ phổ biến</option>
					<option value="rating" class="text-dark">Thứ tự theo điểm đánh giá</option>
					<option value="date" class="text-dark">Mới nhất</option>
					<option value="price" class="text-dark">Thứ tự theo giá: thấp đến cao</option>
					<option value="price-desc" class="text-dark">Thứ tự theo giá: cao xuống thấp</option>
				</select>
			</form>
		</div>
	</div>
</div>

<!-- fruits -->
<div class="row g-0 m-0 px-lg-6 py-5">
	<div class="col-12 col-lg-3 d-none d-lg-block">
		<p class="mb-0 text-uppercase bg-primary-green text-center text-white py-2">Danh mục sản phẩm</p>
		<ul class="mb-0 py-2 px-3 border-green store-filter-box">
			<li>
				<div class="d-flex align-items-center">
					<a href="" class="flex-grow-1 text-black-3">Các loại hạt dinh dưỡng</a>
					<span class="me-2">(4)</span>
					<button class="border-0 py-0 px-0">
						<i class="bi bi-chevron-down"></i>
					</button>
				</div>
				<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
					<li>
						<a href="">Hạnh nhân</a>
					</li>
					<li>
						<a href="">Macca</a>
					</li>
					<li>
						<a href="">Óc chó</a>
					</li>
				</ul>
			</li>

			<li>
				<div class="d-flex align-items-center">
					<a href="" class="flex-grow-1 text-black-3">Các loại rau củ quả Oragnic</a>
					<span class="me-2">(4)</span>
					<button class="border-0 py-0 px-0">
						<i class="bi bi-chevron-down"></i>
					</button>
				</div>
				<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
					<li>
						<a href="">Cà chua</a>
					</li>
					<li>
						<a href="">Carot</a>
					</li>
					<li>
						<a href="">Khoai tây</a>
					</li>
				</ul>
			</li>

			<li>
				<div class="d-flex align-items-center">
					<a href="" class="flex-grow-1 text-black-3">Chưa phân loại</a>
					<span>(0)</span>
				</div>
			</li>

			<li>
				<div class="d-flex align-items-center">
					<a href="" class="flex-grow-1 text-black-3">Nước ép</a>
					<span>(4)</span>
				</div>
			</li>

			<li>
				<div class="d-flex align-items-center">
					<a href="" class="flex-grow-1 text-black-3">Sản phẩm khác</a>
					<span>(4)</span>
				</div>
			</li>

			<li>
				<div class="d-flex align-items-center">
					<a href="" class="flex-grow-1 text-black-3">Trái cây nhập khẩu</a>
					<span class="me-2">(0)</span>
					<button class="border-0 py-0 px-0">
						<i class="bi bi-chevron-down"></i>
					</button>
				</div>
				<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
					<li>
						<a href="">Chery</a>
					</li>
					<li>
						<a href="">Nho mỹ</a>
					</li>
					<li>
						<a href="">Táo Emvy</a>
					</li>
				</ul>
			</li>

			<li>
				<div class="d-flex align-items-center">
					<a href="" class="flex-grow-1 text-black-3">Trái cây nội địa</a>
					<span class="me-2">(4)</span>
					<button class="border-0 py-0 px-0 ">
						<i class="bi bi-chevron-down"></i>
					</button>
				</div>
				<ul class="mb-0 mb-2 ms-1 ps-2 menu-sub">
					<li>
						<a href="">Cam Organic</a>
					</li>
					<li>
						<a href="">Dưa hấu</a>
					</li>
					<li>
						<a href="">Quyt Organic</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	
	<!-- cards -->
	<div class="col-12 px-3 px-lg-0 ps-lg-4 col-lg-9 d-flex gap-2 gap-lg-0 justify-content-between flex-wrap fs-14">
		<div class="col-6-cus col-md-4-cus col-lg-3-cus">
			<div class="card card-fruit overflow-hidden bg-white" data-discount="-10%">
				<a href="" class="position-relative">
					<img src="public/demo/home/trai cay nk/Screenshot_4.png" class="img-fluid" alt="...">
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

		<div class="col-6-cus col-md-4-cus col-lg-3-cus" >
			<div class="card card-fruit overflow-hidden bg-white" data-discount="-25%">
				<a href="index.php?page=sanpham" class="position-relative">
					<img src="public/demo/home/trai cay nk/Screenshot_3.png" class="img-fluid" alt="...">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href="">Vải nhập khẩu</a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1">
							80.000<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-16 text-red-1">
							60.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 py-2">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6-cus col-md-4-cus col-lg-3-cus" >
			<div class="card card-fruit overflow-hidden bg-white" data-discount="-40%">
				<a href="index.php?page=sanpham" class="position-relative">
					<img src="public/demo/home/trai cay nk/Screenshot_2.png" class="img-fluid" alt="...">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href="index.php?page=sanpham">Vải nhập khẩu</a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1">
							50.000<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-16 text-red-1">
							30.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 py-2">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6-cus col-md-4-cus col-lg-3-cus" >
			<div class="card card-fruit overflow-hidden bg-white" data-discount="-20%">
				<a href="index.php?page=sanpham" class="position-relative">
					<img src="public/demo/home/trai cay nk/Screenshot_1.png" class="img-fluid" alt="...">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href="">Cà chua Đà Lạt</a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1">
							100.000<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-16 text-red-1">
							80.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 py-2">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		const buttonList = $(".store-filter-box button")
		// const menuSubList = $(".store-filter-box .menu-sub")
		const menuSubList = document.querySelectorAll(".store-filter-box .menu-sub")
		buttonList.each(function(index){
			$(this).click(function(){
				const checkActive = $(this).hasClass("active")
				if (checkActive) {
					$(this).removeClass("active")
					menuSubList[index].style.opacity = "0"
					menuSubList[index].style.maxHeight = "0"
					menuSubList[index].style.transform = "scaleY(0)"
				} else{
					$(this).addClass("active")
					menuSubList[index].style.opacity = "1"
					menuSubList[index].style.maxHeight = "100px"
					menuSubList[index].style.transform = "scaleY(1)"		
				}

			})
		})
	})
</script>
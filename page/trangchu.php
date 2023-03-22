<style>
	/*	banner */

	.home-banner{
		cursor: pointer;
	}
	.home-banner .carousel-indicators > button{
		width: 12px;
		height: 12px;
	}

	.home-banner .carousel-control{
		opacity: 0;
		width: 36px;
		height: 36px;
		border: 2px solid white;
		transition: all 0.4s ease;
		visibility: hidden;
	}
	.home-banner .carousel-control i{
		width: 20px;
		height: 20px;
	}
	.home-banner .carousel-control i:before{
		font-size: 20px;
		font-weight: 700 !important;
	}
	.home-banner .carousel-control:hover{
		background-color: var(--color-green-primary);
		border: 2px solid var(--color-green-primary);

	}
	.home-banner .carousel-control-prev{
		margin-left: 5rem;
	}
	.home-banner .carousel-control-next{
		margin-right: 5rem;
	}
	.home-banner:hover .carousel-control{
		visibility: visible;
		opacity: 1;
	}
	.home-banner:hover .carousel-control-prev{
		margin-left: 4rem;
	}
	.home-banner:hover .carousel-control-next{
		margin-right: 4rem;
	}


	/* home banner list */
	.home-banner-list{
		height: 153px;
		border-radius: 15px;
		border: 3px solid var(--color-yellow);
	}
	.home-banner-list > div{
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		transition: all 0.5s;
	}
	.home-banner-list > div:after{
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		transition: all 0.5s;
		background-color: var(--color-black-1);
		opacity: 0;
	}
	.home-banner-list:hover > div{
		transform: scale(1.1);
	}
	.home-banner-list:hover > div:after{
		opacity: 0.3;
	}


	/*	trai cay nhap khau*/
	.home-heading b{
		height: 2px;
		opacity: 0.1;
	}
	.card-fruit {
		border: 1px solid var(--color-yellow);
		border-radius: 20px;
	}
	.card-fruit:hover{
		box-shadow: 2px 5px 19px #dadada;
	}
	.card-fruit > a:after,
	.news-card > div:first-child:after{
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		transition: all 0.5s;
	}
	.card-fruit:hover > a:after,
	.news-card:hover > div:first-child:after{
		background-color: rgba(255, 255, 255, 0.28);
	}
	.card-fruit:before{
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

	.col-6-cus{
		flex: 0 0 auto;
		width: 48%;
	}

	/*	----trai cay nhap khau img*/
	.fruit-img > img:last-child{
		left: 45%;
		bottom: -18px;
	}

	/*	----cac loai nuoc ep----*/
	.home-juices{
		border-top: 5px solid var(--color-yellow);
		border-bottom: 5px solid var(--color-yellow);
		background-image: url("public/demo/home/banner-home-1-1536x520.png");
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		z-index: 1;
	}
	.home-juices:before{
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		background-color: rgba(255, 255, 255, 0.53);
		z-index: -1;
	}

	/*	--------co the ban can------*/
	
	
	.news-card:hover{
		border: 1px solid var(--color-yellow);
	}

	.form-news > *:not(p, button){
		font-size: 15px;
	    box-shadow: 0px 0px;
	    background: #fffdf1;
	    border: 1px solid var(--color-yellow);
	    color: #333;
	}
	.form-news > *:not(p, button):focus{
		outline: none;
	}
	.form-news,
	.news-video{
		border: 1px solid var(--color-yellow);
		padding: 20px;
    	border-radius: 20px;
    	box-shadow: 2px 2px 10px #fdc215;
	}
	.news-video{
    	height: 189px;
	}
	@media (min-width: 768px) {
		.home-banner img{
			height: 271.5px;
		}

		.home-banner-list{
			height: 110px;
		}

		.col-md-3-cus{
			flex: 0 0 auto;
			width: 23%;
		}

		.fruit-img > img:first-child{
			width: 418px;
		}
		.fruit-img > img:last-child{
			width: 369px;
		}
		.fruit-img > img:last-child{
			bottom: -30px;
		}
		.news-card span:after{
			content: "";
			position: absolute;
			top: calc(100% + 0.7em);
			left: 0;
			width: 30px;
			height: 2px;
			background-color: rgba(0,0,0,0.1);
		}
		.col-md-12{
			width: 100%;
			flex: 0 0 auto;
		}
		.news-card img{
			width: 155px;
			height: 150px;
		}
		.news-video{
	    	height: 200px;
		}
	}
	@media (min-width: 992px) {
		.home-banner img{
			height: 505px;
		}

		.home-banner-list{
			height: 153px;
		}
		.fruit-img > img:first-child{
			width: 597px;
		}
		.fruit-img > img:last-child{
			width: 527px;
		}
		.fruit-img > img:last-child{
			left: 44%;
			bottom: -45px;
		}
		.news-card img{
			width: 225px;
			height: 100%;
		}
	}
</style>

<!-- banner -->
<div class="row g-0 m-0 home-banner">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="rounded-circle active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="rounded-circle"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="public/demo/home/banner-home-1-1536x520.png" class=" w-100" alt="..." height="135">
			</div>
			<div class="carousel-item">
				<img src="public/demo/home/banner_list12.jpg" class=" w-100" alt="..." height="135">
			</div>
		</div>
		<button class="carousel-control carousel-control-prev rounded-circle top-50 start-0 translate-middle-y" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<i class="bi bi-chevron-left"></i>
		</button>
		<button class="carousel-control carousel-control-next rounded-circle top-50 end-0 translate-middle-y" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<i class="bi bi-chevron-right"></i>
		</button>
	</div>
</div>

<!-- home banner list -->
<div class="row m-0 px-lg-6 mt-5 gy-3 gy-lg-0 gx-3">
	<div class="col-12 col-md-4">
		<div class="home-banner-list overflow-hidden position-relative">
			<div class="position-absolute" style="background-image: url('public/demo/home/banner1.png');"></div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="home-banner-list overflow-hidden position-relative">
			<div class="position-absolute" style="background-image: url('public/demo/home/banner2.png');"></div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="home-banner-list overflow-hidden position-relative">
			<div class="position-absolute" style="background-image: url('public/demo/home/banner3.png');"></div>
		</div>
	</div>
</div>

<!-- danh sach trai cay -->
<div class="row m-0 g-0 mt-5 py-5" style="background-color:rgb(255, 253, 241)">
	<!-- ------trai cay nhap khau------ -->
	<div class="col-12 px-2 px-lg-6">
		<!-- heading -->
		<p class="mb-0 d-flex gap-2 align-items-center home-heading">
			<b class="flex-grow-1 bg-black-1"></b>
			<span class="fs-30 text-green-primary fw-600">TRÁI CÂY NHẬP KHẨU</span>
			<b class="flex-grow-1 bg-black-1"></b>
		</p>
		<p class="text-center text-black-2">Là nhà cung cấp thực phẩm tươi sạch hàng đầu khu vực phía nam</p>

		<!-- cards -->
		<div class="col-12 d-flex gap-2 gap-lg-0 justify-content-between flex-wrap">
			<div class="col-6-cus col-md-3-cus" >
				<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-10%">
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
							<p class="mb-2 fs-20 text-red-1">
								180.000<span class="text-decoration-underline">đ</span>
							</p>
						</div>
						<div class="text-center">
							<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2 ">Thêm vào giỏ hàng</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6-cus col-md-3-cus" >
				<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-25%">
					<a href="" class="position-relative">
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
							<p class="mb-2 fs-20 text-red-1">
								60.000<span class="text-decoration-underline">đ</span>
							</p>
						</div>
						<div class="text-center">
							<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2">Thêm vào giỏ hàng</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6-cus col-md-3-cus" >
				<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-40%">
					<a href="" class="position-relative">
						<img src="public/demo/home/trai cay nk/Screenshot_2.png" class="img-fluid" alt="...">
					</a>
					<div class="card-body px-2">
						<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
							<a href="">Vải nhập khẩu</a>
						</h5>
						<div class="card-text d-flex align-items-center justify-content-center gap-2">
							<p class="mb-2 text-decoration-line-through text-grey-1">
								50.000<span class="text-decoration-underline">đ</span>
							</p>
							<p class="mb-2 fs-20 text-red-1">
								30.000<span class="text-decoration-underline">đ</span>
							</p>
						</div>
						<div class="text-center">
							<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2">Thêm vào giỏ hàng</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6-cus col-md-3-cus" >
				<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-20%">
					<a href="" class="position-relative">
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
							<p class="mb-2 fs-20 text-red-1">
								80.000<span class="text-decoration-underline">đ</span>
							</p>
						</div>
						<div class="text-center">
							<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2">Thêm vào giỏ hàng</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- xem them -->
		<div class="text-center mt-5">
			<a href="" class="text-green-primary rounded-pill border-green px-3 py-2 more-link">Xem thêm</a>
		</div>

		<!-- trai cay nhap khau img -->
		<div class="container px-5">
			<div class="position-relative px-lg-5 fruit-img">
				<img src="public/demo/home/trai cay nk/banner-main-002-5.png" alt="" class="img-fluid" width="210">
				<img src="public/demo/home/trai cay nk/banner-main-003-2.png" alt="" class="img-fluid position-absolute " width="185">
			</div>
		</div>
	</div>


	<!-- ------trai cay noi dia------ -->
	<div class="col-12 px-2 mt-4 px-lg-6">
		<!-- heading -->
		<p class="mb-0 d-flex gap-2 align-items-center home-heading">
			<b class="flex-grow-1 bg-black-1"></b>
			<span class="fs-30 text-green-primary fw-600">TRÁI CÂY NỘI ĐỊA</span>
			<b class="flex-grow-1 bg-black-1"></b>
		</p>
		<p class="text-center text-black-2">Có hàng ngàn mẫu hoa quả tươi đủ loại cho bạn chọn!</p>

		<!-- cards -->
		<?php require"data/import-fruit.php" ?>

		<!-- xem them -->
		<div class="text-center mt-5">
			<a href="" class="text-green-primary rounded-pill border-green px-3 py-2 more-link">Xem thêm</a>
		</div>
	</div>
</div>


<!-- cac loai nuoc ep -->
<div class="row m-0 g-0 home-juices position-relative py-3">
	<div class="col-12 px-lg-6">
		<!-- heading -->
		<p class="mb-0 d-flex gap-2 align-items-center home-heading">
			<b class="flex-grow-1 bg-black-1"></b>
			<span class="fs-30 text-green-primary fw-600">CÁC LOẠI NƯỚC ÉP</span>
			<b class="flex-grow-1 bg-black-1"></b>
		</p>
		<p class="text-center text-black-2">Mang lại sự sản khoái khi thưởng thức nước ép tại Halona Fruits</p>
	</div>

	<!-- cards -->
	<div class="py-4 col-12 px-2 px-lg-6 d-flex gap-2 gap-lg-0 justify-content-between flex-wrap">
		<div class="col-6-cus col-md-3-cus" >
			<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-10%">
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
						<p class="mb-2 fs-20 text-red-1">
							180.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2 ">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6-cus col-md-3-cus" >
			<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-25%">
				<a href="" class="position-relative">
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
						<p class="mb-2 fs-20 text-red-1">
							60.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6-cus col-md-3-cus" >
			<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-40%">
				<a href="" class="position-relative">
					<img src="public/demo/home/trai cay nk/Screenshot_2.png" class="img-fluid" alt="...">
				</a>
				<div class="card-body px-2">
					<h5 class="card-title text-center font-roboto-2 text-pink-1 mb-1">
						<a href="">Vải nhập khẩu</a>
					</h5>
					<div class="card-text d-flex align-items-center justify-content-center gap-2">
						<p class="mb-2 text-decoration-line-through text-grey-1">
							50.000<span class="text-decoration-underline">đ</span>
						</p>
						<p class="mb-2 fs-20 text-red-1">
							30.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6-cus col-md-3-cus" >
			<div class="card card-fruit position-relative overflow-hidden bg-white" data-discount="-20%">
				<a href="" class="position-relative">
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
						<p class="mb-2 fs-20 text-red-1">
							80.000<span class="text-decoration-underline">đ</span>
						</p>
					</div>
					<div class="text-center">
						<a href="#" class="bg-primary-green rounded-pill text-white px-2 px-lg-4 py-2">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- co the ban can -->
<div class="row m-0 g-0 px-md-3 px-lg-6 pt-5" style="background-color: rgb(243, 243, 243); padding-bottom: 7rem;">

	<!-- heading -->
	<div class="col-12 col-md-8">
		<p class="mb-0 d-flex gap-2 align-items-center home-heading">
			<b class="flex-grow-1 bg-black-1"></b>
			<span class="fs-30 text-green-primary fw-600">“CÓ THỂ BẠN CẦN”</span>
			<b class="flex-grow-1 bg-black-1"></b>
		</p>
	</div>

	<!-- news -->
	<div class="col-12 col-md-8">
		<!-- tin tuc -->
		<div class="mt-3 px-2 px-md-0 d-flex flex-wrap justify-content-between flex-md-column gap-2 gap-lg-4">
			<a href="" class="d-inline-block d-md-flex bg-white news-card rounded overflow-hidden col-6-cus col-md-12 ">
				<div  class="position-relative m-auto m-lg-0">
					<img src="public/demo/home/news/blog-img-6.jpg" alt="" width="191" height="149">
				</div>
				<div class="p-2 py-md-3 px-md-4">
					<p class="mb-1 text-green-primary fs-20 font-roboto-2">Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</p>
					<span class="fs-12 position-relative">16 Tháng Một, 2019</span>
					<p class="mt-3 mb-0 d-none d-md-block">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện lợi. Nhưng người trồng cũng cần ...</p>
				</div>
			</a>
			<a href="" class="d-inline-block d-md-flex bg-white news-card rounded overflow-hidden col-6-cus col-md-12">
				<div class="position-relative m-auto m-lg-0">
					<img src="public/demo/home/news/blog-img-7.jpg" alt="" width="191" height="149">
				</div>
				<div class="p-2 py-md-3 px-md-4">
					<p class="mb-1 text-green-primary fs-20 font-roboto-2">Eat Clean – bí kíp để có thân hình xinh như mơ của cô nàng 9x</p>
					<span class="fs-12 position-relative">16 Tháng Một, 2019</span>
					<p class="mt-3 mb-0 d-none d-md-block">Đối với nhiều người, “Eat Clean” vẫn còn mơ hồ như một đích đến xa xăm thì đối với cô gái 9x này hai từ ấy đã trở thành một phần của cuộc sống hàng ngày Trong bài viết được đăng ...</p>
				</div>
			</a>
			<a href="" class="d-inline-block d-md-flex bg-white news-card rounded overflow-hidden col-6-cus col-md-12">
				<div class="position-relative m-auto m-lg-0">
					<img src="public/demo/home/news/blog-img-9.jpg" alt=""  width="191" height="149">
				</div>
				<div class="p-2 py-md-3 px-md-4">
					<p class="mb-1 text-green-primary fs-20 font-roboto-2">KM: Tháng giải phóng mỡ thừa, da xấu, độc tố trong cơ thể</p>
					<span class="fs-12 position-relative">15 Tháng Một, 2019</span>
					<p class="mt-3 mb-0 d-none d-md-block">Tháng 4, hoà trong không khí giải phóng dân tộc, đối với chúng tôi, đây là tháng: GIẢI PHÓNG MỠ THỪA, KHÔNG CHỪA 1 LẠNG Kế hoạch cho những ngày nghỉ lớn của tháng 4 đã sẵn sàng, tuy nhiên bạn ...</p>
				</div>
			</a>
			<a href="" class="d-inline-block d-md-flex bg-white news-card rounded overflow-hidden col-6-cus col-md-12">
				<div class="position-relative m-auto m-lg-0">
					<img src="public/demo/home/news/blog-img-8.png" alt=""  width="191" height="149">
				</div>
				<div class="p-2 py-md-3 px-md-4">
					<p class="mb-1 text-green-primary fs-20 font-roboto-2">KM: Tháng giải phóng mỡ thừa, da xấu, độc tố trong cơ thể</p>
					<span class="fs-12 position-relative">15 Tháng Một, 2019</span>
					<p class="mt-3 mb-0 d-none d-md-block">Tháng 4, hoà trong không khí giải phóng dân tộc, đối với chúng tôi, đây là tháng: GIẢI PHÓNG MỠ THỪA, KHÔNG CHỪA 1 LẠNG Kế hoạch cho những ngày nghỉ lớn của tháng 4 đã sẵn sàng, tuy nhiên bạn ...</p>
				</div>
			</a>
		</div>
	</div>

	<!-- form -->
	<div class="col-12 px-2 col-md-4 ps-md-4 pe-md-0">
		<div class="mt-3">
			<form action="" class="form-news d-flex flex-column gap-3 bg-white pb-4">
				<p class="mb-1 fs-20 text-center text-green-primary fw-600">
					LIÊN HỆ TƯ VẤN MUA HÀNG
				</p>
				<input type="text" placeholder="Họ tên của bạn.." class="w-100 rounded p-2">
				<input type="text" placeholder="Số điện thoại..." class="w-100 rounded p-2">
				<textarea name="" id="" rows="5" placeholder="Nội dung cần tư vấn..." class="w-100 rounded p-2"></textarea>
				<button class="w-100 rounded-pill bg-yellow border-0 text-white py-2">Gửi liên hệ</button>
			</form>
		</div>
		<div class="news-video p-0 mt-4 overflow-hidden">
			<iframe src="https://www.youtube.com/embed/i493IC18WvY?feature=oembed" frameborder="0" width="100%" height="100%"></iframe>
		</div>
	</div>
</div>
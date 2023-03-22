<style>

	/* header top*/
	.nav-link a{
		color: rgba(255,255,255,0.8);
		transition: all 0.3s;
	}
	.nav-link a:hover{
		color: white;
	}

	/* header bottom */
	.header-search input{
		color: #333;
		border: 1px solid #ddd;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
	.header-search button{
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	.header-search input:focus,
	.header-bottom-offcanvas input:focus{
		outline: none;
	}
	.header-bottom-nav-link > li:last-child > a,
	.cart-mobile{
		border: 1px solid var(--color-black-1);
		border-radius: 5px;
	}
	.header-bottom-nav-link > li:last-child > a:hover{
		border: 1px solid var(--color-green-primary);
	}
	.header-bottom-nav-link a:hover,
	.more-link:hover{
		background-color: var(--color-green-primary);
		color: white;
		transition: all 0.3s;
	}


	/*	dropdown*/
	.header-dropdown > li:not(:last-child){
		border-bottom: 1px solid #ececec;
	}
	.header-dropdown{
		top: calc(100% + 0.25rem);
		color: rgba(102,102,102,0.85);
		box-shadow: 1px 1px 15px rgba(0,0,0,0.15);
		border: 2px solid #ddd;
		width: 150%;
		z-index: 100;
		visibility: hidden;
	}
	.header-dropdown:before{
		content: "";
		position: absolute;
		bottom: 100%;
		left: 30%;
		width: 0;
		height: 0;
		border-left: 8px solid transparent;
		border-right: 8px solid transparent;
		border-bottom: 8px solid white;
	}
	.header-bottom-nav-link li:hover .header-dropdown{
		visibility: visible;
	}
	.header-bottom-nav-link .active{
		background-color: var(--color-green-primary);
		color: white;
	}
/*	0ffcanvas mobile*/

.header-bottom-offcanvas > button i:before{
	font-size: 24px;
	font-weight: 600 !important;
}
.header-bottom-offcanvas .offcanvas-backdrop{
	background-color: #669933;
}
.header-bottom-offcanvas .offcanvas-backdrop.show{
	opacity: 0.85;
}
.header-bottom-offcanvas .offcanvas-top{
	height: 100vh;
}

@media (min-width: 768px){
	.logo-header{
		width: 196px;
	}

	.header-bottom-offcanvas input{
		width: 30% !important;
	}
	.header-bottom-offcanvas ul{
		color: rgba(255,255,255,0.8) !important;
	}
}
@media (min-width: 992px) {
	.px-lg-6{
		padding-left: 8vw !important;
		padding-right: 8vw !important;
	}
}
</style>

<div class="row g-0 m-0" style="box-shadow: 1px 1px 10px rgba(0,0,0,0.15)">
	<!-- -------header top------------ -->
	<div class="col-12 py-2 px-lg-6 px-2 fs-14 bg-primary-green d-flex justify-content-center justify-content-lg-between">
		<!-- -----header left------- -->
		<p class="mb-0 text-white ">Chuyên cung cấp thực phẩm sạch | Halona Fruist</p>

		<!-- ------header right-------- -->
		<div class="d-none d-lg-block">
			<ul class="mb-0 p-0 nav-link d-flex gap-2">
				<li>
					<a href="">Tài khoản</a>
				</li>
				<li>
					<a href="">Thanh toán</a>
				</li>
				<li>
					<a href="">Cửa hàng</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- -------header bottom------------ -->
	<div class="col-12 px-lg-6 px-3 py-1 d-flex justify-content-between align-items-center bg-white" id="header">
		<!-- offcanvas mobile -->
		<div class="header-bottom-offcanvas d-lg-none">
			<button class="border-0 bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
				<i class="bi bi-list"></i>
			</button>

			<div class="offcanvas offcanvas-top border-0 " tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="background-color:transparent;">
				<div class="offcanvas-header p-1 justify-content-end">

					<button type="button" class="text-white border-0" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color:transparent;">
						<i class="bi bi-x-lg fs-24"></i>
					</button>

				</div>
				<div class="offcanvas-body p-0 d-flex flex-column justify-content-center">

					<form action="" class="d-flex justify-content-center fs-14 mb-4 px-5">
						<input type="text" class="px-3 w-100 border-0" placeholder="Tìm kiếm…">
						<button class="border-0 text-white py-1 px-2 fs-16" style="background-color: #275307">
							<i class="bi bi-search"></i>
						</button>
					</form>

					<ul class="mb-0 px-0 d-flex flex-column gap-4 text-black font-roboto-2 fs-24 fw-600">
						<li class="text-center">
							<a href="index.php" class="py-3">Trang chủ</a>
						</li>
						<li class="text-center">
							<a href="index.php?page=gioithieu" class="py-3">
								Giới thiệu
							</a>
						</li>
						<li class="text-center">
							<a href="index.php?page=cuahang" class="py-3">
								Cửa hàng #Halona
								<i class="bi bi-chevron-down"></i>
							</a>
						</li>
						<li class="text-center">
							<a href="index.php?page=lamdep" class="py-3">
								Làm đẹp
							</a>
						</li>
						<li class="text-center">
							<a href="index.php?page=tintuc" class="py-3">
								Tin tức
							</a>
						</li>
						<li class="text-center">
							<a href="index.php?page=lienhe" class="py-3">
								Liên hệ
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<a href="index.php">
			<img src="public/demo/halonalogo.png" alt="" width="117" class="logo-header">
		</a>

		<div class="header-search px-4 flex-grow-1 d-none d-lg-block">
			<form action="" class="d-flex h-100">
				<input type="text" class="px-2 w-100" placeholder="Tìm kiếm…">
				<button class="bg-primary-green border-0 text-white py-2 px-3">
					<i class="bi bi-search"></i>
				</button>
			</form>
		</div>

		<div class="d-none d-lg-block">
			<ul class="mb-0 px-0 d-flex gap-2 text-black-1 header-bottom-nav-link">
				<li>
					<a href="index.php" class="p-2 rounded-pill">Trang chủ</a>
				</li>
				<li>
					<a href="index.php?page=gioithieu" class="p-2 rounded-pill">
						Giới thiệu
					</a>
				</li>
				<li class="position-relative">
					<a href="index.php?page=cuahang" class="p-2 rounded-pill">
						Cửa hàng #Halona
						<i class="bi bi-chevron-down"></i>
					</a>
					<ul class="mb-0 ps-0 bg-white position-absolute header-dropdown">
						<li>
							<a href="" class="px-3 py-2 d-inline-block w-100">
								Trái cây nội địa
							</a>
						</li>
						<li>
							<a href="" class="px-3 py-2 d-inline-block w-100">
								Trái cây nhập khẩu
							</a>
						</li>
						<li>
							<a href="" class="px-3 py-2 d-inline-block w-100">
								Các loại hạt dinh dưỡng
							</a>
						</li>
						<li>
							<a href="" class="px-3 py-2 d-inline-block w-100">
								Các loại rau củ quả Oragnic
							</a>
						</li>
						<li>
							<a href="" class="px-3 py-2 d-inline-block w-100">
								Nước ép
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.php?page=lamdep" class="p-2 rounded-pill">
						Làm đẹp
					</a>
				</li>
				<li>
					<a href="index.php?page=tintuc" class="p-2 rounded-pill">
						Tin tức
					</a>
				</li>
				<li>
					<a href="index.php?page=lienhe" class="p-2 rounded-pill">
						Liên hệ
					</a>
					
				</li>
				<li>
					<a href="" class="p-2">
						<i class="bi bi-bag-fill"></i>
					</a>
				</li>
			</ul>
		</div>

		<div class="d-lg-none">
			<a href="" class="p-2 cart-mobile">
				<i class="bi bi-bag-fill"></i>
			</a>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		const mql = window.matchMedia("(min-width: 768px)")
		const header = $("#header") 
		$(window).scroll(function(){
			if ($(this).scrollTop() >= 150) {
				header.addClass("fixed-top")
				if(mql.matches){ 
					$(".logo-header").css({"width" : "117px"})
				}

			} else {
				header.removeClass("fixed-top")
				if(mql.matches){
					$(".logo-header").css({"width" : "196px"})
				}
			}
		})

		// $(".header-bottom-nav-link a").click(function(){
		// 	localStorage.setItem('activeTab', $(this).text());
		// })
		// const activeTab = localStorage.getItem('activeTab');
		// if(activeTab){
		// 	$(".header-bottom-nav-link .active").removeClass("active")
	    //     $('.header-bottom-nav-link a:contains(' + activeTab +')').addClass("active")
	    // } else{
	    //     $('.header-bottom-nav-link a:contains(Trang chủ)').addClass("active")
	    // }
	    const searchParams = new URLSearchParams(window.location.search)
	    if (searchParams.has("page")) {
	    	const activeTab = searchParams.get('page')
	    	$(".header-bottom-nav-link .active").removeClass("active")
	    	$(`.header-bottom-nav-link a[href*=${activeTab}]`).addClass("active")
	    } else{
	    	$('.header-bottom-nav-link a[href="index.php"]').addClass("active")
	    }
	})
</script>
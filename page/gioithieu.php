<style>
	/*	---------form--------- */
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
	.form-news{
		border: 1px solid var(--color-yellow);
		padding: 20px;
		border-radius: 20px;
		box-shadow: 2px 2px 10px #fdc215;
	}

	.intro{
		background-image: url("public/demo/home/banner-home-1-1536x520.png");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		z-index: 1;
	}
	

	/* -----------ve chung toi--------- */
	.home-heading b{
		height: 2px;
		opacity: 0.1;
	}

	/*	---------why choose us--------*/
	.why-choose-us{
		z-index: 0;
	}
	.why-choose-us:before{
		content: "";
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color:  rgba(0, 0, 0, 0.453);
		z-index: -1;
	}

	/*	---------fruit img--------*/
	.fruit-img-intro:before{
		content: "";
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: rgba(0, 0, 0, 0.29);
		transition: 0.3s;
		opacity: 0;
	}
	.fruit-img-intro:hover:before{
		opacity: 1;
	}
	@media (min-width: 768px) {
		.fruit-img-intro > img{
			height: 250px;
		}
	}

	@media (min-width: 992px) {
		.fruit-img-intro > img{
			height: 274px;
		}
	}
</style>

<!-- gioi thieu form -->
<div class="row m-0 g-0 px-lg-6 pb-3 intro d-none d-lg-flex position-relative">
	<div class="col-12 px-2 col-md-4 ps-md-4 pe-md-0">
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
</div>

<!-- ve chung toi -->
<div class="row m-0 g-0 px-3 px-lg-6 align-items-center py-3">
	<div class="col-12 col-md-6">
		<p class="fs-27 fw-700 font-roboto-2 text-black-1">
			VỀ CHÚNG TÔI
		</p>
		<p class="fs-16">
			Công ty cổ phần thực phẩm dinh dưỡng  là Công ty chuyên cung cấp các loại trái cây hoa quả, rau sạch. Chúng tôi cam kết chất lượng sản phẩm sạch từ thiên nhiên không quahóa chất.
		</p>
		<p class="fs-16">
			Rau củ quả cảu chúng tôi sẽ mang đến khách hàng một sản phẩm chất lượng, một thương hiệu đáng tin cậy. Công ty chúng tôi mong muốn có cơ hội được phục vụ quý khách và góp phần phát triền ngànhthực phẩm sạch tại Việt Nam
		</p>
	</div>

	<div class="col-12 col-md-6">
		<img src="public/demo/gioi thieu/banner-main-002-1.png" alt="" class="img-fluid">
	</div>
</div>

<!-- vi sao ban chon chung toi -->
<div class="row m-0 g-0 bg-primary-green py-4 px-lg-6 text-white position-relative fs-16 why-choose-us">
	<!-- heading -->
	<p class="mb-2 d-flex gap-2 align-items-center home-heading">
		<b class="flex-grow-1 bg-black-1"></b>
		<span class="fs-27 fw-700 font-roboto-2 text-center">VÌ SAO CHỌN SẢN PHẨM CỦA CHÚNG TÔI</span>
		<b class="flex-grow-1 bg-black-1"></b>
	</p>
	<p class="text-center">
		Rau củ quả cảu chúng tôi sẽ mang đến khách hàng một sản phẩm chất lượng, một thương hiệu đáng tin cậy. Công ty chúng tôi mong muốn có cơ hội được phục vụ quý khách và góp phần phát triền ngànhthực phẩm sạch tại Việt Nam
	</p>
	<div class="col-12 d-flex justify-content-between gap-5 gap-md-0 flex-wrap my-5">
		<div class="col-12 col-md-4 d-flex gap-2 flex-column align-items-center">
			<img src="public/demo/gioi thieu/q1-2-370x110-1-300x89.png" alt="" width="205">
			<h5 class="fw-600 font-roboto-2 text-center mb-0">MIỄN PHÍ VẬN CHUYỂN</h5>
			<p class="text-center mb-0">Bán kính 2km</p>
		</div>
		<div class="col-12 col-md-4 d-flex gap-2 flex-column align-items-center">
			<img src="public/demo/gioi thieu/q2-2-370x110-1-300x89.png" alt="" width="205">
			<h5 class="fw-600 font-roboto-2 text-center mb-0">Hỗ trợ 24/7</h5>
			<p class="text-center mb-0"> Hotline: 0906.399.613</p>
		</div>
		<div class="col-12 col-md-4 d-flex gap-2 flex-column align-items-center">
			<img src="public/demo/gioi thieu/q3-2-370x110-1-300x89.png" alt="" width="205">
			<h5 class="fw-600 font-roboto-2 text-center mb-0">Giờ làm việc</h5>
			<p class="text-center mb-0">T2 – T7 Giờ hành chính</p>
		</div>
	</div>
</div>

<!-- fruit img -->
<div class="row gy-0 gx-2 px-3 m-0 py-5 px-lg-6">
	<div class="col-6 col-md-4 col-lg-3">
		<a href="" class="d-inline-block position-relative fruit-img-intro">
			<img src="public/demo/home/trai cay nk/Screenshot_1.png" alt="" width="100%" height="181">
		</a>
	</div>
	<div class="col-6 col-md-4 col-lg-3">
		<a href="" class=" position-relative fruit-img-intro">
			<img src="public/demo/home/trai cay nk/Screenshot_2.png" alt="" width="100%" height="181">
		</a>
	</div>
	<div class="col-6 col-md-4 col-lg-3">
		<a href="" class=" position-relative fruit-img-intro">
			<img src="public/demo/home/trai cay nk/Screenshot_3.png" alt="" width="100%" height="181">
		</a>
	</div>
	<div class="col-6 col-md-4 col-lg-3">
		<a href="" class=" position-relative fruit-img-intro">
			<img src="public/demo/home/trai cay nk/Screenshot_4.png" alt="" width="100%" height="181">
		</a>
	</div>
</div>
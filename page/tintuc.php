<style>
	/*	------news------*/
	
	.news-card >div:first-child div{
		width: 45px;
		height: 45px;
		top: 15px;
		left: 15px;
		line-height: 1;
	}
	.posts-container img{
		object-fit: cover;
	}
	.posts-container span{
		opacity: 0.7;
		font-size: 0.7em;
	}
	.posts-container a:hover,
	.post-filter a:hover{
		color: var(--color-green-primary);
	}
	.posts-container > div:not(:first-child),
	.post-filter > div:not(:first-child){
		border-top: 1px solid #ececec;
	}
	@media (min-width: 768px) {
		.news-card img{
			width: 300px;
			height: 188px;
		}
		.news-card p:first-child:after{
			content: '';
			position: absolute;
			top: calc(100% + 10px);
			left: 0;
			height: 2px;
			background-color: rgba(0,0,0,0.1);
			width: 30px;
		}
	}
	@media (min-width: 992px) {
		.news-card img{
			width: 336px;
		}
	}
</style>

<div class="row m-0 g-0 px-2 px-md-3 px-lg-6 pt-4 pb-5">
	<div class="col-12">
		<p class="mb-2 mb-lg-3 font-roboto-2 fw-700 fs-16 fs-md-24 text-green-primary lh-sm">TIN TỨC</p>
		<p class="fs-15">
			Vào tháng 03 hàng năm tại các khu vực miền tây và miền bắc nước ta là thời điểm những trang trại nhãn bắt đầu nở hoa đây cũng là thời điềm những nhà nuôi ong ở các nơi sẽ tiến hành di chuyển đàn ong đến thu hoạch mật ong hoa nhãn. Các chú ong khi được đưa đến đây sẽ làm việc chăm chỉ ngày đêm. Ban ngày đi hút mật đưa về tổ, ban đêm tiến hành luyện mật qua một quá trình dài. Khi mật đủ chín, chủ trại nuôi ong của Hilobee mới tiến hành quay lấy mật. Đặc thù hoa nhãn có hương vị rất đặc trưng và dễ nhận biết.
		</p>
	</div>

	<div class="col-12 d-flex flex-wrap">
		<div class="col-12 col-lg-9 mt-3 px-md-0 d-flex flex-wrap justify-content-between flex-md-column justify-content-md-start gap-2 gap-lg-4">
			<a href="" class="d-inline-block d-md-flex bg-white news-card align-items-center col-6-cus col-md-12-cus " >
				<div class="position-relative m-auto m-md-0">
					<img src="public/demo/home/news/blog-img-6.jpg" alt="" width="170" height="95">
					<div class="rounded-circle bg-primary-green text-white position-absolute d-flex flex-column justify-content-center align-items-center">
						<span class="text-nowrap fs-14 fw-600">16</span>
						<span class="text-nowrap fs-14 fw-600">Th1</span>
					</div>
				</div>
				<div class="p-2 py-md-3 px-md-4">
					<p class="mb-1 text-green-primary fs-16 fs-md-24 font-roboto-2 position-relative">Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</p>
					<p class="mt-4 mb-0 d-none d-md-block fs-14">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều ...</p>
				</div>
			</a>
			<a href="" class="d-inline-block d-md-flex bg-white news-card align-items-center col-6-cus col-md-12-cus">
				<div class="position-relative m-auto m-md-0">
					<img src="public/demo/home/news/blog-img-7.jpg" alt="" width="170" height="95">
					<div class="rounded-circle bg-primary-green text-white position-absolute d-flex flex-column justify-content-center align-items-center">
						<span class="text-nowrap fs-14 fw-600">16</span>
						<span class="text-nowrap fs-14 fw-600">Th1</span>
					</div>
				</div>
				<div class="p-2 py-md-3 px-md-4">
					<p class="mb-1 text-green-primary fs-16 fs-md-24 font-roboto-2 position-relative">Eat Clean – bí kíp để có thân hình xinh như mơ của cô nàng 9x</p>
					<p class="mt-4 mb-0 d-none d-md-block  fs-14">Đối với nhiều người, “Eat Clean” vẫn còn mơ hồ như một đích đến xa ...</p>
				</div>
			</a>
			<a href="" class="d-inline-block d-md-flex bg-white news-card align-items-center col-6-cus col-md-12-cus">
				<div class="position-relative m-auto m-md-0">
					<img src="public/demo/home/news/blog-img-8.png" alt=""  width="170" height="95">
					<div class="rounded-circle bg-primary-green text-white position-absolute d-flex flex-column justify-content-center align-items-center">
						<span class="text-nowrap fs-14 fw-600">16</span>
						<span class="text-nowrap fs-14 fw-600">Th1</span>
					</div>
				</div>
				<div class="p-2 py-md-3 px-md-4">
					<p class="mb-1 text-green-primary fs-16 fs-md-24 font-roboto-2 position-relative">KM: Tháng giải phóng mỡ thừa, da xấu, độc tố trong cơ thể</p>
					<p class="mt-4 mb-0 d-none d-md-block fs-14">Tháng 4, hoà trong không khí giải phóng dân tộc, đối với chúng tôi, đây ...</p>
				</div>
			</a>
		</div>

		<div class="col-12 col-lg-3 mt-3 px-2 px-md-2">
			<img src="public/demo/lam dep/banner-02-300x167.jpg" alt="" class="img-fluid">
			<div class="mt-3">
				<p class="mb-0 text-center bg-primary-green text-white py-2">BÀI VIẾT – KINH NGHIỆM</p>
				<div class="posts-container border-yellow px-3">
					<div class="d-flex py-2">
						<img src="public/demo/home/news/blog-img-6.jpg" alt="" class="me-3 rounded-circle " width="45" height="45">
						<div class="fs-15">
							<a href="" class="text-black-3 lh-sm d-inline-block ">Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</a>
							<span>Chức năng bình luận bị tắt</span>
						</div>
					</div>
					<div class="d-flex py-2">
						<img src="public/demo/home/news/blog-img-7.jpg" alt="" class="me-3 rounded-circle " width="45" height="45">
						<div class="fs-15">
							<a href="" class="text-black-3 lh-sm d-inline-block ">Eat Clean – bí kíp để có thân hình xinh như mơ của cô nàng 9x</a>
							<span>Chức năng bình luận bị tắt</span>
						</div>
					</div>
					<div class="d-flex py-2">
						<img src="public/demo/home/news/blog-img-9.jpg" alt="" class="me-3 rounded-circle " width="45" height="45">
						<div class="fs-15">
							<a href="" class="text-black-3 lh-sm d-inline-block ">Lấy lại vòng eo con kiến nhờ công thức đơn giản từ củ đậu và rau cải</a>
							<span>Chức năng bình luận bị tắt</span>
						</div>
					</div>
					<div class="d-flex py-2">
						<img src="public/demo/home/news/blog-img-8.png" alt="" class="me-3 rounded-circle " width="45" height="45">
						<div class="fs-15">
							<a href="" class="text-black-3 lh-sm d-inline-block ">KM: Tháng giải phóng mỡ thừa, da xấu, độc tố trong cơ thể</a>
							<span>Chức năng bình luận bị tắt</span>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-4 mt-md-3">
				<p class="mb-0 text-center bg-primary-green text-white py-2">CHUYÊN MỤC BÀI VIẾT</p>
				<div class="post-filter border-yellow px-3">
					<div class="fs-15 py-2">
						<a href="">Chưa phân loại</a>
						<span>(1)</span>
					</div>
					<div class="fs-15 py-2">
						<a href="" class="fw-600">Làm đẹp</a>
						<span>(3)</span>
					</div>
					<div class="fs-15 py-2">
						<a href="">Tin tức</a>
						<span>(4)</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
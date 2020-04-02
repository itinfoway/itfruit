<section>
	<div class="container my-container">
		<div class="profile new-signup new-login">
			<div class="row">
				<div class="col-sm-6">
					<h1>LOGIN</h1>
					<div class="form">
						<?= form_open() ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="length" data-validation-length="min5"  placeholder="username / email / mobile no." name="username">
									
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="password" class="form-control" data-validation="length" data-validation-length="min5" placeholder="password" name="password">
									
								</div>
							</div>
						</div>
						<div class="bill-pay">
							<div class="billing">
								<div class="check">
									<label class="checkboxcontainer">
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
									<span class="text">remember me</span>
									<h6><a href="#" class="forgot"> forgot password?</a>
										<h6>
											<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<center><button type="submit" class="btn btn2"> LOGIN </button></center>
						<div class="clearfix"></div>
						<p>Don't have an account ? <span><a href="<?=base_url("signup") ?>">create an account</a></span></p>
						<?= form_close() ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row blog">
						<div class="col-md-12">
							<div id="blogCarousel" class="carousel slide" data-ride="carousel">

								<ol class="carousel-indicators">
									<li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#blogCarousel" data-slide-to="1"></li>
									<li data-target="#blogCarousel" data-slide-to="2"></li>
									<li data-target="#blogCarousel" data-slide-to="3"></li>
									<li data-target="#blogCarousel" data-slide-to="4"></li>
									<li data-target="#blogCarousel" data-slide-to="5"></li>
								</ol>

								<!-- Carousel items -->
								<div class="carousel-inner">

									<div class="carousel-item active">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
	$.validate();
</script>
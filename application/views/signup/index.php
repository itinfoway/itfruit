<section>
	<div class="container my-container">
		<div class="profile new-signup">
			<div class="row">
				<div class="col-sm-6">
					<h1><?=$this->lang->line("fn_sign"); ?></h1>
					<div class="form">
						<?= form_open() ?>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" data-validation="length custom" data-validation-regexp="^([A-Za-z]+)$" data-validation-length="3-55" class="form-control" placeholder="FIRST NAME" name="fname">
									
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" data-validation="length custom" data-validation-regexp="^([A-Za-z]+)$" data-validation-length="3-55" class="form-control" placeholder="LAST NAME" name="lname">
									
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" data-validation="email uniqueemail" class="form-control" placeholder="E-MAIL" name="email">
									
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" data-validation="number length" data-validation-length="8-12" class="form-control" placeholder="MOBILE NO." name="mobile">
									
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="password" class="form-control" data-validation="length"  data-validation-length="8-10" placeholder="password" name="password">
									
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="password" class="form-control" placeholder="CONFIRM password" data-validation="confirmation" data-validation-confirm="password">
									
								</div>
							</div>
						</div>
						<div class="bill-pay">
							<div class="billing">
								<div class="check">
									<label class="checkboxcontainer">
										<input type="checkbox" name="pri_pol" value="1">
										<span class="checkmark"></span>
									</label>
									<span class="text"><?=$this->lang->line("fn_line"); ?> <a href="#"><?=$this->lang->line("fn_policy"); ?></a></span>
								</div>
							</div>
						</div>	
						<center><button class="btn btn2"> <?=$this->lang->line("fn_sign"); ?></button></center>
						<div class="clearfix"></div>
						<p><?=$this->lang->line("fn_account"); ?><span><a href="<?=base_url("login")?>"><?=$this->lang->line("fn_here"); ?></a></span></p>
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
												<img src="<?= base_url("assert/fontend/"); ?>img/slider-img.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url("assert/fontend/"); ?>img/slider-img.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url("assert/fontend/"); ?>img/slider-img.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url("assert/fontend/"); ?>img/slider-img.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url("assert/fontend/"); ?>img/slider-img.jpg">
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-3">
												<img src="<?= base_url("assert/fontend/"); ?>img/slider-img.jpg">
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
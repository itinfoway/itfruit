<?php

/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
?>
<section>
	<div class="contact-part">
		<img class="fruits strawberry" src="<?= base_url("assert/fontend/"); ?>img/strawberry.svg">
		<img class="fruits berry" src="<?= base_url("assert/fontend/"); ?>img/berry.svg">
		<img class="fruits pinapple" src="<?= base_url("assert/fontend/"); ?>img/pinapple.svg">
		<img class="fruits banana" src="<?= base_url("assert/fontend/"); ?>img/banana.svg">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<img class="img-responsive cartoon" src="<?= base_url("assert/fontend/"); ?>img/contact-cartoon.png">
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="icon-part">
					<img class="img-responsive contact-icon" src="<?= base_url("assert/fontend/"); ?>img/con-email.svg">
					<h4>EMAIL US / FEED BACK</h4>
					<P>slicedsg@gmail.com</P>
				</div>
				<div class="icon-part">
					<img class="img-responsive contact-icon" src="<?= base_url("assert/fontend/"); ?>img/con-call.svg">
					<h4>LEONARD : 92267669</h4>
					<h4>DAVID : 92267669</h4>
					<h4>OFFICE NUMBER (DIVERTED)</h4>
				</div>
				<div class="social">
					<h4>CONTACT WITH US</h4>
					<div class="img-part">
						<img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/con-insta.svg">
						<img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/con-fb.svg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container my-container">
		<div class="send-msg">
			<h1>SEND US A MESSAGE</h1>
			<div class="form-part">
				<img class="fruits watermelon" src="<?= base_url("assert/fontend/"); ?>img/watermelon.svg">
				<img class="fruits orange" src="<?= base_url("assert/fontend/"); ?>img/orange.svg">
				<div class="profile send-form">
					<div class="form bill-form">
						<?= form_open(); ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="length custom" data-validation-regexp="^([a-z]+)$" data-validation-length="min3" placeholder="insert your name" name="name">
									
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="email" placeholder="insert your email address" name="email">
									
								</div>
							</div>
							<div class="col-sm-12">
								<p>insert your message</p>
								<textarea name="msg" id="msg1" data-validation="length" data-validation-length="min50"></textarea>
								<p style="text-align:right"><small><span id="max-length-element1">200</span> chars left</small></p>
							</div>
							<div class="col-sm-12">
								<button type="submit">send</button>
							</div>
						</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container my-container">
		<div class="send-msg event-msg">
			<h1>event / corporate</h1>
			<div class="form-part">
				<p>***PROVIDING EMPLOYEES WITH FRESH FRUIT IS GREAT WAY FOR BUSINESSES TO PROMOTE WELLNESS AND HEALTHY LIVING AS A COMPANY! THE NATURAL SUGAR IN FRUITS WILL HELP YOUR EMPLOYEES STAY ACTIVE THROUGHOUT THE DAY. IN ADDITION TO ENERGIZING THEM PHYSICALLY, EATING FRUITS LIKE ORANGES AND MELON HAVE BEEN KNOWN TO HELP PEOPLE FOCUS MENTALLY!***</p>
				<p>***WHAT BETTER WAY TO KEEP YOUR EMPLOYEES GOING FRESH THROUGH THE DAY WITH SOME CHILLED SLICED FRUITS?***</p>
				<img class="fruits watermelon" src="<?= base_url("assert/fontend/"); ?>img/grapes.svg">
				<img class="fruits orange" src="<?= base_url("assert/fontend/"); ?>img/sitafal.svg">
				<div class="profile send-form">
					<h3>ORDER WITH US NOW! </h3>
					<div class="form bill-form">
						<?= form_open(); ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="insert your name" data-validation="length custom" data-validation-regexp="^([a-z]+)$" data-validation-length="min3" name="name">
									
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="insert your email address" data-validation="email" name="email">
									
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="insert your contact no" name="contact_number" data-validation="length number" data-validation-length="min7">
									
								</div>
							</div>
							<div class="col-sm-12">
								<p>insert your message</p>
								<textarea name="msg" id="msg2" data-validation="length" data-validation-length="min50"></textarea>
								<p style="text-align:right"><small><span id="max-length-element2">200</span> chars left</small></p>
							</div>
							<div class="col-sm-12">
								<button type="submit">send</button>
							</div>
						</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
	$.validate();
	$('#msg1').restrictLength($('#max-length-element1'));
	$('#msg2').restrictLength($('#max-length-element2'));
</script>
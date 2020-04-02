<?php

/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
?>
<footer>
	<div class="ftr">
		<h1>HOW FIND US</h1>
		<div class="container">
			<!--<img class="img-responsive f-pinapple" src="assert/fontend/img/pinapple.svg">-->
			<div class="row ftr-row">
				<div class="col-sm-4">
					<div class="add-part">
						<div class="add-img">
							<img class="img-responsive" src="<?= base_url("assert/fontend/img/location.svg"); ?>">
						</div>
						<div class="add-text">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</div>
					</div>
					<div class="add-part">
						<div class="add-img">
							<img class="img-responsive" src="<?= base_url("assert/fontend/img/mail-01.svg"); ?>">
						</div>
						<div class="add-text">
							<p style="padding-top: 20px">example@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="map-part">
						<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10293.845965464005!2d70.77197305875166!3d22.2643210388045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca4359ed4969%3A0xd760019c830b310d!2sBITNET%20Infotech!5e0!3m2!1sen!2sin!4v1569503715486!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="add-part">
						<div class="add-img">
							<img class="img-responsive" src="<?= base_url("assert/fontend/img/call-01.svg"); ?>">
						</div>
						<div class="add-text">
							<p style="padding-top: 20px">+01 123456789</p>
						</div>
					</div>
					<div class="social">
						<img class="img-responsive" src="<?= base_url("assert/fontend/img/fb-01.svg"); ?>">
						<img class="img-responsive" src="<?= base_url("assert/fontend/img/twitter-01.svg"); ?>">
						<img class="img-responsive" src="<?= base_url("assert/fontend/img/insta-01.svg"); ?>">
					</div>
				</div>
			</div>
		</div>
		<img width="100%" class="img-responsive ftr-fruits" src="<?= base_url("assert/fontend/img/fruits.png"); ?>">
	</div>
</footer>
<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="194162994326403" theme_color="#ff7e29" logged_in_greeting="Hi! Sliced help you?" logged_out_greeting="Hi! Sliced help you?">
</div>
<!-- footer ends -->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

<link rel="stylesheet" href="<?= base_url(); ?>assert/fontend/toastr/toastr.min.css">
<!-- Toastr -->
<script src="<?= base_url(); ?>assert/fontend/toastr/toastr.min.js"></script>

<?php
if ($this->session->has_userdata("success")) {
?>
	<script>
		toastr.success('<?= $this->session->userdata("success"); ?>');
	</script>
<?php
	$this->session->unset_userdata('success');
}
?>
<?php
if ($this->session->has_userdata("error")) {
?>
	<script>
		toastr.error('<?= $this->session->userdata("error"); ?>');
	</script>
<?php
	$this->session->unset_userdata('error');
}
?>
<script type="text/javascript" src="<?= base_url("assert/fontend/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("assert/fontend/js/library.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("assert/fontend/js/public.js"); ?>"></script>
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
				$('#plus-icon').css({
					'display': 'block'
				});
				$('#minus-icon').css({
					'display': 'none'
				});
			} else {
				panel.style.display = "block";
				$('#plus-icon').css({
					'display': 'none'
				});
				$('#minus-icon').css({
					'display': 'block'
				});
			}
		});
	}
	$(document).ready(function() {
		$(".dd-icon").click(function() {
			$(".dd-text").toggle();
		});
	});
</script>

<script>
	window.fbAsyncInit = function() {
		FB.init({
			xfbml: true,
			version: 'v6.0'
		});
	};

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" ></script>
<script>
	$.validate({
		modules: 'security,file',
	});
</script>
<?php
if($this->router->class=="signup"){
?>
<script>
	var uniqueemail = "";
	$.extend({
		xResponseemail: function(data) {
			var d = null;
			$.ajax({
				url: "<?= base_url("signup/jsonemail/") ?>" + encodeURIComponent(btoa(data)),
				type: 'GET',
				data: {
					name: encodeURIComponent(btoa(uniqueemail))
				},
				dataType: "json",
				async: false,
				success: function(respText) {
					if (respText) {
						d = false;
					} else {
						d = true;
					}
					return d;
				}
			});
			return d;
		}
	});
	$.formUtils.addValidator({
		name: 'uniqueemail',
		validatorFunction: function(value, $el, config, language, $form) {
			return $.xResponseemail(value);
		},
		errorMessage: 'this value already inserted',
		errorMessageKey: 'badEvenNumber'
	});
</script>
<?php
}
?>
</body>

</html>
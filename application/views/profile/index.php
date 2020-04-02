<script src="<?= base_url("assert/admin/croppie/croppie.js") ?>"></script>
<link rel="Stylesheet" type="text/css" href="<?= base_url("assert/admin/croppie/croppie.css") ?>" />
<section>
	<div class="container my-container">
		<div class="profile">
			<div class="row">
				<div class="col-sm-12 col-md-4"></div>
				<div class="col-sm-12 col-md-4" id="showEdit">
					<div style="padding-bottom: 39px;">
						<div class="upload-demo-wrap">
							<div id="upload-demo"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4" id="noneEdit">
					<div class="pro-img">
						<img class="img-responsive bg-img" src="<?= base_url(); ?>assert/fontend/img/profile.png">
						<img class="img-responsive pro" src="<?= base_url(); ?>assert/user/<?= $img ?>">
						<!-- ss<h2>JHON DOE</h2> -->
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<button class="btn edit"> EDIT </button>
				</div>
			</div>
			<!-- Modal -->

			<div class="form">
				<?= form_open_multipart() ?>
				<div class="row">

					<div class="d-none">
						<?= isset($img) ? "<input type='checkbox' name='delete' value='1'> Delete" : "" ?>
					</div>

					<input type="hidden" name="input_image" id="input_image">
					<div class="row">
						<div class="col-sm-12" style="display: none" id="nonefile">
							<div class="form-group">
								<input type="file" class="form-control" name="img" id="upload">
								
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" value="<?= $fname ?>" class="form-control" placeholder="Enter First Name" name="fname" readonly>
								
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" value="<?= $lname ?>" class="form-control" placeholder="Enter Last Name" name="lname" readonly>
								
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" value="<?= $email ?>" class="form-control" placeholder="Enter email" name="email" readonly>
								
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" value="<?= $mobile ?>" class="form-control" placeholder="Enter mobile number" name="mobile" readonly>
								
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" value="<?= $username ?>" class="form-control" placeholder="Enter username" name="username" readonly>
								
							</div>
						</div>
					</div>
					<center><button type="submit" class="btn btn2 upload-result"> SAVE </button></center>
					<?= form_close() ?>
				</div>
			</div>
		</div>
</section>

<script>
	$(document).on("click", ".edit", function() {
		var bool = $('input[type=text]').prop('readonly');
		$('input[type=text]').prop('readonly', !bool);
		$("#showEdit").toggle();
		$("#noneEdit").toggle();
		$("#nonefile").toggle();
	});
	var Demo = (function() {
		function demoUpload() {
			var $uploadCrop;

			function popupResult(result) {
				var html;
				if (result.html) {
					html = result.html;
				}
				if (result.src) {
					console.log(result.src);
					$("#input_image").val(result.src);
				}

				setTimeout(function() {
					$('.sweet-alert').css('margin', function() {
						var top = -1 * ($(this).height() / 2),
							left = -1 * ($(this).width() / 2);
						return top + 'px 0 0 ' + left + 'px';
					});
				}, 1);
				$('form').submit();
			}

			function readFile(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function(e) {
						$('.upload-demo').addClass('ready');
						$uploadCrop.croppie('bind', {
							url: e.target.result
						}).then(function() {});

					};

					reader.readAsDataURL(input.files[0]);

				} else {
					swal("Sorry - you're browser doesn't support the FileReader API");
				}
			}

			$uploadCrop = $('#upload-demo').croppie({
				viewport: {
					width: 200,
					height: 200,
					type: 'square'
				},
				boundary: {
					width: 200,
					height: 200
				},
				enableOrientation: true,
				enableExif: true,
				enforceBoundary: false
			});
			<?= isset($img) ? "\$uploadCrop.croppie('bind', '" . base_url("assert/user/" . $img) . "');" : "\$uploadCrop.croppie('bind', '" . base_url("assert/user/user_demo.png") . "');"; ?>
			$('#upload').on('change', function() {
				readFile(this);

			});
			$('.upload-result').on('click', function(ev) {
				$uploadCrop.croppie('result', {
					type: 'canvas',
					size: 'viewport'
				}).then(function(resp) {
					popupResult({
						src: resp
					});
				});
			});
		}

		function init() {
			demoUpload();
		}

		return {
			init: init
		};

	})();
	Demo.init();
	$(document).ready(function() {
		setTimeout(function() {
			$("#showEdit").hide();
		}, 5);

	});
</script>
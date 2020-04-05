<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromType = [
    'type' => 'hidden',
    "name" => "type",
];
$fromName = [
    'type' => 'text',
    "name" => "name",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "2-25",
    'id' => "name",
    "placeholder" => $this->lang->line("products_name_plac"),
    'value' => isset($name) ? $name : "",
];

$fromPrice = [
    'type' => 'number',
    "name" => "price",
    'class' => 'form-control',
    "data-validation" => "length,number",
    "data-validation-length" => "2-12",
    'id' => "price",
    "placeholder" => $this->lang->line("products_price_plac"),
    'value' => isset($price) ? $price : "",
];
?>
<script src="<?= base_url("assert/admin/croppie/croppie.js") ?>"></script>
<link rel="Stylesheet" type="text/css" href="<?= base_url("assert/admin/croppie/croppie.css") ?>" />
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?= $this->lang->line("sub_head") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/product/subscription/") ?>" class="btn btn-info btn-sm"><?= $this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open_multipart(); ?>
           <?= form_input($fromType); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?= $this->lang->line("products_name") ?></label>
                    <?= form_input($fromName); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("fruit_hed") ?></label>
                    <?= form_multiselect("fruit_ids", $fruit, isset($data->fruit_ids) ? json_decode($data->fruit_ids) : null, ["class" => "select2", "multiple" => "multiple", "style" => "width: 100%;", "data-placeholder" => $this->lang->line("ala_crate_select_fruit_plac")]); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("products_price") ?></label>
                    <?= form_input($fromPrice); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("products_img") ?></label>
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload("img", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8" style="padding-bottom: 39px;">
                        <div class="upload-demo-wrap">
                            <div id="upload-demo"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?= isset($img) ? '<img src="' . base_url("assert/products/subscription/" . $img) . '" class="img-thumbnail img-responsive" style="width:100px">' : ""; ?>
                        <div class="d-none">
                            <?= isset($img) ? "<input type='checkbox' name='delete' value='1'> Delete" : "" ?>
                        </div>
                    </div>
                    <input type="hidden" name="input_image" id="input_image">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="upload-result btn btn-info" id="submit"><?= $this->lang->line("btn_save") ?></button>
                <button type="reset" class="btn btn-default float-right"><?= $this->lang->line("btn_reset") ?></button>
            </div>
            <?= form_close(); ?>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate({
        modules: 'security,file',
    });
</script>

<script>



    var Demo = (function () {
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

                setTimeout(function () {
                    $('.sweet-alert').css('margin', function () {
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

                    reader.onload = function (e) {
                        $('.upload-demo').addClass('ready');
                        $uploadCrop.croppie('bind', {
                            url: e.target.result,
                        }).then(function () {
                        });

                    };

                    reader.readAsDataURL(input.files[0]);

                } else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

            $uploadCrop = $('#upload-demo').croppie({
                viewport: {
                    width: 100,
                    height: 100,
                    type: 'square'
                },
                boundary: {
                    width: 110,
                    height: 110
                },
                enableOrientation: true,
                enableExif: true,
                enforceBoundary: false
            });
<?= isset($img) ? "\$uploadCrop.croppie('bind', '" . base_url("assert/products/subscription/" . $img) . "');" : "\$uploadCrop.croppie('bind', '" . base_url("assert/products/subscription/user_demo.png") . "');"; ?>
            $('#upload').on('change', function () {
                readFile(this);

            });
            $('.upload-result').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function (resp) {
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
</script>
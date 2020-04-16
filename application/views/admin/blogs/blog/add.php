<?php

/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */

$fromTitle = [
    'type' => 'text',
    "name" => "title",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "2-25",
    'id' => "title",
    "placeholder" => $this->lang->line("blog_input_title_plac"),
    'value' => isset($blogs->title) ? $blogs->title : "",
];
$fromDescription = [
    'type' => 'text',
    "name" => "description",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "2-35",
    'id' => "description",
    "placeholder" => $this->lang->line("blog_input_des_plac"),
    'value' => isset($blogs->description) ? $blogs->description : "",
];
?>
<script src="<?= base_url("assert/admin/croppie/croppie.js") ?>"></script>
<link rel="Stylesheet" type="text/css" href="<?= base_url("assert/admin/croppie/croppie.css") ?>" />
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?= $this->lang->line("blog_head") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/blogs/blog") ?>" class="btn btn-info btn-sm"><?= $this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open_multipart(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?= $this->lang->line("blog_cat_hed") ?></label>
                    <?= form_dropdown("blog_category_id", $blog, isset($data->blog_category_id) ?$data->blog_category_id : null, ["class" => "select2",  "style" => "width: 100%;", "data-placeholder" => $this->lang->line("blog_cat_plac")]); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("blog_title_hed") ?></label>
                    <?= form_input($fromTitle); ?>
                </div>
                
                <div class="form-group">
                    <label><?= $this->lang->line("blog_img") ?></label>
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload("img", null, ['class' => 'custom-file-input',  "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
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
                        <?= isset($data->img) ? '<img src="' . base_url("assert/blog/" . $data->img) . '" class="img-thumbnail img-responsive" style="width:100px">' : ""; ?>
                        <div class="d-none">
                            <?= isset($data->img) ? "<input type='checkbox' name='delete' value='1'> Delete" : "" ?>
                        </div>
                    </div>
                     <input type="hidden" name="input_image" id="input_image">
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("blog_des_hed") ?></label>
                    <?= form_input($fromDescription); ?>
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
                            url: e.target.result,
                        }).then(function() {});

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
            <?= isset($data->img) ? "\$uploadCrop.croppie('bind', '" . base_url("assert/blog/" . $data->img) . "');" : "\$uploadCrop.croppie('bind', '" . base_url("assert/blog/user_demo.png") . "');"; ?>
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
</script>
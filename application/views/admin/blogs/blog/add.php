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
$fromShortDescription = [
    'id' => "short_description",
    'class' => 'form-control',
    "rows" => 3,
    "placeholder" => $this->lang->line("blog_short_description_plac"),
];
$fromDescription = [
    'id' => "description",
    "placeholder" => $this->lang->line("blog_input_des_plac"),
];
?>
<link rel="stylesheet" href="<?= base_url("assert/admin/") ?>plugins/summernote/summernote-bs4.css">
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
                    <?= form_dropdown("blog_category_id", $blog, isset($data->blog_category_id) ? $data->blog_category_id : null, ["class" => "select2", "style" => "width: 100%;", "data-placeholder" => $this->lang->line("blog_cat_plac")]); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("blog_title_hed") ?></label>
                    <?= form_input($fromTitle); ?>
                </div>

                <div class="form-group">
                    <label><?= $this->lang->line("blog_img") ?></label>
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload("img", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10" id="sliderdis" style="display: none">
                        <div class="upload-demo-wrap">
                            <div id="upload-demo"><img id="img" class="img-thumbnail img-responsive w-100"></div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <?= isset($data->img) ? '<img src="' . base_url("assert/slidermain/" . $data->img) . '" class="img-thumbnail img-responsive" style="width:100px">' : ""; ?>
                        <div class="d-none">
                            <?= isset($data->img) ? "<input type='checkbox' name='delete' value='1'> Delete" : "" ?>
                        </div>
                    </div>
                    <input type="hidden" name="input_image" id="input_image">
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("blog_short_description") ?></label>
                    <?= form_textarea("short_description", isset($blogs->short_description) ? $blogs->short_description : "", $fromShortDescription); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("blog_des_hed") ?></label>
                    <?= form_textarea("description", isset($blogs->description) ? $blogs->description : "", $fromDescription); ?>
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
    function readFile() {
        if (this.files && this.files[0]) {
            var FR = new FileReader();
            FR.addEventListener("load", function (e) {
                document.getElementById("img").src = e.target.result;
                document.getElementById("input_image").value = e.target.result;
            });

            FR.readAsDataURL(this.files[0]);
        }
        $("#sliderdis").show();
    }
    document.getElementById("upload").addEventListener("change", readFile);
</script>
<script src="<?= base_url("assert/admin/"); ?>plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
        $('#description').summernote()
    })
</script>
<?php

/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromName = [
    'type' => 'text',
    "name" => "name",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "3-25",
    "data-validation-error-msg" => $this->lang->line("Slidermain_input_name_emsg"),
    'id' => "name",
    "placeholder" => $this->lang->line("Slidermain_input_name_plac"),
    'value' => isset($data->name) ? $data->name : "",
];
$fromLink = [
    'type' => 'text',
    "name" => "link",
    'class' => 'form-control',
    "data-validation" => "length,url",
    "data-validation-length" => "3-25",
    "data-validation-error-msg" => $this->lang->line("Slidermain_input_link_emsg"),
    'id' => "link",
    "placeholder" => $this->lang->line("Slidermain_input_link_plac"),
    'value' => isset($data->link) ? $data->link : "",
];
?>
<style>
    .croppie-container .cr-boundary {
        border: 4px solid #e2e2e2;
    }
</style>
<script src="<?= base_url("assert/admin/croppie/croppie.js") ?>"></script>
<link rel="Stylesheet" type="text/css" href="<?= base_url("assert/admin/croppie/croppie.css") ?>" />
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?= $this->lang->line("Slidermain_head") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/setting/slidermain/index") ?>" class="btn btn-info btn-sm"><?= $this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open_multipart(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?= $this->lang->line("Slidermain_name") ?></label>
                    <?= form_input($fromName); ?>
                </div>

                <div class="form-group">
                    <label><?= $this->lang->line("Slidermain_img") ?></label>
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload("img", null, ['class' => 'custom-file-input',  "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "2000kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10" style="padding-bottom: 39px;">
                        <div class="upload-demo-wrap">
                            <div id="upload-demo"><img id="img" class="img-thumbnail img-responsive"></div>
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
                    <label><?= $this->lang->line("Slidermain_link") ?></label>
                    <?= form_input($fromLink); ?>
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
        modules: 'file',
    });
</script>

<script>
    function readFile() {
        if (this.files && this.files[0]) {
            var FR = new FileReader();
            FR.addEventListener("load", function(e) {
                document.getElementById("img").src = e.target.result;
                document.getElementById("input_image").value = e.target.result;
            });

            FR.readAsDataURL(this.files[0]);
        }

    }
    document.getElementById("upload").addEventListener("change", readFile);
</script>
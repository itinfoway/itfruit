<?php

/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromFname = [
    'type' => 'text',
    "name" => "fname",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "2-6",
    'id' => "fname",
    "placeholder" => $this->lang->line("user_input_fname_plac"),
    'value' => isset($fname) ? $fname : "",
];
$fromLname = [
    'type' => 'text',
    "name" => "lname",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "2-5",
    'id' => "lname",
    "placeholder" => $this->lang->line("user_input_lname_plac"),
    'value' => isset($lname) ? $lname : "",
];
$fromUname = [
    'type' => 'text',
    "name" => "username",
    'class' => 'form-control',
    "data-validation" => "length,uniquename,alphanumeric",
    "data-validation-length" => "min5",
    'id' => "username",
    "placeholder" => $this->lang->line("user_input_name_plac"),
    'value' => isset($username) ? $username : "",
];
$fromEmail = [
    'type' => 'text',
    "name" => "email",
    'class' => 'form-control',
    "data-validation" => "length,email,uniqueemail",
    "data-validation-length" => "max255",
	"placeholder" => $this->lang->line("user_input_email_plac"),
    'id' => "email",
    'value' => isset($email) ? $email : "",
];
$fromNumber = [
    'type' => 'number',
    "name" => "mobile",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "min10",
    'id' => "mobile",
    "placeholder" => $this->lang->line("user_input_no_plac"),
    'value' => isset($mobile) ? $mobile : "",
];
$fromPassword = [
    'type' => 'password',
    "name" => "password",
    'class' => 'form-control',
    "data-validation" => "length,confirmation",
    "data-validation-length" => "min5",
    'id' => "password",
    "placeholder" => $this->lang->line("user_input_psw_plac"),
];

$fromCpassword = [
    'type' => 'password',
    "name" => "password_confirmation",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "min5",
    'id' => "cpassword",
    "placeholder" => $this->lang->line("user_input_psw_plac"),
    'value' => isset($cpassword) ? $cpassword : "",
];


?>
<script src="<?= base_url("assert/admin/croppie/croppie.js") ?>"></script>
<link rel="Stylesheet" type="text/css" href="<?= base_url("assert/admin/croppie/croppie.css") ?>" />
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?= $this->lang->line("user_head") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/users/index") ?>" class="btn btn-info btn-sm"><?= $this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open_multipart(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?= $this->lang->line("user_fname") ?></label>
                    <?= form_input($fromFname); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("user_lname") ?></label>
                    <?= form_input($fromLname); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("user_name") ?></label>
                    <?= form_input($fromUname); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("user_email") ?></label>
                    <?= form_input($fromEmail); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("user_no") ?></label>
                    <?= form_input($fromNumber); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("user_psw") ?></label>
                    <?= form_input($fromPassword); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("user_psw1") ?></label>
                    <?= form_input($fromCpassword); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("user_img") ?></label>
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
                        <?= isset($img) ? '<img src="' . base_url("assert/user/" . $img) . '" class="img-thumbnail img-responsive" style="width:100px">' : ""; ?>
                        <div class="d-none">
                            <?= isset($img) ? "<input type='checkbox' name='delete' value='1'> Delete" : "" ?>
                        </div>
                    </div>
                    <input type="hidden" name="input_image" id="input_image">
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("status") ?> <br />
                        <label >  <input id="status" name="status" type="radio" class="" value="1"<?php if(isset($status) && $status=='1'){ echo "checked='checked'";}else{echo "checked='checked'";} ?>  />Active</label>                
                       <label > <input id="status" name="status" type="radio" value="2" <?php if(isset($status) && $status=='2') echo "checked='checked'"; ?>  />Deactive</label>
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
                    width: 200,
                    height: 200,
                    type: 'square'
                },
                boundary: {
                    width: 210,
                    height: 210
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
</script>
<script>
    var uniquename = "";
    var uniqueemail = "";
    <?php if ($this->router->method == "edit") { ?>
        uniquename = $("input[name='username']").val();
        uniqueemail = $("input[name='email']").val();
    <?php
    } ?>
    $.extend({
        xResponseemail: function(data) {
            var d = null;
            $.ajax({
                url: "<?= base_url("admin/users/jsonemail/") ?>" + encodeURIComponent(btoa(data)),
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
    $.extend({
        xResponse: function (data) {
            var d = null;
            $.ajax({
                url: "<?= base_url("admin/users/jsonusername/") ?>" + encodeURIComponent(btoa(data)),
                type: 'GET',
                data:{name:encodeURIComponent(btoa(uniquename))},
                dataType: "json",
                async: false,
                success: function (respText) {
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
        name: 'uniquename',
        validatorFunction: function (value, $el, config, language, $form) {
            return $.xResponse(value);
        },
        errorMessage: 'this value already inserted',
        errorMessageKey: 'badEvenNumber'
    });
</script>
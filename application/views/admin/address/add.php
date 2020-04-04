<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromLatitude = [
    'type' => 'text',
    "name" => "latitude",
    'class' => 'form-control',
    "data-validation"=>"length",
    "data-validation-length"=>"5-10",
    'id' => "latitude",
    "placeholder" => $this->lang->line("address_input_latitude_plac"),
    'value' => isset($data->latitude) ? $data->latitude : "",
];
$fromLongitude = [
    'type' => 'text',
    "name" => "longitude",
    'class' => 'form-control',
    "data-validation"=>"length",
    "data-validation-length"=>"5-10",
    'id' => "longitude",
    "placeholder" => $this->lang->line("address_input_longitude_plac"),
    'value' => isset($data->longitude) ? $data->longitude : "",
];
$fromAddress1 = [
    'type' => 'text',
    "name" => "address1",
    'class' => 'form-control',
    "data-validation"=>"length,unique,alphanumeric",
    "data-validation-length"=>"6-50",
    'id' => "address1",
    "placeholder" => $this->lang->line("address_input_add1_plac"),
    'value' => isset($data->address1) ? $data->address1 : "",
];
$fromAddress2 = [
    'type' => 'text',
    "name" => "address2",
    'class' => 'form-control',
    "data-validation"=>"length,address2",
    "data-validation-length"=>"6-50",
    'id' => "address2",
    "placeholder" => $this->lang->line("address_add2_input_plac"),
    'value' => isset($data->address2) ? $data->address2 : "",
];
$fromCity = [
    'type' => 'text',
    "name" => "city",
    'class' => 'form-control',
    "data-validation"=>"length",
    "data-validation-length"=>"2-12",
    'id' => "city",
    "placeholder" => $this->lang->line("address_input_no_plac"),
    'value' => isset($data->city) ? $data->city : "",
];
$fromCode = [
    'type' => 'text',
    "name" => "postalcode",
    'class' => 'form-control',
    "data-validation"=>"length",
    "data-validation-length"=>"5-10",
    'id' => "postalcode",
    "placeholder" => $this->lang->line("user_input_psw_plac"),
    'value' => isset($data->postalcode) ? $data->postalcode : "",
];
$fromState = [
    'type' => 'text',
    "name" => "state",
    'class' => 'form-control',
    "data-validation"=>"length",
    "data-validation-length"=>"5-15",
    'id' => "state",
    "placeholder" => $this->lang->line("address_input_state_plac"),
    'value' => isset($data->state) ? $data->state : "",
];


$fromCountry = [
    'type' => 'text',
    "name" => "country",
    'class' => 'form-control',
    "data-validation"=>"length",
    "data-validation-length"=>"5-15",
    'id' => "country",
    "placeholder" => $this->lang->line("address_input_con_plac"),
    'value' => isset($data->country) ? $data->country : "",
];

?>
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?=$this->lang->line("address_head")?></h3>
                <div class="card-tools">
                    <a href="<?=  base_url("admin/address/")?>" class="btn btn-info btn-sm"><?=$this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header --> 
            <?= form_open(); ?>
            <div class="card-body">
                 <div class="form-group">
                    <label><?=$this->lang->line("address_name") ?></label>             
                     <?=  form_dropdown("type",["1"=>"Home","2"=>"Work","3"=>"Other"], isset($data->type) ? $data->type : null, [ "id" => "type","class" => "form-control"]); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("address_user") ?></label>
                     <?= form_dropdown("user_id", $users, isset($data->user_id) ?$data->user_id : null, ["class" => "select2",  "style" => "width: 100%;", "data-placeholder" => $this->lang->line("address_select_users_plac")]); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("address_latitude") ?></label>
                    <?= form_input($fromLatitude); ?>
                </div>
                
                <div class="form-group">
                    <label><?=$this->lang->line("address_long") ?></label>
                    <?= form_input($fromLongitude); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("address_add1") ?></label>
                    <?= form_input($fromAddress1); ?>
                </div>
                 <div class="form-group">
                    <label><?=$this->lang->line("address_add2") ?></label>
                    <?= form_input($fromAddress2); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("address_city") ?></label>
                    <?= form_input($fromCity); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("address_pcod") ?></label>
                    <?= form_input($fromCode); ?>
                </div>
                 <div class="form-group">
                    <label><?=$this->lang->line("address_state") ?></label>
                    <?= form_input($fromState); ?>
                </div>
                 <div class="form-group">
                    <label><?=$this->lang->line("address_con") ?></label>
                    <?= form_input($fromCountry); ?>
                </div>
               
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"  id="submit" ><?=$this->lang->line("btn_save") ?></button>
                <button type="reset" class="btn btn-default float-right"><?=$this->lang->line("btn_reset") ?></button>
            </div>
            <?= form_close(); ?>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    modules : 'security'
  });
</script>
<!-- bs-custom-file-input -->
<script src="<?= base_url() ?>assert/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>
    $.validate({
        modules: 'file'
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>

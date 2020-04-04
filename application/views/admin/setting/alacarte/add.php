<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromPass = [
    'type' => 'text',
    "name" => "pass",
    'class' => 'form-control',
    // "data-validation"=>"length,number",
    // "data-validation-length"=>"1-5",
    // "data-validation-allowing"=>"float",
    'id' => "pass",
    'readonly'=>'true',
    "placeholder" => $this->lang->line("alacarte_input_pass_plac"),
    'value' => isset($pass) ? $pass : "",
];
$fromCredit = [
    'type' => 'number',
    "name" => "credit",
    'class' => 'form-control',
    // "data-validation"=>"length,number",
    // "data-validation-length"=>"1-5",
    // "data-validation-allowing"=>"float",
    'readonly'=>'true',
    'id' => "credit",
    "placeholder" => $this->lang->line("alacarte_input_credit_plac"),
    'value' => isset($credit) ? $credit : "",
];
$fromYoupay = [
    'type' => 'number',
    "name" => "youpay",
    // "data-validation"=>"length,number",
    // "data-validation-length"=>"min2",
   'readonly'=>'true',
    'class' => 'form-control',
    'id' => "youpay",
    "placeholder" => $this->lang->line("alacarte_input_youpay_plac"),
    'value' => isset($youpay) ? $youpay : "",
];
$fromValidity = [
    'type' => 'number',
    "name" => "validity",
    // "data-validation"=>"length,number",
    // "data-validation-length"=>"min2",
    // "data-validation-allowing"=>"float",
    'readonly'=>'true',
    'class' => 'form-control',
    'id' => "validity",
    "placeholder" => $this->lang->line("alacarte_input_val_plac"),
    'value' => isset($validity) ? $validity : "",
];
$fromSavings = [
    'type' => 'text',
    "name" => "savings",
    // "data-validation"=>"length,number",
    // "data-validation-length"=>"min3",
    // "data-validation-allowing"=>"float",
    'readonly'=>'true',
    'class' => 'form-control',
    'id' => "savings",
    "placeholder" => $this->lang->line("alacarte_input_saveing_plac"),
    'value' => isset($savings) ? $savings : "",
];
?>
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?=$this->lang->line("alacarte_head")?></h3>
                <div class="card-tools">
                    <a href="<?=  base_url("admin/setting/alacarte/")?>" class="btn btn-info btn-sm"><?=$this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?=$this->lang->line("alacarte_pass") ?></label>
                    <?= form_input($fromPass); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("alacarte_credit") ?></label>
                    <?= form_input($fromCredit); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("alacarte_youpay") ?></label></br>
                     <?= form_input($fromYoupay); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("alacarte_validity") ?></label>
                    <?= form_input($fromValidity); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("alacarte_saving") ?></label>
                    <?= form_input($fromSavings); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("status") ?></br>
                    <label >  <input id="status" name="status" type="radio" class="" value="1"<?php if(isset($status) && $status=='1'){ echo "checked='checked'";}else{echo "checked='checked'";} ?>  />Active</label>                
                       <label > <input id="status" name="status" type="radio" value="2" <?php if(isset($status) && $status=='2') echo "checked='checked'"; ?>  />Deactive</label>
                </div>
                
                 
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><?=$this->lang->line("btn_save") ?></button>
                <button type="reset" class="btn btn-default float-right"><?=$this->lang->line("btn_reset") ?></button>
            </div>
            <?= form_close(); ?>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
</script>
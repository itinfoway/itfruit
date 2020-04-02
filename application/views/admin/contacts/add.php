<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromDate = [
    'type' => 'date',
    "name" => "date",
    'class' => 'form-control',
    // "data-validation"=>"length",
    // "data-validation-length"=>"5-50",
    // "data-validation-error-msg"=>$this->lang->line("contact_input_date_emsg"),
    'id' => "date",
    'readonly'=>'true',
    "placeholder" => $this->lang->line("contact_input_date_plac"),
    'value' => isset($date) ? $date : "",
];
$fromCname = [
    'type' => 'text',
    "name" => "name",
    'class' => 'form-control',
    // "data-validation"=>"length",
    // "data-validation-length"=>"5-50",
    // "data-validation-error-msg"=>$this->lang->line("contact_input_name_emsg"),
    'readonly'=>'true',
    'id' => "name",
    "placeholder" => $this->lang->line("contact_input_name_plac"),
    'value' => isset($name) ? $name : "",
];
$fromEmail = [
    'type' => 'text',
    "name" => "email",
    'class' => 'form-control',
    // "data-validation"=>"length,email",
    // "data-validation-length"=>"max255",
    // "data-validation-error-msg"=>$this->lang->line("contact_input_email_emsg"),
    'readonly'=>'true',
    'id' => "email",
    "placeholder" => $this->lang->line("contact_input_email_plac"),
    'value' => isset($email) ? $email : "",
];
$fromNumber = [
    'type' => 'number',
    "name" => "contact_number",
    'class' => 'form-control',
    // "data-validation"=>"length",
    // "data-validation-length"=>"min10",
    // "data-validation-error-msg"=>$this->lang->line("contact_input_no_emsg"),
    'id' => "contact_number",
    'readonly'=>'true',
    "placeholder" => $this->lang->line("contact_input_no_plac"),
    'value' => isset($contact_number) ? $contact_number : "",
];
$fromMsg = [
    'type' => 'text',
    "name" => "msg",
    // "data-validation"=>"length",
    // "data-validation-length"=>"min5",
    // "data-validation-error-msg"=>$this->lang->line("contact_input_msg_emsg"),
    'readonly'=>'true',
    'class' => 'form-control',
    'id' => "msg",
    "placeholder" => $this->lang->line("contact_input_msg_plac"),
    'value' => isset($msg) ? $msg : "",
];


?>
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?=$this->lang->line("contact_head")?></h3>
                <div class="card-tools">
                    <a href="<?=  base_url("admin/Contacts/")?>" class="btn btn-info btn-sm"><?=$this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?=$this->lang->line("contact_date") ?></label>
                    <?= form_input($fromDate); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("contact_name") ?></label>
                    <?= form_input($fromCname); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("contact_email") ?></label>
                    <?= form_input($fromEmail); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("contact_no") ?></label>
                     <?= form_input($fromNumber); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("contact_msg") ?></label>
                    <?= form_textarea($fromMsg); ?>
                </div>
                 <div class="form-group">
                    <label><?=$this->lang->line("contact_type") ?></label>
                     <?=  form_dropdown("type",["1"=>"event/corporate","2"=>"Sead us a message"], isset($type) ? $type : null, [ "id" => "type",'readonly'=>'true',"class" => "form-control"]); ?>
                </div>
                 <div class="form-group">
                    <label><?=$this->lang->line("status") ?> <br/>
                        <label >  <input id="status" name="status" type="radio" class="" value="1"<?php if(isset($status) && $status=='1'){ echo "checked='checked'";}else{echo "checked='checked'";} ?>  />Read</label>                
                       <label > <input id="status" name="status" type="radio" value="2" <?php if(isset($status) && $status=='2') echo "checked='checked'"; ?>  />Unread</label></label>
                    
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
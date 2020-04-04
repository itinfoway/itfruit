<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromQus = [
    'type' => 'text',
    "name" => "qus",
    'class' => 'form-control',
    "data-validation"=>"length",
    "data-validation-length"=>"5-300",
    'id' => "qus",
    "placeholder" => $this->lang->line("faq_input_qus_plac"),
    'value' => isset($qus) ? $qus : "",
];
$fromAns = [
    'type' => 'text',
    "name" => "ans",
    "data-validation"=>"length",
    "data-validation-length"=>"min5",
    'class' => 'form-control',
    'id' => "ans",
    "placeholder" => $this->lang->line("faq_input_ans_plac"),
    'value' => isset($ans) ? $ans : "",
];
?>
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?=$this->lang->line("faq_head")?></h3>
                <div class="card-tools">
                    <a href="<?=  base_url("admin/setting/faq/")?>" class="btn btn-info btn-sm"><?=$this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label><?=$this->lang->line("faq_qus_hed") ?></label>
                    <?= form_input($fromQus); ?>
                </div>
                <div class="form-group">
                    <label><?=$this->lang->line("faq_ans_hed") ?></label>
                    <?= form_textarea($fromAns); ?>
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